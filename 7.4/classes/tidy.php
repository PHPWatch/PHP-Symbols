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
          'type' => NULL,
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
        'file' => 
        array (
          'position' => 0,
          'name' => 'file',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'config_options' => 
        array (
          'position' => 1,
          'name' => 'config_options',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 2,
          'name' => 'encoding',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'use_include_path' => 
        array (
          'position' => 3,
          'name' => 'use_include_path',
          'type' => NULL,
          'is_optional' => true,
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
    'parseString' => 
    array (
      'name' => 'parseString',
      'class' => 'tidy',
      'parameters' => 
      array (
        'input' => 
        array (
          'position' => 0,
          'name' => 'input',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'config_options' => 
        array (
          'position' => 1,
          'name' => 'config_options',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 2,
          'name' => 'encoding',
          'type' => NULL,
          'is_optional' => true,
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
    'repairString' => 
    array (
      'name' => 'repairString',
      'class' => 'tidy',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'config_file' => 
        array (
          'position' => 1,
          'name' => 'config_file',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 2,
          'name' => 'encoding',
          'type' => NULL,
          'is_optional' => true,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'config_file' => 
        array (
          'position' => 1,
          'name' => 'config_file',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 2,
          'name' => 'encoding',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'use_include_path' => 
        array (
          'position' => 3,
          'name' => 'use_include_path',
          'type' => NULL,
          'is_optional' => true,
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
        'optname' => 
        array (
          'position' => 0,
          'name' => 'optname',
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'config_file' => 
        array (
          'position' => 1,
          'name' => 'config_file',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 2,
          'name' => 'encoding',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'use_include_path' => 
        array (
          'position' => 3,
          'name' => 'use_include_path',
          'type' => NULL,
          'is_optional' => true,
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
  'extension' => 'tidy',
  'toString' => 'Class [ <internal:tidy> class tidy ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [19] {
    Method [ <internal:tidy> public method getOpt ] {

      - Parameters [1] {
        Parameter #0 [ <required> $option ]
      }
    }

    Method [ <internal:tidy> public method cleanRepair ] {
    }

    Method [ <internal:tidy> public method parseFile ] {

      - Parameters [4] {
        Parameter #0 [ <required> $file ]
        Parameter #1 [ <optional> $config_options ]
        Parameter #2 [ <optional> $encoding ]
        Parameter #3 [ <optional> $use_include_path ]
      }
    }

    Method [ <internal:tidy> public method parseString ] {

      - Parameters [3] {
        Parameter #0 [ <required> $input ]
        Parameter #1 [ <optional> $config_options ]
        Parameter #2 [ <optional> $encoding ]
      }
    }

    Method [ <internal:tidy> public method repairString ] {

      - Parameters [3] {
        Parameter #0 [ <required> $data ]
        Parameter #1 [ <optional> $config_file ]
        Parameter #2 [ <optional> $encoding ]
      }
    }

    Method [ <internal:tidy> public method repairFile ] {

      - Parameters [4] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $config_file ]
        Parameter #2 [ <optional> $encoding ]
        Parameter #3 [ <optional> $use_include_path ]
      }
    }

    Method [ <internal:tidy> public method diagnose ] {
    }

    Method [ <internal:tidy> public method getRelease ] {
    }

    Method [ <internal:tidy> public method getConfig ] {
    }

    Method [ <internal:tidy> public method getStatus ] {
    }

    Method [ <internal:tidy> public method getHtmlVer ] {
    }

    Method [ <internal:tidy> public method getOptDoc ] {

      - Parameters [1] {
        Parameter #0 [ <required> $optname ]
      }
    }

    Method [ <internal:tidy> public method isXhtml ] {
    }

    Method [ <internal:tidy> public method isXml ] {
    }

    Method [ <internal:tidy> public method root ] {
    }

    Method [ <internal:tidy> public method head ] {
    }

    Method [ <internal:tidy> public method html ] {
    }

    Method [ <internal:tidy> public method body ] {
    }

    Method [ <internal:tidy, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <optional> $filename ]
        Parameter #1 [ <optional> $config_file ]
        Parameter #2 [ <optional> $encoding ]
        Parameter #3 [ <optional> $use_include_path ]
      }
    }
  }
}
',
);
