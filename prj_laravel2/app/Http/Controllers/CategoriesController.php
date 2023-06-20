<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where("parent_id","=",0)->latest()->paginate(8);
        

        return view('backend.category.index',["categories"=>$categories]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $action = url('admin/category');
        return view('backend.category.create_edit',["action"=>$action]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $input = $request->all();
        Category::Create($input);
       
        return redirect(url('admin/category'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $categories = Category::where("parent_id","=",$id)->latest()->paginate(8);
        // return view("backend.category.show",["categories"=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category =  Category::find($id);
        $action = url('admin/category/'.$id);
       return view('backend.category.create_edit',["action"=>$action,"category"=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $input = $request->all();
       
        $category = Category::find($id);
        $category->update($input);
        return redirect(url('admin/category'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Category::destroy($id);
         return redirect(url('admin/category'));
    }
}
