@extends('layouts.main')
@section('title', 'Carrinho')

@section('style')
<link rel="stylesheet" href="{{asset('css/carrinho.css')}}">
@endsection

@section('conteudo')
    <h1 class="alert alert-success text-center">Carrinho</h1>
    @if (!session()->has('carrinho') or empty(session('carrinho')))
        <h2 class="alert alert-danger text-center">O carrinho está vazio</h2>
    
    @else
        <div class="container mb-2 carrinho">
            <div class="row ">
                <div class="col"><strong>NOME</strong></div>
                <div class="col"><strong>PREÇO(UN)</strong></div>
                <div class="col"><strong>QUANTIDADE</strong></div>
                <div class="col"><strong>VALOR TOTAL</strong></div>
                <div class="col"></div>
                <div class="col"></div>

            </div>
            @foreach (session('carrinho') as $produto )
                <div class="linha row border p-2  gap-0 ">
                <div class="col">
                    {{$produto['produto']['nome']}} 
                </div>
                <div class="col">
                    R$ {{$produto['produto']['preco']}}
                </div>
                <div class="col">
                    {{$produto['qtd']}} 
                </div>
                <div class="col">
                    R$ {{$produto['produto']['preco']*$produto['qtd']}}
                </div>
                <div class="col p-3">
                    <a href="{{route('produtos.show', $produto['produto']->id)}}"><img class="imgcar shadow  rounded max-img-car" src="{{$produto['produto']['imagem']}}" alt=""></a>
                </div>
                <div class="col d-flex">
                    <form action="{{route('carrinho.store', $produto['produto']->id)}} " method="post">
                        @csrf
                        <button type="submit" class="m-1  bi bi-plus btn btn-success"></button>
                    </form>
                    <form action="{{route('carrinho.destroy', $produto['produto']->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="m-1 bi bi-dash btn btn-danger"></button>
                    </form>
                </div>
            </div>
            @endforeach
             <div class="row border mt-3 align-items-center">
                <div class="col">
                    Valor Final: {{session('valortotal')??0}}
                </div>

                <div class="col-3">
                    <form action="">
                        <button class="btn btn-success m-1">Finalizar compra</button>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection
