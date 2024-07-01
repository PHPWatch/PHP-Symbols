<?php

return array (
  'type' => 'class',
  'name' => 'http\\Env\\Response',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Env\\Response',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'http\\Env\\Response class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-env-response.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Traversable',
    1 => 'Iterator',
    2 => 'Serializable',
    3 => 'Countable',
  ),
  'constants' => 
  array (
    'TYPE_NONE' => 0,
    'TYPE_REQUEST' => 1,
    'TYPE_RESPONSE' => 2,
    'CONTENT_ENCODING_NONE' => 0,
    'CONTENT_ENCODING_GZIP' => 1,
    'CACHE_NO' => 0,
    'CACHE_HIT' => 1,
    'CACHE_MISS' => 2,
  ),
  'properties' => 
  array (
    'type' => 
    array (
      'name' => 'type',
      'class' => 'http\\Message',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'body' => 
    array (
      'name' => 'body',
      'class' => 'http\\Message',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'requestMethod' => 
    array (
      'name' => 'requestMethod',
      'class' => 'http\\Message',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'requestUrl' => 
    array (
      'name' => 'requestUrl',
      'class' => 'http\\Message',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'responseStatus' => 
    array (
      'name' => 'responseStatus',
      'class' => 'http\\Message',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'responseCode' => 
    array (
      'name' => 'responseCode',
      'class' => 'http\\Message',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'httpVersion' => 
    array (
      'name' => 'httpVersion',
      'class' => 'http\\Message',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'headers' => 
    array (
      'name' => 'headers',
      'class' => 'http\\Message',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'parentMessage' => 
    array (
      'name' => 'parentMessage',
      'class' => 'http\\Message',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'request' => 
    array (
      'name' => 'request',
      'class' => 'http\\Env\\Response',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'cookies' => 
    array (
      'name' => 'cookies',
      'class' => 'http\\Env\\Response',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'contentType' => 
    array (
      'name' => 'contentType',
      'class' => 'http\\Env\\Response',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'contentDisposition' => 
    array (
      'name' => 'contentDisposition',
      'class' => 'http\\Env\\Response',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'contentEncoding' => 
    array (
      'name' => 'contentEncoding',
      'class' => 'http\\Env\\Response',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'cacheControl' => 
    array (
      'name' => 'cacheControl',
      'class' => 'http\\Env\\Response',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'etag' => 
    array (
      'name' => 'etag',
      'class' => 'http\\Env\\Response',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'lastModified' => 
    array (
      'name' => 'lastModified',
      'class' => 'http\\Env\\Response',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'throttleDelay' => 
    array (
      'name' => 'throttleDelay',
      'class' => 'http\\Env\\Response',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'throttleChunk' => 
    array (
      'name' => 'throttleChunk',
      'class' => 'http\\Env\\Response',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__invoke' => 
    array (
      'name' => '__invoke',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'ob_string' => 
        array (
          'position' => 0,
          'name' => 'ob_string',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'ob_flags' => 
        array (
          'position' => 1,
          'name' => 'ob_flags',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setEnvRequest' => 
    array (
      'name' => 'setEnvRequest',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'env_request' => 
        array (
          'position' => 0,
          'name' => 'env_request',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setCookie' => 
    array (
      'name' => 'setCookie',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'cookie' => 
        array (
          'position' => 0,
          'name' => 'cookie',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setContentType' => 
    array (
      'name' => 'setContentType',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'content_type' => 
        array (
          'position' => 0,
          'name' => 'content_type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setContentDisposition' => 
    array (
      'name' => 'setContentDisposition',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'disposition_params' => 
        array (
          'position' => 0,
          'name' => 'disposition_params',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setContentEncoding' => 
    array (
      'name' => 'setContentEncoding',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'content_encoding' => 
        array (
          'position' => 0,
          'name' => 'content_encoding',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setCacheControl' => 
    array (
      'name' => 'setCacheControl',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'cache_control' => 
        array (
          'position' => 0,
          'name' => 'cache_control',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setLastModified' => 
    array (
      'name' => 'setLastModified',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'last_modified' => 
        array (
          'position' => 0,
          'name' => 'last_modified',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isCachedByLastModified' => 
    array (
      'name' => 'isCachedByLastModified',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'header_name' => 
        array (
          'position' => 0,
          'name' => 'header_name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setEtag' => 
    array (
      'name' => 'setEtag',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'etag' => 
        array (
          'position' => 0,
          'name' => 'etag',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isCachedByEtag' => 
    array (
      'name' => 'isCachedByEtag',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'header_name' => 
        array (
          'position' => 0,
          'name' => 'header_name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setThrottleRate' => 
    array (
      'name' => 'setThrottleRate',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'chunk_size' => 
        array (
          'position' => 0,
          'name' => 'chunk_size',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'delay' => 
        array (
          'position' => 1,
          'name' => 'delay',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'send' => 
    array (
      'name' => 'send',
      'class' => 'http\\Env\\Response',
      'parameters' => 
      array (
        'stream' => 
        array (
          'position' => 0,
          'name' => 'stream',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getBody' => 
    array (
      'name' => 'getBody',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setBody' => 
    array (
      'name' => 'setBody',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'body' => 
        array (
          'position' => 0,
          'name' => 'body',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addBody' => 
    array (
      'name' => 'addBody',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'body' => 
        array (
          'position' => 0,
          'name' => 'body',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getHeader' => 
    array (
      'name' => 'getHeader',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'header' => 
        array (
          'position' => 0,
          'name' => 'header',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'into_class' => 
        array (
          'position' => 1,
          'name' => 'into_class',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setHeader' => 
    array (
      'name' => 'setHeader',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'header' => 
        array (
          'position' => 0,
          'name' => 'header',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addHeader' => 
    array (
      'name' => 'addHeader',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'header' => 
        array (
          'position' => 0,
          'name' => 'header',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getHeaders' => 
    array (
      'name' => 'getHeaders',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setHeaders' => 
    array (
      'name' => 'setHeaders',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'headers' => 
        array (
          'position' => 0,
          'name' => 'headers',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addHeaders' => 
    array (
      'name' => 'addHeaders',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'headers' => 
        array (
          'position' => 0,
          'name' => 'headers',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'append' => 
        array (
          'position' => 1,
          'name' => 'append',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setType' => 
    array (
      'name' => 'setType',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getInfo' => 
    array (
      'name' => 'getInfo',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setInfo' => 
    array (
      'name' => 'setInfo',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'http_info' => 
        array (
          'position' => 0,
          'name' => 'http_info',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getResponseCode' => 
    array (
      'name' => 'getResponseCode',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setResponseCode' => 
    array (
      'name' => 'setResponseCode',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'response_code' => 
        array (
          'position' => 0,
          'name' => 'response_code',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'strict' => 
        array (
          'position' => 1,
          'name' => 'strict',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getResponseStatus' => 
    array (
      'name' => 'getResponseStatus',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setResponseStatus' => 
    array (
      'name' => 'setResponseStatus',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'response_status' => 
        array (
          'position' => 0,
          'name' => 'response_status',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getRequestMethod' => 
    array (
      'name' => 'getRequestMethod',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setRequestMethod' => 
    array (
      'name' => 'setRequestMethod',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'request_method' => 
        array (
          'position' => 0,
          'name' => 'request_method',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getRequestUrl' => 
    array (
      'name' => 'getRequestUrl',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setRequestUrl' => 
    array (
      'name' => 'setRequestUrl',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'url' => 
        array (
          'position' => 0,
          'name' => 'url',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getHttpVersion' => 
    array (
      'name' => 'getHttpVersion',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setHttpVersion' => 
    array (
      'name' => 'setHttpVersion',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'http_version' => 
        array (
          'position' => 0,
          'name' => 'http_version',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getParentMessage' => 
    array (
      'name' => 'getParentMessage',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toString' => 
    array (
      'name' => 'toString',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'include_parent' => 
        array (
          'position' => 0,
          'name' => 'include_parent',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toCallback' => 
    array (
      'name' => 'toCallback',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toStream' => 
    array (
      'name' => 'toStream',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'stream' => 
        array (
          'position' => 0,
          'name' => 'stream',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'count' => 
    array (
      'name' => 'count',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'serialize' => 
    array (
      'name' => 'serialize',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unserialize' => 
    array (
      'name' => 'unserialize',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'serialized' => 
        array (
          'position' => 0,
          'name' => 'serialized',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'current' => 
    array (
      'name' => 'current',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'key' => 
    array (
      'name' => 'key',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'next' => 
    array (
      'name' => 'next',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'detach' => 
    array (
      'name' => 'detach',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'prepend' => 
    array (
      'name' => 'prepend',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'message' => 
        array (
          'position' => 0,
          'name' => 'message',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'top' => 
        array (
          'position' => 1,
          'name' => 'top',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'reverse' => 
    array (
      'name' => 'reverse',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isMultipart' => 
    array (
      'name' => 'isMultipart',
      'class' => 'http\\Message',
      'parameters' => 
      array (
        'boundary' => 
        array (
          'position' => 0,
          'name' => 'boundary',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'splitMultipartBody' => 
    array (
      'name' => 'splitMultipartBody',
      'class' => 'http\\Message',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:http> <iterateable> class http\\Env\\Response extends http\\Message implements Traversable, Iterator, Serializable, Countable ] {

  - Constants [8] {
    Constant [ integer TYPE_NONE ] { 0 }
    Constant [ integer TYPE_REQUEST ] { 1 }
    Constant [ integer TYPE_RESPONSE ] { 2 }
    Constant [ integer CONTENT_ENCODING_NONE ] { 0 }
    Constant [ integer CONTENT_ENCODING_GZIP ] { 1 }
    Constant [ integer CACHE_NO ] { 0 }
    Constant [ integer CACHE_HIT ] { 1 }
    Constant [ integer CACHE_MISS ] { 2 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [19] {
    Property [ <default> protected $type ]
    Property [ <default> protected $body ]
    Property [ <default> protected $requestMethod ]
    Property [ <default> protected $requestUrl ]
    Property [ <default> protected $responseStatus ]
    Property [ <default> protected $responseCode ]
    Property [ <default> protected $httpVersion ]
    Property [ <default> protected $headers ]
    Property [ <default> protected $parentMessage ]
    Property [ <default> protected $request ]
    Property [ <default> protected $cookies ]
    Property [ <default> protected $contentType ]
    Property [ <default> protected $contentDisposition ]
    Property [ <default> protected $contentEncoding ]
    Property [ <default> protected $cacheControl ]
    Property [ <default> protected $etag ]
    Property [ <default> protected $lastModified ]
    Property [ <default> protected $throttleDelay ]
    Property [ <default> protected $throttleChunk ]
  }

  - Methods [55] {
    Method [ <internal:http, overwrites http\\Message, ctor> public method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method __invoke ] {

      - Parameters [2] {
        Parameter #0 [ <required> $ob_string ]
        Parameter #1 [ <optional> $ob_flags ]
      }
    }

    Method [ <internal:http> public method setEnvRequest ] {

      - Parameters [1] {
        Parameter #0 [ <required> http\\Message or NULL $env_request ]
      }
    }

    Method [ <internal:http> public method setCookie ] {

      - Parameters [1] {
        Parameter #0 [ <required> $cookie ]
      }
    }

    Method [ <internal:http> public method setContentType ] {

      - Parameters [1] {
        Parameter #0 [ <required> $content_type ]
      }
    }

    Method [ <internal:http> public method setContentDisposition ] {

      - Parameters [1] {
        Parameter #0 [ <required> array or NULL $disposition_params ]
      }
    }

    Method [ <internal:http> public method setContentEncoding ] {

      - Parameters [1] {
        Parameter #0 [ <required> $content_encoding ]
      }
    }

    Method [ <internal:http> public method setCacheControl ] {

      - Parameters [1] {
        Parameter #0 [ <required> $cache_control ]
      }
    }

    Method [ <internal:http> public method setLastModified ] {

      - Parameters [1] {
        Parameter #0 [ <required> $last_modified ]
      }
    }

    Method [ <internal:http> public method isCachedByLastModified ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $header_name ]
      }
    }

    Method [ <internal:http> public method setEtag ] {

      - Parameters [1] {
        Parameter #0 [ <required> $etag ]
      }
    }

    Method [ <internal:http> public method isCachedByEtag ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $header_name ]
      }
    }

    Method [ <internal:http> public method setThrottleRate ] {

      - Parameters [2] {
        Parameter #0 [ <required> $chunk_size ]
        Parameter #1 [ <optional> $delay ]
      }
    }

    Method [ <internal:http> public method send ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $stream ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getBody ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method setBody ] {

      - Parameters [1] {
        Parameter #0 [ <required> http\\Message\\Body $body ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method addBody ] {

      - Parameters [1] {
        Parameter #0 [ <required> http\\Message\\Body $body ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getHeader ] {

      - Parameters [2] {
        Parameter #0 [ <required> $header ]
        Parameter #1 [ <optional> $into_class ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method setHeader ] {

      - Parameters [2] {
        Parameter #0 [ <required> $header ]
        Parameter #1 [ <optional> $value ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method addHeader ] {

      - Parameters [2] {
        Parameter #0 [ <required> $header ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getHeaders ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method setHeaders ] {

      - Parameters [1] {
        Parameter #0 [ <required> array or NULL $headers ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method addHeaders ] {

      - Parameters [2] {
        Parameter #0 [ <required> array $headers ]
        Parameter #1 [ <optional> $append ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method setType ] {

      - Parameters [1] {
        Parameter #0 [ <required> $type ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getInfo ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method setInfo ] {

      - Parameters [1] {
        Parameter #0 [ <required> $http_info ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getResponseCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method setResponseCode ] {

      - Parameters [2] {
        Parameter #0 [ <required> $response_code ]
        Parameter #1 [ <optional> $strict ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getResponseStatus ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method setResponseStatus ] {

      - Parameters [1] {
        Parameter #0 [ <required> $response_status ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getRequestMethod ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method setRequestMethod ] {

      - Parameters [1] {
        Parameter #0 [ <required> $request_method ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getRequestUrl ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method setRequestUrl ] {

      - Parameters [1] {
        Parameter #0 [ <required> $url ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getHttpVersion ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method setHttpVersion ] {

      - Parameters [1] {
        Parameter #0 [ <required> $http_version ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method getParentMessage ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method toString ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $include_parent ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method toCallback ] {

      - Parameters [1] {
        Parameter #0 [ <required> $callback ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method toStream ] {

      - Parameters [1] {
        Parameter #0 [ <required> $stream ]
      }
    }

    Method [ <internal:http, inherits http\\Message, prototype Countable> public method count ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message, prototype Serializable> public method serialize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message, prototype Serializable> public method unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $serialized ]
      }
    }

    Method [ <internal:http, inherits http\\Message, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method __toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method detach ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method prepend ] {

      - Parameters [2] {
        Parameter #0 [ <required> http\\Message $message ]
        Parameter #1 [ <optional> $top ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method reverse ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Message> public method isMultipart ] {

      - Parameters [1] {
        Parameter #0 [ <optional> &$boundary ]
      }
    }

    Method [ <internal:http, inherits http\\Message> public method splitMultipartBody ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
