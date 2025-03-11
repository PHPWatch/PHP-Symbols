<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\BulkWrite',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\BulkWrite',
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
        'name' => 'MongoDB\\Driver\\BulkWrite class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-bulkwrite.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Countable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\BulkWrite',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
          'type' => '?array',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'MongoDB\\Driver\\BulkWrite',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'delete' => 
    array (
      'name' => 'delete',
      'class' => 'MongoDB\\Driver\\BulkWrite',
      'parameters' => 
      array (
        'filter' => 
        array (
          'position' => 0,
          'name' => 'filter',
          'type' => 'object|array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'deleteOptions' => 
        array (
          'position' => 1,
          'name' => 'deleteOptions',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
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
    'insert' => 
    array (
      'name' => 'insert',
      'class' => 'MongoDB\\Driver\\BulkWrite',
      'parameters' => 
      array (
        'document' => 
        array (
          'position' => 0,
          'name' => 'document',
          'type' => 'object|array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'update' => 
    array (
      'name' => 'update',
      'class' => 'MongoDB\\Driver\\BulkWrite',
      'parameters' => 
      array (
        'filter' => 
        array (
          'position' => 0,
          'name' => 'filter',
          'type' => 'object|array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'newObj' => 
        array (
          'position' => 1,
          'name' => 'newObj',
          'type' => 'object|array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'updateOptions' => 
        array (
          'position' => 2,
          'name' => 'updateOptions',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
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
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\BulkWrite implements Countable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [5] {
    Method [ <internal:mongodb, ctor> final public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?array $options = null ]
      }
    }

    Method [ <internal:mongodb, prototype Countable> public method count ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:mongodb> public method delete ] {

      - Parameters [2] {
        Parameter #0 [ <required> object|array $filter ]
        Parameter #1 [ <optional> ?array $deleteOptions = null ]
      }
      - Return [ void ]
    }

    Method [ <internal:mongodb> final public method insert ] {

      - Parameters [1] {
        Parameter #0 [ <required> object|array $document ]
      }
      - Return [ mixed ]
    }

    Method [ <internal:mongodb> public method update ] {

      - Parameters [3] {
        Parameter #0 [ <required> object|array $filter ]
        Parameter #1 [ <required> object|array $newObj ]
        Parameter #2 [ <optional> ?array $updateOptions = null ]
      }
      - Return [ void ]
    }
  }
}
',
);
