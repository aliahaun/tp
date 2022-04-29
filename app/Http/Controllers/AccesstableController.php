<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accesstable;

class AccesstableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accesstables = Accesstable::all();
        return view('accesstable.index',compact('accesstables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
        $accesstables = Accesstable::FindOrFail($id);
        return view('accesstable.edit',compact('accesstables'));
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
        //
        $accesstables= Accesstable::FindOrFail($id);
        $accesstables->update([
            'Name' => $request->Name,
            'Link' => $request->Link,
            'Login'=>$request->Login,
            'password' => $request->password
        ]);
        return redirect()->route('accesstable.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $accesstables= Accesstable::FindOrFail($id);
        $accesstables->delete();
        return redirect()->route('accesstable.index');

    }
}
