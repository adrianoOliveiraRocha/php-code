<?php

namespace Helper;

class Pagination
{
  protected static $amplitude = 3;
  protected static $leftSide;
  protected static $rightSide;
  // how much products per page
  //The limit determine the number of pages
  private static $limit = 6;
  
  public function getAmplitude(): int
  {
    return Pagination::$amplitude;
  }

  public static function getGeneralSideSize(): int
  {
    return Pagination::$amplitude / 2;
  }

  public static function getLeftSide(): int 
  {
    return Pagination::getGeneralSideSize();
  }

  public static function getRightSide(): int
  {
    return (Pagination::$amplitude % 2 == 0 
    ? Pagination::getGeneralSideSize() -1 : Pagination::getGeneralSideSize());
  }

  public static function calculateSides(int $page, int $pagesNumber): array
  {
    /*if the width is equal to or less than the number of pages, 
    you don't need to do anything*/ 
    $left = Pagination::getLeftSide(); 
    $right = Pagination::getRightSide();

    $leftSpace = $page - 1;
    if($leftSpace < $left) {
      $right += $left - $leftSpace; // put the fold to the right
      $left = $leftSpace; // this is the space available
    }

    $rightSpace = $pagesNumber - $page;
    if($rightSpace < $right) {
      $left += $right - $rightSpace; // put the fold to the left
      $right = $rightSpace; // this is the space available
    }

    $arrayLetf = [];
    for($i = ($page - $left); $i < $page; $i++) {
      $arrayLetf[] = $i;
    }
    
    $arrayRight = [];
    for($i = ($page + 1); $i < (($page + 1) + $right); $i++) {
      $arrayRight[] = $i;
    }

    return ["left" => $arrayLetf, "right" => $arrayRight];

  }

  public static function getLimit(): int
	{
		return Pagination::$limit;
	}
  
  public static function getProductsPage($page) 
  {
    $limit = Pagination::getLimit();
    $offset = ($page * $limit) - $limit;    
    try {
      $connect = \Config\Connect::getInstance();
      $products = $connect->query("select * from product limit $limit offset $offset")->fetchAll();
		  return [true, $products];
    } catch (\PDOException $e) {
      return [false, $e->getMessage()];
    }
  }

  public function getPagesNumber()
  {
    $limit = Pagination::getLimit();
    $productsQuantity = Pagination::getProductsQuantity();
    return (int) $productsQuantity / $limit;
  }

  public function getProductsQuantity()
  {
    try {
      $connect = \Config\Connect::getInstance();
      $productsQuantity = $connect->query("select count(*) as quantity from product")->fetch();
		  return (int) $productsQuantity['quantity'];
    } catch (\PDOException $e) {
      throw $e;
    }
  }

  public static function getPrevious(int $page): array
  {
    $response = [];
    if($page > 1):
      $response['exists'] = true;
      $response['value'] = $page -1;
    else:
      $response['exists'] = false;
    endif;
    return $response;
  }

  public static function getNext(int $page, int $pagesNumber): array
  {
    $response = [];
    if($pagesNumber > $page):
      $response['exists'] = true;
      $response['value'] = $page + 1;
    else:
      $response['exists'] = false;
    endif;
    return $response;
  }

  public static function getLeftExtrapolated(int $initLeftSide): bool
  {
    return ($initLeftSide > 1 ? true : false);
  }

  public static function rightExtrapolated(int $pagesNumber, int $rightSide, int $page): bool
  {
    return !($pagesNumber - $rightSide == $page ? true : false);
  }

  public static function getOverNext(int $currentPage, int $pagesNumber): bool
  {
    return ($currentPage < $pagesNumber ? true : false);
  }
  
}