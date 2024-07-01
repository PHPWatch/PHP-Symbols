<?php

return array (
  'type' => 'function',
  'name' => 'imap_listsubscribed',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_listsubscribed',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_listsubscribed function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-listsubscribed.php',
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
  'toString' => 'Function [ <internal:imap> function imap_listsubscribed ] {

  - Parameters [3] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $reference ]
    Parameter #2 [ <required> string $pattern ]
  }
  - Return [ array|false ]
}
',
);
