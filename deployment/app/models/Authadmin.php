<?php

class Authadmin
{
  public static function authenticate($row)
  {
    $_SESSION['ADM'] = $row;
  }

  public static function logout()
  {
    if (isset($_SESSION['ADM'])) {
      unset($_SESSION['ADM']);
    }
  }

  public static function logged_in()
  {
    if (isset($_SESSION['ADM'])) {
      return true;
    }
    return false;
  }
}