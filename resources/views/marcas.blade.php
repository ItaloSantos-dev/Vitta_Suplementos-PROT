@extends('layouts.main')
@section('title', 'Marcas')

@section('style')
<link rel="stylesheet" href="{{asset('css/produtosstyle.css')}}">
@endsection

@section('conteudo')
    <div class="container text-center">
        <h1 class="alert alert-success text-center mt-3">Nossas marcas</h1>
        <div class="row">
            @foreach ($marcas as $marca)
                <dic class="col gap-2">
                    <div class="card produtoCard shadow-sm rounded-3 w-100 d-flex flex-column h-100">
                        <a href="{{route('produtos.pormarcas', $marca->id)}}">
                            <div class="card-body">
                                <img src="{{$marca->imagem}}" alt="{{$marca->nome}}" 
                                class="card-img-top p-3"
                                style="height: 200px; object-fit: contain;">
                            </div>
                        </a>

                        <div class="card-footer p-0  ">
                            <span class="badge bg-success py-2 w-100">{{ $marca->nome }}</span>
                        </div>
                    </div>
                </dic>
            @endforeach
        </div>
    </div>
@endsection