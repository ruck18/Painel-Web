<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid); ?>

<head>
<body>
    <style>
      body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      
      background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
      background-size: 400% 400%;
      animation: gradientBG 5s ease infinite;
    }

    @keyframes gradientBG {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }
    </style>
</body>

</head>

    <center>
        <a href="homec.php"><img class="mt-5" src="<?= getConfig('logo') ?>" width="<?= getConfig('largura') ?>" height="<?= getConfig('altura') ?>"></a><br>
        Bem vindo(a) <b><?= getNickById($uid) ?></b>!<br>

                                                        </div>
                                                </div>
                                            </div>
                                        </div>

            <div class="card border-0 shadow">
          
                    </div>
      <div class="d-flex align-items-center justify-content-between border-bottom py-3">
                        <div>
                            <div class="h6 mb-0 d-flex align-items-center">
<h4 class="img src animate__animated animate__backInDown"	<center><p><img src="../assetsc/Chat.png" width="40%" height="40%"></p></h4>
                                <a href="update/<?= getData('pasta_att', $uid) ?>/config" download="config.json"><i class="fa-solid fa-download"></i> Baixar JSON</a>
                            </div>
                        </div>
                    </div>
                                             <div class="d-flex align-items-center justify-content-between border-bottom py-3"> 
                        <div>
                            <div class="h6 mb-0 d-flex align-items-center">
<h4 class="img src animate__animated animate__backInDown"	<center><p><img src="../assetsc/Chat.png" width="40%" height="40%"></p></h4>             
                    <a onclick="initDownload('href')" type="button" href="./apps/apk/app_s1.apk" download="app_s1"><i class="fa-solid fa-download"></i> Baixar Aplicativo</a>
    </div>
    </div>
    </div>
                    <div class="d-flex align-items-center justify-content-between border-bottom py-3"> 
                        <div>
                            <div class="h6 mb-0 d-flex align-items-center">
                                
                              <h4 class="img src animate__animated animate__backInDown"	<center><p><img src="../assetsc/Chat1.png" width="40%" height="40%"></p></h4>
                                <a href="/app.php"><i class="fa-solid fa-gear"></i> Configurações do app</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (getAdm($uid) == true) : ?>
                        <div class="d-flex align-items-center justify-content-between border-bottom py-3">
                            <div>
                                <div class="h6 mb-0 d-flex align-items-center">
                                    
                                   <h4 class="img src animate__animated animate__backInDown"	<center><p><img src="../assetsc/Chat2.png" width="40%" height="40%"></p></h4>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-config-site"><i class="fa-solid fa-gear"></i> Configurações do site</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="d-flex align-items-center justify-content-between border-bottom py-3">
                        <div>
                            <div class="h6 mb-0 d-flex align-items-center">
                                
                               <h4 class="img src animate__animated animate__backInDown"	<center><p><img src="../assetsc/Chat3.png" width="40%" height="40%"></p></h4>
                                <a href="/perfil.php"><i class="fa-solid fa-user"></i> Configurações de perfil</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (getAdm($uid) == true) : ?>
                        <div class="d-flex align-items-center justify-content-between border-bottom py-3">
                            <div>
                                <div class="h6 mb-0 d-flex align-items-center">
                                    
                                   <h4 class="img src animate__animated animate__backInDown" <p><img src="../assetsc/Chat4.png" width="40%" height="40%"></p></h4>
                                    <a href="/usuarios.php"><i class="fa-solid fa-users"></i> Gerenciar usuários </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                        <div>
                            <div class="h6 mb-0 d-flex align-items-center">
                                
                               <h4 class="img src animate__animated animate__backInDown"	<center><p><img src="../assetsc/Chat5.png" width="40%" height="40%"></p></h4>
                                <a href="?acao=sair"><i class="fa-solid fa-right-from-bracket"></i> Sair do site</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<br><br>
<?php

if ($acao == "sair") :

    $conn->query("DELETE FROM sessao WHERE id='$sid'");
    session_destroy();
    header("location: /");

endif;
?>

<?php
if (getAdm($uid) == true) : ?>
    <!------------------------------------------------------------------------------------>
    <!-- MODAL CONFIGURAÇÕES SITE -->
    <!------------------------------------------------------------------------------------>
    <div class="modal fade" id="modal-config-site" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">Configuracoes do site</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="editar.php?acao=site" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="">Logotipo</label>
                                <input type="text" name="logo" class="form-control" value="<?= getConfig('logo') ?>">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="">Largura</label>
                                <input type="text" name="largura" class="form-control" value="<?= getConfig('largura') ?>">
                            </div>
                            <div class="col">
                                <label for="">Altura</label>
                                <input type="text" name="altura" class="form-control" value="<?= getConfig('altura') ?>">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="">Link do site</label>
                                <input type="text" name="link" class="form-control" value="<?= getConfig('link') ?>">
                            </div>
                            <div class="col">
                                <label for="">Titulo do site</label>
                                <input type="text" name="titulo" class="form-control" value="<?= getConfig('titulo') ?>">
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="atualiza_site" style="color: white" class="btn btn-success">Editar</button></form>
                    <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
<?php 
endif; 
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/rodape.php"); ?>