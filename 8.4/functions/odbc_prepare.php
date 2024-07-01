<?php

return array (
  'type' => 'function',
  'name' => 'odbc_prepare',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'odbc_prepare',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc_prepare function (php.net)',
        'url' => 'https://www.php.net/manual/function.odbc-prepare.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 
    \ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'odbc',
  'toString' => 'Function [ <internal:odbc> function odbc_prepare ] {

  - Parameters [2] {
    Parameter #0 [ <required> Odbc\\Connection $odbc ]
    Parameter #1 [ <required> string $query ]
  }
  - Return [ Odbc\\Result|false ]
}
',
);
