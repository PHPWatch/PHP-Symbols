<?php

return array (
  'type' => 'class',
  'name' => 'php_user_filter',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'php_user_filter',
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
        'name' => 'php_user_filter interface (php.net)',
        'url' => 'https://www.php.net/manual/class.php_user_filter.php',
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
    'filter' => 
    array (
      'name' => 'filter',
      'class' => 'php_user_filter',
      'parameters' => 
      array (
        'in' => 
        array (
          'position' => 0,
          'name' => 'in',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'out' => 
        array (
          'position' => 1,
          'name' => 'out',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'consumed' => 
        array (
          'position' => 2,
          'name' => 'consumed',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'closing' => 
        array (
          'position' => 3,
          'name' => 'closing',
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
    'onCreate' => 
    array (
      'name' => 'onCreate',
      'class' => 'php_user_filter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'onClose' => 
    array (
      'name' => 'onClose',
      'class' => 'php_user_filter',
      'parameters' => 
      array (
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
    'filtername' => 
    array (
      'name' => 'filtername',
      'class' => 'php_user_filter',
      'type' => 'string',
      'has_default_value' => true,
      'default_value' => '',
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'params' => 
    array (
      'name' => 'params',
      'class' => 'php_user_filter',
      'type' => 'mixed',
      'has_default_value' => true,
      'default_value' => '',
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'stream' => 
    array (
      'name' => 'stream',
      'class' => 'php_user_filter',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'standard',
  'toString' => 'Class [ <internal:standard> class php_user_filter ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [3] {
    Property [ public string $filtername = \'\' ]
    Property [ public mixed $params = \'\' ]
    Property [ public $stream = NULL ]
  }

  - Methods [3] {
    Method [ <internal:standard> public method filter ] {

      - Parameters [4] {
        Parameter #0 [ <required> $in ]
        Parameter #1 [ <required> $out ]
        Parameter #2 [ <required> &$consumed ]
        Parameter #3 [ <required> bool $closing ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:standard> public method onCreate ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:standard> public method onClose ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }
  }
}
',
  'modifiers' => 0,
  'defaultProperties' => 
  array (
    'filtername' => '',
    'params' => '',
    'stream' => NULL,
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
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
