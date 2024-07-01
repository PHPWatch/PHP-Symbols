<?php

return array (
  'type' => 'class',
  'name' => 'MongoGridFSCursor',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoGridFSCursor',
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
        'name' => 'MongoGridFSCursor class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongogridfscursor.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
    2 => 'MongoCursorInterface',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
    'slaveOkay' => 
    array (
      'name' => 'slaveOkay',
      'class' => 'MongoCursor',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'timeout' => 
    array (
      'name' => 'timeout',
      'class' => 'MongoCursor',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'gridfs' => 
    array (
      'name' => 'gridfs',
      'class' => 'MongoGridFSCursor',
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
      'class' => 'MongoGridFSCursor',
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
    'getNext' => 
    array (
      'name' => 'getNext',
      'class' => 'MongoGridFSCursor',
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
    'current' => 
    array (
      'name' => 'current',
      'class' => 'MongoGridFSCursor',
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
    'hasNext' => 
    array (
      'name' => 'hasNext',
      'class' => 'MongoCursor',
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
    'limit' => 
    array (
      'name' => 'limit',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'number' => 
        array (
          'position' => 0,
          'name' => 'number',
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
    'batchSize' => 
    array (
      'name' => 'batchSize',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'number' => 
        array (
          'position' => 0,
          'name' => 'number',
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
    'skip' => 
    array (
      'name' => 'skip',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'number' => 
        array (
          'position' => 0,
          'name' => 'number',
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
    'fields' => 
    array (
      'name' => 'fields',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'fields' => 
        array (
          'position' => 0,
          'name' => 'fields',
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
    'maxTimeMS' => 
    array (
      'name' => 'maxTimeMS',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'ms' => 
        array (
          'position' => 0,
          'name' => 'ms',
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
    'addOption' => 
    array (
      'name' => 'addOption',
      'class' => 'MongoCursor',
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
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
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
    'snapshot' => 
    array (
      'name' => 'snapshot',
      'class' => 'MongoCursor',
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
    'sort' => 
    array (
      'name' => 'sort',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'fields' => 
        array (
          'position' => 0,
          'name' => 'fields',
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
    'hint' => 
    array (
      'name' => 'hint',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'keyPattern' => 
        array (
          'position' => 0,
          'name' => 'keyPattern',
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
    'explain' => 
    array (
      'name' => 'explain',
      'class' => 'MongoCursor',
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
    'setFlag' => 
    array (
      'name' => 'setFlag',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'bit' => 
        array (
          'position' => 0,
          'name' => 'bit',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'set' => 
        array (
          'position' => 1,
          'name' => 'set',
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
    'slaveOkay' => 
    array (
      'name' => 'slaveOkay',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'okay' => 
        array (
          'position' => 0,
          'name' => 'okay',
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
    'tailable' => 
    array (
      'name' => 'tailable',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'tail' => 
        array (
          'position' => 0,
          'name' => 'tail',
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
    'immortal' => 
    array (
      'name' => 'immortal',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'liveForever' => 
        array (
          'position' => 0,
          'name' => 'liveForever',
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
    'awaitData' => 
    array (
      'name' => 'awaitData',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'wait' => 
        array (
          'position' => 0,
          'name' => 'wait',
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
    'partial' => 
    array (
      'name' => 'partial',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'okay' => 
        array (
          'position' => 0,
          'name' => 'okay',
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
      'class' => 'MongoCursor',
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
      'class' => 'MongoCursor',
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
    'doQuery' => 
    array (
      'name' => 'doQuery',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
    ),
    'timeout' => 
    array (
      'name' => 'timeout',
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'timeoutMS' => 
        array (
          'position' => 0,
          'name' => 'timeoutMS',
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
    'info' => 
    array (
      'name' => 'info',
      'class' => 'MongoCursor',
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
    'dead' => 
    array (
      'name' => 'dead',
      'class' => 'MongoCursor',
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
    'key' => 
    array (
      'name' => 'key',
      'class' => 'MongoCursor',
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
    'next' => 
    array (
      'name' => 'next',
      'class' => 'MongoCursor',
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'MongoCursor',
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
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'MongoCursor',
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
    'reset' => 
    array (
      'name' => 'reset',
      'class' => 'MongoCursor',
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
      'class' => 'MongoCursor',
      'parameters' => 
      array (
        'foundOnly' => 
        array (
          'position' => 0,
          'name' => 'foundOnly',
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
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongo> <iterateable> class MongoGridFSCursor extends MongoCursor implements Iterator, Traversable, MongoCursorInterface ] {

  - Constants [0] {
  }

  - Static properties [2] {
    Property [ public static $slaveOkay ]
    Property [ public static $timeout ]
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ <default> protected $gridfs ]
  }

  - Methods [32] {
    Method [ <internal:mongo, overwrites MongoCursor, ctor> public method __construct ] {
    }

    Method [ <internal:mongo, overwrites MongoCursor, prototype MongoCursor> public method getNext ] {
    }

    Method [ <internal:mongo, overwrites MongoCursor, prototype Iterator> public method current ] {
    }

    Method [ <internal:mongo, inherits MongoCursor> public method hasNext ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method limit ] {

      - Parameters [1] {
        Parameter #0 [ <required> $number ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor, prototype MongoCursorInterface> public method batchSize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $number ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method skip ] {

      - Parameters [1] {
        Parameter #0 [ <required> $number ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method fields ] {

      - Parameters [1] {
        Parameter #0 [ <required> $fields ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method maxTimeMS ] {

      - Parameters [1] {
        Parameter #0 [ <required> $ms ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method addOption ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method snapshot ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method sort ] {

      - Parameters [1] {
        Parameter #0 [ <required> $fields ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method hint ] {

      - Parameters [1] {
        Parameter #0 [ <required> $keyPattern ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method explain ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method setFlag ] {

      - Parameters [2] {
        Parameter #0 [ <required> $bit ]
        Parameter #1 [ <optional> $set ]
      }
    }

    Method [ <internal, deprecated:mongo, inherits MongoCursor> public method slaveOkay ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $okay ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method tailable ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $tail ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method immortal ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $liveForever ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method awaitData ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $wait ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method partial ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $okay ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor, prototype MongoCursorInterface> public method getReadPreference ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor, prototype MongoCursorInterface> public method setReadPreference ] {

      - Parameters [2] {
        Parameter #0 [ <required> $read_preference ]
        Parameter #1 [ <optional> array $tags ]
      }
    }

    Method [ <internal, deprecated:mongo, inherits MongoCursor> final protected method doQuery ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor, prototype MongoCursorInterface> public method timeout ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timeoutMS ]
      }
    }

    Method [ <internal:mongo, inherits MongoCursor, prototype MongoCursorInterface> public method info ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor, prototype MongoCursorInterface> public method dead ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method reset ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, inherits MongoCursor> public method count ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $foundOnly ]
      }
    }
  }
}
',
);
