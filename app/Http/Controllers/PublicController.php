<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function index(){
        $products = Product::take(3)->get();
        return view('pages.index', compact('products'));
    }

    public function merch(){
        $products = Product::all();
        return view('pages.merch', compact('products'));
    }

    public function merchdetail(Product $product){
        return view('pages.merchdetail', compact('product'));
    }

    public function contact(){
        return view('pages.contact');
    }

    public function annetus(){
        return view ('pages.annetus');
    }
}
