<?php

namespace App\Http\Controllers;

use App\Models\Add;
use App\Models\Category;
use Illuminate\Http\Request;

class AddController extends Controller
{
    //
    public function index(){
        $data = ["category"=> Category::all(), "add"=> Add::all()];
        return view("homepage", $data);
    }

    public function insertAdd(){
        $data = ["category"=> Category::all()];
        return view("added",$data);
    }

    public function search(Request $req){
        $data = ["category"=> category::all(), "add"=> Add ::where("name", "like", "%$req->search%")->get()];
        return view("homepage",$data);
    }
      
    public function viewAdd($id){
        $data = ["add"=> Add::find($id), "category"=> category::all()];
        return view("singleView",$data);
 
    }

    
    public function catView($cat_id){
    $data = ["post"=>Post::where("category_id", $cat_id)->get(),
            "category"=>Category::all()];
    }

    public function addStore(Request $req){
       $add = new Add();
       $add->name = $req->name;
       $add->coll_code = $req->coll_code;
       $add->address = $req->address;
       $add->category_id = $req->category;
       $add->save();

       return redirect()->route('insert');
    }

    public function categoryStore(Request $req){
       $cat = new Category();
       $cat->cat_name = $req->cat_name;
       $cat->save();

      return redirect()->route('insert');
   }
}
