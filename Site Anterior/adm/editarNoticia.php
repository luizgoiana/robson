	
<?php
function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}

$p = new Noticia();
$pagina = $_GET['pagina'];

?>
<script>
    $("#subp").click(function(){
  

        var options = { 
            target:        '#output2',   // target element(s) to be updated with server response 
            beforeSubmit:  showRequest,  // pre-submit callback 
            success:       showResponse,  // post-submit callback 
            url:       'action.php'         // override for form's 'action' attribute 
        }; 
 

        $("#formP").ajaxSubmit(options); 
        $("#true").css("display","block"); 
        $("#formP").clearForm();
        $("#edit").fadeOut('slow',function(){ chamapagina('editarNoticia.php')});
       
     
    
 

    function showRequest(formData, jqForm, options) { 
        return true; 
    } 

    function showResponse(responseText, statusText, xhr, $form)  { 

        if(responseText==1){
            $("#true").css("display","block"); 
            $("#formP").clearForm();
        }else{
            $("#error").css("display","block"); 
            $("#formP").clearForm();
        }
    } 


        });    

	$(document).ready(function(){
			$("#data").mask("99/99/9999");
			});
 
</script>
<!-- Alternative Content Box Start -->
<div id="error" class="status error" style="display:none;">
    <p class="closestatus"><a href="#"  onclick="fade1()" title="Close">x</a></p>
    <p><img src="img/icons/icon_error.png" alt="Error" /><span>Erro!</span> ao apagar dados.</p>
</div>

<div id="true" class="status success" style="display:none;">
    <p class="closestatus"><a href="#" onclick="fade2()" title="Close">x</a></p>
    <p><img src="img/icons/icon_success.png" alt="Success" /><span>Success!</span> Dados apagados com sucesso!</p>
</div>

<div id="true2" class="status success" style="display:none;">
    <p class="closestatus"><a href="#" onclick="fade2()" title="Close">x</a></p>
    <p><img src="img/icons/icon_success.png" alt="Success" /><span>Success!</span> Dados alterados com sucesso!</p>
</div>

<div id="error2" class="status error" style="display:none;">
    <p class="closestatus"><a href="#"  onclick="fade1()" title="Close">x</a></p>
    <p><img src="img/icons/icon_error.png" alt="Error" /><span>Erro!</span> ao alterar dados.</p>
</div>
<div class="contentcontainer">
    <script>$("#edit").hide();</script>


    <div  id="edit" class="contentcontainer" >
        <div class="headings alt">
            <h2>Artigo</h2>
        </div>
        <div class="contentbox">

                <form method="post" id="formP" enctype='multipart/form-data' action="action.php" >
                <input type="hidden" id="id" name="id" value="" />
                <input type="hidden" value="alteraN" id="acao"  name="acao"/>
                <label for="textfield"><strong>Título:</strong></label>
                <input type="text" id="titulo" name="titulo" class="inputbox" maxlength="55"/><br />
                <span class="smltxt">(Esse campo é obrigatório)</span>
                <br /><br />
                    <label for="textfield"><strong>Data:</strong></label>
                <input type="text" id="data" name="data" class="inputbox" /><br />
                <span class="smltxt">(Esse campo é obrigatório)</span>
                <br /><br />
                    <label for="textfield"><strong>Autor:</strong></label>
                <input type="text" id="autor" name="autor" class="inputbox" /><br />
                <span class="smltxt">(Esse campo é obrigatório)</span>
                <br /><br />

                <label for="textfield"><strong>Texto:</strong></label>
                <textarea class="text-input textarea" id="wysiwyg" name="textfield" rows="10" cols="75"></textarea>

                <br />
                <span class="smltxt">(Esse campo é obrigatório)</span> <br /><br />
                <label for="textfield"><strong>Imagem:</strong></label>
                <input type="file" name="photoimg" id="photoimg" />
                <div id='preview' style="margin-top:20px; height:auto;"></div>
                <br />


                <input type="button" value="Alterar" class="btn" name="subp" id="subp"/>
        </div>

    </div>

    <div class="headings altheading">
        <h2>Editar Artigo</h2>
    </div>
    <div class="contentbox"><form id="form" name="form">
            <form id="form" name="form">
                <table width="100%">
                    <thead>
                        <tr >
                            <th width="92%">Nome</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $p->listar($pagina);
                        ?>

                    </tbody>
                </table>


                </div>
            </form>

    </div>