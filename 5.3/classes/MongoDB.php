<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB',
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
        'name' => 'MongoDB class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'PROFILING_OFF' => 0,
    'PROFILING_SLOW' => 1,
    'PROFILING_ON' => 2,
  ),
  'properties' => 
  array (
    'w' => 
    array (
      'name' => 'w',
      'class' => 'MongoDB',
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
      'class' => 'MongoDB',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'connection' => 
        array (
          'position' => 0,
          'name' => 'connection',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'database_name' => 
        array (
          'position' => 1,
          'name' => 'database_name',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'MongoDB',
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
      'class' => 'MongoDB',
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
    'getGridFS' => 
    array (
      'name' => 'getGridFS',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
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
    'getSlaveOkay' => 
    array (
      'name' => 'getSlaveOkay',
      'class' => 'MongoDB',
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
      'class' => 'MongoDB',
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
      'class' => 'MongoDB',
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
      'class' => 'MongoDB',
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
      'class' => 'MongoDB',
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
      'class' => 'MongoDB',
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
    'getProfilingLevel' => 
    array (
      'name' => 'getProfilingLevel',
      'class' => 'MongoDB',
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
    'setProfilingLevel' => 
    array (
      'name' => 'setProfilingLevel',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'level' => 
        array (
          'position' => 0,
          'name' => 'level',
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
    'drop' => 
    array (
      'name' => 'drop',
      'class' => 'MongoDB',
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
    'repair' => 
    array (
      'name' => 'repair',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'keep_cloned_files' => 
        array (
          'position' => 0,
          'name' => 'keep_cloned_files',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'backup_original_files' => 
        array (
          'position' => 1,
          'name' => 'backup_original_files',
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
    'selectCollection' => 
    array (
      'name' => 'selectCollection',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'collection_name' => 
        array (
          'position' => 0,
          'name' => 'collection_name',
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
    'createCollection' => 
    array (
      'name' => 'createCollection',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'collection_name' => 
        array (
          'position' => 0,
          'name' => 'collection_name',
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
    'dropCollection' => 
    array (
      'name' => 'dropCollection',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'collection_name' => 
        array (
          'position' => 0,
          'name' => 'collection_name',
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
    'listCollections' => 
    array (
      'name' => 'listCollections',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'includeSystemCollections' => 
        array (
          'position' => 0,
          'name' => 'includeSystemCollections',
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
    'getCollectionNames' => 
    array (
      'name' => 'getCollectionNames',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'includeSystemCollections' => 
        array (
          'position' => 0,
          'name' => 'includeSystemCollections',
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
    'getCollectionInfo' => 
    array (
      'name' => 'getCollectionInfo',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'includeSystemCollections' => 
        array (
          'position' => 0,
          'name' => 'includeSystemCollections',
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
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'collection_name' => 
        array (
          'position' => 0,
          'name' => 'collection_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'array_with_id_fields_OR_MongoID' => 
        array (
          'position' => 1,
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
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'reference_information' => 
        array (
          'position' => 0,
          'name' => 'reference_information',
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
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'javascript_code' => 
        array (
          'position' => 0,
          'name' => 'javascript_code',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arguments' => 
        array (
          'position' => 1,
          'name' => 'arguments',
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
    'command' => 
    array (
      'name' => 'command',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'command' => 
        array (
          'position' => 0,
          'name' => 'command',
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
        'hash' => 
        array (
          'position' => 2,
          'name' => 'hash',
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
    'lastError' => 
    array (
      'name' => 'lastError',
      'class' => 'MongoDB',
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
    'prevError' => 
    array (
      'name' => 'prevError',
      'class' => 'MongoDB',
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
    'resetError' => 
    array (
      'name' => 'resetError',
      'class' => 'MongoDB',
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
    'forceError' => 
    array (
      'name' => 'forceError',
      'class' => 'MongoDB',
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
    'authenticate' => 
    array (
      'name' => 'authenticate',
      'class' => 'MongoDB',
      'parameters' => 
      array (
        'username' => 
        array (
          'position' => 0,
          'name' => 'username',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'password' => 
        array (
          'position' => 1,
          'name' => 'password',
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
  ),
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongo> class MongoDB ] {

  - Constants [3] {
    Constant [ integer PROFILING_OFF ] { 0 }
    Constant [ integer PROFILING_SLOW ] { 1 }
    Constant [ integer PROFILING_ON ] { 2 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ <default> public $w ]
    Property [ <default> public $wtimeout ]
  }

  - Methods [29] {
    Method [ <internal:mongo, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> MongoClient $connection ]
        Parameter #1 [ <required> $database_name ]
      }
    }

    Method [ <internal:mongo> public method __toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> public method __get ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:mongo> public method getGridFS ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $prefix ]
      }
    }

    Method [ <internal, deprecated:mongo> public method getSlaveOkay ] {

      - Parameters [0] {
      }
    }

    Method [ <internal, deprecated:mongo> public method setSlaveOkay ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $slave_okay ]
      }
    }

    Method [ <internal:mongo> public method getReadPreference ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> public method setReadPreference ] {

      - Parameters [2] {
        Parameter #0 [ <required> $read_preference ]
        Parameter #1 [ <optional> array $tags ]
      }
    }

    Method [ <internal:mongo> public method getWriteConcern ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> public method setWriteConcern ] {

      - Parameters [2] {
        Parameter #0 [ <required> $w ]
        Parameter #1 [ <optional> $wtimeout ]
      }
    }

    Method [ <internal:mongo> public method getProfilingLevel ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> public method setProfilingLevel ] {

      - Parameters [1] {
        Parameter #0 [ <required> $level ]
      }
    }

    Method [ <internal:mongo> public method drop ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> public method repair ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $keep_cloned_files ]
        Parameter #1 [ <optional> $backup_original_files ]
      }
    }

    Method [ <internal:mongo> public method selectCollection ] {

      - Parameters [1] {
        Parameter #0 [ <required> $collection_name ]
      }
    }

    Method [ <internal:mongo> public method createCollection ] {

      - Parameters [1] {
        Parameter #0 [ <required> $collection_name ]
      }
    }

    Method [ <internal:mongo> public method dropCollection ] {

      - Parameters [1] {
        Parameter #0 [ <required> $collection_name ]
      }
    }

    Method [ <internal:mongo> public method listCollections ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $includeSystemCollections ]
      }
    }

    Method [ <internal:mongo> public method getCollectionNames ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $includeSystemCollections ]
      }
    }

    Method [ <internal:mongo> public method getCollectionInfo ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $includeSystemCollections ]
      }
    }

    Method [ <internal:mongo> public method createDBRef ] {

      - Parameters [2] {
        Parameter #0 [ <required> $collection_name ]
        Parameter #1 [ <required> $array_with_id_fields_OR_MongoID ]
      }
    }

    Method [ <internal:mongo> public method getDBRef ] {

      - Parameters [1] {
        Parameter #0 [ <required> $reference_information ]
      }
    }

    Method [ <internal:mongo> public method execute ] {

      - Parameters [2] {
        Parameter #0 [ <required> $javascript_code ]
        Parameter #1 [ <optional> array $arguments ]
      }
    }

    Method [ <internal:mongo> public method command ] {

      - Parameters [3] {
        Parameter #0 [ <required> $command ]
        Parameter #1 [ <optional> array or NULL $options ]
        Parameter #2 [ <optional> &$hash ]
      }
    }

    Method [ <internal:mongo> public method lastError ] {
    }

    Method [ <internal, deprecated:mongo> public method prevError ] {
    }

    Method [ <internal, deprecated:mongo> public method resetError ] {
    }

    Method [ <internal, deprecated:mongo> public method forceError ] {
    }

    Method [ <internal, deprecated:mongo> public method authenticate ] {

      - Parameters [2] {
        Parameter #0 [ <required> $username ]
        Parameter #1 [ <required> $password ]
      }
    }
  }
}
',
);
