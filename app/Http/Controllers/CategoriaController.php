<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function wheys(){
        $produtos = Produto::where('categoria_id', 1)->get();
        return view('viewsNavMenu.wheys', compact('produtos'));
    }

    public function hipercaloricos(){
        $produtos = Produto::where('categoria_id', 2)->get();
        return view('viewsNavMenu.hipercaloricos', compact('produtos'));
    }

    public function creatinas(){
        $produtos = Produto::where('categoria_id', 3)->get();
        return view('viewsNavMenu.creatinas', compact('produtos'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
