<?php

return array (
  'type' => 'function',
  'name' => 'mb_split',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mb_split',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mb_split function (php.net)',
        'url' => 'https://www.php.net/manual/function.mb-split.php',
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
  'extension' => 'mbstring',
  'toString' => 'Function [ <internal, deprecated:mbstring> function mb_split ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $pattern ]
    Parameter #1 [ <required> string $string ]
    Parameter #2 [ <optional> int $limit = -1 ]
  }
  - Return [ array|false ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.6',
          'message' => 'because the underlying library is no longer maintained',
        ),
      ),
    ),
  ),
);
