<?php

namespace App\Http\Controllers;

use App\Models\StockHp;
use Illuminate\Http\Request;

class StockHpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = StockHp::all();
        return view('stock.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stock.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand'=>'required',
            'model'=>'required',
            'price'=>'required',
            'stock_quantity'=>'required',
        ]);

        StockHp::create($request->only(['brand', 'model', 'price', 'stock_quantity']));
        return redirect()->route('stock.index')->with('success', 'Stock added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(StockHp $stock)
    {
        return view('stock.show', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StockHp $stock)
    {
        return view('stock.edit', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StockHp $stock)
    {
        $request->validate([
            'brand'=>'required',
            'model'=>'required',
            'price'=>'required',
            'stock_quantity'=>'required',
        ]);

        $stock->update($request->only(['brand', 'model', 'price', 'stock_quantity']));
        return redirect()->route('stock.index')->with('success', 'Stock updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StockHp $stock)
    {
        $stock->delete();
        return redirect()->route('stock.index')->with('success', 'Stock deleted successfully');
    }
}
