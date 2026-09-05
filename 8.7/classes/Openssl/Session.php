<?php

return array (
  'type' => 'class',
  'name' => 'Openssl\\Session',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Openssl\\Session',
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
        'name' => 'Openssl\\Session interface (php.net)',
        'url' => 'https://www.php.net/manual/class.openssl-session.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Openssl',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    'export' => 
    array (
      'name' => 'export',
      'class' => 'Openssl\\Session',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'OPENSSL_ENCODING_PEM',
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'import' => 
    array (
      'name' => 'import',
      'class' => 'Openssl\\Session',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'format' => 
        array (
          'position' => 1,
          'name' => 'format',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'OPENSSL_ENCODING_PEM',
        ),
      ),
      'return_type' => 'Openssl\\Session',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isResumable' => 
    array (
      'name' => 'isResumable',
      'class' => 'Openssl\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTimeout' => 
    array (
      'name' => 'getTimeout',
      'class' => 'Openssl\\Session',
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
    'getCreatedAt' => 
    array (
      'name' => 'getCreatedAt',
      'class' => 'Openssl\\Session',
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
    'getProtocol' => 
    array (
      'name' => 'getProtocol',
      'class' => 'Openssl\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => '?string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getCipher' => 
    array (
      'name' => 'getCipher',
      'class' => 'Openssl\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => '?string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasTicket' => 
    array (
      'name' => 'hasTicket',
      'class' => 'Openssl\\Session',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTicketLifetimeHint' => 
    array (
      'name' => 'getTicketLifetimeHint',
      'class' => 'Openssl\\Session',
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
    '__serialize' => 
    array (
      'name' => '__serialize',
      'class' => 'Openssl\\Session',
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
    '__unserialize' => 
    array (
      'name' => '__unserialize',
      'class' => 'Openssl\\Session',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'array',
          'is_optional' => false,
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
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'class' => 'Openssl\\Session',
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
  'extension' => 'openssl',
  'toString' => 'Class [ <internal:openssl> final class Openssl\\Session ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:openssl> static public method import ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $data ]
        Parameter #1 [ <optional> int $format = OPENSSL_ENCODING_PEM ]
      }
      - Return [ Openssl\\Session ]
    }
  }

  - Properties [1] {
    Property [ public protected(set) readonly string $id ]
  }

  - Methods [10] {
    Method [ <internal:openssl> public method export ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $format = OPENSSL_ENCODING_PEM ]
      }
      - Return [ string ]
    }

    Method [ <internal:openssl> public method isResumable ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:openssl> public method getTimeout ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:openssl> public method getCreatedAt ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:openssl> public method getProtocol ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:openssl> public method getCipher ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:openssl> public method hasTicket ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:openssl> public method getTicketLifetimeHint ] {

      - Parameters [0] {
      }
      - Return [ ?int ]
    }

    Method [ <internal:openssl> public method __serialize ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:openssl> public method __unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
      - Return [ void ]
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
  'is_instantiable' => true,
  'is_read_only' => false,
);
