<?php

return array (
  'type' => 'function',
  'name' => 'datefmt_create',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'datefmt_create',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'datefmt_create function (php.net)',
        'url' => 'https://www.php.net/manual/function.datefmt-create.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => true,
  ),
  'extension' => 'intl',
  'toString' => 'Function [ <internal:intl> function datefmt_create ] {

  - Parameters [6] {
    Parameter #0 [ <required> ?string $locale ]
    Parameter #1 [ <required> int $dateType ]
    Parameter #2 [ <required> int $timeType ]
    Parameter #3 [ <optional> $timezone = null ]
    Parameter #4 [ <optional> IntlCalendar|int|null $calendar = null ]
    Parameter #5 [ <optional> ?string $pattern = null ]
  }
  - Return [ ?IntlDateFormatter ]
}
',
);
