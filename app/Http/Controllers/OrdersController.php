<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
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
            $orders = Order::where('cart_id', 'LIKE', "%$keyword%")
                ->orWhere('addressDetails', 'LIKE', "%$keyword%")
                ->orWhere('postalCode', 'LIKE', "%$keyword%")
                ->orWhere('totalPrice', 'LIKE', "%$keyword%")
                ->orWhere('shippingMethod_id', 'LIKE', "%$keyword%")
                ->orWhere('isPaid', 'LIKE', "%$keyword%")
                ->orWhere('isSent', 'LIKE', "%$keyword%")
                ->orWhere('isDelivered', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $orders = Order::paginate($perPage);
        }

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('orders.create');
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
			'cart_id' => 'required',
			'cart_id' => 'required',
			'addressDetails' => 'required',
			'postalCode' => 'required',
			'totalPrice' => 'required',
			'shippingMethod_id' => 'required',
			'isPaid' => 'required',
			'isSent' => 'required',
			'isDelivered' => 'required'
		]);
        $requestData = $request->all();
        
        Order::create($requestData);

        return redirect('orders')->with('flash_message', 'Order added!');
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
        $order = Order::findOrFail($id);

        return view('orders.show', compact('order'));
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
        $order = Order::findOrFail($id);

        return view('orders.edit', compact('order'));
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
			'cart_id' => 'required',
			'cart_id' => 'required',
			'addressDetails' => 'required',
			'postalCode' => 'required',
			'totalPrice' => 'required',
			'shippingMethod_id' => 'required',
			'isPaid' => 'required',
			'isSent' => 'required',
			'isDelivered' => 'required'
		]);
        $requestData = $request->all();
        
        $order = Order::findOrFail($id);
        $order->update($requestData);

        return redirect('orders')->with('flash_message', 'Order updated!');
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
        Order::destroy($id);

        return redirect('orders')->with('flash_message', 'Order deleted!');
    }
}
