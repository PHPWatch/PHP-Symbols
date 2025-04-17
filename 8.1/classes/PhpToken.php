<?php

return array (
  'type' => 'class',
  'name' => 'PhpToken',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'PhpToken',
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
        'name' => 'PhpToken class (php.net)',
        'url' => 'https://www.php.net/manual/class.phptoken.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Stringable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'class' => 'PhpToken',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'text' => 
    array (
      'name' => 'text',
      'class' => 'PhpToken',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'line' => 
    array (
      'name' => 'line',
      'class' => 'PhpToken',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'pos' => 
    array (
      'name' => 'pos',
      'class' => 'PhpToken',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    'tokenize' => 
    array (
      'name' => 'tokenize',
      'class' => 'PhpToken',
      'parameters' => 
      array (
        'code' => 
        array (
          'position' => 0,
          'name' => 'code',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'PhpToken',
      'parameters' => 
      array (
        'id' => 
        array (
          'position' => 0,
          'name' => 'id',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'text' => 
        array (
          'position' => 1,
          'name' => 'text',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'line' => 
        array (
          'position' => 2,
          'name' => 'line',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -1,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pos' => 
        array (
          'position' => 3,
          'name' => 'pos',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -1,
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
    'is' => 
    array (
      'name' => 'is',
      'class' => 'PhpToken',
      'parameters' => 
      array (
        'kind' => 
        array (
          'position' => 0,
          'name' => 'kind',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'isIgnorable' => 
    array (
      'name' => 'isIgnorable',
      'class' => 'PhpToken',
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
    'getTokenName' => 
    array (
      'name' => 'getTokenName',
      'class' => 'PhpToken',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'PhpToken',
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
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'tokenizer',
  'toString' => 'Class [ <internal:tokenizer> class PhpToken implements Stringable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:tokenizer> static public method tokenize ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $code ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Return [ array ]
    }
  }

  - Properties [4] {
    Property [ public int $id ]
    Property [ public string $text ]
    Property [ public int $line ]
    Property [ public int $pos ]
  }

  - Methods [5] {
    Method [ <internal:tokenizer, ctor> final public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <required> int $id ]
        Parameter #1 [ <required> string $text ]
        Parameter #2 [ <optional> int $line = -1 ]
        Parameter #3 [ <optional> int $pos = -1 ]
      }
    }

    Method [ <internal:tokenizer> public method is ] {

      - Parameters [1] {
        Parameter #0 [ <required> $kind ]
      }
      - Return [ bool ]
    }

    Method [ <internal:tokenizer> public method isIgnorable ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:tokenizer> public method getTokenName ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:tokenizer, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
',
);
