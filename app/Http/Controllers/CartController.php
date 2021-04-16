<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Cart;
use Session;
use App\Product;
use App\Customer;
class CartController extends Controller
{
  
    public function index()
    {
      $products = Product::all();
      //dd($products);
      return view('products', compact('products')); 
    }

    public function addToCart($id)
    {
      $product = Product::find($id);
      if(!$product) 
      {
        abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->product_name,
                        "quantity" => 1,
                        "price" => $product->product_price,
                        "photo" => $product->product_image
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->product_name,
            "quantity" => 1,
            "price" => $product->product_price,
            "photo" => $product->product_image
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function cart()
    {
      return view('cart');
    }
    public function update(Request $request)
    {
      if($request->id and $request->quantity)
        {
        $cart = session()->get('cart');
        $cart[$request->id]["quantity"] = $request->quantity;
        session()->put('cart', $cart);
        session()->flash('success', 'Cart updated successfully');
      }
    }

    public function remove(Request $request)
    {
      if($request->id) {
        $cart = session()->get('cart');
        if(isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Product removed successfully');
      }
    }
    public function checkout(Request $request)
    {
      $data=array();
      $data['name']=$request->name;
      $data['phone']=$request->phone;
      $data['email']=$request->email;
      $data['address']=$request->address;
      Customer::insert($data);
        Session::put('message','Customer billing added successfully !!!'); 
        return Redirect::to('payment'); 
        //return view('checkout');
    }
    public function billing()
    {
       return view('checkout'); 
    }
    public function payment()
    {
        return view('stripe');
    }
}
