<?php

return array (
  'type' => 'function',
  'name' => 'idn_to_ascii',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'idn_to_ascii',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'idn_to_ascii function (php.net)',
        'url' => 'https://www.php.net/manual/function.idn-to-ascii.php',
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
  'extension' => 'intl',
  'toString' => 'Function [ <internal:intl> function idn_to_ascii ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $domain ]
    Parameter #1 [ <optional> int $flags = IDNA_DEFAULT ]
    Parameter #2 [ <optional> int $variant = INTL_IDNA_VARIANT_UTS46 ]
    Parameter #3 [ <optional> &$idna_info = null ]
  }
  - Return [ string|false ]
}
',
);
