<?php

namespace Hyphun\HypCart\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hyphun\HypCart\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::all();
        return view('hypcart::cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $cart = new Cart;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->route('cart.index');
    }

    public function delete(Request $request)
    {
        Cart::destroy($request->id);
        return redirect()->route('cart.index');
    }

    public function edit(Request $request)
    {
        $cart = Cart::find($request->id);
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->route('cart.index');
    }
}
