<?php

return array (
  'type' => 'interface',
  'name' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
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
        'name' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber interface (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-monitoring-sdamsubscriber.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'MongoDB\\Driver\\Monitoring\\Subscriber',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'serverChanged' => 
    array (
      'name' => 'serverChanged',
      'class' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
          'type' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'serverClosed' => 
    array (
      'name' => 'serverClosed',
      'class' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
          'type' => 'MongoDB\\Driver\\Monitoring\\ServerClosedEvent',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'serverOpening' => 
    array (
      'name' => 'serverOpening',
      'class' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
          'type' => 'MongoDB\\Driver\\Monitoring\\ServerOpeningEvent',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'serverHeartbeatFailed' => 
    array (
      'name' => 'serverHeartbeatFailed',
      'class' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
          'type' => 'MongoDB\\Driver\\Monitoring\\ServerHeartbeatFailedEvent',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'serverHeartbeatStarted' => 
    array (
      'name' => 'serverHeartbeatStarted',
      'class' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
          'type' => 'MongoDB\\Driver\\Monitoring\\ServerHeartbeatStartedEvent',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'serverHeartbeatSucceeded' => 
    array (
      'name' => 'serverHeartbeatSucceeded',
      'class' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
          'type' => 'MongoDB\\Driver\\Monitoring\\ServerHeartbeatSucceededEvent',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'topologyChanged' => 
    array (
      'name' => 'topologyChanged',
      'class' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
          'type' => 'MongoDB\\Driver\\Monitoring\\TopologyChangedEvent',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'topologyClosed' => 
    array (
      'name' => 'topologyClosed',
      'class' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
          'type' => 'MongoDB\\Driver\\Monitoring\\TopologyClosedEvent',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'topologyOpening' => 
    array (
      'name' => 'topologyOpening',
      'class' => 'MongoDB\\Driver\\Monitoring\\SDAMSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
          'type' => 'MongoDB\\Driver\\Monitoring\\TopologyOpeningEvent',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'toString' => 'Interface [ <internal:mongodb> interface MongoDB\\Driver\\Monitoring\\SDAMSubscriber extends MongoDB\\Driver\\Monitoring\\Subscriber ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [9] {
    Method [ <internal:mongodb> abstract public method serverChanged ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\ServerChangedEvent $event ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:mongodb> abstract public method serverClosed ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\ServerClosedEvent $event ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:mongodb> abstract public method serverOpening ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\ServerOpeningEvent $event ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:mongodb> abstract public method serverHeartbeatFailed ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\ServerHeartbeatFailedEvent $event ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:mongodb> abstract public method serverHeartbeatStarted ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\ServerHeartbeatStartedEvent $event ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:mongodb> abstract public method serverHeartbeatSucceeded ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\ServerHeartbeatSucceededEvent $event ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:mongodb> abstract public method topologyChanged ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\TopologyChangedEvent $event ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:mongodb> abstract public method topologyClosed ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\TopologyClosedEvent $event ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:mongodb> abstract public method topologyOpening ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\TopologyOpeningEvent $event ]
      }
      - Tentative return [ void ]
    }
  }
}
',
);
