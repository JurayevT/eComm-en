<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();

        return view('product', [
            'products' => $data
        ]);
    }
    function detail($id)
    {
        $product = Product::find($id);

        return view('detail', [
            'product' => $product
        ]);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart();
            $cart->user_id = session()->get('user')->id;
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else 
              return redirect('/login');
    }
    function cartItem()
    {
        $userID = Session::get('user')->id;
        return Cart::where('user_id', $userID)->count();
    }
    function cartList()
    {
        $userID = Session::get('user')->id;
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userID)
        ->select('products.*', 'cart.id as cartId')
        ->get();

        return view('cartlist', [
            'products' => $products
        ]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
    }
    function orderNow()
    {
        $userID = Session::get('user')->id;
        $total = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userID)
        ->sum('products.price');

        return view('ordernow', [
            'total' => $total
        ]);
    }
}
