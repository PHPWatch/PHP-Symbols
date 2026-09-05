<?php

return array (
  'type' => 'class',
  'name' => 'Uri\\Rfc3986\\UriType',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Uri\\Rfc3986\\UriType',
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
        'name' => 'Uri\\Rfc3986\\UriType interface (php.net)',
        'url' => 'https://www.php.net/manual/class.uri-rfc3986-uritype.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Uri\\Rfc3986',
  'constants' => 
  array (
    'AbsolutePathReference' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Uri\\Rfc3986\\UriType AbsolutePathReference ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'RelativePathReference' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Uri\\Rfc3986\\UriType RelativePathReference ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'NetworkPathReference' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Uri\\Rfc3986\\UriType NetworkPathReference ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Uri' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Uri\\Rfc3986\\UriType Uri ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
  ),
  'methods' => 
  array (
    'cases' => 
    array (
      'name' => 'cases',
      'class' => 'Uri\\Rfc3986\\UriType',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
    0 => 'UnitEnum',
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'Uri\\Rfc3986\\UriType',
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
  'extension' => 'uri',
  'toString' => 'Enum [ <internal:uri> enum Uri\\Rfc3986\\UriType implements UnitEnum ] {

  - Enum cases [4] {
    Case AbsolutePathReference
    Case RelativePathReference
    Case NetworkPathReference
    Case Uri
  }

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:uri, prototype UnitEnum> static public method cases ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }

  - Properties [1] {
    Property [ public protected(set) readonly string $name ]
  }

  - Methods [0] {
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
  'is_instantiable' => false,
  'is_read_only' => false,
);
