<?php

return array (
  'type' => 'function',
  'name' => 'snmp3_set',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'snmp3_set',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'snmp3_set function (php.net)',
        'url' => 'https://www.php.net/manual/function.snmp3-set.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => NULL,
  'extension' => 'snmp',
  'toString' => 'Function [ <internal:snmp> function snmp3_set ] {

  - Parameters [12] {
    Parameter #0 [ <required> $host ]
    Parameter #1 [ <required> $sec_name ]
    Parameter #2 [ <required> $sec_level ]
    Parameter #3 [ <required> $auth_protocol ]
    Parameter #4 [ <required> $auth_passphrase ]
    Parameter #5 [ <required> $priv_protocol ]
    Parameter #6 [ <required> $priv_passphrase ]
    Parameter #7 [ <required> $object_id ]
    Parameter #8 [ <required> $type ]
    Parameter #9 [ <required> $value ]
    Parameter #10 [ <optional> $timeout ]
    Parameter #11 [ <optional> $retries ]
  }
}
',
);
