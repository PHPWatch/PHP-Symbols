<?php

return array (
  'type' => 'class',
  'name' => 'MongoInsertBatch',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoInsertBatch',
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
        'name' => 'MongoInsertBatch class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongoinsertbatch.php',
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
      'class' => 'MongoInsertBatch',
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
        'write_options' => 
        array (
          'position' => 1,
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
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongo> class MongoInsertBatch extends MongoWriteBatch ] {

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
    Method [ <internal:mongo, overwrites MongoWriteBatch, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> MongoCollection $collection ]
        Parameter #1 [ <optional> array $write_options ]
      }
    }

    Method [ <internal:mongo, inherits MongoWriteBatch> public method add ] {

      - Parameters [1] {
        Parameter #0 [ <required> $item ]
      }
    }

    Method [ <internal:mongo, inherits MongoWriteBatch> final public method execute ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array $write_options ]
      }
    }

    Method [ <internal:mongo, inherits MongoWriteBatch> public method getItemCount ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoWriteBatch> public method getBatchInfo ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
