<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\products;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\detail_transactions;


class DetailTransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payload['cart_items'] = detail_transactions::with('produk')->where('transactions_id', null)->get();
        $payload['total'] = 0;
        $payload['produk'] = products::find('B040');
        $payload['category'] = categories::all();
        // dd($payload['cart_items']->toArray());

        return view('user.page_cart', $payload);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $produk = products::find($id);

        if ($produk->stock < 1) {
            alert()->error('Persediaan barang tidak ada');
            return back();
        }

        $ifDuplicate = detail_transactions::where(['products_id' => $id, 'transactions_id' => null])->first();

        if ($ifDuplicate) {
            $ifDuplicate->qty += 1;
            $ifDuplicate->sub_total += $produk->price;
            $ifDuplicate->update();
        } else {
            detail_transactions::create([
                'products_id' => $id,
                'transactions_id' => null,
                'qty' => 1,
                'sub_total' => $produk->price,
            ]);
        }

        return back()->with('success', 'Berhasil menambahkan ke keranjang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail_transactions  $detail_transactions
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail_transactionsModel = detail_transactions::where('transactions_id', $id)->join('products', 'detail_transactions.products_id', '=', 'products.id_products')
            ->get();
        // dd($detail_transactionsModel);
        return view('/admin/transactions_n_detail/index_detail', ['detail_transactionsModel' => $detail_transactionsModel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail_transactions  $detail_transactions
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_transactions $detail_transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detail_transactions  $detail_transactions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail_transactions $detail_transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail_transactions  $detail_transactions
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_transactions $detail_transactions, $id)
    {
        $detail_transaction = detail_transactions::find($id);
        $detail_transaction->delete();
        return redirect()->route('user.cart');
    }
}
