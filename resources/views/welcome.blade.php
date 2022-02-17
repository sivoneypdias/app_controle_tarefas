<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Controle de Tarefas</title>

        <!-- Styles https://www.w3schools.com/howto/howto_css_responsive_header.asp -->
        <style>
            * {box-sizing: border-box;}

            body { 
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .header {
                overflow: hidden;
                background-color: #f1f1f1;
                padding: 20px 10px;
            }

            .header a {
                float: left;
                color: black;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 18px; 
                line-height: 25px;
                border-radius: 4px;
            }

            .header a.logo {
                font-size: 25px;
                font-weight: bold;
            }

            .header a:hover {
                background-color: #ddd;
                color: black;
            }

            .header a.active {
                background-color: dodgerblue;
                color: white;
            }

            .header-right {
                float: right;
            }

            @media screen and (max-width: 500px) {
                .header a {
                    float: none;
                    display: block;
                    text-align: left;
                }
                
                .header-right {
                    float: none;
                }
            }
    </style>
</head>
    <body>
        <div class="header">
            <a href="{{ url('/') }}" class="logo">Controle de Tarefas</a>
            @if (Route::has('login'))
                <div class="header-right">
                    @auth
                        <a href="{{ url('/tarefa') }}" class="active">Tarefas</a>
                    @else
                        <a href="{{ route('login') }}" class="active">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>    

        <div style="padding-left:20px">
            <h1>Sobre</h1>
            <p>Projeto Controle de Tarefas do curso Desenvolvimento Web Avançado 2021 com PHP, Laravel e Vue.JS do professor Jorge Santana.</p>
            <p>App do curso desenvolvido por <a href="https://github.com/sivoneypdias">Sivoney Pinto</a></p>
        </div>

    </body>
</html>
