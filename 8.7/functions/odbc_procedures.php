<?php

return array (
  'type' => 'function',
  'name' => 'odbc_procedures',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'odbc_procedures',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc_procedures function (php.net)',
        'url' => 'https://www.php.net/manual/function.odbc-procedures.php',
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
  'toString' => 'Function [ <internal:odbc> function odbc_procedures ] {

  - Parameters [4] {
    Parameter #0 [ <required> Odbc\\Connection $odbc ]
    Parameter #1 [ <optional> ?string $catalog = null ]
    Parameter #2 [ <optional> ?string $schema = null ]
    Parameter #3 [ <optional> ?string $procedure = null ]
  }
  - Return [ Odbc\\Result|false ]
}
',
);
