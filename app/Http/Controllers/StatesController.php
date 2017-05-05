<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states=State::orderBy('id','ASC')->paginate(10);
        return view('admin.states.index')->with('states',$states);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.states.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state=new State($request->all());
        $state->save();
        flash('El estado ha sido creado con éxito!!!')->success();
        return redirect('admin/states');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $state=State::find($id);
         return view('admin.states.edit')->with('state' , $state);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $state=State::find($id);

        $state->description=$request->description;

        $state->save();

        flash('El Estado ha sido actualizado con éxito!!!')->success();
        return redirect()->route('states.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state=State::find($id);
        $state->delete();
        flash('El Estado '.$state->description.' ha sido eliminado con éxito!!!')->warning();
        return redirect()->route('states.index');
    }
}
