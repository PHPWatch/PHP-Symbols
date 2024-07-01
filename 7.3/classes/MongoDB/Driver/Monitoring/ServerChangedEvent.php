<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
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
        'name' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-monitoring-serverchangedevent.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
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
      'class' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
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
    'getPort' => 
    array (
      'name' => 'getPort',
      'class' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
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
    'getHost' => 
    array (
      'name' => 'getHost',
      'class' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
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
    'getNewDescription' => 
    array (
      'name' => 'getNewDescription',
      'class' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\Driver\\ServerDescription',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPreviousDescription' => 
    array (
      'name' => 'getPreviousDescription',
      'class' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\Driver\\ServerDescription',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTopologyId' => 
    array (
      'name' => 'getTopologyId',
      'class' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\BSON\\ObjectId',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
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
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\Monitoring\\ServerChangedEvent ] {

  - Constants [0] {
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

    Method [ <internal:mongodb> final public method getPort ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:mongodb> final public method getHost ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb> final public method getNewDescription ] {

      - Parameters [0] {
      }
      - Return [ MongoDB\\Driver\\ServerDescription ]
    }

    Method [ <internal:mongodb> final public method getPreviousDescription ] {

      - Parameters [0] {
      }
      - Return [ MongoDB\\Driver\\ServerDescription ]
    }

    Method [ <internal:mongodb> final public method getTopologyId ] {

      - Parameters [0] {
      }
      - Return [ MongoDB\\BSON\\ObjectId ]
    }

    Method [ <internal:mongodb> final public method __wakeup ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }
  }
}
',
);
