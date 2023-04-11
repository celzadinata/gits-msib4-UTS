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

    public function product($id){
        $category = categories::paginate(5);
        $product = products::where('categories_id',$id)->get();
        $product_news = products::orderBy('created_at')->paginate(5);
        return view('user.page_product',compact('category','product','product_news'));
    }

    public function product_detail($id_products){

        return view('user.page_product_detail');
    }
}
