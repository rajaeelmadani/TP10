<?php
    
    class PDOFactory
    {
        public static function getCn()
        {
			if (!isset($cn)) {
				$cn = new \PDO('mysql:host=localhost;dbname=SMI2020', 'root', 'hakima');
				$cn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			}
            return $cn;
        }
    }
