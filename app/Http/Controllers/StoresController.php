<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Store;
use Illuminate\Http\Request;

class StoresController extends Controller
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
            $stores = Store::where('title', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('lat', 'LIKE', "%$keyword%")
                ->orWhere('lng', 'LIKE', "%$keyword%")
                ->orWhere('owner_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $stores = Store::paginate($perPage);
        }

        return view('stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('stores.create');
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
			'title' => 'required|max:40',
			'address' => 'required',
			'lat' => 'required',
			'lng' => 'required',
			'owner_id' => 'required'
		]);
        $requestData = $request->all();
        
        Store::create($requestData);

        return redirect('stores')->with('flash_message', 'Store added!');
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
        $store = Store::findOrFail($id);

        return view('stores.show', compact('store'));
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
        $store = Store::findOrFail($id);

        return view('stores.edit', compact('store'));
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
			'title' => 'required|max:40',
			'address' => 'required',
			'lat' => 'required',
			'lng' => 'required',
			'owner_id' => 'required'
		]);
        $requestData = $request->all();
        
        $store = Store::findOrFail($id);
        $store->update($requestData);

        return redirect('stores')->with('flash_message', 'Store updated!');
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
        Store::destroy($id);

        return redirect('stores')->with('flash_message', 'Store deleted!');
    }
}
