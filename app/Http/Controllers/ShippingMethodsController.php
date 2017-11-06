<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ShippingMethod;
use Illuminate\Http\Request;

class ShippingMethodsController extends Controller
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
            $shippingmethods = ShippingMethod::where('title', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $shippingmethods = ShippingMethod::paginate($perPage);
        }

        return view('shipping-methods.index', compact('shippingmethods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('shipping-methods.create');
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
			'title' => 'required',
			'price' => 'required|min:1'
		]);
        $requestData = $request->all();
        
        ShippingMethod::create($requestData);

        return redirect('shipping-methods')->with('flash_message', 'ShippingMethod added!');
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
        $shippingmethod = ShippingMethod::findOrFail($id);

        return view('shipping-methods.show', compact('shippingmethod'));
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
        $shippingmethod = ShippingMethod::findOrFail($id);

        return view('shipping-methods.edit', compact('shippingmethod'));
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
			'title' => 'required',
			'price' => 'required|min:1'
		]);
        $requestData = $request->all();
        
        $shippingmethod = ShippingMethod::findOrFail($id);
        $shippingmethod->update($requestData);

        return redirect('shipping-methods')->with('flash_message', 'ShippingMethod updated!');
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
        ShippingMethod::destroy($id);

        return redirect('shipping-methods')->with('flash_message', 'ShippingMethod deleted!');
    }
}
