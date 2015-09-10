<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Noticia
 *
 * @author Kingma
 */
class Noticia extends Conexao {

    public $tituloNoticia;
    public $textoNoticia;
    public $fotoNoticias;
    public $thumbNoticia;
    public $dataNoticia;
    public $idNoticia;
    public $autor;

    public function insert() {
        $query = "INSERT INTO `noticias` (`idNoticia`, `tituloNoticia`, `textoNoticia`, `fotoNoticias`, `thumbNoticia`, `dataNoticia`, `autor`) VALUES (NULL, '" . $this->getTituloNoticia() . "', '" . utf8_encode($this->getTextoNoticia()) . "', '" . utf8_encode($this->getFotoNoticias()) . "', '" . $this->getThumbNoticia() . "', '" . $this->getDataNoticia() . "', '" . $this->getAutor() . "');";
        $retorno = $this->ExecutaQuery($query);
        echo $retorno;
    }

    function visualiza($id) {
        $query = "Select * From noticias WHERE idNoticia = " . $id;
        $result = $this->ExecutaQuery($query) or die(mysql_error());

        if ($this->NumeroLinhas($result) > 0) {
            $row = $this->LerArray($result);
            $res["result"] = 1;
            $res["tituloNoticia"] = utf8_decode($row["tituloNoticia"]);
            $res["textoNoticia"] = utf8_decode($row["textoNoticia"]);
            $res["fotoNoticias"] = utf8_decode($row["fotoNoticias"]);
            $res["thumbNoticia"] = utf8_decode($row["thumbNoticia"]);
            $res["dataNoticia"] = utf8_decode($row["dataNoticia"]);
            $res["autor"] = utf8_decode($row["autor"]);
            $res["idNoticia"] = $row["idNoticia"];
        } else {
            $res["result"] = 0;
        }

        echo $str = json_encode($res);
    }

    public function update() {
        $query = "UPDATE  `noticias` SET  `tituloNoticia` =  '" . utf8_encode($this->getTituloNoticia()) . "',`textoNoticia` =  '" . utf8_encode($this->getTextoNoticia()) . "',`fotoNoticias` =  '" . $this->getFotoNoticias() . "' ,`thumbNoticia` =  '" . $this->getThumbNoticia() . "',`dataNoticia` =  '" . $this->getDataNoticia() . "', `autor` =  '" . $this->getAutor() . "' WHERE  `idNoticia` = " . $this->getIdNoticia();
        $retorno = $this->ExecutaQuery($query);
        echo $retorno;
    }

    public function delete() {
        $query = "DELETE FROM `noticias` WHERE `idNoticia` = " . $this->getIdNoticia();
        $res["result"] = $this->ExecutaQuery($query);
        echo $str = json_encode($res);
    }

    function listar($paginas) {
        if ($paginas == "") {
            $paginas = 1;
        }
        $pag = 10;

        if ($paginas == 1) {
            $pag2 = 0;
        } else {
            $pag2 = ($pag * $paginas) - 10;
        }
        $pag3 = $paginas * $pag;

        $query = " SELECT count(idNoticia) numLinhas from noticias";
        $dados = $this->ExecutaQuery($query);
        $total = mysql_fetch_array($dados);

        $cont = 0;
        $query = " SELECT * ";
        $query .= " FROM noticias";
        $query .= " ORDER BY idNoticia DESC";
        $query .= " LIMIT " . $pag2 . "," . $pag3 . "";
        $dados = $this->LerTabela($query);

        while ($linha = mysql_fetch_array($dados)) {
            ?>

            <tr>
                <td align="center"><?php echo utf8_decode($linha['tituloNoticia']); ?></td>

                <td>
                    <a href="#" title="" onclick="alteraDadosN('<?php echo $linha['idNoticia']; ?>')" ><img src="img/icons/icon_edit.png" alt="Edit" /></a>
                    <a href="#" title="" onclick="del('Noticia','<?php echo $linha['idNoticia']; ?> ', '<?php echo utf8_decode($linha['tituloNoticia']); ?>')" ><img src="img/icons/icon_unapprove.png" alt="Delete" /></a>

                </td>


            </tr>
            <?php
            $cont++;
        }
        ?>
        </tbody>
        </table>
        <?php $conta = 0; ?>

        <div class="extrabottom">
            <ul>
                <li><img src="img/icons/icon_edit.png" alt="Edit" /> Editar</li>
                <li><img src="img/icons/icon_unapprove.png" alt="Unapprove" /> Remover</li>
            </ul>

        </div>
        <ul class="pagination">
            <li class="text">Previous</li>

            <?php
            for ($i = 0; $i < ceil($total[0] / 10); $i++) {
                $conta++;
                if ($paginas == $conta) {
                    ?>
                    <li class="page"><a href="javascript:void(0)"   onclick="javascript:chamapagina('editarNoticia.php?pagina=<?php echo($i + 1) ?>')"><?php echo($i + 1) ?></a> </li>
                <?php } else { ?>
                    <li><a href="javascript:void(0)"   onclick="javascript:chamapagina('editarNoticia.php?pagina=<?php echo($i + 1) ?>')"><?php echo($i + 1) ?></a> </li>
                    <?php
                }
            }
            ?>
            <li class="text"><a href="#" title="">Next</a></li>
        </ul>

        <?php
    }

    function listarUma($id) {
        $query = "Select * From noticias WHERE idNoticia = " . $id;
        $result = $this->ExecutaQuery($query) or die(mysql_error());
        $row = $this->LerArray($result);

        echo'
             <div style="float: right; width: 530px; height: 600px; overflow:hidden padding:10px;">
             <div id="voltar" style=" cursor:pointer; float: right; width: auto; height: auto; padding:0px 6px 0px 6px; background: #0d3e67; color:#fff;"><b>Voltar</b></div>
             <span class="titulo">ARTIGO</span> 
             <hr>
             <div style="width: 250px; height:250px; paddind:5px; border:solid #dedede 1px; display:block; margin: 5px; vertical-align: text-top; float: left; overflow:hidden" class="gallery clearfix" ><a href="adm/upload/' . $row['fotoNoticias'] . '" rel="prettyPhoto"><img src="adm/upload/' . $row['fotoNoticias'] . '" width="250"/></a></div>
             <div class="titulo" style="font-size:13px;"><b>' . utf8_decode($row["tituloNoticia"]) . '</b></div>
             <div class="fsmall"><b>Autor:</b> ' . utf8_decode($row["autor"]) . ' <b> Data:</b> ' . $row["dataNoticia"] . '</div>
          ';
        echo utf8_decode($row["textoNoticia"]);
    }

    function listarArtigos($paginas) {
        if ($paginas == "") {
            $paginas = 1;
        }
        $pag = 6;

        if ($paginas == 1) {
            $pag2 = 0;
        } else {
            $pag2 = ($pag * $paginas) - 6;
        }


        $query = " SELECT count(idNoticia) numLinhas from noticias";
        $dados = $this->ExecutaQuery($query);
        $total = mysql_fetch_array($dados);

        $cont = 0;
        $query = " SELECT * ";
        $query .= " FROM noticias";
        $query .= " ORDER BY idNoticia DESC";
        $query .= " LIMIT " . $pag2 . "," . $pag . "";
        $dados = $this->LerTabela($query);
        $conta = 0;
        echo'<div style="float: right; width: 530px; height: 600px; overflow:hidden padding:10px;">
             <span class="titulo">ARTIGOS</span> 
             <hr>';
        while ($linha = mysql_fetch_array($dados)) {
            ?>
            <div style="width:525px; height: 90px; margin-bottom: 10px;  padding: 1px; float: left;">
                <div style="width: 80px; margin: 3px; height: 80px; border: solid 1px #dedede; padding: 1px; float: left;" >
                    <a href="<?php echo "adm/upload/" . $linha['fotoNoticias'] ?>" rel="prettyPhoto">
                        <img src="<?php echo "adm/upload/thumbs/" . $linha['thumbNoticia']; ?>" width="80" height="80"/>
                    </a>
                </div>
                <div  style="width: 425px; height: 80px; margin: 3px;  padding: 1px; float: left;">
                    <div  style="width: 423px; height: 20px;  padding: 1px; float: left; font-weight: bold; color:#0d3e67; font-size: 15px;">
            <?php echo substr(utf8_decode($linha['tituloNoticia']), 0, 55); ?>
                    </div>
                    <div  style="width: 423px; height: 53px; margin-top: 3px;  padding: 1px; float: left;">
                        <a href="javascript:void(0)" onclick="javascript:loadArtigo(<?php echo $linha['idNoticia']; ?>)"> <?php echo substr(utf8_decode($linha['textoNoticia']), 0, 200) . '<span style="color:#ff9f03;"> ... [+]</span>'; ?></a>
                    </div>
                </div>
            </div>

            <?php
            $cont++;
        }

        echo '<div style="width:150px; float:right;">';

        for ($i = 0; $i < ceil($total[0] / 6); $i++) {
            $conta++;
            if ($paginas == $conta) {
                ?><a href="javascript:void(0)" style="text-decoration: none; color: #fff;"   onclick="javascript:pagina('<?php echo($i + 1) ?>')">
                    <div  style="float: right;  color: #fff; font-weight: bold; margin-right: 2px; padding: 1px 6px 1px 6px; background:#ff9f03;"><?php echo($i + 1) ?> </div></a>
            <?php } else { ?>
                <a href="javascript:void(0)"  style="text-decoration: none; color: #fff;"    onclick="javascript:pagina('<?php echo($i + 1) ?>')">
                    <div style=" font-weight: bold; color: #fff; float: right;   margin-right: 2px; padding:1px 6px 1px 6px; background:#0d3d65; "><?php echo($i + 1) ?> </div></a>
                <?php
            }
        }
        echo'</div></div>';
    }

    function listarDicas($paginas) {
        if ($paginas == "") {
            $paginas = 1;
        }
        $pag = 3;

        if ($paginas == 1) {
            $pag2 = 0;
        } else {
            $pag2 = ($pag * $paginas) - 3;
        }


        $query = " SELECT count(idNoticia) numLinhas from noticias";
        $dados = $this->ExecutaQuery($query);
        $total = mysql_fetch_array($dados);

        $cont = 0;
        $query = " SELECT * ";
        $query .= " FROM noticias";
        $query .= " ORDER BY idNoticia DESC";
        $query .= " LIMIT " . $pag2 . "," . $pag . "";
        $dados = $this->LerTabela($query);
        $conta = 0;

        while ($linha = mysql_fetch_array($dados)) {
            ?>
            <div style="width:525px; height: 90px; margin-bottom: 10px;  padding: 1px; float: left;">
                <div style="width: 80px; margin: 3px; height: 80px; border: solid 1px #dedede; padding: 1px; float: left;" >
                    <a href="<?php echo "adm/upload/" . $linha['fotoNoticias'] ?>" rel="prettyPhoto">
                        <img src="<?php echo "adm/upload/thumbs/" . $linha['thumbNoticia']; ?>" width="80" height="80"/>
                    </a>
                </div>
                <div  style="width: 425px; height: 80px; margin: 3px;  padding: 1px; float: left;">
                    <div  style="width: 423px; height: 20px;  padding: 1px; float: left; font-weight: bold; color:#0d3e67; font-size: 15px;">
            <?php echo substr(utf8_decode($linha['tituloNoticia']), 0, 55); ?>
                    </div>
                    <div  style="width: 423px; height: 53px; margin-top: 3px;  padding: 1px; float: left;">
                        <a href="javascript:void(0)" onclick="javascript:loadArtigo(<?php echo $linha['idNoticia']; ?>)"> <?php echo substr(utf8_decode($linha['textoNoticia']), 0, 200) . '<span style="color:#ff9f03;"> ... [+]</span>'; ?></a>
                    </div>
                </div>
            </div>

            <?php
            $cont++;
        }



        for ($i = 0; $i < ceil($total[0] / 3); $i++) {
            $conta++;
            if ($paginas == $conta) {
                ?><a href="javascript:void(0)" style="text-decoration: none; color: #fff;"   onclick="javascript:pagina('<?php echo($i + 1) ?>')">
                    <div  style="float: right;  color: #fff; font-weight: bold; margin-right: 2px; padding: 1px 6px 1px 6px; background:#ff9f03;"><?php echo($i + 1) ?> </div></a>
            <?php } else { ?>
                <a href="javascript:void(0)"  style="text-decoration: none; color: #fff;"    onclick="javascript:pagina('<?php echo($i + 1) ?>')">
                    <div style=" font-weight: bold; color: #fff; float: right;   margin-right: 2px; padding:1px 6px 1px 6px; background:#0d3d65; "><?php echo($i + 1) ?> </div></a>
                <?php
            }
        }
    }

    public function getTituloNoticia() {
        return $this->tituloNoticia;
    }

    public function setTituloNoticia($tituloNoticia) {
        $this->tituloNoticia = $tituloNoticia;
    }

    public function getTextoNoticia() {
        return $this->textoNoticia;
    }

    public function setTextoNoticia($textoNoticia) {
        $this->textoNoticia = $textoNoticia;
    }

    public function getFotoNoticias() {
        return $this->fotoNoticias;
    }

    public function setFotoNoticias($fotoNoticias) {
        $this->fotoNoticias = $fotoNoticias;
    }

    public function getThumbNoticia() {
        return $this->thumbNoticia;
    }

    public function setThumbNoticia($thumbNoticia) {
        $this->thumbNoticia = $thumbNoticia;
    }

    public function getDataNoticia() {
        return $this->dataNoticia;
    }

    public function setDataNoticia($dataNoticia) {
        $this->dataNoticia = $dataNoticia;
    }

    public function getIdNoticia() {
        return $this->idNoticia;
    }

    public function setIdNoticia($idNoticia) {
        $this->idNoticia = $idNoticia;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

}
?>
