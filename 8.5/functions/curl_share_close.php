<?php

return array (
  'type' => 'function',
  'name' => 'curl_share_close',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'curl_share_close',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'curl_share_close function (php.net)',
        'url' => 'https://www.php.net/manual/function.curl-share-close.php',
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
  'extension' => 'curl',
  'toString' => 'Function [ <internal, deprecated:curl> function curl_share_close ] {

  - Parameters [1] {
    Parameter #0 [ <required> CurlShareHandle $share_handle ]
  }
  - Return [ void ]
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
          'since' => '8.5',
          'message' => 'as it has no effect since PHP 8.0',
        ),
      ),
    ),
  ),
);
