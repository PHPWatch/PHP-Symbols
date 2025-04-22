<?php

return array (
  'type' => 'class',
  'name' => 'finfo',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'finfo',
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
        'name' => 'finfo interface (php.net)',
        'url' => 'https://www.php.net/manual/class.finfo.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'finfo',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'FILEINFO_NONE',
        ),
        'magic_database' => 
        array (
          'position' => 1,
          'name' => 'magic_database',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
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
    'file' => 
    array (
      'name' => 'file',
      'class' => 'finfo',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'FILEINFO_NONE',
        ),
        'context' => 
        array (
          'position' => 2,
          'name' => 'context',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
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
    'buffer' => 
    array (
      'name' => 'buffer',
      'class' => 'finfo',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'FILEINFO_NONE',
        ),
        'context' => 
        array (
          'position' => 2,
          'name' => 'context',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
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
    'set_flags' => 
    array (
      'name' => 'set_flags',
      'class' => 'finfo',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
          'type' => 'int',
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
  ),
  'extension' => 'fileinfo',
  'toString' => 'Class [ <internal:fileinfo> class finfo ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [4] {
    Method [ <internal:fileinfo, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> int $flags = FILEINFO_NONE ]
        Parameter #1 [ <optional> ?string $magic_database = null ]
      }
    }

    Method [ <internal:fileinfo> public method file ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> int $flags = FILEINFO_NONE ]
        Parameter #2 [ <optional> $context = null ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:fileinfo> public method buffer ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> int $flags = FILEINFO_NONE ]
        Parameter #2 [ <optional> $context = null ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:fileinfo> public method set_flags ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $flags ]
      }
    }
  }
}
',
  'modifiers' => 0,
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
  'is_cloneable' => false,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
