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
        'name' => 'XMLReader class (php.net)',
        'url' => 'https://www.php.net/manual/class.xmlreader.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'NONE' => 0,
    'ELEMENT' => 1,
    'ATTRIBUTE' => 2,
    'TEXT' => 3,
    'CDATA' => 4,
    'ENTITY_REF' => 5,
    'ENTITY' => 6,
    'PI' => 7,
    'COMMENT' => 8,
    'DOC' => 9,
    'DOC_TYPE' => 10,
    'DOC_FRAGMENT' => 11,
    'NOTATION' => 12,
    'WHITESPACE' => 13,
    'SIGNIFICANT_WHITESPACE' => 14,
    'END_ELEMENT' => 15,
    'END_ENTITY' => 16,
    'XML_DECLARATION' => 17,
    'LOADDTD' => 1,
    'DEFAULTATTRS' => 2,
    'VALIDATE' => 3,
    'SUBST_ENTITIES' => 4,
  ),
  'properties' => 
  array (
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'namespaceURI' => 
        array (
          'position' => 1,
          'name' => 'namespaceURI',
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'namespaceURI' => 
        array (
          'position' => 1,
          'name' => 'namespaceURI',
          'type' => NULL,
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
    'open' => 
    array (
      'name' => 'open',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'URI' => 
        array (
          'position' => 0,
          'name' => 'URI',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 1,
          'name' => 'encoding',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => NULL,
          'is_optional' => true,
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
        'localname' => 
        array (
          'position' => 0,
          'name' => 'localname',
          'type' => NULL,
          'is_optional' => true,
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 1,
          'name' => 'encoding',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => NULL,
          'is_optional' => true,
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
    'expand' => 
    array (
      'name' => 'expand',
      'class' => 'XMLReader',
      'parameters' => 
      array (
        'basenode' => 
        array (
          'position' => 0,
          'name' => 'basenode',
          'type' => NULL,
          'is_optional' => true,
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
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

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [25] {
    Method [ <internal:xmlreader> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method getAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:xmlreader> public method getAttributeNo ] {

      - Parameters [1] {
        Parameter #0 [ <required> $index ]
      }
    }

    Method [ <internal:xmlreader> public method getAttributeNs ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $namespaceURI ]
      }
    }

    Method [ <internal:xmlreader> public method getParserProperty ] {

      - Parameters [1] {
        Parameter #0 [ <required> $property ]
      }
    }

    Method [ <internal:xmlreader> public method isValid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method lookupNamespace ] {

      - Parameters [1] {
        Parameter #0 [ <required> $prefix ]
      }
    }

    Method [ <internal:xmlreader> public method moveToAttributeNo ] {

      - Parameters [1] {
        Parameter #0 [ <required> $index ]
      }
    }

    Method [ <internal:xmlreader> public method moveToAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:xmlreader> public method moveToAttributeNs ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $namespaceURI ]
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

    Method [ <internal:xmlreader> public method open ] {

      - Parameters [3] {
        Parameter #0 [ <required> $URI ]
        Parameter #1 [ <optional> $encoding ]
        Parameter #2 [ <optional> $options ]
      }
    }

    Method [ <internal:xmlreader> public method read ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlreader> public method next ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $localname ]
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
        Parameter #0 [ <required> $filename ]
      }
    }

    Method [ <internal:xmlreader> public method setParserProperty ] {

      - Parameters [2] {
        Parameter #0 [ <required> $property ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:xmlreader> public method setRelaxNGSchema ] {

      - Parameters [1] {
        Parameter #0 [ <required> $filename ]
      }
    }

    Method [ <internal:xmlreader> public method setRelaxNGSchemaSource ] {

      - Parameters [1] {
        Parameter #0 [ <required> $source ]
      }
    }

    Method [ <internal:xmlreader> public method XML ] {

      - Parameters [3] {
        Parameter #0 [ <required> $source ]
        Parameter #1 [ <optional> $encoding ]
        Parameter #2 [ <optional> $options ]
      }
    }

    Method [ <internal:xmlreader> public method expand ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $basenode ]
      }
    }
  }
}
',
);
