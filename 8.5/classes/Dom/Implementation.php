<?php

return array (
  'type' => 'class',
  'name' => 'Dom\\Implementation',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Dom\\Implementation',
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
        'name' => 'Dom\\Implementation class (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-implementation.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => 'Dom',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'createDocumentType' => 
    array (
      'name' => 'createDocumentType',
      'class' => 'Dom\\Implementation',
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
        'publicId' => 
        array (
          'position' => 1,
          'name' => 'publicId',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'systemId' => 
        array (
          'position' => 2,
          'name' => 'systemId',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\DocumentType',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createDocument' => 
    array (
      'name' => 'createDocument',
      'class' => 'Dom\\Implementation',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'qualifiedName' => 
        array (
          'position' => 1,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'doctype' => 
        array (
          'position' => 2,
          'name' => 'doctype',
          'type' => '?Dom\\DocumentType',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\XMLDocument',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createHTMLDocument' => 
    array (
      'name' => 'createHTMLDocument',
      'class' => 'Dom\\Implementation',
      'parameters' => 
      array (
        'title' => 
        array (
          'position' => 0,
          'name' => 'title',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\HTMLDocument',
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
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'dom',
  'toString' => 'Class [ <internal:dom> class Dom\\Implementation ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [3] {
    Method [ <internal:dom> public method createDocumentType ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $qualifiedName ]
        Parameter #1 [ <required> string $publicId ]
        Parameter #2 [ <required> string $systemId ]
      }
      - Return [ Dom\\DocumentType ]
    }

    Method [ <internal:dom> public method createDocument ] {

      - Parameters [3] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $qualifiedName ]
        Parameter #2 [ <optional> ?Dom\\DocumentType $doctype = null ]
      }
      - Return [ Dom\\XMLDocument ]
    }

    Method [ <internal:dom> public method createHTMLDocument ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $title = null ]
      }
      - Return [ Dom\\HTMLDocument ]
    }
  }
}
',
);
