<?php

return array (
  'type' => 'class',
  'name' => 'XSLTProcessor',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'XSLTProcessor',
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
        'name' => 'XSLTProcessor class (php.net)',
        'url' => 'https://www.php.net/manual/class.xsltprocessor.php',
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
    'importStylesheet' => 
    array (
      'name' => 'importStylesheet',
      'class' => 'XSLTProcessor',
      'parameters' => 
      array (
        'stylesheet' => 
        array (
          'position' => 0,
          'name' => 'stylesheet',
          'type' => 'object',
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
    'transformToDoc' => 
    array (
      'name' => 'transformToDoc',
      'class' => 'XSLTProcessor',
      'parameters' => 
      array (
        'document' => 
        array (
          'position' => 0,
          'name' => 'document',
          'type' => 'object',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'returnClass' => 
        array (
          'position' => 1,
          'name' => 'returnClass',
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
    'transformToUri' => 
    array (
      'name' => 'transformToUri',
      'class' => 'XSLTProcessor',
      'parameters' => 
      array (
        'document' => 
        array (
          'position' => 0,
          'name' => 'document',
          'type' => 'object',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'uri' => 
        array (
          'position' => 1,
          'name' => 'uri',
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
    'transformToXml' => 
    array (
      'name' => 'transformToXml',
      'class' => 'XSLTProcessor',
      'parameters' => 
      array (
        'document' => 
        array (
          'position' => 0,
          'name' => 'document',
          'type' => 'object',
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
    'setParameter' => 
    array (
      'name' => 'setParameter',
      'class' => 'XSLTProcessor',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
          'type' => 'array|string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 2,
          'name' => 'value',
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
    'getParameter' => 
    array (
      'name' => 'getParameter',
      'class' => 'XSLTProcessor',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
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
    'removeParameter' => 
    array (
      'name' => 'removeParameter',
      'class' => 'XSLTProcessor',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
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
    'hasExsltSupport' => 
    array (
      'name' => 'hasExsltSupport',
      'class' => 'XSLTProcessor',
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
    'registerPHPFunctions' => 
    array (
      'name' => 'registerPHPFunctions',
      'class' => 'XSLTProcessor',
      'parameters' => 
      array (
        'functions' => 
        array (
          'position' => 0,
          'name' => 'functions',
          'type' => 'array|string|null',
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
    'setProfiling' => 
    array (
      'name' => 'setProfiling',
      'class' => 'XSLTProcessor',
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
    'setSecurityPrefs' => 
    array (
      'name' => 'setSecurityPrefs',
      'class' => 'XSLTProcessor',
      'parameters' => 
      array (
        'preferences' => 
        array (
          'position' => 0,
          'name' => 'preferences',
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
    'getSecurityPrefs' => 
    array (
      'name' => 'getSecurityPrefs',
      'class' => 'XSLTProcessor',
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
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'xsl',
  'toString' => 'Class [ <internal:xsl> class XSLTProcessor ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [12] {
    Method [ <internal:xsl> public method importStylesheet ] {

      - Parameters [1] {
        Parameter #0 [ <required> object $stylesheet ]
      }
    }

    Method [ <internal:xsl> public method transformToDoc ] {

      - Parameters [2] {
        Parameter #0 [ <required> object $document ]
        Parameter #1 [ <optional> ?string $returnClass = null ]
      }
    }

    Method [ <internal:xsl> public method transformToUri ] {

      - Parameters [2] {
        Parameter #0 [ <required> object $document ]
        Parameter #1 [ <required> string $uri ]
      }
    }

    Method [ <internal:xsl> public method transformToXml ] {

      - Parameters [1] {
        Parameter #0 [ <required> object $document ]
      }
    }

    Method [ <internal:xsl> public method setParameter ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $namespace ]
        Parameter #1 [ <required> array|string $name ]
        Parameter #2 [ <optional> ?string $value = null ]
      }
    }

    Method [ <internal:xsl> public method getParameter ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $namespace ]
        Parameter #1 [ <required> string $name ]
      }
    }

    Method [ <internal:xsl> public method removeParameter ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $namespace ]
        Parameter #1 [ <required> string $name ]
      }
    }

    Method [ <internal:xsl> public method hasExsltSupport ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xsl> public method registerPHPFunctions ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array|string|null $functions = null ]
      }
    }

    Method [ <internal:xsl> public method setProfiling ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $filename ]
      }
    }

    Method [ <internal:xsl> public method setSecurityPrefs ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $preferences ]
      }
    }

    Method [ <internal:xsl> public method getSecurityPrefs ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
