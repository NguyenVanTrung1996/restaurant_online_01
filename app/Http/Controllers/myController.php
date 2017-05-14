<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\slide;
use App\Product;//ten trong provider

class myController extends Controller
{
    function __construct()
    {
        $slide = slide::all();
//        slide la ten trong providers
        view()->share('slide',$slide);
        $product = Product::all();
        view()->share('product',$product);

//        $top_product=Product::where('is_hot',1)->get();//Lay ra những sp co is_hot =1
//        view()->share('product',$top_product);



    }

    public function trangchu()
    {

        return view('page.trangchu');
    }
    public function product()
    {
        return view('page.product');
    }
}
