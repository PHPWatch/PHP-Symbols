<?php

return array (
  'type' => 'interface',
  'name' => 'Dom\\ParentNode',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'Dom\\ParentNode',
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
        'name' => 'Dom\\ParentNode interface (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-parentnode.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'append' => 
    array (
      'name' => 'append',
      'class' => 'Dom\\ParentNode',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'prepend' => 
    array (
      'name' => 'prepend',
      'class' => 'Dom\\ParentNode',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'replaceChildren' => 
    array (
      'name' => 'replaceChildren',
      'class' => 'Dom\\ParentNode',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'querySelector' => 
    array (
      'name' => 'querySelector',
      'class' => 'Dom\\ParentNode',
      'parameters' => 
      array (
        'selectors' => 
        array (
          'position' => 0,
          'name' => 'selectors',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?Dom\\Element',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'querySelectorAll' => 
    array (
      'name' => 'querySelectorAll',
      'class' => 'Dom\\ParentNode',
      'parameters' => 
      array (
        'selectors' => 
        array (
          'position' => 0,
          'name' => 'selectors',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\NodeList',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
);
