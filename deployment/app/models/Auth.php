<?php

class Auth
{
  public static function authenticate($row)
  {
    $_SESSION['USER'] = $row;
  }

  public static function logout()
  {
    unset($_SESSION['USER']);
  }

  public static function logged_in()
  {
    return isset($_SESSION['USER']);
  }

  public static function user()
  {
    return $_SESSION['USER'] ?? null;
  }

  public static function is($role)
  {
    return isset($_SESSION['USER']) && $_SESSION['USER']->role === $role;
  }

  public static function role()
  {
    return $_SESSION['USER']->role ?? null;
  }
}
