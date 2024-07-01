<?php

return array (
  'type' => 'class',
  'name' => 'MongoWriteBatch',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoWriteBatch',
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
        'name' => 'MongoWriteBatch class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongowritebatch.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'COMMAND_INSERT' => 1,
    'COMMAND_UPDATE' => 2,
    'COMMAND_DELETE' => 3,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoWriteBatch',
      'parameters' => 
      array (
        'collection' => 
        array (
          'position' => 0,
          'name' => 'collection',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'batch_type' => 
        array (
          'position' => 1,
          'name' => 'batch_type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'write_options' => 
        array (
          'position' => 2,
          'name' => 'write_options',
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
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
    ),
    'add' => 
    array (
      'name' => 'add',
      'class' => 'MongoWriteBatch',
      'parameters' => 
      array (
        'item' => 
        array (
          'position' => 0,
          'name' => 'item',
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
    'execute' => 
    array (
      'name' => 'execute',
      'class' => 'MongoWriteBatch',
      'parameters' => 
      array (
        'write_options' => 
        array (
          'position' => 0,
          'name' => 'write_options',
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
    'getItemCount' => 
    array (
      'name' => 'getItemCount',
      'class' => 'MongoWriteBatch',
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
    'getBatchInfo' => 
    array (
      'name' => 'getBatchInfo',
      'class' => 'MongoWriteBatch',
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
  'toString' => 'Class [ <internal:mongo> class MongoWriteBatch ] {

  - Constants [3] {
    Constant [ integer COMMAND_INSERT ] { 1 }
    Constant [ integer COMMAND_UPDATE ] { 2 }
    Constant [ integer COMMAND_DELETE ] { 3 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [5] {
    Method [ <internal:mongo, ctor> protected method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> MongoCollection $collection ]
        Parameter #1 [ <required> $batch_type ]
        Parameter #2 [ <optional> array $write_options ]
      }
    }

    Method [ <internal:mongo> public method add ] {

      - Parameters [1] {
        Parameter #0 [ <required> $item ]
      }
    }

    Method [ <internal:mongo> final public method execute ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array $write_options ]
      }
    }

    Method [ <internal:mongo> public method getItemCount ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> public method getBatchInfo ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
