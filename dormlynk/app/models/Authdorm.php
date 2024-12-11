<?php

class Authdorm
{
  public static function authenticate($row)
  {
    $_SESSION['DORM'] = $row;
  }

  public static function logout()
  {
    if (isset($_SESSION['DORM'])) {
      unset($_SESSION['DORM']);
    }
  }

  public static function logged_in()
  {
    if (isset($_SESSION['DORM'])) {
      return true;
    }
    return false;
  }
}