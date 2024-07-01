<?php

return array (
  'type' => 'function',
  'name' => 'imap_sort',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_sort',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_sort function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-sort.php',
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
  'toString' => 'Function [ <internal:imap> function imap_sort ] {

  - Parameters [6] {
    Parameter #0 [ <required> $imap ]
    Parameter #1 [ <required> int $criteria ]
    Parameter #2 [ <required> bool $reverse ]
    Parameter #3 [ <optional> int $flags = 0 ]
    Parameter #4 [ <optional> ?string $search_criteria = null ]
    Parameter #5 [ <optional> ?string $charset = null ]
  }
  - Return [ array|false ]
}
',
);
