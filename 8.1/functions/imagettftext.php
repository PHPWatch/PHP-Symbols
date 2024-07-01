<?php

return array (
  'type' => 'function',
  'name' => 'imagettftext',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imagettftext',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imagettftext function (php.net)',
        'url' => 'https://www.php.net/manual/function.imagettftext.php',
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
  'toString' => 'Function [ <internal:gd> function imagettftext ] {

  - Parameters [9] {
    Parameter #0 [ <required> GdImage $image ]
    Parameter #1 [ <required> float $size ]
    Parameter #2 [ <required> float $angle ]
    Parameter #3 [ <required> int $x ]
    Parameter #4 [ <required> int $y ]
    Parameter #5 [ <required> int $color ]
    Parameter #6 [ <required> string $font_filename ]
    Parameter #7 [ <required> string $text ]
    Parameter #8 [ <optional> array $options = [] ]
  }
  - Return [ array|false ]
}
',
);
