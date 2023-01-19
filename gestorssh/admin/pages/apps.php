<style type="text/css">
.appcs {
	background-color: #639;
	border: solid 1px #FF3333;
	border-radius: 10px;
	height: 30px;
	color: #FFF;
}
.btapp {
	color: #333;
	background-color: #6C6;
	border: solid 1px #FF3333;
	border-radius: 10px;
	height: 30px;
}
#multiple-column-form .row .col-12 .card .card-header .card-title {
	color: #F03;
}
</style>
<section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">UPLOAD DE APPS</h4>
					<a class="text-bold-800 grey darken-2" href="../apps" target="_blank">CLICK AQUI PARA IR PARA A LOJA DE APPS</a></span>
                </div>
                <div class="card-body">
<center><p class="px-0"><b>AQUI FAZ UPLOAD DO APP 1.</b></p></center>
<div class="alert-info">						
</div>
<p> 
</p>     
<form method="post" enctype="multipart/form-data" action="recebeUpload.php">
       
	  <center><input name="arquivo" type="file" class="appcs" />
       <input type="submit" class="btapp" value="Salvar" /> </center><br/>
	   <p>
				</p>
    </form>
</div>
<center><p class="px-0"><b>AQUI FAZ UPLOAD DO APP 2.</b></p></center>
<div class="alert-info">						
</div>
<p> 
</p>     
<form method="post" enctype="multipart/form-data" action="recebeUpload2.php">
       
	  <center><input name="arquivo" type="file" class="appcs" />
       <input type="submit" class="btapp" value="Salvar" /> </center><br/>
	   <p>
				</p>		
    </form>
</br>	
<center><p class="px-0"><b>AQUI FAZ UPLOAD DO APP 3.</b></p></center>
<div class="alert-info">						
</div>
<p> 
</p>     
<form method="post" enctype="multipart/form-data" action="recebeUpload3.php">
       
	  <center><input name="arquivo" type="file" class="appcs" />
       <input type="submit" class="btapp" value="Salvar" /> </center><br/>
    </form>	
                </div>
            </div>
        </div>
    </div>	
</section>