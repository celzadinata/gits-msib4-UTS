<?php

namespace App\Http\Controllers;

use App\Models\transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Dapat id yang login
        $penjual = Auth::id();

        // Tampilkan data transaksi punya user yang login
        $transactionsModel = transactions::join('detail_transactions', 'transactions.id', '=', 'detail_transactions.transactions_id')
            ->join('products', 'detail_transactions.products_id', '=', 'products.id_products')
            ->select('transactions.*', 'products.*')
            ->where('products.users_id', '=', $penjual)->get();

        return view('/admin/transactions_n_detail/index', compact('transactionsModel'));
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
     * @param  \App\Models\transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function show(transactions $transactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function edit(transactions $transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transactions $transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transactions  $transactions
     * @return \Illuminate\Http\Response
     */
    public function destroy(transactions $transactions)
    {
        //
    }
}
