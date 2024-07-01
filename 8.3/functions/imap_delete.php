<?php

return array (
  'type' => 'function',
  'name' => 'imap_delete',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_delete',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_delete function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-delete.php',
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
    \ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'imap',
  'toString' => 'Function [ <internal:imap> function imap_delete ] {

  - Parameters [3] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $message_nums ]
    Parameter #2 [ <optional> int $flags = 0 ]
  }
  - Return [ true ]
}
',
);
