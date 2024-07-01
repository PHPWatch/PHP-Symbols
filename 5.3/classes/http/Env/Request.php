<?php

return array (
  'type' => 'class',
  'name' => 'http\\Env\\Request',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Env\\Request',
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
        'name' => 'http\\Env\\Request class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-env-request.php',
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
    'query' => 
    array (
      'name' => 'query',
      'class' => 'http\\Env\\Request',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'form' => 
    array (
      'name' => 'form',
      'class' => 'http\\Env\\Request',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'cookie' => 
    array (
      'name' => 'cookie',
      'class' => 'http\\Env\\Request',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'files' => 
    array (
      'name' => 'files',
      'class' => 'http\\Env\\Request',
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
      'class' => 'http\\Env\\Request',
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
    'getForm' => 
    array (
      'name' => 'getForm',
      'class' => 'http\\Env\\Request',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'defval' => 
        array (
          'position' => 2,
          'name' => 'defval',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'delete' => 
        array (
          'position' => 3,
          'name' => 'delete',
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
    'getQuery' => 
    array (
      'name' => 'getQuery',
      'class' => 'http\\Env\\Request',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'defval' => 
        array (
          'position' => 2,
          'name' => 'defval',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'delete' => 
        array (
          'position' => 3,
          'name' => 'delete',
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
    'getCookie' => 
    array (
      'name' => 'getCookie',
      'class' => 'http\\Env\\Request',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'defval' => 
        array (
          'position' => 2,
          'name' => 'defval',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'delete' => 
        array (
          'position' => 3,
          'name' => 'delete',
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
    'getFiles' => 
    array (
      'name' => 'getFiles',
      'class' => 'http\\Env\\Request',
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
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:http> <iterateable> class http\\Env\\Request extends http\\Message implements Traversable, Iterator, Serializable, Countable ] {

  - Constants [3] {
    Constant [ integer TYPE_NONE ] { 0 }
    Constant [ integer TYPE_REQUEST ] { 1 }
    Constant [ integer TYPE_RESPONSE ] { 2 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [13] {
    Property [ <default> protected $type ]
    Property [ <default> protected $body ]
    Property [ <default> protected $requestMethod ]
    Property [ <default> protected $requestUrl ]
    Property [ <default> protected $responseStatus ]
    Property [ <default> protected $responseCode ]
    Property [ <default> protected $httpVersion ]
    Property [ <default> protected $headers ]
    Property [ <default> protected $parentMessage ]
    Property [ <default> protected $query ]
    Property [ <default> protected $form ]
    Property [ <default> protected $cookie ]
    Property [ <default> protected $files ]
  }

  - Methods [46] {
    Method [ <internal:http, overwrites http\\Message, ctor> public method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method getForm ] {

      - Parameters [4] {
        Parameter #0 [ <optional> $name ]
        Parameter #1 [ <optional> $type ]
        Parameter #2 [ <optional> $defval ]
        Parameter #3 [ <optional> $delete ]
      }
    }

    Method [ <internal:http> public method getQuery ] {

      - Parameters [4] {
        Parameter #0 [ <optional> $name ]
        Parameter #1 [ <optional> $type ]
        Parameter #2 [ <optional> $defval ]
        Parameter #3 [ <optional> $delete ]
      }
    }

    Method [ <internal:http> public method getCookie ] {

      - Parameters [4] {
        Parameter #0 [ <optional> $name ]
        Parameter #1 [ <optional> $type ]
        Parameter #2 [ <optional> $defval ]
        Parameter #3 [ <optional> $delete ]
      }
    }

    Method [ <internal:http> public method getFiles ] {

      - Parameters [0] {
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
