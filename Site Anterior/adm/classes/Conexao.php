<?php

class Conexao extends Config {

	
    public $con = "";  // Guarda a conex�o aberta
    public $query = "";  // Guarda query requisitada
    public $erro = "";  // Objeto da classe Erro
    public $bdSelecionado;

    function __construct() {
        $this->Conectar();
    }

     public function Conectar() {
        $this->con = mysql_connect(parent::getServidor(), parent::getUsuarioBd(), parent::getSenhaBd()) or $this->EscreverLog('Não pode selecionar o banco:', mysql_error());
        if ($this->con) {
            $this->bdSelecionado = mysql_select_db(parent::getBancoDados(), $this->con) or $this->EscreverLog('Não pode selecionar o banco:', mysql_error());
        }
    }

    public function EscreverLog($msg, $erro) {
        print $msg;
        $quebra = chr(13) . chr(10);
        $fp = fopen("log/" . date("j_n_Y") . ".txt", "a");
        fwrite($fp, $quebra . date("j/n/Y h:i:s A") . " - " . $erro);
        fclose($fp);
    }

    public function ExecutaQuery($query) {
        return mysql_query($query, $this->con);
    }

    public function LerTabela($query) {
        return mysql_query($query, $this->con);
    }

    public function AbrirArray($query) {
        return mysql_fetch_array(mysql_query($query, $this->con));
    }

    public function LerArray($result) {
        return mysql_fetch_array($result);
    }

    public function NumeroLinhas($rs) {
        return mysql_num_rows($rs);
    }

    public function Fechar() {
        mysql_close($this->con);
    }

}

?>