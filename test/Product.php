<?php

include_once 'Connect.php';

/**
 * 
 */
class Product 
{
	private static $connect;

	public static function getAllProducts()
	{
		self::$connect = Connect::getInstance ();
		$response = self::$connect->query ( "select * from product" );
		$products = $response->fetchAll ( PDO::FETCH_ASSOC );
		self::$connect = null;
		return $products;
	}
}