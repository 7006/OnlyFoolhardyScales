<?php

namespace OnlyFoolhardyScales;

class App {
  public static function run() {
    $db = static::db();
    echo static::getDbVersion();
    echo static::getAuthorOf1984();
  }

  private static function db() {
    $dsn = getenv('ONLY_FOOLHARDY_SCALES_DATABASE_DSN');
    $db = new \PDO($dsn);
    return $db;
  }

  public static function getDbVersion () {
    $db = static::db();
    return $db->query('SELECT version()')->fetch()['version'];
  }
  
  public static function getAuthorOf1984 () {
    $db = static::db();
    $statement = $db->query("SELECT author FROM books_to_read WHERE title = '1984'");
    $statement->execute();
    $output = $statement->fetch();
    return $output['author'];
  }
}
