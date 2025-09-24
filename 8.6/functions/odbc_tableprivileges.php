<?php

return array (
  'type' => 'function',
  'name' => 'odbc_tableprivileges',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'odbc_tableprivileges',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc_tableprivileges function (php.net)',
        'url' => 'https://www.php.net/manual/function.odbc-tableprivileges.php',
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
  'toString' => 'Function [ <internal:odbc> function odbc_tableprivileges ] {

  - Parameters [4] {
    Parameter #0 [ <required> Odbc\\Connection $odbc ]
    Parameter #1 [ <required> ?string $catalog ]
    Parameter #2 [ <required> string $schema ]
    Parameter #3 [ <required> string $table ]
  }
  - Return [ Odbc\\Result|false ]
}
',
);
