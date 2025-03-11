<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
        'name' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-monitoring-commandsucceededevent.php',
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
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
    'getCommandName' => 
    array (
      'name' => 'getCommandName',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
    'getDatabaseName' => 
    array (
      'name' => 'getDatabaseName',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
    'getDurationMicros' => 
    array (
      'name' => 'getDurationMicros',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
    'getOperationId' => 
    array (
      'name' => 'getOperationId',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
    'getPort' => 
    array (
      'name' => 'getPort',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
    'getReply' => 
    array (
      'name' => 'getReply',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
    'getRequestId' => 
    array (
      'name' => 'getRequestId',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
    'getServer' => 
    array (
      'name' => 'getServer',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
    'getServiceId' => 
    array (
      'name' => 'getServiceId',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
      'parameters' => 
      array (
      ),
      'return_type' => '?MongoDB\\BSON\\ObjectId',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getServerConnectionId' => 
    array (
      'name' => 'getServerConnectionId',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\Monitoring\\CommandSucceededEvent ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [12] {
    Method [ <internal:mongodb, ctor> final private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getCommandName ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb> final public method getDatabaseName ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb> final public method getDurationMicros ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:mongodb> final public method getHost ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb> final public method getOperationId ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb> final public method getPort ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:mongodb> final public method getReply ] {

      - Parameters [0] {
      }
      - Return [ object ]
    }

    Method [ <internal:mongodb> final public method getRequestId ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal, deprecated:mongodb> final public method getServer ] {

      - Parameters [0] {
      }
      - Return [ MongoDB\\Driver\\Server ]
    }

    Method [ <internal:mongodb> final public method getServiceId ] {

      - Parameters [0] {
      }
      - Return [ ?MongoDB\\BSON\\ObjectId ]
    }

    Method [ <internal:mongodb> final public method getServerConnectionId ] {

      - Parameters [0] {
      }
      - Return [ ?int ]
    }
  }
}
',
);
