<?php

return array (
  'type' => 'function',
  'name' => 'imap_fetchstructure',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_fetchstructure',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_fetchstructure function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-fetchstructure.php',
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
  'toString' => 'Function [ <internal:imap> function imap_fetchstructure ] {

  - Parameters [3] {
    Parameter #0 [ <required> $imap ]
    Parameter #1 [ <required> int $message_num ]
    Parameter #2 [ <optional> int $flags = 0 ]
  }
  - Return [ stdClass|false ]
}
',
);
