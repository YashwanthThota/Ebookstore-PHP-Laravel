<?php

namespace App\Http\Controllers;

//Cart is a package imported using composer which is used for cart cart operations like cart add, associatr, remove, update etc.,
//for more see: https://github.com/Crinsane/LaravelShoppingcart
use Cart;
use Session;
use App\Product;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function add_to_cart()
    {
        $pdt = Product::find(request()->pdt_id);

        //adding product to the cart
        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => request()->qty,
            'price' => $pdt->price
        ]);

        //associating products in the cart to  products model
        Cart::associate($cartItem->rowId, 'App\Product');
        Session::flash('success', 'Product added to cart.');

        return redirect()->route('cart');
    }

    public function cart()
    {
        return view('cart');
    }

    public function cart_delete($id)
    {
      //removing the product from the cart
        Cart::remove($id);

        Session::flash('success', 'Product removed from cart.');
        return redirect()->back();
    }

    public function incr($id, $qty)
    {
      //this is for updating the quantity of a product in the cart
        Cart::update($id, $qty + 1);

        Session::flash('success', 'Product qunatity updated.');

        return redirect()->back();
    }
    public function decr($id, $qty)
    {
      //this is for updating the quantity of a product in the cart
        Cart::update($id, $qty - 1);

        Session::flash('success', 'Product qunatity updated.');

        return redirect()->back();
    }

//this is used for adding the product directly into our cart without going into the detail page
    public function rapid_add($id)
    {
        $pdt = Product::find($id);

        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            //since we are not going into product details, we are adding the product in the homepage by just clicking on the 'add to cart' button
            //so by defaut it will be 1
            'qty' => 1,
            'price' => $pdt->price
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        Session::flash('success', 'Product added to cart.');

        return redirect()->route('cart');
    }
}
