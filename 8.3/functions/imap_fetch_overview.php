<?php

return array (
  'type' => 'function',
  'name' => 'imap_fetch_overview',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_fetch_overview',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_fetch_overview function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-fetch-overview.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionUnionType',
    'nullable' => false,
  ),
  'extension' => 'imap',
  'toString' => 'Function [ <internal:imap> function imap_fetch_overview ] {

  - Parameters [3] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $sequence ]
    Parameter #2 [ <optional> int $flags = 0 ]
  }
  - Return [ array|false ]
}
',
);
