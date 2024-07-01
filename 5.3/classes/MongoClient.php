<?php

return array (
  'type' => 'class',
  'name' => 'MongoClient',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoClient',
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
        'name' => 'MongoClient class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongoclient.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'DEFAULT_HOST' => 'localhost',
    'DEFAULT_PORT' => 27017,
    'VERSION' => '1.6.16',
    'RP_PRIMARY' => 'primary',
    'RP_PRIMARY_PREFERRED' => 'primaryPreferred',
    'RP_SECONDARY' => 'secondary',
    'RP_SECONDARY_PREFERRED' => 'secondaryPreferred',
    'RP_NEAREST' => 'nearest',
  ),
  'properties' => 
  array (
    'connected' => 
    array (
      'name' => 'connected',
      'class' => 'MongoClient',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'status' => 
    array (
      'name' => 'status',
      'class' => 'MongoClient',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'server' => 
    array (
      'name' => 'server',
      'class' => 'MongoClient',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'persistent' => 
    array (
      'name' => 'persistent',
      'class' => 'MongoClient',
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
      'class' => 'MongoClient',
      'parameters' => 
      array (
        'server' => 
        array (
          'position' => 0,
          'name' => 'server',
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
    'getConnections' => 
    array (
      'name' => 'getConnections',
      'class' => 'MongoClient',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'connect' => 
    array (
      'name' => 'connect',
      'class' => 'MongoClient',
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
      'class' => 'MongoClient',
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
      'class' => 'MongoClient',
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
    'selectDB' => 
    array (
      'name' => 'selectDB',
      'class' => 'MongoClient',
      'parameters' => 
      array (
        'database_name' => 
        array (
          'position' => 0,
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
    'selectCollection' => 
    array (
      'name' => 'selectCollection',
      'class' => 'MongoClient',
      'parameters' => 
      array (
        'database_name' => 
        array (
          'position' => 0,
          'name' => 'database_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'collection_name' => 
        array (
          'position' => 1,
          'name' => 'collection_name',
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
      'class' => 'MongoClient',
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
      'class' => 'MongoClient',
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
      'class' => 'MongoClient',
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
      'class' => 'MongoClient',
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
    'dropDB' => 
    array (
      'name' => 'dropDB',
      'class' => 'MongoClient',
      'parameters' => 
      array (
        'MongoDB_object_OR_database_name' => 
        array (
          'position' => 0,
          'name' => 'MongoDB_object_OR_database_name',
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
    'listDBs' => 
    array (
      'name' => 'listDBs',
      'class' => 'MongoClient',
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
    'getHosts' => 
    array (
      'name' => 'getHosts',
      'class' => 'MongoClient',
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
    'close' => 
    array (
      'name' => 'close',
      'class' => 'MongoClient',
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
    'killCursor' => 
    array (
      'name' => 'killCursor',
      'class' => 'MongoClient',
      'parameters' => 
      array (
        'cursor_id' => 
        array (
          'position' => 0,
          'name' => 'cursor_id',
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
  'toString' => 'Class [ <internal:mongo> class MongoClient ] {

  - Constants [8] {
    Constant [ string DEFAULT_HOST ] { localhost }
    Constant [ integer DEFAULT_PORT ] { 27017 }
    Constant [ string VERSION ] { 1.6.16 }
    Constant [ string RP_PRIMARY ] { primary }
    Constant [ string RP_PRIMARY_PREFERRED ] { primaryPreferred }
    Constant [ string RP_SECONDARY ] { secondary }
    Constant [ string RP_SECONDARY_PREFERRED ] { secondaryPreferred }
    Constant [ string RP_NEAREST ] { nearest }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:mongo> static public method getConnections ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> static public method killCursor ] {

      - Parameters [1] {
        Parameter #0 [ <required> $cursor_id ]
      }
    }
  }

  - Properties [4] {
    Property [ <default> public $connected ]
    Property [ <default> public $status ]
    Property [ <default> protected $server ]
    Property [ <default> protected $persistent ]
  }

  - Methods [14] {
    Method [ <internal:mongo, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $server ]
        Parameter #1 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongo> public method connect ] {

      - Parameters [0] {
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

    Method [ <internal:mongo> public method selectDB ] {

      - Parameters [1] {
        Parameter #0 [ <required> $database_name ]
      }
    }

    Method [ <internal:mongo> public method selectCollection ] {

      - Parameters [2] {
        Parameter #0 [ <required> $database_name ]
        Parameter #1 [ <optional> $collection_name ]
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

    Method [ <internal:mongo> public method dropDB ] {

      - Parameters [1] {
        Parameter #0 [ <required> $MongoDB_object_OR_database_name ]
      }
    }

    Method [ <internal:mongo> public method listDBs ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> public method getHosts ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> public method close ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
