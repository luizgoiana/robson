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


 
</script>

<!-- Alternative Content Box End -->
<div id="error" class="status error" style="display:none;">
    <p class="closestatus"><a href="#"  onclick="fade1()" title="Close">x</a></p>
    <p><img src="img/icons/icon_error.png" alt="Error" /><span>Erro!</span> ao inserir dados.</p>
</div>

<div id="true" class="status success" style="display:none;">
    <p class="closestatus"><a href="#" onclick="fade2()" title="Close">x</a></p>
    <p><img src="img/icons/icon_success.png" alt="Success" /><span>Success!</span> Dados inseridos com sucesso!</p>
</div>
<div  id="itens" class="contentcontainer" >
    <div class="headings alt">
        <h2>Inserir Artigo</h2>
    </div>
    <div class="contentbox">
        <form method="post" id="formP" enctype='multipart/form-data' action="action.php" >
            <input type="hidden" value="addN" id="acao"  name="acao"/>
            <label for="textfield"><strong>Título:</strong></label>
            <input type="text" id="titulo" name="titulo" class="inputbox" /><br />
            <span class="smltxt">(Esse campo é obrigatório)</span>
            <br /><br />
            <label for="textfield"><strong>Data:</strong></label>
            <input type="text" id="data" name="data" class="inputbox" /><br />
            <span class="smltxt">(Esse campo é obrigatório)</span>
            <br /><br />
            <label for="textfield"><strong>Autor:</strong></label>
            <input type="text" id="autor" name="autor" class="inputbox" maxlength="55"/><br />
            <span class="smltxt">(Esse campo é obrigatório)</span>
            <br /><br />

            <label for="textfield"><strong>Descrição:</strong></label>
            <textarea class="text-input textarea" id="wysiwyg" name="textfield" rows="10" cols="75"></textarea>

            <br />
            <span class="smltxt">(Esse campo é obrigatório)</span> <br /><br />
            <label for="textfield"><strong>Imagem:</strong></label>
            <input type="file" name="photoimg" id="photoimg" />
            <div id='preview' style="margin-top:20px; height:auto;"></div>
            <br />



            <br /><br />
            <div  style="margin-top:20px; height:60px;">
                <input type="button" value="gravar" class="btn" id="subp" name='subp' />
            </div>


        </form>   
    </div>
</div>


<div style="clear:both;"></div>

<!-- Content Box Start -->