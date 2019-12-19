<?php

namespace App\Http\Controllers;

use App\Apoderado;
use Illuminate\Http\Request;

class ApoderadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = [
            '11/10/2019' => [
                'P', '-', 'T', 'F', '-', '-'
            ],
            '10/09/2019' => [
                'F', 'T', 'T', 'F', '-', '-'
            ],
            '07/08/2019' => [
                'T', 'T', 'T', 'F', '-', '-'
            ],
            '30/09/2019' => [
                'P', '-', '-', 'P', 'P', '-'
            ],
            '27/10/2019' => [
                'P', '-', 'T', 'P', 'P', 'T'
            ],
        ];

        return view('apoderado.index', compact('registros'));
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
     * @param  \App\Aporado  $aporado
     * @return \Illuminate\Http\Response
     */
    public function show(Aporado $aporado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aporado  $aporado
     * @return \Illuminate\Http\Response
     */
    public function edit(Aporado $aporado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aporado  $aporado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aporado $aporado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aporado  $aporado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aporado $aporado)
    {
        //
    }
}
