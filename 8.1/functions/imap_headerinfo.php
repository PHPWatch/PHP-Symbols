<?php

return array (
  'type' => 'function',
  'name' => 'imap_headerinfo',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_headerinfo',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_headerinfo function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-headerinfo.php',
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
  'toString' => 'Function [ <internal:imap> function imap_headerinfo ] {

  - Parameters [4] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> int $message_num ]
    Parameter #2 [ <optional> int $from_length = 0 ]
    Parameter #3 [ <optional> int $subject_length = 0 ]
  }
  - Return [ stdClass|false ]
}
',
);
