<?php

return array (
  'type' => 'class',
  'name' => 'Dom\\TokenList',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Dom\\TokenList',
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
        'name' => 'Dom\\TokenList interface (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-tokenlist.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Dom',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Dom\\TokenList',
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
    'item' => 
    array (
      'name' => 'item',
      'class' => 'Dom\\TokenList',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'contains' => 
    array (
      'name' => 'contains',
      'class' => 'Dom\\TokenList',
      'parameters' => 
      array (
        'token' => 
        array (
          'position' => 0,
          'name' => 'token',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'add' => 
    array (
      'name' => 'add',
      'class' => 'Dom\\TokenList',
      'parameters' => 
      array (
        'tokens' => 
        array (
          'position' => 0,
          'name' => 'tokens',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'remove' => 
    array (
      'name' => 'remove',
      'class' => 'Dom\\TokenList',
      'parameters' => 
      array (
        'tokens' => 
        array (
          'position' => 0,
          'name' => 'tokens',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toggle' => 
    array (
      'name' => 'toggle',
      'class' => 'Dom\\TokenList',
      'parameters' => 
      array (
        'token' => 
        array (
          'position' => 0,
          'name' => 'token',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'force' => 
        array (
          'position' => 1,
          'name' => 'force',
          'type' => '?bool',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'replace' => 
    array (
      'name' => 'replace',
      'class' => 'Dom\\TokenList',
      'parameters' => 
      array (
        'token' => 
        array (
          'position' => 0,
          'name' => 'token',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'newToken' => 
        array (
          'position' => 1,
          'name' => 'newToken',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'supports' => 
    array (
      'name' => 'supports',
      'class' => 'Dom\\TokenList',
      'parameters' => 
      array (
        'token' => 
        array (
          'position' => 0,
          'name' => 'token',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'count' => 
    array (
      'name' => 'count',
      'class' => 'Dom\\TokenList',
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
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'Dom\\TokenList',
      'parameters' => 
      array (
      ),
      'return_type' => 'Iterator',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
    0 => 'IteratorAggregate',
    1 => 'Traversable',
    2 => 'Countable',
  ),
  'properties' => 
  array (
    'length' => 
    array (
      'name' => 'length',
      'class' => 'Dom\\TokenList',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'value' => 
    array (
      'name' => 'value',
      'class' => 'Dom\\TokenList',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'dom',
  'toString' => 'Class [ <internal:dom> <iterateable> final class Dom\\TokenList implements IteratorAggregate, Traversable, Countable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ public virtual int $length ]
    Property [ public virtual string $value ]
  }

  - Methods [10] {
    Method [ <internal:dom, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:dom> public method item ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
      - Return [ ?string ]
    }

    Method [ <internal:dom> public method contains ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $token ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method add ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string ...$tokens ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method remove ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string ...$tokens ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method toggle ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $token ]
        Parameter #1 [ <optional> ?bool $force = null ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method replace ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $token ]
        Parameter #1 [ <required> string $newToken ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method supports ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $token ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, prototype Countable> public method count ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:dom, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Iterator ]
    }
  }
}
',
  'modifiers' => 32,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => true,
  'is_instantiable' => false,
  'is_read_only' => false,
);
