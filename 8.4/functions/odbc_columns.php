<?php

return array (
  'type' => 'function',
  'name' => 'odbc_columns',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'odbc_columns',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc_columns function (php.net)',
        'url' => 'https://www.php.net/manual/function.odbc-columns.php',
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
  'toString' => 'Function [ <internal:odbc> function odbc_columns ] {

  - Parameters [5] {
    Parameter #0 [ <required> Odbc\\Connection $odbc ]
    Parameter #1 [ <optional> ?string $catalog = null ]
    Parameter #2 [ <optional> ?string $schema = null ]
    Parameter #3 [ <optional> ?string $table = null ]
    Parameter #4 [ <optional> ?string $column = null ]
  }
  - Return [ Odbc\\Result|false ]
}
',
);
