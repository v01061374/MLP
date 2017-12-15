<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cart;
use Illuminate\Http\Request;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Auth;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $carts = Cart::where('customer_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $carts = Cart::paginate($perPage);
        }

        return view('carts.index', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('carts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'customer_id' => 'required'
		]);
        $requestData = $request->all();
        
        Cart::create($requestData);

        return redirect('carts')->with('flash_message', 'Cart added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $cart = Cart::findOrFail($id);

        return view('carts.show', compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $cart = Cart::findOrFail($id);

        return view('carts.edit', compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'customer_id' => 'required'
		]);
        $requestData = $request->all();
        
        $cart = Cart::findOrFail($id);
        $cart->update($requestData);

        return redirect('carts')->with('flash_message', 'Cart updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Cart::destroy($id);

        return redirect('carts')->with('flash_message', 'Cart deleted!');
    }
    public function addCartItem(){

        $prodId = \request()->post('productId');
        $userId = Admin::user()['id'];


        $cart = Cart::all()->where('customer_id', $userId)->first();

        if(count($cart)){

        }
        else{

            $cart = new Cart(['customer_id' => $userId]);

            $cart->save();

        }
//        dd($cart['id']);
        $cartItem = CartItem::all()->where('cart_id', $cart['id'])->where('product_id', $prodId)->first();
        if($cartItem){
            $cartItem['quantity'] = $cartItem['quantity'] + 1;
            $cartItem->save();
        }
        else{
            $cartItem = new CartItem(['cart_id' => $cart['id'], 'product_id' => $prodId, 'quantity' => 1]);
            $cartItem->save();
        }
        return json_encode($cartItem);
    }
}
