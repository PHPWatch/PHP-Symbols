<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\WriteConcern',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\WriteConcern',
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
        'name' => 'MongoDB\\Driver\\WriteConcern class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-writeconcern.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'MAJORITY' => 'majority',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\WriteConcern',
      'parameters' => 
      array (
        'w' => 
        array (
          'position' => 0,
          'name' => 'w',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'wtimeout' => 
        array (
          'position' => 1,
          'name' => 'wtimeout',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'journal' => 
        array (
          'position' => 2,
          'name' => 'journal',
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
    'getW' => 
    array (
      'name' => 'getW',
      'class' => 'MongoDB\\Driver\\WriteConcern',
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
    'getWtimeout' => 
    array (
      'name' => 'getWtimeout',
      'class' => 'MongoDB\\Driver\\WriteConcern',
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
    'getJournal' => 
    array (
      'name' => 'getJournal',
      'class' => 'MongoDB\\Driver\\WriteConcern',
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
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\WriteConcern ] {

  - Constants [1] {
    Constant [ string MAJORITY ] { majority }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [4] {
    Method [ <internal:mongodb, ctor> final public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> $w ]
        Parameter #1 [ <optional> $wtimeout ]
        Parameter #2 [ <optional> $journal ]
      }
    }

    Method [ <internal:mongodb> final public method getW ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getWtimeout ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getJournal ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
