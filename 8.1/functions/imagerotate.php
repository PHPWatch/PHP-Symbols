<?php

return array (
  'type' => 'function',
  'name' => 'imagerotate',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imagerotate',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imagerotate function (php.net)',
        'url' => 'https://www.php.net/manual/function.imagerotate.php',
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
  'extension' => 'gd',
  'toString' => 'Function [ <internal:gd> function imagerotate ] {

  - Parameters [4] {
    Parameter #0 [ <required> GdImage $image ]
    Parameter #1 [ <required> float $angle ]
    Parameter #2 [ <required> int $background_color ]
    Parameter #3 [ <optional> bool $ignore_transparent = false ]
  }
  - Return [ GdImage|false ]
}
',
);
