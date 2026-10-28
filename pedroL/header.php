<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Exu pedro</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .font-1 {
            color: #000 !important;
            font-weight: bolder;
        }
    </style>

    <style>
        .linhaUm {
            display: flex;
        }

        .noome {
            width: 40vw;
            margin-right: 10px;
        }

        .poop {
            width: 10vw;
        }

        .coont,
        .baand {
            width: calc(50vw + 10px);
        }

        .recadoBandeira {
            color: gray;
        }

        .submitB {
            background-color: lightblue;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: bold;
            border: 1px solid transparent;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .altrB {
            background-color: yellow;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: bold;
            border: 1px solid transparent;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .exclB {
            background-color: lightcoral;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: bold;
            border: 1px solid transparent;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }


        .resetB {
            background-color: lightcoral;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: bold;
            border: 1px solid transparent;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .tudoAlt {
            display: flex;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="https://jsdelivr.net" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
            Pedro Lucas
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto px-3 pb-2">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formulario.php">Formulário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listagem.php">Listagem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light btn-sm btn-block font-1 my-1" href="formulario-usuarios.php">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger btn-sm btn-block font-1 my-1">Sair</a>
                </li>
            </ul>
        </div>
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start pe-3 d-none d-sm-block">
            <div class="text-end">
                <a href="formLogin.php" class="btn btn-light me-2">
                    <span data-feather="log-in"></span>
                    Entrar
                </a>
                <a href="sair.php" class="btn btn-danger me-2">
                    <span data-feather="log-out"></span>
                    Sair
                </a>
            </div>
        </div>

    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky mt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="inicio.php">
                                <span data-feather="home"></span>
                                Início
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="formulario.php">
                                <span data-feather="file-text"></span>
                                Formulário
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="listagem.php">
                                <span data-feather="list"></span>
                                Listagem
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="pagProtegida.php">
                                <span data-feather="lock"></span>
                                Página Protegida
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="FormularioContinente.php">
                                <span data-feather="lock"></span>
                                Formulário de Continentes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="listagemContinente.php">
                                <span data-feather="lock"></span>
                                Listagem Continentes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="usuarios.php">
                                <span data-feather="lock"></span>
                                Usuários
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>