<?php

return array (
  'type' => 'function',
  'name' => 'numfmt_parse',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'numfmt_parse',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'numfmt_parse function (php.net)',
        'url' => 'https://www.php.net/manual/function.numfmt-parse.php',
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
  'extension' => 'intl',
  'toString' => 'Function [ <internal:intl> function numfmt_parse ] {

  - Parameters [4] {
    Parameter #0 [ <required> NumberFormatter $formatter ]
    Parameter #1 [ <required> string $string ]
    Parameter #2 [ <optional> int $type = NumberFormatter::TYPE_DOUBLE ]
    Parameter #3 [ <optional> &$offset = null ]
  }
  - Return [ int|float|false ]
}
',
);
