<?php

namespace OnlyFoolhardyScales;

class App {
  public static function run() {
    $db = static::db();
    echo $db->query('SELECT version()')->fetch()['version'];
  }

  private static function db() {
    $dsn = $_ENV['ONLY_FOOLHARDY_SCALES_DATABASE_DSN'];
    $db = new \PDO($dsn);
    return $db;
  }
}