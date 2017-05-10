<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\slide;
use App\Product;
use Symfony\Component\Process\Process;//ten trong provider

class myController extends Controller
{
    function __construct()
    {
        $slide = slide::all();
//        slide la ten trong providers
        view()->share('slide',$slide);
        $product = Product::all();
        view()->share('product',$product);
        $hot_product=Product::where('is_hot',1)->paginate(8);//Lay ra những sp co is_hot =1
        view()->share('hot_product',$hot_product);
        $new_product=Product::where('new',1)->paginate(8);
        view()->share('new_product',$new_product);
        $muanhieu_product=Product::where('rate_count','>',150)->paginate(8);
        view()->share('muanhieu_product',$new_product);



    }

    public function trangchu()
    {
        return view('page.trangchu');
    }
    public function product(Request $req)
    {
       $sanpham=Product::where('id',$req->id)->first();
       return view('page.product',compact('sanpham'));
    }
    public function gioithieu()
    {
        return view('page.gioithieu');
    }

}
