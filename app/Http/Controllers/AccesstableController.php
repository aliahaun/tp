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
        $accesstables = Accesstable::all();
        return view('accesstable.create',compact('accesstables'));

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
        // Accesstable::create([
        //     'Name' => $request->Name,
        //     'Link' => $request->Link,
        //     'Login'=>$request->Login,
        //     'password' => $request->password
        // ]);
        // return redirect()->route('accesstable.index');
        $accesstables =Accesstable::create($request->all());
        return redirect()->route('accesstable.index');
       // return response()->json(array($accesstables, 201));

    }
      

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Accesstable $accesstables)
    {
        //
        return $accesstables;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $accesstables = Accesstable::FindOrFail($id);
        dd($accesstables);
        $msg = "ok";
        return view('accesstable.edit',compact('accesstables',"msg"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        // $accesstables= Accesstable::FindOrFail($id);
        // $accesstables->update([
        //     'Name' => $request->Name,
        //     'Link' => $request->Link,
        //     'Login'=>$request->Login,
        //     'password' => $request->password
        // ]);
        // return redirect()->route('accesstable.index');
        $accesstables->update($request->all());

        // return response()->json($accesstables, 200);
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // //
        $accesstables= Accesstable::FindOrFail($id);
        $accesstables->delete();
        return redirect()->route('accesstable.index');
        // return response->json(null, 204);
   
    }
}
