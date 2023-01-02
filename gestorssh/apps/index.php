<!doctype html>
<html lang="pt-br">
    <head>
        <!-- META SECTION -->
        <title>APLICATIVOS EMPRESA</title>
        <meta name="title" content="EMPRESA 🚀 - Internet Ilimitada 5G">
        <meta name="description" content="EMPRESA VPN 🚀 - Internet ilimitada de alta qualidade."> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->

        <!-- Bootstrap Css -->
        <link href="./css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

        <!-- Icons Css -->
        <link href="./css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- App Css-->
        <link href="./css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Noty CSS -->
        <link rel="stylesheet" href="../../cdn.jsdelivr.net/gh/needim/noty%4077268c46/lib/noty.html">
        <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.html">

        <!-- SCRIPT -->
    </head>

    <body data-layout="horizontal" data-topbar="colored">

        <!-- Begin page -->
        

            <header id="page-topbar" style="background-image: url(../../scdn.x2br.co/images/hori-nav-bg.html)" >
                <div class="navbar-header" style="height: 150px;">
                    <input type="hidden" id="url_downs" value="release/index.html">
                    <input type="hidden" id="apps" value="release/index.html">
                    <div class="row text-center" style="display:contents;">
                        <div class="col-12">
                            <h1 class="display-4 text-white"><b>APLICATIVOS EMPRESA</h1>
                        </div>
                    </div>
                </div>
            </header>

            <!-- BEGIN: Content-->

            <div class="main-content mt-5">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box text-center">
                                    <h2 class="mb-0">NOSSOS APLICATIVOS</h2>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-3 col-xl-12">
                <!-- Dashboard Analytics end -->
                <?php
                if (isset($_GET["page"])) {
                    $page = $_GET["page"];
                    if ($page and file_exists("apps/" . $page . ".php")) {
                        include("apps/" . $page . ".php");
                    } else {
                        include("../apps/downloads.php");
                    }
                } else {
                    include("../apps/downloads.php");
                }
                ?>
	
    <!-- END: Content-->

            <!-- RODAPE -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2021 - <script> document.write(new Date().getFullYear())</script> EMPRESA 🚀© <b><a href="termos.php" target="_self"></i>Termos de uso</b></a>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Desenvolvido por <a href="https://t.me/smigolvip" target="_blank" class="text-reset font-weight-bold">EMPRESA 🚀</a>

                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FIM RODAPE -->
			
        </div>
    </body>
</html>





