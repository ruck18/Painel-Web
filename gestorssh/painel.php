<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/loginc.php");
if (getLogged($sid) == true) {
	header("location: homec.php");
} else {
?>
	<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <center><a href="conecta.php"><img class="mt-2" src="<?= getConfig('logo') ?>" width="100%" height="100%"></a></center>
            
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">

                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>CONECTA4G</h3>
                            </a>
                            <h3>Login</h3> 
                        </div>
                        <?php
						if (isset($_SESSION['erro'])) : echo $_SESSION['erro'];
							session_destroy();
						endif; ?>
                        <form action="" method="POST" class="mt-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Usuário" name="login" autofocus required>
                            <label for="floatingInput">Usuário</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" placeholder="Senha" class="form-control" name="senha" required>
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
                            </div>
                        </div>
                        <button type="submit" name="btn_login" class="btn btn-primary py-3 w-100 mb-4">Entrar</button>
                    </div>
                </div>
            </div>
        </div>
	</section>
	</main>

<?php
}
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/rodape.php"); ?>
