<?php

return array (
  'type' => 'function',
  'name' => 'imagecropauto',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imagecropauto',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imagecropauto function (php.net)',
        'url' => 'https://www.php.net/manual/function.imagecropauto.php',
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
  'extension' => 'gd',
  'toString' => 'Function [ <internal:gd> function imagecropauto ] {

  - Parameters [4] {
    Parameter #0 [ <required> GdImage $image ]
    Parameter #1 [ <optional> int $mode = IMG_CROP_DEFAULT ]
    Parameter #2 [ <optional> float $threshold = 0.5 ]
    Parameter #3 [ <optional> int $color = -1 ]
  }
  - Return [ GdImage|false ]
}
',
);
