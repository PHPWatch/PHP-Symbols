<?php

return array (
  'type' => 'class',
  'name' => 'Attribute',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Attribute',
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
        'name' => 'Attribute class (php.net)',
        'url' => 'https://www.php.net/manual/class.attribute.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'TARGET_CLASS' => 1,
    'TARGET_FUNCTION' => 2,
    'TARGET_METHOD' => 4,
    'TARGET_PROPERTY' => 8,
    'TARGET_CLASS_CONSTANT' => 16,
    'TARGET_PARAMETER' => 32,
    'TARGET_ALL' => 63,
    'IS_REPEATABLE' => 64,
  ),
  'properties' => 
  array (
    'flags' => 
    array (
      'name' => 'flags',
      'class' => 'Attribute',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Attribute',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 63,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Attribute::TARGET_ALL',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_read_only' => false,
);
