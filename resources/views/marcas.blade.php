@extends('layouts.main')
@section('title', 'Marcas')

@section('style')
<link rel="stylesheet" href="{{asset('css/produtosstyle.css')}}">
@endsection

@section('conteudo')
    <div class="container text-center">
        @foreach ($produtos as $marcaNome=>$lista )
            <div class=" alert alert-success text-center mt-2 mb-2">
                {{$marcaNome}}
            </div>
            <div class="row">
                @foreach ($lista as $produto )
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex gap-2">
                    <a class="verMais text-decoration-none" href="{{route('produtos.show', $produto->id)}}">
                        <div class="card produtoCard shadow-sm rounded-3 w-100 d-flex flex-column h-100">
                        <img src="{{$produto->imagem}}" alt="{{$produto->nome}}" 
                            class="card-img-top p-3"
                            style="height: 200px; object-fit: contain;">

                        <div class="card-body d-flex flex-column text-center">
                            <div class="nomeProduto ">
                                <p class="card-title fw-semibold">{{$produto->nome}}</p>
                            </div>
                            <div class="precoProduto gap-0 flex-nowrap">
                                <p class="apartir mb-0 flex-nowrap">A partir de:</p>
                                <p class="precoVista mb-0">R$ {{$produto->preco}}</p>
                                <p class="mb-0">ou</p>
                                <p class="precoParcelado mb-0">Em 2X de R$ {{number_format(($produto->preco)/2, 2, ',', '.')}} sem juros</p>
                            </div>
                        </div>
                        <div class="card-footer p-0 ">
                            <form action="{{route('carrinho.store', $produto->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btnaddCarrinho btn-sm btn btn-success">Adicionar ao carrinho</button>
                            </form>
                        </div>
                    </div>
                    </a>
                </div>
                    
                @endforeach
            </div>
        @endforeach
    </div>
@endsection