<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Base title</title>

        <!-- Metas -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Robots -->
        <meta name="rating" content="General">
        <meta name="robots" content="noindex, nofollow">
        <meta name="revisit-after" content="1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="icon.png">

        <!-- carrega o css -->
        <link rel="stylesheet" type="text/css" href="public/resources/css/custom.css">

        <!-- css externo -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <!-- carrega os estilos  -->
        <style>
            .navbar-header .logo-header {
                margin-left: 15px;
                margin-top: 14px;
            }

            .navbar-header .logo-header img {
                height: 50px;
            }

            .wrapper {
                display: flex;
                flex-flow: row wrap;
                font-weight: bold;
                text-align: center;
            }

            .header {
                text-align: left;
                flex: 1 100%;
                height: 80px;
                z-index: 1;
            }

            .conteudo {
                text-align: left;
                height: calc(100vh - 80px);
                overflow: auto;
            }

            .aside-1 {
                flex: 1 60px;
            }

            @media all and (min-width: 800px) {
                .aside-1 {
                    order: 1;
                }

                .conteudo{
                    order: 2;
                    flex: 1 calc(100vw - 60px);
                }

                .aside-2 {
                    order: 3;
                }

                .footer  {
                    order: 4;
                }
            }

            body {
                padding: 0px;
                margin:0px;
                overflow: hidden;
            }

        </style>
    </head>

    <body>
        <div class="wrapper">
            <header class="header">
                <aside class="aside aside-1">
                    <!-- include HEADER.PHP -->
                </aside>
                <div class="navbar-header">
                    <div class="logo-header">
                        <a href="/"><img src="/web/media/img/logo-vanguarda-top.png" alt=""></a>
                    </div>
                </div>
            </header>

            <article class="conteudo col-md-12">
                <!-- include CONTEUDO.PHP -->
            </article>

            <!-- MODAIS -->
        </div>

        <footer class="footer bg-dark text-light">
            <p>Desenvolvido para avalição de LP3.</p>
        </footer>
    </body>
</html>

<!-- carrega o js  -->
<script src="public/resources/js/custom.js"></script>