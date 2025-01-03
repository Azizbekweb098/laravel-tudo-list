<?php

namespace App\Http\Controllers;

use App\Models\Tudo;
use Illuminate\Http\Request;

class TudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tudo = Tudo::all();
      return response()->json($tudo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        Tudo::create($requestData);

        return response()->json($requestData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requestData = Tudo::find($id);

        return response()->json($requestData);
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
        $todo = Tudo::find($id);
        if ($todo) {
            $todo->update($request->all());
        }
        $todo->update($request->all());

        return response()->json(['xat' => 'mufaqiyatli yaratildi']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tudo = Tudo::find($id);
        $tudo->delete();

        return response()->json(['xat' => 'ochirildi']);

    }
}
