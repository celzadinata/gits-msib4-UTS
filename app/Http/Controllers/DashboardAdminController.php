<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\products;
use App\Models\categories;
use App\Models\transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $log = Auth::id();
        $category = categories::count();
        $product = products::where('users_id', $log)->count();
        $transaction = transactions::join('detail_transactions', 'transactions.id', '=', 'detail_transactions.transactions_id')
            ->join('products', 'detail_transactions.products_id', '=', 'products.id_products')
            ->select('transactions.*', 'products.*')
            ->where('products.users_id', '=', $log)->count();

        $total_harga = transactions::join('detail_transactions', 'transactions.id', '=', 'detail_transactions.transactions_id')
            ->join('products', 'detail_transactions.products_id', '=', 'products.id_products')->selectRaw("CAST(SUM(total) as int) as total_harga,MONTH(transactions.created_at) as month")
            ->where('products.users_id', '=', $log)->groupBy("Month")
            ->pluck('total_harga');

        $bulan = transactions::select(DB::raw("MONTHNAME(created_at) as bulan"))
            ->GroupBy(DB::raw("MONTHNAME(created_at)"))
            ->pluck('bulan');

        return view('admin.dashboard.index', compact('category', 'product', 'transaction', 'total_harga', 'bulan'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(categories $categories)
    {
        return view('admin.dashboard.profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'username' => 'string|max:255|unique:' . users::class,
            'email' => 'string|email|unique:' . users::class . '|max:100',
            'password' => ['confirmed', Password::default()->sometimes()],
            'jenisKelamin' => 'required',
            'alamat' => 'required|string|max:255',
            'telepon' => 'required|string|max:13',
            'avatar' => 'mimes:jpg,jpeg,png|max:2048'
        ]);

        // dd($request->toArray());
        $penjual = users::find(Auth::user()->id);
        $penjual->first_name = $request->input('firstName');
        $penjual->last_name = $request->input('lastName');
        $penjual->no_hp = $request->input('telepon');
        $penjual->jenis_kelamin = $request->input('jenisKelamin');
        $penjual->alamat = $request->input('alamat');
        if ($request->avatar) {
            $imgUrl = time() . '-' . $request->username . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('user'), $imgUrl);
            $penjual->avatar = $imgUrl;
        }
        if ($request->password) {
            $penjual->password = Hash::make($request->input('password'));
        }
        $penjual->update();

        return redirect()->route('dashboard.edit')->with('success', 'Berhasil mengubah informasi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(categories $categories)
    {
        //
    }
}
