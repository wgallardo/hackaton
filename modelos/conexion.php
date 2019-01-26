<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=id8563646_bcn",
			            "id8563646_rootdb",
			            "Barcelona2019");

		$link->exec("set names utf8");

		return $link;

	}

}