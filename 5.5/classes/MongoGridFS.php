<?php

return array (
  'type' => 'class',
  'name' => 'MongoGridFS',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoGridFS',
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
        'name' => 'MongoGridFS class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongogridfs.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'ASCENDING' => 1,
    'DESCENDING' => -1,
  ),
  'properties' => 
  array (
    'w' => 
    array (
      'name' => 'w',
      'class' => 'MongoCollection',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'wtimeout' => 
    array (
      'name' => 'wtimeout',
      'class' => 'MongoCollection',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'chunks' => 
    array (
      'name' => 'chunks',
      'class' => 'MongoGridFS',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'filesName' => 
    array (
      'name' => 'filesName',
      'class' => 'MongoGridFS',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'chunksName' => 
    array (
      'name' => 'chunksName',
      'class' => 'MongoGridFS',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoGridFS',
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
    'drop' => 
    array (
      'name' => 'drop',
      'class' => 'MongoGridFS',
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
    'find' => 
    array (
      'name' => 'find',
      'class' => 'MongoGridFS',
      'parameters' => 
      array (
        'query' => 
        array (
          'position' => 0,
          'name' => 'query',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fields' => 
        array (
          'position' => 1,
          'name' => 'fields',
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
    'storeFile' => 
    array (
      'name' => 'storeFile',
      'class' => 'MongoGridFS',
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
    'storeBytes' => 
    array (
      'name' => 'storeBytes',
      'class' => 'MongoGridFS',
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
    'findOne' => 
    array (
      'name' => 'findOne',
      'class' => 'MongoGridFS',
      'parameters' => 
      array (
        'query' => 
        array (
          'position' => 0,
          'name' => 'query',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fields' => 
        array (
          'position' => 1,
          'name' => 'fields',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
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
    'remove' => 
    array (
      'name' => 'remove',
      'class' => 'MongoGridFS',
      'parameters' => 
      array (
        'filename_OR_fields_OR_object' => 
        array (
          'position' => 0,
          'name' => 'filename_OR_fields_OR_object',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
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
    'storeUpload' => 
    array (
      'name' => 'storeUpload',
      'class' => 'MongoGridFS',
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
    'delete' => 
    array (
      'name' => 'delete',
      'class' => 'MongoGridFS',
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
    'get' => 
    array (
      'name' => 'get',
      'class' => 'MongoGridFS',
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
    'put' => 
    array (
      'name' => 'put',
      'class' => 'MongoGridFS',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'MongoCollection',
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
    '__get' => 
    array (
      'name' => '__get',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'getName' => 
    array (
      'name' => 'getName',
      'class' => 'MongoCollection',
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
    'getSlaveOkay' => 
    array (
      'name' => 'getSlaveOkay',
      'class' => 'MongoCollection',
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
    'setSlaveOkay' => 
    array (
      'name' => 'setSlaveOkay',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'slave_okay' => 
        array (
          'position' => 0,
          'name' => 'slave_okay',
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
    'getReadPreference' => 
    array (
      'name' => 'getReadPreference',
      'class' => 'MongoCollection',
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
    'setReadPreference' => 
    array (
      'name' => 'setReadPreference',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'read_preference' => 
        array (
          'position' => 0,
          'name' => 'read_preference',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'tags' => 
        array (
          'position' => 1,
          'name' => 'tags',
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
    'getWriteConcern' => 
    array (
      'name' => 'getWriteConcern',
      'class' => 'MongoCollection',
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
    'setWriteConcern' => 
    array (
      'name' => 'setWriteConcern',
      'class' => 'MongoCollection',
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
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'validate' => 
    array (
      'name' => 'validate',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'validate' => 
        array (
          'position' => 0,
          'name' => 'validate',
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
    'insert' => 
    array (
      'name' => 'insert',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'array_of_fields_OR_object' => 
        array (
          'position' => 0,
          'name' => 'array_of_fields_OR_object',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
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
    'batchInsert' => 
    array (
      'name' => 'batchInsert',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'documents' => 
        array (
          'position' => 0,
          'name' => 'documents',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
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
    'update' => 
    array (
      'name' => 'update',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'old_array_of_fields_OR_object' => 
        array (
          'position' => 0,
          'name' => 'old_array_of_fields_OR_object',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'new_array_of_fields_OR_object' => 
        array (
          'position' => 1,
          'name' => 'new_array_of_fields_OR_object',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
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
    'findAndModify' => 
    array (
      'name' => 'findAndModify',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'query' => 
        array (
          'position' => 0,
          'name' => 'query',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'update' => 
        array (
          'position' => 1,
          'name' => 'update',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fields' => 
        array (
          'position' => 2,
          'name' => 'fields',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'createIndex' => 
    array (
      'name' => 'createIndex',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'array_of_keys' => 
        array (
          'position' => 0,
          'name' => 'array_of_keys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
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
    'ensureIndex' => 
    array (
      'name' => 'ensureIndex',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'key_OR_array_of_keys' => 
        array (
          'position' => 0,
          'name' => 'key_OR_array_of_keys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
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
    'deleteIndex' => 
    array (
      'name' => 'deleteIndex',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'string_OR_array_of_keys' => 
        array (
          'position' => 0,
          'name' => 'string_OR_array_of_keys',
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
    'deleteIndexes' => 
    array (
      'name' => 'deleteIndexes',
      'class' => 'MongoCollection',
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
    'getIndexInfo' => 
    array (
      'name' => 'getIndexInfo',
      'class' => 'MongoCollection',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'query_AS_array_of_fields_OR_object' => 
        array (
          'position' => 0,
          'name' => 'query_AS_array_of_fields_OR_object',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options_OR_limit' => 
        array (
          'position' => 1,
          'name' => 'options_OR_limit',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'skip' => 
        array (
          'position' => 2,
          'name' => 'skip',
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
    'save' => 
    array (
      'name' => 'save',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'array_of_fields_OR_object' => 
        array (
          'position' => 0,
          'name' => 'array_of_fields_OR_object',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
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
    'createDBRef' => 
    array (
      'name' => 'createDBRef',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'array_with_id_fields_OR_MongoID' => 
        array (
          'position' => 0,
          'name' => 'array_with_id_fields_OR_MongoID',
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
    'getDBRef' => 
    array (
      'name' => 'getDBRef',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'reference' => 
        array (
          'position' => 0,
          'name' => 'reference',
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
    'toIndexString' => 
    array (
      'name' => 'toIndexString',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'string_OR_array_of_keys' => 
        array (
          'position' => 0,
          'name' => 'string_OR_array_of_keys',
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
      'is_static' => true,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
    ),
    'group' => 
    array (
      'name' => 'group',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'keys_or_MongoCode' => 
        array (
          'position' => 0,
          'name' => 'keys_or_MongoCode',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'initial_value' => 
        array (
          'position' => 1,
          'name' => 'initial_value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'array_OR_MongoCode' => 
        array (
          'position' => 2,
          'name' => 'array_OR_MongoCode',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'distinct' => 
    array (
      'name' => 'distinct',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'query' => 
        array (
          'position' => 1,
          'name' => 'query',
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
    'aggregate' => 
    array (
      'name' => 'aggregate',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'pipeline' => 
        array (
          'position' => 0,
          'name' => 'pipeline',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'op' => 
        array (
          'position' => 1,
          'name' => 'op',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        '...' => 
        array (
          'position' => 2,
          'name' => '...',
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
    'aggregateCursor' => 
    array (
      'name' => 'aggregateCursor',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'pipeline' => 
        array (
          'position' => 0,
          'name' => 'pipeline',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
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
    'parallelCollectionScan' => 
    array (
      'name' => 'parallelCollectionScan',
      'class' => 'MongoCollection',
      'parameters' => 
      array (
        'num_cursors' => 
        array (
          'position' => 0,
          'name' => 'num_cursors',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongo> class MongoGridFS extends MongoCollection ] {

  - Constants [2] {
    Constant [ integer ASCENDING ] { 1 }
    Constant [ integer DESCENDING ] { -1 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal, deprecated:mongo, inherits MongoCollection> static protected method toIndexString ] {

      - Parameters [1] {
        Parameter #0 [ <required> $string_OR_array_of_keys ]
      }
    }
  }

  - Properties [5] {
    Property [ <default> public $w ]
    Property [ <default> public $wtimeout ]
    Property [ <default> public $chunks ]
    Property [ <default> protected $filesName ]
    Property [ <default> protected $chunksName ]
  }

  - Methods [39] {
    Method [ <internal:mongo, overwrites MongoCollection, ctor> public method __construct ] {
    }

    Method [ <internal:mongo, overwrites MongoCollection, prototype MongoCollection> public method drop ] {
    }

    Method [ <internal:mongo, overwrites MongoCollection, prototype MongoCollection> public method find ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $query ]
        Parameter #1 [ <optional> $fields ]
      }
    }

    Method [ <internal:mongo> public method storeFile ] {
    }

    Method [ <internal:mongo> public method storeBytes ] {
    }

    Method [ <internal:mongo, overwrites MongoCollection, prototype MongoCollection> public method findOne ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $query ]
        Parameter #1 [ <optional> $fields ]
        Parameter #2 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongo, overwrites MongoCollection, prototype MongoCollection> public method remove ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $filename_OR_fields_OR_object ]
        Parameter #1 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongo> public method storeUpload ] {
    }

    Method [ <internal:mongo> public method delete ] {
    }

    Method [ <internal:mongo> public method get ] {
    }

    Method [ <internal:mongo> public method put ] {
    }

    Method [ <internal:mongo, inherits MongoCollection> public method __toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method __get ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method getName ] {

      - Parameters [0] {
      }
    }

    Method [ <internal, deprecated:mongo, inherits MongoCollection> public method getSlaveOkay ] {

      - Parameters [0] {
      }
    }

    Method [ <internal, deprecated:mongo, inherits MongoCollection> public method setSlaveOkay ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $slave_okay ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method getReadPreference ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method setReadPreference ] {

      - Parameters [2] {
        Parameter #0 [ <required> $read_preference ]
        Parameter #1 [ <optional> array $tags ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method getWriteConcern ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method setWriteConcern ] {

      - Parameters [2] {
        Parameter #0 [ <required> $w ]
        Parameter #1 [ <optional> $wtimeout ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method validate ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $validate ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method insert ] {

      - Parameters [2] {
        Parameter #0 [ <required> $array_of_fields_OR_object ]
        Parameter #1 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method batchInsert ] {

      - Parameters [2] {
        Parameter #0 [ <required> array $documents ]
        Parameter #1 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method update ] {

      - Parameters [3] {
        Parameter #0 [ <required> $old_array_of_fields_OR_object ]
        Parameter #1 [ <required> $new_array_of_fields_OR_object ]
        Parameter #2 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method findAndModify ] {

      - Parameters [4] {
        Parameter #0 [ <required> $query ]
        Parameter #1 [ <optional> $update ]
        Parameter #2 [ <optional> $fields ]
        Parameter #3 [ <optional> array or NULL $options ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method createIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> $array_of_keys ]
        Parameter #1 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method ensureIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key_OR_array_of_keys ]
        Parameter #1 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method deleteIndex ] {

      - Parameters [1] {
        Parameter #0 [ <required> $string_OR_array_of_keys ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method deleteIndexes ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method getIndexInfo ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method count ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $query_AS_array_of_fields_OR_object ]
        Parameter #1 [ <optional> $options_OR_limit ]
        Parameter #2 [ <optional> $skip ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method save ] {

      - Parameters [2] {
        Parameter #0 [ <required> $array_of_fields_OR_object ]
        Parameter #1 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method createDBRef ] {

      - Parameters [1] {
        Parameter #0 [ <required> $array_with_id_fields_OR_MongoID ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method getDBRef ] {

      - Parameters [1] {
        Parameter #0 [ <required> $reference ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method group ] {

      - Parameters [4] {
        Parameter #0 [ <required> $keys_or_MongoCode ]
        Parameter #1 [ <required> $initial_value ]
        Parameter #2 [ <required> $array_OR_MongoCode ]
        Parameter #3 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method distinct ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $query ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method aggregate ] {

      - Parameters [3] {
        Parameter #0 [ <required> $pipeline ]
        Parameter #1 [ <optional> $op ]
        Parameter #2 [ <optional> $... ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method aggregateCursor ] {

      - Parameters [2] {
        Parameter #0 [ <required> array or NULL $pipeline ]
        Parameter #1 [ <optional> array or NULL $options ]
      }
    }

    Method [ <internal:mongo, inherits MongoCollection> public method parallelCollectionScan ] {

      - Parameters [2] {
        Parameter #0 [ <required> $num_cursors ]
        Parameter #1 [ <optional> array $options ]
      }
    }
  }
}
',
);
