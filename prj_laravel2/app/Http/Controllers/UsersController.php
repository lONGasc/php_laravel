<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(8);
        return view('backend.user.index',["users"=>$users]);  

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $action = url('admin/user');
        return view('backend.user.create_edit',["action"=>$action]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $name = request("name"); 
        $password = request("password");
        $email = request("email");
        //ma hoa password
        $password = Hash::make($password);
     
         if($request->file("photo")){           
            $photo = time()."_".$request->file("photo")->getClientOriginalName();
            //thuc hien upload anh
            $request->file("photo")->move("images",$photo);
        }   
       
        //kiem tra xem email da ton tai chua, neu chua ton tai thi moi cho insert
        $countEmail = DB::table("users")->where("email","=",$email)->Count();
        if($countEmail == 0){
            //insert
      
            User::insert(["email"=>$email,"name"=>$name,"password"=>$password]);
            //di chuyen den mot url khac
          
        }  return redirect(url("admin/user"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $user = User::find($id);
        return view("backend.user.show",["user"=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user =  User::find($id);
        $action = url('admin/user/'.$id);
       return view('backend.user.create_edit',["action"=>$action,"user"=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $name = request("name");
      $email = request("email");
      $password = request("password");
       
       
      User::where('id','=',$id)->update(["name"=>$name,"email"=>$email]);
      if($password != "" ){
         $password = Hash::make($password);
        User::where('id','=',$id)->update(["password"=>$password]);
      }
       //neu co anh thi update anh
        if($request->file("photo")){
            //---
            //lay anh cu de xoa
            $oldPhoto = User::where("id","=",$id)->select("photo")->first();
            if(isset($oldPhoto->photo) && file_exists("images/".$oldPhoto->photo) && $oldPhoto != "")

                @unlink("images/".$oldPhoto->photo);//dau @ de che dau loi
            //---
            //thuc hien upload anh
            $photo = time()."_".$request->file("photo")->getClientOriginalName();
            

            $request->file("photo")->move("images",$photo);
            //update ban ghi
            User::where("id","=",$id)->update(["photo"=>$photo]);
        }


      return redirect(url('admin/user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $oldPhoto = User::where("id","=",$id)->select("photo")->first();
        if(isset($oldPhoto->photo) && file_exists("images/".$oldPhoto->photo) && $oldPhoto != "")
            @unlink("images/".$oldPhoto->photo);//dau @ de che dau loi
        //---
        // User::where("id","=",$id)->delete();
          User::destroy($id);
         return redirect(url('admin/user'));
    }
}
