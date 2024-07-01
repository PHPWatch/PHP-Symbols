<?php

return array (
  'type' => 'interface',
  'name' => 'MongoDB\\Driver\\Monitoring\\CommandSubscriber',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'MongoDB\\Driver\\Monitoring\\CommandSubscriber',
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
        'name' => 'MongoDB\\Driver\\Monitoring\\CommandSubscriber interface (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-monitoring-commandsubscriber.php',
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
    'commandStarted' => 
    array (
      'name' => 'commandStarted',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
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
    'commandSucceeded' => 
    array (
      'name' => 'commandSucceeded',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
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
    'commandFailed' => 
    array (
      'name' => 'commandFailed',
      'class' => 'MongoDB\\Driver\\Monitoring\\CommandSubscriber',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
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
  'toString' => 'Interface [ <internal:mongodb> interface MongoDB\\Driver\\Monitoring\\CommandSubscriber extends MongoDB\\Driver\\Monitoring\\Subscriber ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [3] {
    Method [ <internal:mongodb> abstract public method commandStarted ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\CommandStartedEvent $event ]
      }
    }

    Method [ <internal:mongodb> abstract public method commandSucceeded ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\CommandSucceededEvent $event ]
      }
    }

    Method [ <internal:mongodb> abstract public method commandFailed ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\CommandFailedEvent $event ]
      }
    }
  }
}
',
);
