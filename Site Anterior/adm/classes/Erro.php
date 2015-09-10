<?php
	
	//**********************************************************
	//		Autor:_______Bruno kingma
	//		Data:________02/05/2011
	//		Versao:______1.0.0
	//		Classe responsável pelo tratamento do erros do sistema
	//*************************************************************
	
	class Erro
	{
		public function DispararMensagem($texto , $tipo)
		{
			switch($tipo)
			{
				case "1":
					?>
					<div id='message-red'>
						<table border='0' width='100%' cellpadding='0' cellspacing='0'>
						<tr>
							<td class='red-left'><?php echo $texto;?></a></td>
							<td class='red-right'><a class='close-red' onclick="$('#message-red').fadeOut('slow')"><img src='images/table/icon_close_red.gif'   alt='' /></a></td>
						</tr>
						</table>
					</div>	
					<?php
				break;
				case "2":
					?>
					<div id="message-green">
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td class="green-left"><?php echo $texto;?></a></td>
							<td class="green-right"><a class="close-green" onclick="$('#message-green').fadeOut('slow')"><img src="images/table/icon_close_green.gif" alt="" /></a></td>
						</tr>
						</table>
					</div>	
					<?php
				break;
			}
		
		}
	}

?>