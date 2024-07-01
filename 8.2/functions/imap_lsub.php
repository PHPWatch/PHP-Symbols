<?php

return array (
  'type' => 'function',
  'name' => 'imap_lsub',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_lsub',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_lsub function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-lsub.php',
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
  'toString' => 'Function [ <internal:imap> function imap_lsub ] {

  - Parameters [3] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $reference ]
    Parameter #2 [ <required> string $pattern ]
  }
  - Return [ array|false ]
}
',
);
