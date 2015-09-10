 	
<?php

function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}

$login = new Usuario();
$pagina = $_GET['pagina'];
$login->verifica();
?>
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
        <h2>Itens menu</h2>
    </div>
    <div class="contentbox">
        <form action="#" method="post">
            <label for="textfield"><strong>Nome:</strong></label>
            <input type="text" id="nome" name="nome" class="inputbox" /><br />
            <span class="smltxt">(Esse campo é obrigatório)</span>
            <br /><br />
            <label for="textfield"><strong>Login:</strong></label>
            <input type="text" id="clogin" name="clogin" class="inputbox" /><br />
            <span class="smltxt">(Esse campo é obrigatório)</span>
            <br /><br />
            <label for="textfield"><strong>Email:</strong></label>
            <input type="text" id="email" name="email" class="inputbox" /><br />
            <br /><br />
            <label for="textfield"><strong>Senha:</strong></label>
            <input type="password" id="cpassword" name="cpassword" class="inputbox" /><br />
            <span class="smltxt">(Esse campo é obrigatório)</span>
            <br /><br />
            <label for="textfield"><strong>Permissão:</strong></label>
            <select id="permissao">
                <option value=0>Escolha uma permissão</option>
                <option value=1>Adm</option>
                <option value=2>Cliente</option>
            </select><br />
            <span class="smltxt">(Esse campo é obrigatório)</span>
            <br /><br />

            <input type="submit" value="gravar" class="btn" onClick="acao(3)" />
    </div>
</div>


<div style="clear:both;"></div>

<!-- Content Box Start -->