<?php

namespace Hyphun\HypCart\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hyphun\HypCart\Models\HypCart;

class CartController extends Controller
{
    public function index()
    {
        $cart = HypCart::all();
        return view('hypcart::cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $cart = new HypCart;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->route('cart.index');
    }

    public function delete(Request $request)
    {
        HypCart::destroy($request->id);
        return redirect()->route('cart.index');
    }

    public function edit(Request $request)
    {
        $cart = HypCart::find($request->id);
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->route('cart.index');
    }
}
