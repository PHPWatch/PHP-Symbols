<?php

return array (
  'type' => 'function',
  'name' => 'odbc_pconnect',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'odbc_pconnect',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc_pconnect function (php.net)',
        'url' => 'https://www.php.net/manual/function.odbc-pconnect.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => NULL,
  'extension' => 'odbc',
  'toString' => 'Function [ <internal:odbc> function odbc_pconnect ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $dsn ]
    Parameter #1 [ <required> string $user ]
    Parameter #2 [ <required> string $password ]
    Parameter #3 [ <optional> int $cursor_option = SQL_CUR_USE_DRIVER ]
  }
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'password' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
    ),
  ),
);
