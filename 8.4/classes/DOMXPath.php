<?php

return array (
  'type' => 'class',
  'name' => 'DOMXPath',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DOMXPath',
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
        'name' => 'DOMXPath class (php.net)',
        'url' => 'https://www.php.net/manual/class.domxpath.php',
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
    'document' => 
    array (
      'name' => 'document',
      'class' => 'DOMXPath',
      'type' => 'DOM\\Document',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'registerNodeNamespaces' => 
    array (
      'name' => 'registerNodeNamespaces',
      'class' => 'DOMXPath',
      'type' => 'bool',
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
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'document' => 
        array (
          'position' => 0,
          'name' => 'document',
          'type' => 'DOM\\Document',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'registerNodeNS' => 
        array (
          'position' => 1,
          'name' => 'registerNodeNS',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'evaluate' => 
    array (
      'name' => 'evaluate',
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'expression' => 
        array (
          'position' => 0,
          'name' => 'expression',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contextNode' => 
        array (
          'position' => 1,
          'name' => 'contextNode',
          'type' => '?DOMNode',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'registerNodeNS' => 
        array (
          'position' => 2,
          'name' => 'registerNodeNS',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'query' => 
    array (
      'name' => 'query',
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'expression' => 
        array (
          'position' => 0,
          'name' => 'expression',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contextNode' => 
        array (
          'position' => 1,
          'name' => 'contextNode',
          'type' => '?DOMNode',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'registerNodeNS' => 
        array (
          'position' => 2,
          'name' => 'registerNodeNS',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'registerNamespace' => 
    array (
      'name' => 'registerNamespace',
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'namespace' => 
        array (
          'position' => 1,
          'name' => 'namespace',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'registerPhpFunctions' => 
    array (
      'name' => 'registerPhpFunctions',
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'restrict' => 
        array (
          'position' => 0,
          'name' => 'restrict',
          'type' => 'array|string|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'registerPhpFunctionNS' => 
    array (
      'name' => 'registerPhpFunctionNS',
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'namespaceURI' => 
        array (
          'position' => 0,
          'name' => 'namespaceURI',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'callable' => 
        array (
          'position' => 2,
          'name' => 'callable',
          'type' => 'callable',
          'is_optional' => false,
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
);
