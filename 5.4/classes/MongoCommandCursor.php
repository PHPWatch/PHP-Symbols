<?php

return array (
  'type' => 'class',
  'name' => 'MongoCommandCursor',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoCommandCursor',
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
        'name' => 'MongoCommandCursor class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongocommandcursor.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'MongoCursorInterface',
    1 => 'Traversable',
    2 => 'Iterator',
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
      'class' => 'MongoCommandCursor',
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
        'database_and_collection_name' => 
        array (
          'position' => 1,
          'name' => 'database_and_collection_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'query' => 
        array (
          'position' => 2,
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
    'batchSize' => 
    array (
      'name' => 'batchSize',
      'class' => 'MongoCommandCursor',
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
    'timeout' => 
    array (
      'name' => 'timeout',
      'class' => 'MongoCommandCursor',
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
      'class' => 'MongoCommandCursor',
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
      'class' => 'MongoCommandCursor',
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
    'getReadPreference' => 
    array (
      'name' => 'getReadPreference',
      'class' => 'MongoCommandCursor',
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
      'class' => 'MongoCommandCursor',
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
    'current' => 
    array (
      'name' => 'current',
      'class' => 'MongoCommandCursor',
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
      'class' => 'MongoCommandCursor',
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
      'class' => 'MongoCommandCursor',
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
      'class' => 'MongoCommandCursor',
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
      'class' => 'MongoCommandCursor',
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
    'createFromDocument' => 
    array (
      'name' => 'createFromDocument',
      'class' => 'MongoCommandCursor',
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
        'connection_hash' => 
        array (
          'position' => 1,
          'name' => 'connection_hash',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'cursor_document' => 
        array (
          'position' => 2,
          'name' => 'cursor_document',
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongo> <iterateable> class MongoCommandCursor implements MongoCursorInterface, Traversable, Iterator ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:mongo> static public method createFromDocument ] {

      - Parameters [3] {
        Parameter #0 [ <required> MongoClient $connection ]
        Parameter #1 [ <required> $connection_hash ]
        Parameter #2 [ <required> $cursor_document ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [12] {
    Method [ <internal:mongo, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> MongoClient $connection ]
        Parameter #1 [ <required> $database_and_collection_name ]
        Parameter #2 [ <optional> $query ]
      }
    }

    Method [ <internal:mongo, prototype MongoCursorInterface> public method batchSize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $number ]
      }
    }

    Method [ <internal:mongo, prototype MongoCursorInterface> public method timeout ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timeoutMS ]
      }
    }

    Method [ <internal:mongo, prototype MongoCursorInterface> public method info ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, prototype MongoCursorInterface> public method dead ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, prototype MongoCursorInterface> public method getReadPreference ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, prototype MongoCursorInterface> public method setReadPreference ] {

      - Parameters [2] {
        Parameter #0 [ <required> $read_preference ]
        Parameter #1 [ <optional> array $tags ]
      }
    }

    Method [ <internal:mongo, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
