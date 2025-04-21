<?php

return array (
  'type' => 'class',
  'name' => 'SimpleXMLIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SimpleXMLIterator',
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
        'name' => 'SimpleXMLIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.simplexmliterator.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
    2 => 'RecursiveIterator',
    3 => 'Countable',
    4 => 'Stringable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'xpath' => 
    array (
      'name' => 'xpath',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
        'expression' => 
        array (
          'position' => 0,
          'name' => 'expression',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
    'registerXPathNamespace' => 
    array (
      'name' => 'registerXPathNamespace',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'namespace' => 
        array (
          'position' => 1,
          'name' => 'namespace',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
    'asXML' => 
    array (
      'name' => 'asXML',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
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
    'saveXML' => 
    array (
      'name' => 'saveXML',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
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
    'getNamespaces' => 
    array (
      'name' => 'getNamespaces',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
        'recursive' => 
        array (
          'position' => 0,
          'name' => 'recursive',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
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
    'getDocNamespaces' => 
    array (
      'name' => 'getDocNamespaces',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
        'recursive' => 
        array (
          'position' => 0,
          'name' => 'recursive',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fromRoot' => 
        array (
          'position' => 1,
          'name' => 'fromRoot',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
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
    'children' => 
    array (
      'name' => 'children',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
        'namespaceOrPrefix' => 
        array (
          'position' => 0,
          'name' => 'namespaceOrPrefix',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'isPrefix' => 
        array (
          'position' => 1,
          'name' => 'isPrefix',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
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
    'attributes' => 
    array (
      'name' => 'attributes',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
        'namespaceOrPrefix' => 
        array (
          'position' => 0,
          'name' => 'namespaceOrPrefix',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'isPrefix' => 
        array (
          'position' => 1,
          'name' => 'isPrefix',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'SimpleXMLElement',
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
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dataIsURL' => 
        array (
          'position' => 2,
          'name' => 'dataIsURL',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'namespaceOrPrefix' => 
        array (
          'position' => 3,
          'name' => 'namespaceOrPrefix',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'isPrefix' => 
        array (
          'position' => 4,
          'name' => 'isPrefix',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
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
    'addChild' => 
    array (
      'name' => 'addChild',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'namespace' => 
        array (
          'position' => 2,
          'name' => 'namespace',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
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
    'addAttribute' => 
    array (
      'name' => 'addAttribute',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'namespace' => 
        array (
          'position' => 2,
          'name' => 'namespace',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
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
    'getName' => 
    array (
      'name' => 'getName',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'SimpleXMLElement',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'current' => 
    array (
      'name' => 'current',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'key' => 
    array (
      'name' => 'key',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'next' => 
    array (
      'name' => 'next',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasChildren' => 
    array (
      'name' => 'hasChildren',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getChildren' => 
    array (
      'name' => 'getChildren',
      'class' => 'SimpleXMLElement',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
  'is_instantiable' => true,
  'is_read_only' => false,
  'extension' => 'SimpleXML',
  'toString' => 'Class [ <internal:SimpleXML> <iterateable> class SimpleXMLIterator extends SimpleXMLElement implements Iterator, Traversable, RecursiveIterator, Countable, Stringable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [21] {
    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method xpath ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $expression ]
      }
      - Tentative return [ array|false|null ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method registerXPathNamespace ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $prefix ]
        Parameter #1 [ <required> string $namespace ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method asXML ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $filename = null ]
      }
      - Tentative return [ string|bool ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method saveXML ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $filename = null ]
      }
      - Tentative return [ string|bool ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method getNamespaces ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $recursive = false ]
      }
      - Tentative return [ array ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method getDocNamespaces ] {

      - Parameters [2] {
        Parameter #0 [ <optional> bool $recursive = false ]
        Parameter #1 [ <optional> bool $fromRoot = true ]
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method children ] {

      - Parameters [2] {
        Parameter #0 [ <optional> ?string $namespaceOrPrefix = null ]
        Parameter #1 [ <optional> bool $isPrefix = false ]
      }
      - Tentative return [ ?SimpleXMLElement ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method attributes ] {

      - Parameters [2] {
        Parameter #0 [ <optional> ?string $namespaceOrPrefix = null ]
        Parameter #1 [ <optional> bool $isPrefix = false ]
      }
      - Tentative return [ ?SimpleXMLElement ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement, ctor> public method __construct ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $data ]
        Parameter #1 [ <optional> int $options = 0 ]
        Parameter #2 [ <optional> bool $dataIsURL = false ]
        Parameter #3 [ <optional> string $namespaceOrPrefix = "" ]
        Parameter #4 [ <optional> bool $isPrefix = false ]
      }
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method addChild ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $qualifiedName ]
        Parameter #1 [ <optional> ?string $value = null ]
        Parameter #2 [ <optional> ?string $namespace = null ]
      }
      - Tentative return [ ?SimpleXMLElement ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method addAttribute ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $qualifiedName ]
        Parameter #1 [ <required> string $value ]
        Parameter #2 [ <optional> ?string $namespace = null ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement> public method getName ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement, prototype Countable> public method count ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
      - Tentative return [ SimpleXMLElement ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement, prototype RecursiveIterator> public method hasChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SimpleXML, inherits SimpleXMLElement, prototype RecursiveIterator> public method getChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ ?SimpleXMLElement ]
    }
  }
}
',
);
