<?php

return array (
  'type' => 'function',
  'name' => 'imap_fetchmime',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_fetchmime',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_fetchmime function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-fetchmime.php',
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
  'toString' => 'Function [ <internal:imap> function imap_fetchmime ] {

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
