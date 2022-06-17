<?php

namespace App\Http\Controllers;

use App\Models\Moeda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Builder\Use_;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class MoedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Moeda::create ([
          'pais'=>$request->pais,
          'nomedamoeda'=>$request->nomedamoeda,
          'valor'=>$request->valor,
          'ano'=>$request->ano,
          'user_id'=> Auth::user()->id
        ]);


        return redirect('/dashboard');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moeda  $moeda
     * @return \Illuminate\Http\Response
     */
    public function show(Moeda $moeda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moeda  $moeda
     * @return \Illuminate\Http\Response
     */
    public function edit(Moeda $moeda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moeda  $moeda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moeda $moeda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moeda  $moeda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moeda $moeda)
    {
        //
    }
}
