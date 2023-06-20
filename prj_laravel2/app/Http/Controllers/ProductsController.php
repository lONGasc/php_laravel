<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
          $products = Product::latest()->paginate(8);
        return view('backend.product.index',["products"=>$products]);  

       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $action = url('admin/product');
        return view('backend.product.create_edit',["action"=>$action]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $name = request("name");
         $description = request("description");
         $content = request("content");
         $hot = request("hot") != null ?1 :0;;
         $price = request("price");
         $discount = request("discount");
         $category_id = request("category_id");
        $photo ="";
      
     
         if($request->file("photo")){           
            $photo = time()."_".$request->file("photo")->getClientOriginalName();
            //thuc hien upload anh
            $request->file("photo")->move("images",$photo);
        }   
       
      
      
           Product::insert(["name"=>$name,"description"=>$description,"content"=>$content,"hot"=>$hot,"price"=>$price,"discount"=>$discount,"photo"=>$photo,"category_id"=>$category_id]);
           
          
          return redirect(url("admin/product"));
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view("backend.product.show",["product"=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $product =  Product::find($id);
        $action = url('admin/product/'.$id);
       return view('backend.product.create_edit',["action"=>$action,"product"=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $name = request("name");
         $description = request("description");
         $content = request("content");
         $hot = request("hot") != null ? 1 :0;;
         $price = request("price");
         $discount = request("discount");
         $category_id = request("category_id");
        // $photo ="";
      
     Product::where("id","=",$id)->update(["name"=>$name,"description"=>$description,"content"=>$content,"hot"=>$hot,"price"=>$price,"discount"=>$discount,"category_id"=>$category_id]);
             if($request->file("photo")){
            //---
            //lay anh cu de xoa
            $oldPhoto = Product::where("id","=",$id)->select("photo")->first();
            if(isset($oldPhoto->photo) && file_exists("images/".$oldPhoto->photo) && $oldPhoto != "")

                @unlink("images/".$oldPhoto->photo);//dau @ de che dau loi
            //---
            //thuc hien upload anh
            $photo = time()."_".$request->file("photo")->getClientOriginalName();
            

            $request->file("photo")->move("images",$photo);
            //update ban ghi
            Product::where("id","=",$id)->update(["photo"=>$photo]);
        }
           
          
          return redirect(url("admin/product"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $oldPhoto = Product::where("id","=",$id)->select("photo")->first();
        if(isset($oldPhoto->photo) && file_exists("images/".$oldPhoto->photo) && $oldPhoto != "")
            @unlink("images/".$oldPhoto->photo);//dau @ de che dau loi
        //---
        // User::where("id","=",$id)->delete();
          Product::destroy($id);
         return redirect(url('admin/product'));
    }
}
