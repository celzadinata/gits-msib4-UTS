<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $category = categories::paginate(5);
        $product = products::with('categories')->get();
        $product_news = products::orderBy('created_at')->paginate(5);
        return view('user.page_dashboard',compact('category','product','product_news'));
    }

    public function product_all(){
        $category = categories::paginate(5);
        $product = products::paginate(6);
        return view('user.page_productall',compact('category','product'));
    }

    public function product_category($id){
        $categories = categories::find($id);
        $category = categories::paginate(5);
        $product = products::where('categories_id',$id)->get();
        return view('user.page_product_category',compact('categories','category','product'));
    }

    public function product_detail($id){
        $category = categories::paginate(5);
        $product = products::with('categories', 'users')->find($id);
        return view('user.page_product_detail',compact('product','category'));
    }
}
