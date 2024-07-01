<?php

return array (
  'type' => 'function',
  'name' => 'dns_get_record',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'dns_get_record',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'dns_get_record function (php.net)',
        'url' => 'https://www.php.net/manual/function.dns-get-record.php',
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
  'extension' => 'standard',
  'toString' => 'Function [ <internal:standard> function dns_get_record ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $hostname ]
    Parameter #1 [ <optional> int $type = DNS_ANY ]
    Parameter #2 [ <optional> &$authoritative_name_servers = null ]
    Parameter #3 [ <optional> &$additional_records = null ]
    Parameter #4 [ <optional> bool $raw = false ]
  }
  - Return [ array|false ]
}
',
);
