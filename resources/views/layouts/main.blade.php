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
    <style>
        
        body{
            font-family: 'Montserrat', sans-serif;
        }
        header{
            background-color: white;
        }
        #infoheader{
            background-color: #A5D6A7;
        }
        .btnMenu{
            color: rgb(0, 0, 0);
            list-style: none;
            background-color: #4CAF50;
            padding: 5px;
            transition-duration: .2s ;
            border-radius: var(--bs-border-radius) !important;
            box-shadow: var(--bs-box-shadow) !important;

        }
        .animar:hover {
            background-color: #77e37b!important;

        }
        #login{
            background-color:#4CAF50 ;
            position: absolute;
            left: 86vw;

        }
        #carrinho{
            background-color:#4CAF50 ;
            position: absolute;
            left: 90vw;

        }
        footer{
            background-color: #113913;
            color: white;
        }
        .linksfooter{
            color: white;
            text-decoration: none;
        }
        #filtros{
            height: auto;
            width: 250px;
            position: fixed;
            top: 40vh;
        }
    </style>
    @yield('style')
</head>
<body>
    <header class=" border shadow m-0 sticky-top">
        <div id="infoheader" class="text-center">
            <p class="fw-bold">Tudo para sua nutrição e saúde</p>
        </div>
        <div class="logo text-center">
            <a href="#"><img src="{{asset('imagens/layout/logo.png')}}" alt="logo" class="img-fluid" style="height: 100px;"></a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-3">
                    <input class="form-control rounded" placeholder="Busca" type="search" name="" id="">
                </div>
            </div>
        </div>

        <form action="" class="">
            <button id="login" type="submit" class="bi bi-person btn  animar"></button>
            <a id="carrinho" class="bi bi-cart btn animar" href=""></a>
        </form>

        <nav class="py-2 ">
            <ul class="d-flex justify-content-center gap-3 list-unstyled mb-0">
                <li ><a href="#" class="btnMenu text-decoration-none animar">Marcas</a></li>
                <li ><a href="#" class="btnMenu text-decoration-none animar">Wheys</a></li>
                <li ><a href="#" class="btnMenu text-decoration-none animar">Hipercalóricos</a></li>
                <li ><a href="#" class="btnMenu text-decoration-none animar">Creatinas</a></li>
            </ul>
        </nav>
    </header>


    <div id="filtros" class="border m-2 text-center " >
        <h6 class="fw-bold">Categorias</h6>
        <ul class="list-unstyled">
            <li>Coqueteleiras</li>
            <li>Pre treinos</li>
            <li>Emagrecedores</li>
            <li>Multivitaminas</li>
        </ul>
        <h6>Filtrar por preço</h6>
        <form action="" class="container">
            <div class="row">
                <div class="col">
                    <label for="de">DE</label>
                    <input class=" form-control" type="number" step="0.01" name="de" id="de">
                </div>
                <div class="col">
                    <label for="ate">ATÉ</label>
                    <input class="form-control" type="number" step="0.01" name="ate" id="ate">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <input class="form-control" type="submit" value="Filtrar">
                </div>
            </div>
        </form>
    </div>
    @yield('conteudo')


    <footer class=" fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>Aumentando sua performance com qualidade e confiança. Sua evolução começa aqui.</p>
                </div>
                <div class="col">
                    <ul>
                        <li class="list-unstyled"><a class="linksfooter" href=""> <i class="bi bi-instagram"></i> Instagram</a></li>
                        <li class="list-unstyled"><a class="linksfooter" href=""> <i class="bi bi-envelope"></i> example@gmail.com</a></li>
                        <li class="list-unstyled"><a class="linksfooter" href=""><i class="bi bi-whatsapp"></i>Whatsapp</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>