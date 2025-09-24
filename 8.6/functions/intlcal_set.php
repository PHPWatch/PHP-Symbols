<?php

return array (
  'type' => 'function',
  'name' => 'intlcal_set',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'intlcal_set',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'intlcal_set function (php.net)',
        'url' => 'https://www.php.net/manual/function.intlcal-set.php',
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
    'nullable' => false,
  ),
  'extension' => 'intl',
  'toString' => 'Function [ <internal, deprecated:intl> function intlcal_set ] {

  - Parameters [7] {
    Parameter #0 [ <required> IntlCalendar $calendar ]
    Parameter #1 [ <required> int $year ]
    Parameter #2 [ <required> int $month ]
    Parameter #3 [ <optional> int $dayOfMonth = <default> ]
    Parameter #4 [ <optional> int $hour = <default> ]
    Parameter #5 [ <optional> int $minute = <default> ]
    Parameter #6 [ <optional> int $second = <default> ]
  }
  - Return [ true ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.4',
          'message' => 'use IntlCalendar::set(), IntlCalendar::setDate(), or IntlCalendar::setDateTime() instead',
        ),
      ),
    ),
  ),
);
