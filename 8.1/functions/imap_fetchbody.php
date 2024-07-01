<?php

return array (
  'type' => 'function',
  'name' => 'imap_fetchbody',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_fetchbody',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_fetchbody function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-fetchbody.php',
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
  'toString' => 'Function [ <internal:imap> function imap_fetchbody ] {

  - Parameters [4] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> int $message_num ]
    Parameter #2 [ <required> string $section ]
    Parameter #3 [ <optional> int $flags = 0 ]
  }
  - Return [ string|false ]
}
',
);
