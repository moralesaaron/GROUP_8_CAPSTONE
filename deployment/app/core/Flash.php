<?php

class Flash
{
  public static function set($key, $message)
  {
    $_SESSION['FLASH'][$key] = $message;
  }

  public static function get($key)
  {
    if (!empty($_SESSION['FLASH'][$key])) {
      $message = $_SESSION['FLASH'][$key];
      unset($_SESSION['FLASH'][$key]);
      return $message;
    }
    return null;
  }
}
