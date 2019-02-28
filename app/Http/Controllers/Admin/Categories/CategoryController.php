<?php

namespace App\Http\Controllers\Admin\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index',compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $newCategory = new Category();

        $newCategory->title = $data['title'];
        $newCategory->slug = Str::slug($data['title']);

        $newCategory->save();

        return redirect()->route('admin.categories.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->all();

        $category->update($data);

        return redirect()->route('admin.categories.index');
    }


    public function destroy($id)
    {
        //
    }
}
