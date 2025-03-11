<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\ServerDescription',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\ServerDescription',
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
        'name' => 'MongoDB\\Driver\\ServerDescription class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-serverdescription.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'TYPE_UNKNOWN' => 'Unknown',
    'TYPE_STANDALONE' => 'Standalone',
    'TYPE_MONGOS' => 'Mongos',
    'TYPE_POSSIBLE_PRIMARY' => 'PossiblePrimary',
    'TYPE_RS_PRIMARY' => 'RSPrimary',
    'TYPE_RS_SECONDARY' => 'RSSecondary',
    'TYPE_RS_ARBITER' => 'RSArbiter',
    'TYPE_RS_OTHER' => 'RSOther',
    'TYPE_RS_GHOST' => 'RSGhost',
    'TYPE_LOAD_BALANCER' => 'LoadBalancer',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\ServerDescription',
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
    'getHelloResponse' => 
    array (
      'name' => 'getHelloResponse',
      'class' => 'MongoDB\\Driver\\ServerDescription',
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
    'getHost' => 
    array (
      'name' => 'getHost',
      'class' => 'MongoDB\\Driver\\ServerDescription',
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
    'getLastUpdateTime' => 
    array (
      'name' => 'getLastUpdateTime',
      'class' => 'MongoDB\\Driver\\ServerDescription',
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
    'getPort' => 
    array (
      'name' => 'getPort',
      'class' => 'MongoDB\\Driver\\ServerDescription',
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
    'getRoundTripTime' => 
    array (
      'name' => 'getRoundTripTime',
      'class' => 'MongoDB\\Driver\\ServerDescription',
      'parameters' => 
      array (
      ),
      'return_type' => '?int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'MongoDB\\Driver\\ServerDescription',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\ServerDescription ] {

  - Constants [10] {
    Constant [ public string TYPE_UNKNOWN ] { Unknown }
    Constant [ public string TYPE_STANDALONE ] { Standalone }
    Constant [ public string TYPE_MONGOS ] { Mongos }
    Constant [ public string TYPE_POSSIBLE_PRIMARY ] { PossiblePrimary }
    Constant [ public string TYPE_RS_PRIMARY ] { RSPrimary }
    Constant [ public string TYPE_RS_SECONDARY ] { RSSecondary }
    Constant [ public string TYPE_RS_ARBITER ] { RSArbiter }
    Constant [ public string TYPE_RS_OTHER ] { RSOther }
    Constant [ public string TYPE_RS_GHOST ] { RSGhost }
    Constant [ public string TYPE_LOAD_BALANCER ] { LoadBalancer }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [7] {
    Method [ <internal:mongodb, ctor> final private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getHelloResponse ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:mongodb> final public method getHost ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb> final public method getLastUpdateTime ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:mongodb> final public method getPort ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:mongodb> final public method getRoundTripTime ] {

      - Parameters [0] {
      }
      - Return [ ?int ]
    }

    Method [ <internal:mongodb> final public method getType ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
',
);
