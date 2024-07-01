<?php

return array (
  'type' => 'function',
  'name' => 'odbc_primarykeys',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'odbc_primarykeys',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc_primarykeys function (php.net)',
        'url' => 'https://www.php.net/manual/function.odbc-primarykeys.php',
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
  'toString' => 'Function [ <internal:odbc> function odbc_primarykeys ] {

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
