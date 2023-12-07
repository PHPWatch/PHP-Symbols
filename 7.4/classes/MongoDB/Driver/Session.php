<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\Session',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\Session',
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
        'name' => 'MongoDB\\Driver\\Session class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-session.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'TRANSACTION_NONE' => 'none',
    'TRANSACTION_STARTING' => 'starting',
    'TRANSACTION_IN_PROGRESS' => 'in_progress',
    'TRANSACTION_COMMITTED' => 'committed',
    'TRANSACTION_ABORTED' => 'aborted',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'abortTransaction' => 
    array (
      'name' => 'abortTransaction',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'advanceClusterTime' => 
    array (
      'name' => 'advanceClusterTime',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
        'clusterTime' => 
        array (
          'position' => 0,
          'name' => 'clusterTime',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'advanceOperationTime' => 
    array (
      'name' => 'advanceOperationTime',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
        'operationTime' => 
        array (
          'position' => 0,
          'name' => 'operationTime',
          'type' => 'MongoDB\\BSON\\TimestampInterface',
          'is_optional' => false,
          'has_default_value' => false,
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
    'commitTransaction' => 
    array (
      'name' => 'commitTransaction',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endSession' => 
    array (
      'name' => 'endSession',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getClusterTime' => 
    array (
      'name' => 'getClusterTime',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'object',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getLogicalSessionId' => 
    array (
      'name' => 'getLogicalSessionId',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'object',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getOperationTime' => 
    array (
      'name' => 'getOperationTime',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\BSON\\Timestamp',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getServer' => 
    array (
      'name' => 'getServer',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\Driver\\Server',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTransactionOptions' => 
    array (
      'name' => 'getTransactionOptions',
      'class' => 'MongoDB\\Driver\\Session',
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
    'getTransactionState' => 
    array (
      'name' => 'getTransactionState',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isDirty' => 
    array (
      'name' => 'isDirty',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isInTransaction' => 
    array (
      'name' => 'isInTransaction',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startTransaction' => 
    array (
      'name' => 'startTransaction',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'MongoDB\\Driver\\Session',
      'parameters' => 
      array (
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
);
