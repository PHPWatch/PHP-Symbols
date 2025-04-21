<?php

return array (
  'type' => 'class',
  'name' => 'DOMImplementation',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DOMImplementation',
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
        'name' => 'DOMImplementation class (php.net)',
        'url' => 'https://www.php.net/manual/class.domimplementation.php',
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
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'getFeature' => 
    array (
      'name' => 'getFeature',
      'class' => 'DOMImplementation',
      'parameters' => 
      array (
        'feature' => 
        array (
          'position' => 0,
          'name' => 'feature',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'version' => 
        array (
          'position' => 1,
          'name' => 'version',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'hasFeature' => 
    array (
      'name' => 'hasFeature',
      'class' => 'DOMImplementation',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createDocumentType' => 
    array (
      'name' => 'createDocumentType',
      'class' => 'DOMImplementation',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'publicId' => 
        array (
          'position' => 1,
          'name' => 'publicId',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'systemId' => 
        array (
          'position' => 2,
          'name' => 'systemId',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'createDocument' => 
    array (
      'name' => 'createDocument',
      'class' => 'DOMImplementation',
      'parameters' => 
      array (
        'namespaceURI' => 
        array (
          'position' => 0,
          'name' => 'namespaceURI',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'qualifiedName' => 
        array (
          'position' => 1,
          'name' => 'qualifiedName',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'docType' => 
        array (
          'position' => 2,
          'name' => 'docType',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
  'extension' => 'dom',
  'toString' => 'Class [ <internal:dom> class DOMImplementation ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [4] {
    Method [ <internal:dom> public method getFeature ] {

      - Parameters [2] {
        Parameter #0 [ <required> $feature ]
        Parameter #1 [ <required> $version ]
      }
    }

    Method [ <internal:dom> public method hasFeature ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:dom> public method createDocumentType ] {

      - Parameters [3] {
        Parameter #0 [ <required> $qualifiedName ]
        Parameter #1 [ <required> $publicId ]
        Parameter #2 [ <required> $systemId ]
      }
    }

    Method [ <internal:dom> public method createDocument ] {

      - Parameters [3] {
        Parameter #0 [ <required> $namespaceURI ]
        Parameter #1 [ <required> $qualifiedName ]
        Parameter #2 [ <required> DOMDocumentType $docType ]
      }
    }
  }
}
',
);
