	
<?php

function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}

$login = new Usuario();
$pagina = $_GET['pagina'];

?>
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
            <h2>Notícias</h2>
        </div>
        <div class="contentbox">

            <form action="#" method="post">
                <input type="hidden" id="id" name="id" value="" />
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

                <input type="submit" value="Alterar" class="btn" onClick="acao(4)" />
        </div>

    </div>

    <div class="headings altheading">
        <h2>Editar Notícias</h2>
    </div>
    <div class="contentbox"><form id="form" name="form">
            <form id="form" name="form">
                <table width="100%">
                    <thead>
                        <tr>
                            <th width="50%">Usuário</th>
                            <th width="50%">login</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $login->listar($pagina);
                        ?>

                    </tbody>
                </table>


                </div>
            </form>

    </div>