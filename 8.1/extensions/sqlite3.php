<?php

return array (
  'type' => 'extension',
  'name' => 'sqlite3',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'sqlite3',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'sqlite3',
    )),
    'removed' => NULL,
    'version' => '8.1.32',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sqlite3 extension (php.net)',
        'url' => 'https://www.php.net/manual/book.sqlite3.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'SQLite3',
    1 => 'SQLite3Stmt',
    2 => 'SQLite3Result',
  ),
  'functions' => 
  array (
  ),
  'constants' => 
  array (
    'SQLITE3_ASSOC' => 1,
    'SQLITE3_NUM' => 2,
    'SQLITE3_BOTH' => 3,
    'SQLITE3_INTEGER' => 1,
    'SQLITE3_FLOAT' => 2,
    'SQLITE3_TEXT' => 3,
    'SQLITE3_BLOB' => 4,
    'SQLITE3_NULL' => 5,
    'SQLITE3_OPEN_READONLY' => 1,
    'SQLITE3_OPEN_READWRITE' => 2,
    'SQLITE3_OPEN_CREATE' => 4,
    'SQLITE3_DETERMINISTIC' => 2048,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'sqlite3.defensive' => '1',
    'sqlite3.extension_dir' => NULL,
  ),
);
