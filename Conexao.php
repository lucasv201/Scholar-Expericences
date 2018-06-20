<?php
class Conexao{
	private $con;
	public function getCon(){
		return $this->con;
	}
	public function setCon($data){
		$this->con = $data;
	}
	public function __construct(){
		try{
			// Endereço da Conexão
			$servidor = "ntectreinamentos.com.br";
			$usr = "ntect391_venanci";
			$pwd = "venancio2017";
			$bd = "ntect391_venancio";
			$this->setCon(new PDO("mysql:host=$servidor;dbname=$bd",$usr,$pwd));
			$this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // Erros em exceções
		}catch(PDOException $ex){
			echo "{$ex->getMessage()}";
		}	
	}
}
?>
