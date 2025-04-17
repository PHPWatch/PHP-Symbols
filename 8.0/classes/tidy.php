<?php

return array (
  'type' => 'class',
  'name' => 'tidy',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'tidy',
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
        'name' => 'tidy class (php.net)',
        'url' => 'https://www.php.net/manual/class.tidy.php',
      ),
    ),
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'tidy',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'config' => 
        array (
          'position' => 1,
          'name' => 'config',
          'type' => 'array|string|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 2,
          'name' => 'encoding',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'useIncludePath' => 
        array (
          'position' => 3,
          'name' => 'useIncludePath',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
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
    'getOpt' => 
    array (
      'name' => 'getOpt',
      'class' => 'tidy',
      'parameters' => 
      array (
        'option' => 
        array (
          'position' => 0,
          'name' => 'option',
          'type' => 'string',
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
    'cleanRepair' => 
    array (
      'name' => 'cleanRepair',
      'class' => 'tidy',
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
    'parseFile' => 
    array (
      'name' => 'parseFile',
      'class' => 'tidy',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'config' => 
        array (
          'position' => 1,
          'name' => 'config',
          'type' => 'array|string|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 2,
          'name' => 'encoding',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'useIncludePath' => 
        array (
          'position' => 3,
          'name' => 'useIncludePath',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
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
    'parseString' => 
    array (
      'name' => 'parseString',
      'class' => 'tidy',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'config' => 
        array (
          'position' => 1,
          'name' => 'config',
          'type' => 'array|string|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 2,
          'name' => 'encoding',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
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
    'repairString' => 
    array (
      'name' => 'repairString',
      'class' => 'tidy',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'config' => 
        array (
          'position' => 1,
          'name' => 'config',
          'type' => 'array|string|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 2,
          'name' => 'encoding',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
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
    'repairFile' => 
    array (
      'name' => 'repairFile',
      'class' => 'tidy',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'config' => 
        array (
          'position' => 1,
          'name' => 'config',
          'type' => 'array|string|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 2,
          'name' => 'encoding',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'useIncludePath' => 
        array (
          'position' => 3,
          'name' => 'useIncludePath',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
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
    'diagnose' => 
    array (
      'name' => 'diagnose',
      'class' => 'tidy',
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
    'getRelease' => 
    array (
      'name' => 'getRelease',
      'class' => 'tidy',
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
    'getConfig' => 
    array (
      'name' => 'getConfig',
      'class' => 'tidy',
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
    'getStatus' => 
    array (
      'name' => 'getStatus',
      'class' => 'tidy',
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
    'getHtmlVer' => 
    array (
      'name' => 'getHtmlVer',
      'class' => 'tidy',
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
    'getOptDoc' => 
    array (
      'name' => 'getOptDoc',
      'class' => 'tidy',
      'parameters' => 
      array (
        'option' => 
        array (
          'position' => 0,
          'name' => 'option',
          'type' => 'string',
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
    'isXhtml' => 
    array (
      'name' => 'isXhtml',
      'class' => 'tidy',
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
    'isXml' => 
    array (
      'name' => 'isXml',
      'class' => 'tidy',
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
    'root' => 
    array (
      'name' => 'root',
      'class' => 'tidy',
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
    'head' => 
    array (
      'name' => 'head',
      'class' => 'tidy',
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
    'html' => 
    array (
      'name' => 'html',
      'class' => 'tidy',
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
    'body' => 
    array (
      'name' => 'body',
      'class' => 'tidy',
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
  'extension' => 'tidy',
  'toString' => 'Class [ <internal:tidy> class tidy ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:tidy> static public method repairString ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> array|string|null $config = null ]
        Parameter #2 [ <optional> ?string $encoding = null ]
      }
    }

    Method [ <internal:tidy> static public method repairFile ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> array|string|null $config = null ]
        Parameter #2 [ <optional> ?string $encoding = null ]
        Parameter #3 [ <optional> bool $useIncludePath = false ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [17] {
    Method [ <internal:tidy, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <optional> ?string $filename = null ]
        Parameter #1 [ <optional> array|string|null $config = null ]
        Parameter #2 [ <optional> ?string $encoding = null ]
        Parameter #3 [ <optional> bool $useIncludePath = false ]
      }
    }

    Method [ <internal:tidy> public method getOpt ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $option ]
      }
    }

    Method [ <internal:tidy> public method cleanRepair ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method parseFile ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> array|string|null $config = null ]
        Parameter #2 [ <optional> ?string $encoding = null ]
        Parameter #3 [ <optional> bool $useIncludePath = false ]
      }
    }

    Method [ <internal:tidy> public method parseString ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> array|string|null $config = null ]
        Parameter #2 [ <optional> ?string $encoding = null ]
      }
    }

    Method [ <internal:tidy> public method diagnose ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method getRelease ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method getConfig ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method getStatus ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method getHtmlVer ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method getOptDoc ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $option ]
      }
    }

    Method [ <internal:tidy> public method isXhtml ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method isXml ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method root ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method head ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method html ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method body ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
