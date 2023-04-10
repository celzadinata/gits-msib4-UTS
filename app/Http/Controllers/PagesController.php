<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $category = categories::paginate(5);
        $product = products::paginate(5);
        $crousel = ['active','not_active'];
        $product_news = products::orderBy('created_at')->get();
        return view('user.page_dashboard',compact('category','product','product_news','crousel'));
    }
}
