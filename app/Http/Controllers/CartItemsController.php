<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CartItem;
use Illuminate\Http\Request;

class CartItemsController extends Controller
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
            $cartitems = CartItem::where('product_id', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $cartitems = CartItem::paginate($perPage);
        }

        return view('cart-items.index', compact('cartitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cart-items.create');
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
			'product_id' => 'required',
			'quantity' => 'required|min:1'
		]);
        $requestData = $request->all();
        
        CartItem::create($requestData);

        return redirect('cart-items')->with('flash_message', 'CartItem added!');
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
        $cartitem = CartItem::findOrFail($id);

        return view('cart-items.show', compact('cartitem'));
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
        $cartitem = CartItem::findOrFail($id);

        return view('cart-items.edit', compact('cartitem'));
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
			'product_id' => 'required',
			'quantity' => 'required|min:1'
		]);
        $requestData = $request->all();
        
        $cartitem = CartItem::findOrFail($id);
        $cartitem->update($requestData);

        return redirect('cart-items')->with('flash_message', 'CartItem updated!');
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
        CartItem::destroy($id);

        return redirect('cart-items')->with('flash_message', 'CartItem deleted!');
    }
}
