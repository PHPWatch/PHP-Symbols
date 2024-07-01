<?php

return array (
  'type' => 'function',
  'name' => 'imap_getsubscribed',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_getsubscribed',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_getsubscribed function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-getsubscribed.php',
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
  'extension' => 'imap',
  'toString' => 'Function [ <internal:imap> function imap_getsubscribed ] {

  - Parameters [3] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $reference ]
    Parameter #2 [ <required> string $pattern ]
  }
  - Return [ array|false ]
}
',
);
