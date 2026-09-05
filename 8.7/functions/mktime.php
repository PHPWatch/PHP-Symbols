<?php

return array (
  'type' => 'function',
  'name' => 'mktime',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mktime',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mktime function (php.net)',
        'url' => 'https://www.php.net/manual/function.mktime.php',
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
  'extension' => 'date',
  'toString' => 'Function [ <internal:date> function mktime ] {

  - Parameters [6] {
    Parameter #0 [ <required> int $hour ]
    Parameter #1 [ <optional> ?int $minute = null ]
    Parameter #2 [ <optional> ?int $second = null ]
    Parameter #3 [ <optional> ?int $month = null ]
    Parameter #4 [ <optional> ?int $day = null ]
    Parameter #5 [ <optional> ?int $year = null ]
  }
  - Return [ int|false ]
}
',
);
