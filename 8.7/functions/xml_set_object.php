<?php

return array (
  'type' => 'function',
  'name' => 'xml_set_object',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'xml_set_object',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'xml_set_object function (php.net)',
        'url' => 'https://www.php.net/manual/function.xml-set-object.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'xml',
  'toString' => 'Function [ <internal, deprecated:xml> function xml_set_object ] {

  - Parameters [2] {
    Parameter #0 [ <required> XMLParser $parser ]
    Parameter #1 [ <required> object $object ]
  }
  - Return [ true ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.4',
          'message' => 'provide a proper method callable to xml_set_*_handler() functions',
        ),
      ),
    ),
  ),
);
