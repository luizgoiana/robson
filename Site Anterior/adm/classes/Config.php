<?php
	
    //**********************************************************
	//		Autor:_______Bruno kingma
	//		Data:________02/05/2011
	//		Versao:______1.0.0
	//		Classe responsável pelos dados de configuracao do banco de dados
	//***********************************************************
		
	
	class Config
	{
		private  $servidor   = "mysql.santiagoadv.com.br";		// Servidor que cont�m o Banco de Dados MySQL.
		private  $bancoDados = "santiagoadv";		// Banco de Dados que ser� utilizado.
		private  $usuarioBd  = "santiagoadv";			// Usu�rio com acesso ao Banco de Dados.
		private  $senhaBd    = "123qweasd";	 			// Senha Banco de Dados	
		
		
		
                public function getServidor() {
                    return $this->servidor;
                }

                public function setServidor($servidor) {
                    $this->servidor = $servidor;
                }

                public function getBancoDados() {
                    return $this->bancoDados;
                }

                public function setBancoDados($bancoDados) {
                    $this->bancoDados = $bancoDados;
                }

                public function getUsuarioBd() {
                    return $this->usuarioBd;
                }

                public function setUsuarioBd($usuarioBd) {
                    $this->usuarioBd = $usuarioBd;
                }

                public function getSenhaBd() {
                    return $this->senhaBd;
                }

                public function setSenhaBd($senhaBd) {
                    $this->senhaBd = $senhaBd;
                }

	}
?>
