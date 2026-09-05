<?php

return array (
  'type' => 'class',
  'name' => 'Uri\\WhatWg\\UrlValidationError',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Uri\\WhatWg\\UrlValidationError',
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
        'name' => 'Uri\\WhatWg\\UrlValidationError interface (php.net)',
        'url' => 'https://www.php.net/manual/class.uri-whatwg-urlvalidationerror.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Uri\\WhatWg',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Uri\\WhatWg\\UrlValidationError',
      'parameters' => 
      array (
        'context' => 
        array (
          'position' => 0,
          'name' => 'context',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => 'Uri\\WhatWg\\UrlValidationErrorType',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'failure' => 
        array (
          'position' => 2,
          'name' => 'failure',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
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
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
    'context' => 
    array (
      'name' => 'context',
      'class' => 'Uri\\WhatWg\\UrlValidationError',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'type' => 
    array (
      'name' => 'type',
      'class' => 'Uri\\WhatWg\\UrlValidationError',
      'type' => 'Uri\\WhatWg\\UrlValidationErrorType',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'failure' => 
    array (
      'name' => 'failure',
      'class' => 'Uri\\WhatWg\\UrlValidationError',
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
  'extension' => 'uri',
  'toString' => 'Class [ <internal:uri> final readonly class Uri\\WhatWg\\UrlValidationError ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [3] {
    Property [ public protected(set) readonly string $context ]
    Property [ public protected(set) readonly Uri\\WhatWg\\UrlValidationErrorType $type ]
    Property [ public protected(set) readonly bool $failure ]
  }

  - Methods [1] {
    Method [ <internal:uri, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $context ]
        Parameter #1 [ <required> Uri\\WhatWg\\UrlValidationErrorType $type ]
        Parameter #2 [ <required> bool $failure ]
      }
    }
  }
}
',
  'modifiers' => 65568,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_instantiable' => true,
  'is_read_only' => true,
);
