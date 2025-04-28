<?php

return array (
  'type' => 'function',
  'name' => 'grapheme_levenshtein',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'grapheme_levenshtein',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'grapheme_levenshtein function (php.net)',
        'url' => 'https://www.php.net/manual/function.grapheme-levenshtein.php',
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
  'extension' => 'intl',
  'toString' => 'Function [ <internal:intl> function grapheme_levenshtein ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $string1 ]
    Parameter #1 [ <required> string $string2 ]
    Parameter #2 [ <optional> int $insertion_cost = 1 ]
    Parameter #3 [ <optional> int $replacement_cost = 1 ]
    Parameter #4 [ <optional> int $deletion_cost = 1 ]
  }
  - Return [ int|false ]
}
',
);
