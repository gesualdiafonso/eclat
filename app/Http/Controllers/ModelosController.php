<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Modelos;
use Illuminate\Http\Request;

class ModelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelos = DB::table('modelos')->select('*')->get();

        return view('modelos.index', ['modelos' => $modelos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $modelo = Modelos::findOrFail($id);

        return view('modelos.show', ['modelo' => $modelo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modelos $modelos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modelos $modelos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelos $modelos)
    {
        //
    }
}
