<?php

return array (
  'type' => 'function',
  'name' => 'imap_bodystruct',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_bodystruct',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_bodystruct function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-bodystruct.php',
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
    \ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'imap',
  'toString' => 'Function [ <internal:imap> function imap_bodystruct ] {

  - Parameters [3] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> int $message_num ]
    Parameter #2 [ <required> string $section ]
  }
  - Return [ stdClass|false ]
}
',
);
