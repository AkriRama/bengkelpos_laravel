<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Category::all();
        return view('admincategory', ['categories' => $categories]);
    }

    public function add()
    {
        return view('addcategory');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        $category = Category::create($request->all());
        return redirect('admincategory')->with('status','Category Added Successfuly');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('editcategory', ['category' => $category]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        $category = Category::where('slug', $slug)->first();
        $category->slug=null;
        $category->update($request->all());
        return redirect('admincategory')->with('status','Category Updated Successfully');
    }

    public function delete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('deletecategory', ['category' => $category]);
        // $category = Category::where('slug', $slug)->first();
        // $category->delete();
        // return redirect('admincategory')->with('status','Category Deleted Successfully');
    }

    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('admincategory')->with('status','Category Deleted Successfully');
    }

    public function deletedCategory()
    {
        $deletedCategories = Category::onlyTrashed()->get();
        return view('deletedcategory', ['deletedCategories' => $deletedCategories]);
    }

    public function restore($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();
        return redirect('deletedcategory')->with('status','Category Restored Successfully');
    }

    public function forcedelete($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        return view('forcedeletecategory', ['category' => $category]);
    }

    public function forcedestroy($slug)
    {
        $category = Category::onlyTrashed()->where('slug', $slug)->first();
        $category->forcedelete();
        return redirect('deletedcategory')->with('status','Category Permanently Deleted Successfully');

    }
}
