<?php

return array (
  'type' => 'function',
  'name' => 'curl_multi_info_read',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'curl_multi_info_read',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'curl_multi_info_read function (php.net)',
        'url' => 'https://www.php.net/manual/function.curl-multi-info-read.php',
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
  'extension' => 'curl',
  'toString' => 'Function [ <internal:curl> function curl_multi_info_read ] {

  - Parameters [2] {
    Parameter #0 [ <required> CurlMultiHandle $multi_handle ]
    Parameter #1 [ <optional> &$queued_messages = null ]
  }
  - Return [ array|false ]
}
',
);
