<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    @yield('style')
</head>
<body>
    <header class=" shadow m-0 sticky-top pb-1">
        <div id="infoheader" class="text-center">
            <p class="fw-bold">Tudo para sua nutrição e saúde</p>
        </div>


        <div class="logo text-center">
            <a href="/"><img src="{{asset('imagens/layout/logo.png')}}" alt="logo" class="img-fluid" style="height: 100px;"></a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-3">
                    <form action="{{route('produtos.buscar')}}" method="get">
                        @csrf
                        <input class="form-control rounded" placeholder="Busca" type="search" name="busca" id="busca">
                    </form>
                </div>
            </div>
        </div>

        <form action="" class="">
            <button id="login" type="submit" class="bi bi-person btn  animar"></button>
            <a id="carrinhobtn" class="bi bi-cart btn animar" href="{{route('carrinho.index')}}"></a>
        </form>

        <nav class="py-2 ">
            <ul class="d-flex justify-content-center gap-3 list-unstyled mb-0">
                <li ><a href="/" class="btnMenu text-decoration-none animar">Home</a></li>
                <li ><a href="/marcas" class="btnMenu text-decoration-none animar">Marcas</a></li>
                <li ><a href="/wheys" class="btnMenu text-decoration-none animar">Wheys</a></li>
                <li ><a href="/hipercaloricos" class="btnMenu text-decoration-none animar">Hipercalóricos</a></li>
                <li ><a href="/creatinas" class="btnMenu text-decoration-none animar">Creatinas</a></li>
                <li><i id="btnVerFiltros" onclick="verfiltros()" class="animar btnMenu btnVerFiltros bi bi-arrow-down">Filtrar</i>
                    <div id="filtros" class=" m-2 text-center " >
                        <h6 class="fw-bold">Categorias</h6>
                        <ul class="list-unstyled ">
                            <li ><a class="linkFiltro" href="{{route('produtos.filtro', 'coqueteleiras')}}">Coqueteleiras</a></li>
                            <li ><a class="linkFiltro" href="{{route('produtos.filtro', 'pre-treinos')}}">Pre treinos</a></li>
                            <li ><a class="linkFiltro" href="{{route('produtos.filtro', 'emagrecimento')}}">Emagrecimento</a></li>
                            <li ><a class="linkFiltro" href="{{route('produtos.filtro', 'vitaminas')}}">Vitaminas</a></li>
                        </ul>
        
                        <form action="{{route('produtos.filtropreco')}}" method="get" class="container p-1">
                            @csrf
                            <h6>Filtrar por preço</h6>
                            <div class="row">
                                <div class="col">
                                    <label for="precoMin">DE</label>
                                    <input class=" form-control" type="number" step="0.01" name="precoMin" id="precoMin">
                                </div>
                                <div class="col">
                                    <label for="precoMax">ATÉ</label>
                                    <input class="form-control" type="number" step="0.01" name="precoMax" id="precoMax">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input class="form-control" type="submit" value="Filtrar">
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </header>



    
    @yield('conteudo')


    <footer class=" mt-auto p-2">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>Aumentando sua performance com qualidade e confiança. Sua evolução começa aqui.</p>
                </div>
                <div class="col">
                    <ul>
                        <li class="list-unstyled"><a class="linksfooter" href=""> <i class="bi bi-instagram"></i> Instagram</a></li>
                        <li class="list-unstyled"><a class="linksfooter" href=""> <i class="bi bi-envelope"></i> example@gmail.com</a></li>
                        <li class="list-unstyled"><a class="linksfooter" target="_blank" href="https://wa.me/559981587631?text=Gostaria%20de%20ver%20seu%20cat%C3%A1logo%20de%20suplementos
                        "><i class="bi bi-whatsapp"></i>Whatsapp</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function verfiltros(){
            let btnverfiltros = document.getElementById('btnVerFiltros');
            let filtros = document.getElementById('filtros')
            if(btnverfiltros.classList.contains('bi-arrow-down')){
                btnverfiltros.classList.replace('bi-arrow-down', 'bi-arrow-up')
                filtros.classList.add('border', 'shadow', 'm-0')
                filtros.style.maxHeight=filtros.scrollHeight + "px";
            }
            else{
                btnverfiltros.classList.replace('bi-arrow-up', 'bi-arrow-down')
                filtros.style.maxHeight=0;
                filtros.classList.remove('border', 'shadow', 'm-0')
            }
        }
    </script>
</body>
</html>