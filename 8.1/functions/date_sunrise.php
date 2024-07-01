<?php

return array (
  'type' => 'function',
  'name' => 'date_sunrise',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'date_sunrise',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'date_sunrise function (php.net)',
        'url' => 'https://www.php.net/manual/function.date-sunrise.php',
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
    ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'date',
  'toString' => 'Function [ <internal, deprecated:date> function date_sunrise ] {

  - Parameters [6] {
    Parameter #0 [ <required> int $timestamp ]
    Parameter #1 [ <optional> int $returnFormat = SUNFUNCS_RET_STRING ]
    Parameter #2 [ <optional> ?float $latitude = null ]
    Parameter #3 [ <optional> ?float $longitude = null ]
    Parameter #4 [ <optional> ?float $zenith = null ]
    Parameter #5 [ <optional> ?float $utcOffset = null ]
  }
  - Return [ string|int|float|false ]
}
',
);
