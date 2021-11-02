<?php
	namespace Core\Config;

	use \PDO;
	
	class Conexion
	{
		private static $instance= array();
		
		private function __construct(){}

		private function __clone(){}
		
		public static function getConnect($dbGroup = 'default'){
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	
			$host = getEnt('database.'.$dbGroup.'.host');
			$database = getEnt('database.'.$dbGroup.'.name');
	
			$user = getEnt('database.'.$dbGroup.'.user');
			$pswd = getEnt('database.'.$dbGroup.'.pswd');
			
			if (!isset(self::$instance[$dbGroup])) {
				self::$instance[$dbGroup] = new PDO('mysql:host='.$host.';dbname='.$database, $user, $pswd, $pdo_options);
			}//Fin de validacion de instancia de conexion

			//Retornar la instancia de conexion
			return self::$instance[$dbGroup];
		}//Fin de getConnect
	}//Fin de la clase Conexion
?>