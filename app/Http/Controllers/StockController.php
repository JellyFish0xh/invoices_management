<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_stock= Stock::paginate(10);
        return view('stock.All', compact('all_stock'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stock.Add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'stockName' => 'required|unique:stocks,name|string|max:255',
        ]);

        $stock = new Stock();
        $stock->name = $request->stockName;
        $stock->save();

        return redirect()->back()->with('success', 'تم اضافة المخزن بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stock_Data = Stock::where("id", "$id")->first();
        return view('stock.Edit',compact('stock_Data'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'stockName' => 'required|unique:stocks,name|string|max:255',
        ]);
        $stock = Stock::findOrFail($id);
        $stock->name = $validated['stockName'];
        $stock->save();

        return redirect()->back()->with('success', 'تم تحديث المخزن بنجاح');
    }
    public function destroy(string $id)
    {
        Stock::destroy($id);
        return redirect()->back()->with('success', 'تم ازالة المخزن بنجاح');
    }
}
