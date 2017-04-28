<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoresController extends Controller
{
     public function index()
    {
        $stores=Store::orderBy('id','ASC')->paginate(10);
        return view('admin.stores.index')->with('stores',$stores);
    }

     public function create()
    {
          return view('users.stores.create');
    }

    public function store(Request $request)
    {
        /*$store=new Store($request->all());
		return redirect('admin/users');*/
    }
}
