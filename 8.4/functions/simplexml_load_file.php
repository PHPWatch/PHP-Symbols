<?php

return array (
  'type' => 'function',
  'name' => 'simplexml_load_file',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'simplexml_load_file',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'simplexml_load_file function (php.net)',
        'url' => 'https://www.php.net/manual/function.simplexml-load-file.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 
    \ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'SimpleXML',
  'toString' => 'Function [ <internal:SimpleXML> function simplexml_load_file ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $filename ]
    Parameter #1 [ <optional> ?string $class_name = SimpleXMLElement::class ]
    Parameter #2 [ <optional> int $options = 0 ]
    Parameter #3 [ <optional> string $namespace_or_prefix = "" ]
    Parameter #4 [ <optional> bool $is_prefix = false ]
  }
  - Return [ SimpleXMLElement|false ]
}
',
);
