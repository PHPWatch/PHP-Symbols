<?php

return array (
  'type' => 'class',
  'name' => 'XMLReader',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'XMLReader',
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
        'name' => 'XMLReader interface (php.net)',
        'url' => 'https://www.php.net/manual/class.xmlreader.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'NONE' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int NONE ] { 0 }
',
      'visibility' => 1,
    ),
    'ELEMENT' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int ELEMENT ] { 1 }
',
      'visibility' => 1,
    ),
    'ATTRIBUTE' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int ATTRIBUTE ] { 2 }
',
      'visibility' => 1,
    ),
    'TEXT' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int TEXT ] { 3 }
',
      'visibility' => 1,
    ),
    'CDATA' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int CDATA ] { 4 }
',
      'visibility' => 1,
    ),
    'ENTITY_REF' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int ENTITY_REF ] { 5 }
',
      'visibility' => 1,
    ),
    'ENTITY' => 
    array (
      'value' => 6,
      'toString' => 'Constant [ public int ENTITY ] { 6 }
',
      'visibility' => 1,
    ),
    'PI' => 
    array (
      'value' => 7,
      'toString' => 'Constant [ public int PI ] { 7 }
',
      'visibility' => 1,
    ),
    'COMMENT' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int COMMENT ] { 8 }
',
      'visibility' => 1,
    ),
    'DOC' => 
    array (
      'value' => 9,
      'toString' => 'Constant [ public int DOC ] { 9 }
',
      'visibility' => 1,
    ),
    'DOC_TYPE' => 
    array (
      'value' => 10,
      'toString' => 'Constant [ public int DOC_TYPE ] { 10 }
',
      'visibility' => 1,
    ),
    'DOC_FRAGMENT' => 
    array (
      'value' => 11,
      'toString' => 'Constant [ public int DOC_FRAGMENT ] { 11 }
',
      'visibility' => 1,
    ),
    'NOTATION' => 
    array (
      'value' => 12,
      'toString' => 'Constant [ public int NOTATION ] { 12 }
',
      'visibility' => 1,
    ),
    'WHITESPACE' => 
    array (
      'value' => 13,
      'toString' => 'Constant [ public int WHITESPACE ] { 13 }
',
      'visibility' => 1,
    ),
    'SIGNIFICANT_WHITESPACE' => 
    array (
      'value' => 14,
      'toString' => 'Constant [ public int SIGNIFICANT_WHITESPACE ] { 14 }
',
      'visibility' => 1,
    ),
    'END_ELEMENT' => 
    array (
      'value' => 15,
      'toString' => 'Constant [ public int END_ELEMENT ] { 15 }
',
      'visibility' => 1,
    ),
    'END_ENTITY' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int END_ENTITY ] { 16 }
',
      'visibility' => 1,
    ),
    'XML_DECLARATION' => 
    array (
      'value' => 17,
      'toString' => 'Constant [ public int XML_DECLARATION ] { 17 }
',
      'visibility' => 1,
    ),
    'LOADDTD' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int LOADDTD ] { 1 }
',
      'visibility' => 1,
    ),
    'DEFAULTATTRS' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int DEFAULTATTRS ] { 2 }
',
      'visibility' => 1,
    ),
    'VALIDATE' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int VALIDATE ] { 3 }
',
      'visibility' => 1,
    ),
    'SUBST_ENTITIES' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int SUBST_ENTITIES ] { 4 }
',
      'visibility' => 1,
    ),
  ),
  'methods' => 
  array (
    'close' => 
    array (
      'name' => 'close',
      'class' => 'XMLReader',
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
    'getAttribute' => 
    array (
      'name' => 'getAttribute',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'getAttributeNo' => 
    array (
      'name' => 'getAttributeNo',
      'class' => 'XMLReader',
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
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAttributeNs' => 
    array (
      'name' => 'getAttributeNs',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'getParserProperty' => 
    array (
      'name' => 'getParserProperty',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'property' => 
        array (
          'position' => 0,
          'name' => 'property',
          'type' => 'int',
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
    'isValid' => 
    array (
      'name' => 'isValid',
      'class' => 'XMLReader',
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
    'lookupNamespace' => 
    array (
      'name' => 'lookupNamespace',
      'class' => 'XMLReader',
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
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'moveToAttribute' => 
    array (
      'name' => 'moveToAttribute',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'moveToAttributeNo' => 
    array (
      'name' => 'moveToAttributeNo',
      'class' => 'XMLReader',
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
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'moveToAttributeNs' => 
    array (
      'name' => 'moveToAttributeNs',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'moveToElement' => 
    array (
      'name' => 'moveToElement',
      'class' => 'XMLReader',
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
    'moveToFirstAttribute' => 
    array (
      'name' => 'moveToFirstAttribute',
      'class' => 'XMLReader',
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
    'moveToNextAttribute' => 
    array (
      'name' => 'moveToNextAttribute',
      'class' => 'XMLReader',
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
    'read' => 
    array (
      'name' => 'read',
      'class' => 'XMLReader',
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
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'open' => 
    array (
      'name' => 'open',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'uri' => 
        array (
          'position' => 0,
          'name' => 'uri',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 1,
          'name' => 'encoding',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'readInnerXml' => 
    array (
      'name' => 'readInnerXml',
      'class' => 'XMLReader',
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
    'readOuterXml' => 
    array (
      'name' => 'readOuterXml',
      'class' => 'XMLReader',
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
    'readString' => 
    array (
      'name' => 'readString',
      'class' => 'XMLReader',
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
    'setSchema' => 
    array (
      'name' => 'setSchema',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => '?string',
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
    'setParserProperty' => 
    array (
      'name' => 'setParserProperty',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'property' => 
        array (
          'position' => 0,
          'name' => 'property',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => 'bool',
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
    'setRelaxNGSchema' => 
    array (
      'name' => 'setRelaxNGSchema',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => '?string',
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
    'setRelaxNGSchemaSource' => 
    array (
      'name' => 'setRelaxNGSchemaSource',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'source' => 
        array (
          'position' => 0,
          'name' => 'source',
          'type' => '?string',
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
    'XML' => 
    array (
      'name' => 'XML',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'source' => 
        array (
          'position' => 0,
          'name' => 'source',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 1,
          'name' => 'encoding',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'expand' => 
    array (
      'name' => 'expand',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'baseNode' => 
        array (
          'position' => 0,
          'name' => 'baseNode',
          'type' => '?DOMNode',
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
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'xmlreader',
  'toString' => 'Class [ <internal:xmlreader> class XMLReader ] {

  - Constants [22] {
    Constant [ public int NONE ] { 0 }
    Constant [ public int ELEMENT ] { 1 }
    Constant [ public int ATTRIBUTE ] { 2 }
    Constant [ public int TEXT ] { 3 }
    Constant [ public int CDATA ] { 4 }
    Constant [ public int ENTITY_REF ] { 5 }
    Constant [ public int ENTITY ] { 6 }
    Constant [ public int PI ] { 7 }
    Constant [ public int COMMENT ] { 8 }
    Constant [ public int DOC ] { 9 }
    Constant [ public int DOC_TYPE ] { 10 }
    Constant [ public int DOC_FRAGMENT ] { 11 }
    Constant [ public int NOTATION ] { 12 }
    Constant [ public int WHITESPACE ] { 13 }
    Constant [ public int SIGNIFICANT_WHITESPACE ] { 14 }
    Constant [ public int END_ELEMENT ] { 15 }
    Constant [ public int END_ENTITY ] { 16 }
    Constant [ public int XML_DECLARATION ] { 17 }
    Constant [ public int LOADDTD ] { 1 }
    Constant [ public int DEFAULTATTRS ] { 2 }
    Constant [ public int VALIDATE ] { 3 }
    Constant [ public int SUBST_ENTITIES ] { 4 }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:xmlreader> static public method open ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $uri ]
        Parameter #1 [ <optional> ?string $encoding = null ]
        Parameter #2 [ <optional> int $flags = 0 ]
      }
    }

    Method [ <internal:xmlreader> static public method XML ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $source ]
        Parameter #1 [ <optional> ?string $encoding = null ]
        Parameter #2 [ <optional> int $flags = 0 ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [23] {
    Method [ <internal:xmlreader> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method getAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
    }

    Method [ <internal:xmlreader> public method getAttributeNo ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
    }

    Method [ <internal:xmlreader> public method getAttributeNs ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> string $namespace ]
      }
    }

    Method [ <internal:xmlreader> public method getParserProperty ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $property ]
      }
    }

    Method [ <internal:xmlreader> public method isValid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method lookupNamespace ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $prefix ]
      }
    }

    Method [ <internal:xmlreader> public method moveToAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
    }

    Method [ <internal:xmlreader> public method moveToAttributeNo ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
    }

    Method [ <internal:xmlreader> public method moveToAttributeNs ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> string $namespace ]
      }
    }

    Method [ <internal:xmlreader> public method moveToElement ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method moveToFirstAttribute ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method moveToNextAttribute ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method read ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method next ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $name = null ]
      }
    }

    Method [ <internal:xmlreader> public method readInnerXml ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method readOuterXml ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method readString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method setSchema ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $filename ]
      }
    }

    Method [ <internal:xmlreader> public method setParserProperty ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $property ]
        Parameter #1 [ <required> bool $value ]
      }
    }

    Method [ <internal:xmlreader> public method setRelaxNGSchema ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $filename ]
      }
    }

    Method [ <internal:xmlreader> public method setRelaxNGSchemaSource ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $source ]
      }
    }

    Method [ <internal:xmlreader> public method expand ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?DOMNode $baseNode = null ]
      }
    }
  }
}
',
  'modifiers' => 0,
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
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
