<?php

return array (
  'type' => 'function',
  'name' => 'imap_search',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_search',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_search function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-search.php',
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
  'toString' => 'Function [ <internal:imap> function imap_search ] {

  - Parameters [4] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $criteria ]
    Parameter #2 [ <optional> int $flags = SE_FREE ]
    Parameter #3 [ <optional> string $charset = "" ]
  }
  - Return [ array|false ]
}
',
);
