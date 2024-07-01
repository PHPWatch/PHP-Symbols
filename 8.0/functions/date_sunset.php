<?php

return array (
  'type' => 'function',
  'name' => 'date_sunset',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'date_sunset',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'date_sunset function (php.net)',
        'url' => 'https://www.php.net/manual/function.date-sunset.php',
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
  'toString' => 'Function [ <internal:date> function date_sunset ] {

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
