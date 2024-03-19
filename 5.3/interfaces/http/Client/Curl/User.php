<?php

return array (
  'type' => 'interface',
  'name' => 'http\\Client\\Curl\\User',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'http\\Client\\Curl\\User',
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
        'name' => 'http\\Client\\Curl\\User interface (php.net)',
        'url' => 'https://www.php.net/manual/class.http-client-curl-user.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'POLL_NONE' => 0,
    'POLL_IN' => 1,
    'POLL_OUT' => 2,
    'POLL_INOUT' => 3,
    'POLL_REMOVE' => 4,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'init' => 
    array (
      'name' => 'init',
      'class' => 'http\\Client\\Curl\\User',
      'parameters' => 
      array (
        'run' => 
        array (
          'position' => 0,
          'name' => 'run',
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
    'timer' => 
    array (
      'name' => 'timer',
      'class' => 'http\\Client\\Curl\\User',
      'parameters' => 
      array (
        'timeout_ms' => 
        array (
          'position' => 0,
          'name' => 'timeout_ms',
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
    'socket' => 
    array (
      'name' => 'socket',
      'class' => 'http\\Client\\Curl\\User',
      'parameters' => 
      array (
        'socket' => 
        array (
          'position' => 0,
          'name' => 'socket',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'action' => 
        array (
          'position' => 1,
          'name' => 'action',
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
    'once' => 
    array (
      'name' => 'once',
      'class' => 'http\\Client\\Curl\\User',
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
    'wait' => 
    array (
      'name' => 'wait',
      'class' => 'http\\Client\\Curl\\User',
      'parameters' => 
      array (
        'timeout_ms' => 
        array (
          'position' => 0,
          'name' => 'timeout_ms',
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
      'class' => 'http\\Client\\Curl\\User',
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
);
