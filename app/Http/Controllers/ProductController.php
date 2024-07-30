<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Stock_Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_product= Product::paginate(10);
        return view('products.All', compact('all_product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_stocks = Stock::all();
        $all_cat = category::all();
        return view('products.Add',compact(['all_stocks','all_cat']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'ProductName' => 'required|string|max:255',
            'CategoryID' => 'required|integer|exists:categories,id', // Assuming you have a categories table
            'Stock_ID' => 'required|integer|exists:stocks,id', // Assuming you have a stocks table
            'Base_quantity' => 'required|integer|min:1',
            'sell_price' => 'required|numeric|min:0',
            'buy_price' => 'required|numeric|min:0',
        ]);
    
        // Check if sell_price is greater than buy_price
        if ($validated['sell_price'] <= $validated['buy_price']) {
            return redirect()->back()->withErrors(['sell_price' => 'The sell price must be greater than the buy price.'])->withInput();
        }
    
        try {
            // Create new product
            $new_product = Product::create([
                'name' => $validated['ProductName'],
                'category_id' => $validated['CategoryID'],
                'sell_price' => $validated['sell_price'],
                'buy_price' => $validated['buy_price'],
            ]);
    
            // Create stock product entry
            Stock_Product::create([
                'product_id' => $new_product->id,
                'stock_id' => $validated['Stock_ID'],
                'Base_Quantity' => $validated['Base_quantity'],
            ]);
    
            return redirect()->back()->with('success', 'تم اضافة المنتج بنجاح');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'حدث خطأ أثناء إضافة المنتج. يرجى المحاولة مرة أخرى.');
        }
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
        $supplier_Data = Customer::where('id', "$id")->first();
        return view('customer.Edit',compact('supplier_Data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'supplierName' => 'required|string|max:255',
            'contactDetail' => 'required|string|max:255',
        ]);
        $supplier = Customer::findOrFail($id);
        $supplier->name = $validated['supplierName'];
        $supplier->contact_details =$validated['contactDetail'];
        $supplier->save();

        return redirect()->back()->with('success', 'تم تحديث العميل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect()->back()->with('success', 'تم ازالة المنتج بنجاح');
    }
}
