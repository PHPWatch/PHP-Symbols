<?php

return array (
  'type' => 'function',
  'name' => 'odbc_gettypeinfo',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'odbc_gettypeinfo',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc_gettypeinfo function (php.net)',
        'url' => 'https://www.php.net/manual/function.odbc-gettypeinfo.php',
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
  'toString' => 'Function [ <internal:odbc> function odbc_gettypeinfo ] {

  - Parameters [2] {
    Parameter #0 [ <required> Odbc\\Connection $odbc ]
    Parameter #1 [ <optional> int $data_type = 0 ]
  }
  - Return [ Odbc\\Result|false ]
}
',
);
