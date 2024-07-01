<?php

return array (
  'type' => 'function',
  'name' => 'intltz_get_display_name',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'intltz_get_display_name',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'intltz_get_display_name function (php.net)',
        'url' => 'https://www.php.net/manual/function.intltz-get-display-name.php',
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
  'extension' => 'intl',
  'toString' => 'Function [ <internal:intl> function intltz_get_display_name ] {

  - Parameters [4] {
    Parameter #0 [ <required> IntlTimeZone $timezone ]
    Parameter #1 [ <optional> bool $dst = false ]
    Parameter #2 [ <optional> int $style = IntlTimeZone::DISPLAY_LONG ]
    Parameter #3 [ <optional> ?string $locale = null ]
  }
  - Return [ string|false ]
}
',
);
