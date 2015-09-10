<?php

class Usuario extends Conexao {

    var $rs = "";  // Guarda recordset da tabela usuario
    var $rst = "";  // Guarda array dados

    function listarCliente() {

        $query = " SELECT * ";
        $query .= " FROM usuario WHERE permissao = 2";
        $dados = $this->LerTabela($query);

        while ($linha = mysql_fetch_array($dados)) {
            echo'<option value="' . $linha["idUsuario"] . '">' . $linha["nomeUsuario"] . '</option>';
        }
    }

    function listarClienteFoto($id) {

        $query = " SELECT * ";
        $query .= " FROM galeriaCliente WHERE idUsuario = " . $id;
        $dados = $this->LerTabela($query);

        while ($linha = mysql_fetch_array($dados)) {
            echo'<div>' . $linha["foto"] . '</div>';
        }
    }

    //Função que retorna true para usuario e senha valido e false para inválido
    function Login($u, $s) {
        $num = 0;

        $query = " SELECT loginUsuario, permissao, idUsuario";
        $query .= " FROM usuario";
        $query .= " WHERE senhaUsuario = '" . $s . "'";
        $num = $this->NumeroLinhas($this->LerTabela($query));

        $dados = $this->LerTabela($query);

        $linha = mysql_fetch_array($dados);

        if ($num == 0) {
            echo "<script>alert('Usuário ou senha inválido!')</script>";
            echo "<script>window.location = 'login.php';</script>";
        } else {
            session_start();
            $_SESSION['login'] = $linha['loginUsuario'];
            $_SESSION['senha'] = $s;
            $_SESSION['permissao'] = $linha['permissao'];
            $_SESSION['idUsuario'] = $linha['idUsuario'];
            echo "<script>window.location = 'index.php';</script>";
        }
    }

    function verifica() {


        session_start();

        if (!isset($_SESSION['login'])) {
            echo "<script>window.location = 'login.php';</script>";
        }
    }

    function ConsultaUmUsuario($id) {
        $query = " SELECT idUsuario, loginUsuario, nomeUsuario, senhaUsuario ";
        $query .= " FROM usuario";
        $query .= " WHERE idUsuario = " . $id;

        $dados = $this->LerTabela($query);

        return $linha = mysql_fetch_array($dados);
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

        $query = " SELECT count(idUsuario) numLinhas from usuario";
        $dados = $this->ExecutaQuery($query);
        $total = mysql_fetch_array($dados);

        $cont = 0;
        $query = " SELECT * ";
        $query .= " FROM usuario";
        $query .= " ORDER BY idUsuario DESC";
        $query .= " LIMIT " . $pag2 . "," . $pag3 . "";
        $dados = $this->LerTabela($query);

        while ($linha = mysql_fetch_array($dados)) {
            ?>

            <tr>
                <td align="center"><?php echo $linha['nomeUsuario']; ?></td>
                <td align="center"><?php echo $linha['loginUsuario']; ?></td>
                <td>
                    <a href="#" title="" onclick="alteraDadosUsuario('<?php echo $linha['idUsuario']; ?>')" ><img src="img/icons/icon_edit.png" alt="Edit" /></a>
                    <a href="#" title="" onclick="del('Usuario','<?php echo $linha['idUsuario']; ?> ', '<?php echo $linha['loginUsuario']; ?>')" ><img src="img/icons/icon_unapprove.png" alt="Delete" /></a>

                </td>


            </tr>
            <?php $cont++;
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
                    <li class="page"><a href="javascript:void(0)"   onclick="javascript:chamapagina('editarUsuario.php?pagina=<?php echo($i + 1) ?>')"><?php echo($i + 1) ?></a> </li>
                <?php } else { ?>
                    <li><a href="javascript:void(0)"   onclick="javascript:chamapagina('editarUsuario.php?pagina=<?php echo($i + 1) ?>')"><?php echo($i + 1) ?></a> </li>
                    <?php
                }
            }
            ?>
            <li class="text"><a href="#" title="">Next</a></li>
        </ul>

            <?php
        }

        function InserirUsuario($nome, $login, $senha, $email, $permissao) {
            $query = " INSERT INTO usuario";
            $query .= " (idUsuario, loginUsuario, nomeUsuario, senhaUsuario, emailUsuario, permissao ) VALUES";
            $query .= " ('','" . $nome . "', '" . $login . "', '" . $senha . "', '" . $email . "', '" . $permissao . "')";

            $result = $this->ExecutaQuery($query) or die(mysql_error());
            return $result;
        }

        function alteraDadosUsuario($id) {
            $query = "Select * From usuario WHERE idUsuario = " . $id;
            $result = $this->ExecutaQuery($query) or die(mysql_error());

            if ($this->NumeroLinhas($result) > 0) {
                $row = $this->LerArray($result);
                $res["result"] = 1;
                $res["senha"] = utf8_encode($row["senhaUsuario"]);
                $res["nome"] = utf8_encode($row["nomeUsuario"]);
                $res["login"] = utf8_encode($row["loginUsuario"]);
                $res["email"] = utf8_encode($row["emailUsuario"]);
                $res["id"] = utf8_encode($row["idUsuario"]);
                $res["permissao"] = utf8_encode($row["permissao"]);
            } else {
                $res["result"] = 0;
            }

            echo $str = json_encode($res);
        }

        function AlteraUsuario($nome, $login, $senha, $email, $id, $permissao) {
            $query = " UPDATE usuario";
            $query .= " SET loginUsuario = '" . $login . "', nomeUsuario = '" . $nome . "', senhaUsuario = '" . $senha . "' , emailUsuario = '" . $email . "', permissao = '" . $permissao . "'";
            $query .= " WHERE idUsuario = " . $id;
            $result = $this->ExecutaQuery($query);
            return $result;
        }

        function delete($id) {
            $query = " DELETE FROM usuario";
            $query .= " WHERE idUsuario = " . $id;
            $res["result"] = $this->ExecutaQuery($query);
            echo $str = json_encode($res);
        }

        function logout() {

            session_start();
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            session_destroy();
        }

    }

    