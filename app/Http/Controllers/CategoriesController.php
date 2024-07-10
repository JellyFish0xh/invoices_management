<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_category = Category::paginate(10);
        return view('category.All', compact('all_category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.Add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'CategoryName' => 'required|unique:categories,name|string|max:255',
        ]);

        $category = new Category();
        $category->name = $request->CategoryName;
        $category->save();

        return redirect()->back()->with('success', 'تم اضافة الفئة بنجاح');
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
        $Category_Data = category::where("id", "$id")->first();
        return view('category.Edit',compact('Category_Data'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'CategoryName' => 'required|unique:categories,name',
        ]);
        $category = Category::findOrFail($id);
        $category->name = $validated['CategoryName'];
        $category->save();

        return redirect()->back()->with('success', 'تم تحديث الفئة بنجاح');
    }
    public function destroy(string $id)
    {
        category::destroy($id);
        return redirect()->back()->with('success', 'تم ازالة الفئة بنجاح');
    }
}
