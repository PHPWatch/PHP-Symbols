<?php

return array (
  'type' => 'function',
  'name' => 'odbc_columnprivileges',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'odbc_columnprivileges',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc_columnprivileges function (php.net)',
        'url' => 'https://www.php.net/manual/function.odbc-columnprivileges.php',
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
  'toString' => 'Function [ <internal:odbc> function odbc_columnprivileges ] {

  - Parameters [5] {
    Parameter #0 [ <required> Odbc\\Connection $odbc ]
    Parameter #1 [ <required> ?string $catalog ]
    Parameter #2 [ <required> string $schema ]
    Parameter #3 [ <required> string $table ]
    Parameter #4 [ <required> string $column ]
  }
  - Return [ Odbc\\Result|false ]
}
',
);
