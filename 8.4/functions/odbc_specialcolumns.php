<?php

return array (
  'type' => 'function',
  'name' => 'odbc_specialcolumns',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'odbc_specialcolumns',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc_specialcolumns function (php.net)',
        'url' => 'https://www.php.net/manual/function.odbc-specialcolumns.php',
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
  'toString' => 'Function [ <internal:odbc> function odbc_specialcolumns ] {

  - Parameters [7] {
    Parameter #0 [ <required> Odbc\\Connection $odbc ]
    Parameter #1 [ <required> int $type ]
    Parameter #2 [ <required> ?string $catalog ]
    Parameter #3 [ <required> string $schema ]
    Parameter #4 [ <required> string $table ]
    Parameter #5 [ <required> int $scope ]
    Parameter #6 [ <required> int $nullable ]
  }
  - Return [ Odbc\\Result|false ]
}
',
);
