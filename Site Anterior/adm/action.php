<?php

function __autoload($class_name) {
    require_once 'classes/' . $class_name . '.php';
}

header('Content-type: text/html; charset=utf-8');

if ($_POST['acao'] == "") {
    (string) $acao = $_GET['acao'];
} else {
    (string) $acao = $_POST['acao'];
}

(string) $autor = $_POST['autor'];
(string) $login = $_POST['clogin'];
(string) $senha = $_POST['cpassword'];
(string) $email = $_POST['email'];
(string) $titulo = $_POST['titulo'];
(string) $data = $_POST['data'];
(string) $msg = $_POST['textfield'];
(string) $nome = $_POST['nome'];
(string) $posicao = $_POST['posicao'];
(int) $id = $_POST['id'];
(int) $idNoticia = $_POST['idNoticia'];
(string) $ac = $_GET['ac'];
(int) $id2 = $_GET['id2'];
(string) $tabela = $_GET['tabela'];
$retorno = $_POST['retorno'];
$flag = $_POST['flag'];
$permissao = $_POST['permissao'];
$cat = $_GET['cat'];
$categoria = $_POST['categoria'];
$idGaleria = $_POST['idGaleria'];
$video = $_FILES['video']['tmp_name'];
$nomeVideo = $_FILES['video']['name'];

$name = $_FILES['photoimg']['name'];
$size = $_FILES['photoimg']['size'];
$foto = $_FILES['photoimg']['tmp_name'];



if ($ac == "alteraDadosUsuario") {
    $u = new Usuario();
    $u->alteraDadosUsuario($id2);
}

switch ($acao) {

    case 'login':

        $login = new Usuario();
        $login->Login($login, $senha);
        break;

    case 'logout':
        $login = new Usuario();
        $login->logout();
        break;

    case 'addUsuario':

        $u = new Usuario();
        $u->InserirUsuario($nome, $login, $senha, $email, $permissao);
        break;

    case 'alteraUsuario':

        $u = new Usuario();
        $u->AlteraUsuario($nome, $login, $senha, $email, $id, $permissao);
        break;

    case 'delUsuario':
        $u = new Usuario();
        $u->delete($id2);
        break;

    case 'delProf':
        $p = new Profissionais();
        $p->setId($id2);
        $p->delete();
        break;

    case 'listP':
        $p = new Profissionais();
        $p->list();
        break;

    case 'visualiza':
        $p = new Profissionais();
        $p->visualiza($id2);
        break;

    case 'alteraP':
        if ($name != "") {
            $c = new Canvas($foto);
            $c->redimensiona(400);
            $c->grava('upload/' . $name, 100);
            $c->redimensiona(180);
            $c->grava('upload/thumbs/' . $name, 100);
        }
        $p = new Profissionais();
        $p->setNome($nome);
        $p->setDesc($msg);
        $p->setId($id);
        if ($name != "") {
            $p->setImg($name);
        } else {
            $p->setImg('user.png');
        }
        $p->update();
        break;

    case 'addP':
        if ($name != "") {
            $c = new Canvas($foto);
            $c->redimensiona(400);
            $c->grava('upload/' . $name, 100);
            $c->redimensiona(180);
            $c->grava('upload/thumbs/' . $name, 100);
        }
        $p = new Profissionais();
        $p->setNome($nome);
        $p->setDesc($msg);
        if ($name != "") {
            $p->setImg($name);
        } else {
            $p->setImg('user.png');
        }
        $p->insert();
        break;



    case 'delNoticia':
        $p = new Noticia();
        $p->setIdNoticia($id2);
        $p->delete();
        break;

    case 'listP':
        $p = new Noticia();
        $p->list();
        break;

    case 'visualizaN':
        $p = new Noticia();
        $p->visualiza($id2);
        break;

    case 'alteraN':
        if ($name != "") {
            $c = new Canvas($foto);
            $c->redimensiona(400);
            $c->grava('upload/' . $name, 100);
            $c->redimensiona(80);
            $c->grava('upload/thumbs/' . $name, 100);
        }
        $p = new Noticia();
        $p->setTituloNoticia($titulo);
        $p->setTextoNoticia($msg);
        $p->setIdNoticia($id);
        $p->setDataNoticia($data);
        $p->setAutor($autor);
        if ($name != "") {
            $p->setFotoNoticias($name);
            $p->setThumbNoticia($name);
        } else {
            $p->setFotoNoticias('');
            $p->setThumbNoticia('');
        }
        $p->update();
        break;

    case 'addN':
        if ($name != "") {
            $c = new Canvas($foto);
            $c->redimensiona(400);
            $c->grava('upload/' . $name, 100);
            $c->redimensiona(80);
            $c->grava('upload/thumbs/' . $name, 100);
        }
        $p = new Noticia();
        $p->setTituloNoticia($titulo);
        $p->setTextoNoticia($msg);
        $p->setDataNoticia($data);
        $p->setAutor($autor);
        if ($name != "") {
            $p->setFotoNoticias($name);
            $p->setThumbNoticia($name);
        } else {
            $p->setFotoNoticias('');
            $p->setThumbNoticia('');
        }
        $p->insert();
        break;




    case 'delBanner':
        $p = new Banner();
        $p->setId($id2);
        $p->delete();
        break;

    case 'listB':
        $p = new Banner();
        $p->list();
        break;

    case 'visualizaB':
        $p = new Banner();
        $p->visualiza($id2);
        break;

    case 'alteraB':
        if ($name != "") {
            $c = new Canvas($foto);
            $c->redimensiona(400);
            $c->grava('upload/' . $name, 100);
            $c->redimensiona(180);
            $c->grava('upload/thumbs/' . $name, 100);
        }
        $p = new Banner();
        $p->setTitulo($titulo);
        $p->setTexto($msg);
        $p->setId($id);

        if ($name != "") {
            $p->setImagem($name);
        } else {
            $p->setImagem('');
        }
        $p->update();
        break;

    case 'addB':
        if ($name != "") {
            $c = new Canvas($foto);
            $c->redimensiona(400);
            $c->grava('upload/' . $name, 100);
            $c->redimensiona(180);
            $c->grava('upload/thumbs/' . $name, 100);
        }
        $p = new Banner();
        $p->setTitulo($titulo);
        $p->setTexto($msg);

        if ($name != "") {
            $p->setImagem($name);
        } else {
            $p->setImagem('');
        }
        $p->insert();
        break;
}
?>