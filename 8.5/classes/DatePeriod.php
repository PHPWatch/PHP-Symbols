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
        'name' => 'DatePeriod interface (php.net)',
        'url' => 'https://www.php.net/manual/class.dateperiod.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'EXCLUDE_START_DATE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int EXCLUDE_START_DATE ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'INCLUDE_END_DATE' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int INCLUDE_END_DATE ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
  ),
  'methods' => 
  array (
    'createFromISO8601String' => 
    array (
      'name' => 'createFromISO8601String',
      'class' => 'DatePeriod',
      'parameters' => 
      array (
        'specification' => 
        array (
          'position' => 0,
          'name' => 'specification',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
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
    '__serialize' => 
    array (
      'name' => '__serialize',
      'class' => 'DatePeriod',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__unserialize' => 
    array (
      'name' => '__unserialize',
      'class' => 'DatePeriod',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
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
  'interfaces' => 
  array (
    0 => 'IteratorAggregate',
    1 => 'Traversable',
  ),
  'properties' => 
  array (
    'start' => 
    array (
      'name' => 'start',
      'class' => 'DatePeriod',
      'type' => '?DateTimeInterface',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'current' => 
    array (
      'name' => 'current',
      'class' => 'DatePeriod',
      'type' => '?DateTimeInterface',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'end' => 
    array (
      'name' => 'end',
      'class' => 'DatePeriod',
      'type' => '?DateTimeInterface',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'interval' => 
    array (
      'name' => 'interval',
      'class' => 'DatePeriod',
      'type' => '?DateInterval',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'recurrences' => 
    array (
      'name' => 'recurrences',
      'class' => 'DatePeriod',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'include_start_date' => 
    array (
      'name' => 'include_start_date',
      'class' => 'DatePeriod',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'include_end_date' => 
    array (
      'name' => 'include_end_date',
      'class' => 'DatePeriod',
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
  'extension' => 'date',
  'toString' => 'Class [ <internal:date> <iterateable> class DatePeriod implements IteratorAggregate, Traversable ] {

  - Constants [2] {
    Constant [ public int EXCLUDE_START_DATE ] { 1 }
    Constant [ public int INCLUDE_END_DATE ] { 2 }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:date> static public method createFromISO8601String ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $specification ]
        Parameter #1 [ <optional> int $options = 0 ]
      }
      - Return [ static ]
    }

    Method [ <internal:date> static public method __set_state ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $array ]
      }
      - Tentative return [ DatePeriod ]
    }
  }

  - Properties [7] {
    Property [ public virtual ?DateTimeInterface $start ]
    Property [ public virtual ?DateTimeInterface $current ]
    Property [ public virtual ?DateTimeInterface $end ]
    Property [ public virtual ?DateInterval $interval ]
    Property [ public virtual int $recurrences ]
    Property [ public virtual bool $include_start_date ]
    Property [ public virtual bool $include_end_date ]
  }

  - Methods [9] {
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
      - Tentative return [ DateTimeInterface ]
    }

    Method [ <internal:date> public method getEndDate ] {

      - Parameters [0] {
      }
      - Tentative return [ ?DateTimeInterface ]
    }

    Method [ <internal:date> public method getDateInterval ] {

      - Parameters [0] {
      }
      - Tentative return [ DateInterval ]
    }

    Method [ <internal:date> public method getRecurrences ] {

      - Parameters [0] {
      }
      - Tentative return [ ?int ]
    }

    Method [ <internal:date> public method __serialize ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:date> public method __unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:date> public method __wakeup ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:date, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Iterator ]
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
  'is_cloneable' => true,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
