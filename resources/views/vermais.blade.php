@extends('layouts.main')
@section('title', 'Pagina principal')

@section('style')
<link rel="stylesheet" href="{{asset('css/vermais.css')}}">
@endsection

@section('conteudo')
    <main class="container mt-4 mb-5 ">
    <div class="row justify-content-center">

        <!-- Imagem -->
        <div class="col-12 col-md-5 text-center mb-4">
            <img class="img-fluid rounded shadow-sm produto-img" src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
        </div>

        <!-- Informações -->
        <div class="col-12 col-md-5">
            <h2 class="fw-bold mb-2 text-center">{{ $produto->nome }}</h2>
            <div>
                <a href=""><span class="badge bg-success mb-3 px-3 py-2">{{ $produto->marca->nome }}</span></a>
                <a href="{{route('produtos.filtro', $produto->categoria->nome)}}"><span class="badge bg-success mb-3 px-3 py-2">{{$produto->categoria->nome}}</span></a>
            </div>

            <div class="bg-light p-3 rounded mb-3 shadow-sm">
                <p class="mb-1 text-muted">À vista</p>
                <p class="h4 text-success fw-bold">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                <hr>
                <p class="mb-1 text-muted">Ou 2x de</p>
                <p class="h5 fw-semibold">
                    R$ {{ number_format(($produto->preco)/2, 2, ',', '.') }}
                </p>
            </div>

            <p class="texto-descricao">{{ $produto->descricao }}</p>

            <form action="{{route('carrinho.store', $produto->id)}}" method="post">
                @csrf
                <button class="btn btn-success w-100 py-2 mt-2 fw-bold">
                    adicionar ao carrinho 🚀
                </button>
            </form>
        </div>

    </div>
</main>


@endsection