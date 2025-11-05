<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos=Produto::where('estoque', '>', '0')->get();
        return view('index', compact('produtos'));
    }

    public function buscar(Request $request){
        $termo = $request->input('busca');
        $produtos = Produto::where('nome', 'like', "%{$termo}%")->where('estoque', '>', 0)->get();
        return view('index', compact('produtos', 'termo'));
    }
    public function filtroPreco(Request $request){
        if($request->precoMin && $request->precoMax){
            $produtos = Produto::whereBetween('preco',[$request->precoMin, $request->precoMax] )->get();
            $slug = "Produtos de R$". $request->precoMin . " até R$". $request->precoMax;
            return view('index', compact('produtos','slug'));
        }
        else{
            if($request->precoMin){
                $produtos = Produto::where('preco', '>=', $request->precoMin)->get();
                $slug = "Produtos acima de R$". $request->precoMin ;
                return view('index', compact('produtos','slug'));
            }
            else if($request->precoMax){
                $produtos = Produto::where('preco', '<=', $request->precoMax)->get();
                $slug = "Produtos abaixo de R$". $request->precoMax;
                return view('index', compact('produtos','slug'));
            }
            else{
                $produtos = Produto::all();
                return view('index', compact('produtos'));
            }
        }
        return view('index', compact('produtos','slug'));
    }
    public function filtro( $slug){
        
        $produtos = Produto::whereHas('categoria', function($q) use ($slug){
        $q->where('nome', $slug);
        })->get();
        return view('index', compact('produtos','slug'));
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
        $produto = Produto::with('marca')->with('categoria')->find($id);
        return view('vermais', compact('produto'));
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
