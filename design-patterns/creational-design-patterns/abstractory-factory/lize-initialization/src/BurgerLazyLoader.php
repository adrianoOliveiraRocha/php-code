<?php
require_once('Burguer.php');

class BurgerLazyLoader {
  private static $instances = array();

  public static function getBurguer(bool $cheese, bool $chips): Burguer {
    
    if(!isset(self::$instances[$cheese . $chips])) {
      self::$instances[$cheese . $chips] = new Burguer($cheese, $chips);
    }

    return self::$instances[$cheese . $chips];
  }

  public static function getBurguerCount(): int {
    return count(self::instances);
  }

}