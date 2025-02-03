<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        $products = Product::where("stock", ">", 0)->get();
        
        return view("transaction/index", ["transactions" => $transactions, 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach($request->cart as $data) {
            $transaction = new Transaction();
            $transaction->product_id = $data['id'];
            $transaction->user_id = Auth::user()->id;
            $transaction->count = $data['total'];
            $transaction->save();

            $product = Product::where("id", "=", $data['id'])->first();
            $product->stock = $product->stock - $data['total'];
            $product->save();
        }
        return json_encode([
            "status" => "success"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
