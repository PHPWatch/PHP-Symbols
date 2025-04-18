<?php

return array (
  'type' => 'class',
  'name' => 'DatePeriod',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DatePeriod',
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
        'name' => 'DatePeriod class (php.net)',
        'url' => 'https://www.php.net/manual/class.dateperiod.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
    0 => 'IteratorAggregate',
    1 => 'Traversable',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'DatePeriod',
      'parameters' => 
      array (
        'start' => 
        array (
          'position' => 0,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'interval' => 
        array (
          'position' => 1,
          'name' => 'interval',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 2,
          'name' => 'end',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 3,
          'name' => 'options',
          'type' => NULL,
          'is_optional' => true,
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
    'getStartDate' => 
    array (
      'name' => 'getStartDate',
      'class' => 'DatePeriod',
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
    'getEndDate' => 
    array (
      'name' => 'getEndDate',
      'class' => 'DatePeriod',
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
    'getDateInterval' => 
    array (
      'name' => 'getDateInterval',
      'class' => 'DatePeriod',
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
    'getRecurrences' => 
    array (
      'name' => 'getRecurrences',
      'class' => 'DatePeriod',
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'DatePeriod',
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
    '__set_state' => 
    array (
      'name' => '__set_state',
      'class' => 'DatePeriod',
      'parameters' => 
      array (
        'array' => 
        array (
          'position' => 0,
          'name' => 'array',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'DatePeriod',
      'parameters' => 
      array (
      ),
      'return_type' => 'Iterator',
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
  'extension' => 'date',
  'toString' => 'Class [ <internal:date> <iterateable> class DatePeriod implements IteratorAggregate, Traversable ] {

  - Constants [1] {
    Constant [ public int EXCLUDE_START_DATE ] { 1 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:date> static public method __set_state ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $array ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [7] {
    Method [ <internal:date, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <required> $start ]
        Parameter #1 [ <optional> $interval = <default> ]
        Parameter #2 [ <optional> $end = <default> ]
        Parameter #3 [ <optional> $options = <default> ]
      }
    }

    Method [ <internal:date> public method getStartDate ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> public method getEndDate ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> public method getDateInterval ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> public method getRecurrences ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date> public method __wakeup ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:date, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Iterator ]
    }
  }
}
',
);
