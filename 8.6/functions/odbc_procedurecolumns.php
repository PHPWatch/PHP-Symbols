<?php

return array (
  'type' => 'function',
  'name' => 'odbc_procedurecolumns',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'odbc_procedurecolumns',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc_procedurecolumns function (php.net)',
        'url' => 'https://www.php.net/manual/function.odbc-procedurecolumns.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionUnionType',
    'nullable' => false,
  ),
  'extension' => 'odbc',
  'toString' => 'Function [ <internal:odbc> function odbc_procedurecolumns ] {

  - Parameters [5] {
    Parameter #0 [ <required> Odbc\\Connection $odbc ]
    Parameter #1 [ <optional> ?string $catalog = null ]
    Parameter #2 [ <optional> ?string $schema = null ]
    Parameter #3 [ <optional> ?string $procedure = null ]
    Parameter #4 [ <optional> ?string $column = null ]
  }
  - Return [ Odbc\\Result|false ]
}
',
);
