<?php 
#Path.php
/*
 * Autor: Lucas Costa
 * Data: Abril 2020
 */

Class Path
{	
	# Normaliza o separador de diretório conforme o sistema operacional
	# @param $path : string
	# @return : string (type directory)
	public static function digest ( string $path = "" ): string 
	{
		$path = str_replace ( array ( '/', '\\' ), DIRECTORY_SEPARATOR, $path );
		return realpath ( $path );
	}

	# lista arquivos somente no diretório corrente
	# @param : straing (type directory)
	public static function list ( string $path ): array 
	{
		$files = [];
		$directory = dir ( self::digest ( $path ) );

		while ( $file = $directory->read ( ) ) {
			if ($file !== "." && $file !== "..") {
				array_push ( $files, $file );
			}
		};

		return $files;
	}

	# verifica se o diretório existe
	public static function check ( string $directory = "" ): boolean
	{
		return ( is_dir ( self::digest ( $directory ) ) ) ? true : false;
	}
}

#$out = Path::digest ( "d:/lc/" );
#$out = Path::check ( "d:/lc/" );
#$out = Path::list ( "d:/lc/" );
#var_dump ( $out );