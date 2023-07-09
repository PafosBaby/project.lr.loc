<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategoriesPage()
    {
        return view('admin.categories.all-categories', [
            'categories' => Category::all()
        ]);
    }

    public function createCategory()
    {
        return view('admin.categories.create-category');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:2', 'max:20', 'regex:/^[a-zA-Zа-яА-Я]+$/u','unique:categories']
        ]);
        //dd($request->all());

        //Category::create([
        //    'name' => $request->input('genre')
        // ]);
        Category::create($request->all());
        return redirect()->route('genre');
    }
    public function editCategory(Category $category)
    {
        return view('admin.categories.edit-category', [
            'category' => $category
        ]);
    }

    public function updateCategory(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'min:2', 'max:20','unique:categories,name,' . $category->id]
        ]);

        $category->update($request->all());
        return redirect()->route('genre');
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        return back();
    }
}
