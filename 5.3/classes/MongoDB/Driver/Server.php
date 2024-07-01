<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\Server',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\Server',
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
        'name' => 'MongoDB\\Driver\\Server class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-server.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'TYPE_UNKNOWN' => 0,
    'TYPE_STANDALONE' => 1,
    'TYPE_MONGOS' => 2,
    'TYPE_POSSIBLE_PRIMARY' => 3,
    'TYPE_RS_PRIMARY' => 4,
    'TYPE_RS_SECONDARY' => 5,
    'TYPE_RS_ARBITER' => 6,
    'TYPE_RS_OTHER' => 7,
    'TYPE_RS_GHOST' => 8,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'executeCommand' => 
    array (
      'name' => 'executeCommand',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
        'db' => 
        array (
          'position' => 0,
          'name' => 'db',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'command' => 
        array (
          'position' => 1,
          'name' => 'command',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'readPreference' => 
        array (
          'position' => 2,
          'name' => 'readPreference',
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
    'executeQuery' => 
    array (
      'name' => 'executeQuery',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'zquery' => 
        array (
          'position' => 1,
          'name' => 'zquery',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'readPreference' => 
        array (
          'position' => 2,
          'name' => 'readPreference',
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
    'executeBulkWrite' => 
    array (
      'name' => 'executeBulkWrite',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'zbulk' => 
        array (
          'position' => 1,
          'name' => 'zbulk',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'writeConcern' => 
        array (
          'position' => 2,
          'name' => 'writeConcern',
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
    'getHost' => 
    array (
      'name' => 'getHost',
      'class' => 'MongoDB\\Driver\\Server',
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
    'getTags' => 
    array (
      'name' => 'getTags',
      'class' => 'MongoDB\\Driver\\Server',
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
    'getInfo' => 
    array (
      'name' => 'getInfo',
      'class' => 'MongoDB\\Driver\\Server',
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
    'getLatency' => 
    array (
      'name' => 'getLatency',
      'class' => 'MongoDB\\Driver\\Server',
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
    'getPort' => 
    array (
      'name' => 'getPort',
      'class' => 'MongoDB\\Driver\\Server',
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
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'MongoDB\\Driver\\Server',
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
    'isPrimary' => 
    array (
      'name' => 'isPrimary',
      'class' => 'MongoDB\\Driver\\Server',
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
    'isSecondary' => 
    array (
      'name' => 'isSecondary',
      'class' => 'MongoDB\\Driver\\Server',
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
    'isArbiter' => 
    array (
      'name' => 'isArbiter',
      'class' => 'MongoDB\\Driver\\Server',
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
    'isHidden' => 
    array (
      'name' => 'isHidden',
      'class' => 'MongoDB\\Driver\\Server',
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
    'isPassive' => 
    array (
      'name' => 'isPassive',
      'class' => 'MongoDB\\Driver\\Server',
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
    '__wakeUp' => 
    array (
      'name' => '__wakeUp',
      'class' => 'MongoDB\\Driver\\Server',
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
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\Server ] {

  - Constants [9] {
    Constant [ integer TYPE_UNKNOWN ] { 0 }
    Constant [ integer TYPE_STANDALONE ] { 1 }
    Constant [ integer TYPE_MONGOS ] { 2 }
    Constant [ integer TYPE_POSSIBLE_PRIMARY ] { 3 }
    Constant [ integer TYPE_RS_PRIMARY ] { 4 }
    Constant [ integer TYPE_RS_SECONDARY ] { 5 }
    Constant [ integer TYPE_RS_ARBITER ] { 6 }
    Constant [ integer TYPE_RS_OTHER ] { 7 }
    Constant [ integer TYPE_RS_GHOST ] { 8 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [16] {
    Method [ <internal:mongodb, ctor> final private method __construct ] {
    }

    Method [ <internal:mongodb> final public method executeCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> MongoDB\\Driver\\ReadPreference or NULL $readPreference ]
      }
    }

    Method [ <internal:mongodb> final public method executeQuery ] {

      - Parameters [3] {
        Parameter #0 [ <required> $namespace ]
        Parameter #1 [ <required> MongoDB\\Driver\\Query $zquery ]
        Parameter #2 [ <optional> MongoDB\\Driver\\ReadPreference or NULL $readPreference ]
      }
    }

    Method [ <internal:mongodb> final public method executeBulkWrite ] {

      - Parameters [3] {
        Parameter #0 [ <required> $namespace ]
        Parameter #1 [ <required> MongoDB\\Driver\\BulkWrite $zbulk ]
        Parameter #2 [ <optional> MongoDB\\Driver\\WriteConcern or NULL $writeConcern ]
      }
    }

    Method [ <internal:mongodb> final public method getHost ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getTags ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getInfo ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getLatency ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getPort ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method isPrimary ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method isSecondary ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method isArbiter ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method isHidden ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method isPassive ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> public method __wakeUp ] {
    }
  }
}
',
);
