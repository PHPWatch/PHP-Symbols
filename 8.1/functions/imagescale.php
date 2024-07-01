<?php

return array (
  'type' => 'function',
  'name' => 'imagescale',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imagescale',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imagescale function (php.net)',
        'url' => 'https://www.php.net/manual/function.imagescale.php',
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
  'toString' => 'Function [ <internal:gd> function imagescale ] {

  - Parameters [4] {
    Parameter #0 [ <required> GdImage $image ]
    Parameter #1 [ <required> int $width ]
    Parameter #2 [ <optional> int $height = -1 ]
    Parameter #3 [ <optional> int $mode = IMG_BILINEAR_FIXED ]
  }
  - Return [ GdImage|false ]
}
',
);
