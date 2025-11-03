<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('carrinho');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function CalcularTotalCarrinho(){
        $carrinho = session('carrinho');
        $valortoal = session('valortotal');
        $valortoal=0;
        foreach ($carrinho as $id=>$item){
            $valortoal+=$item['qtd']*$item['produto']->preco;
        }
        return $valortoal;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
        $carrinho = session('carrinho', []);
        $valortotal = session('valortotal', 0);
        $produto = Produto::find($id);
        if(isset($carrinho[$id])){
            if($produto->estoque==$carrinho[$id]['qtd']){
                return redirect()->route('carrinho.index')->with('msg', 'Você atiingiu o limite disponível  deste item');
            }
            else{
                $carrinho[$id]['qtd']++;
            }
        }
        else{
            //adicionar no carrinho
            $carrinho[$id]['produto']=$produto;
            $carrinho[$id]['qtd'] = 1;
        }
        
        session()->put('carrinho', $carrinho);
        $valortotal = $this->CalcularTotalCarrinho();
        session()->put('valortotal', $valortotal);

        return redirect()->route('carrinho.index');

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
        $carrinho = session('carrinho');
        $valortotal = session('valortotal');
        if($carrinho[$id]['qtd']>1){
           $carrinho[$id]['qtd']--; 
        }
        else{
            unset($carrinho[$id]);
        }
        session()->put('carrinho', $carrinho);
        $valortotal = $this->CalcularTotalCarrinho();
        session()->put('valortotal', $valortotal);
        return redirect()->route('carrinho.index');

    }
}
