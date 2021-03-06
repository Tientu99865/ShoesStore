<?php

namespace App\Http\Controllers\Frontend;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function view($id){
        $category = Categories::find($id);
        $categories = Categories::all()->where('parent_id','!=',null);
        $products = Products::orderBy('id','DESC')->where('cat_id',$id)->paginate(9);
        $bestProducts = Products::orderBy('sell_number','DESC')->limit(3)->get();
        return view('pages.danhmuc',['category'=>$category,'categories'=>$categories,'products'=>$products,'bestProducts'=>$bestProducts]);
    }
}
