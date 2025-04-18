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
        'name' => 'php_user_filter class (php.net)',
        'url' => 'https://www.php.net/manual/class.php_user_filter.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
    'filtername' => '',
    'params' => '',
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
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
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
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
      'type' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'closing' => 
        array (
          'position' => 3,
          'name' => 'closing',
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
    'onCreate' => 
    array (
      'name' => 'onCreate',
      'class' => 'php_user_filter',
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
    'onClose' => 
    array (
      'name' => 'onClose',
      'class' => 'php_user_filter',
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
  'extension' => 'standard',
  'toString' => 'Class [ <internal:standard> class php_user_filter ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ <default> public $filtername ]
    Property [ <default> public $params ]
  }

  - Methods [3] {
    Method [ <internal:standard> public method filter ] {

      - Parameters [4] {
        Parameter #0 [ <required> $in ]
        Parameter #1 [ <required> $out ]
        Parameter #2 [ <required> &$consumed ]
        Parameter #3 [ <required> $closing ]
      }
    }

    Method [ <internal:standard> public method onCreate ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:standard> public method onClose ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
