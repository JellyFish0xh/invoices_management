<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_supplier= Customer::paginate(10);
        return view('customer.All', compact('all_supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.Add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'supplierName' => 'required|string|max:255',
            'contactDetail' => 'required|string|max:255',
        ]);

        $supplier = new Customer();
        $supplier->name = $request->supplierName;
        $supplier->contact_details = $request->contactDetail;
        $supplier->save();

        return redirect()->back()->with('success', 'تم اضافة العميل بنجاح');
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
        $supplier_Data = Customer::where("id", "$id")->first();
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
        Customer::destroy($id);
        return redirect()->back()->with('success', 'تم ازالة العميل بنجاح');
    }
}
