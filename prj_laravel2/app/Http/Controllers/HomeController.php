<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
       
      $hotproducts = Product::where('hot',"=",1)->latest()->paginate(6);
      $products = Product::latest()->get();
   
   
       $categories = Category::where("parent_id","=",0)->latest()->paginate(4);
 
 

        return view('frontend.home.hotproduct',["hotproducts"=>$hotproducts,"categories"=>$categories,"products"=>$products]);  
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */

 

    /**
     * Display the specified resource.
     */
    public function category(string $id)
    {
        $category = Category::where("id","=",$id)->latest()->get();
        $products = Product::where("category_id","=",$id)->latest()->paginate(20);
        return view("frontend.home.homelist",["category"=>$category,"products"=>$products]);
        // var_dump($products);
      
    }
     public function detail(string $id)
    {
     
      $product = Product::where("id","=",$id)->latest()->paginate(20);
          // $product = Product::where("category_id","=",1);
        // $product = DB::table("products")->where("id","=",1);
        // return view("backend.user.show",["user"=>$user]);
        return view("frontend.home.detail",["product"=>$product]);
    }
     

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
