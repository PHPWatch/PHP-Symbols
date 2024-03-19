<?php

return array (
  'type' => 'class',
  'name' => 'Composer\\Autoload\\ClassLoader',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Composer\\Autoload\\ClassLoader',
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
        'name' => 'Composer\\Autoload\\ClassLoader class (php.net)',
        'url' => 'https://www.php.net/manual/class.composer-autoload-classloader.php',
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
    'vendorDir' => 
    array (
      'name' => 'vendorDir',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'prefixLengthsPsr4' => 
    array (
      'name' => 'prefixLengthsPsr4',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'prefixDirsPsr4' => 
    array (
      'name' => 'prefixDirsPsr4',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'fallbackDirsPsr4' => 
    array (
      'name' => 'fallbackDirsPsr4',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'prefixesPsr0' => 
    array (
      'name' => 'prefixesPsr0',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'fallbackDirsPsr0' => 
    array (
      'name' => 'fallbackDirsPsr0',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'useIncludePath' => 
    array (
      'name' => 'useIncludePath',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'classMap' => 
    array (
      'name' => 'classMap',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'classMapAuthoritative' => 
    array (
      'name' => 'classMapAuthoritative',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'missingClasses' => 
    array (
      'name' => 'missingClasses',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'apcuPrefix' => 
    array (
      'name' => 'apcuPrefix',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'registeredLoaders' => 
    array (
      'name' => 'registeredLoaders',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => true,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'parameters' => 
      array (
        'vendorDir' => 
        array (
          'position' => 0,
          'name' => 'vendorDir',
          'type' => NULL,
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
    'getPrefixes' => 
    array (
      'name' => 'getPrefixes',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
    'getPrefixesPsr4' => 
    array (
      'name' => 'getPrefixesPsr4',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
    'getFallbackDirs' => 
    array (
      'name' => 'getFallbackDirs',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
    'getFallbackDirsPsr4' => 
    array (
      'name' => 'getFallbackDirsPsr4',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
    'getClassMap' => 
    array (
      'name' => 'getClassMap',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
    'addClassMap' => 
    array (
      'name' => 'addClassMap',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'parameters' => 
      array (
        'classMap' => 
        array (
          'position' => 0,
          'name' => 'classMap',
          'type' => 'array',
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
    'add' => 
    array (
      'name' => 'add',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
        'paths' => 
        array (
          'position' => 1,
          'name' => 'paths',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'prepend' => 
        array (
          'position' => 2,
          'name' => 'prepend',
          'type' => NULL,
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
    'addPsr4' => 
    array (
      'name' => 'addPsr4',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
        'paths' => 
        array (
          'position' => 1,
          'name' => 'paths',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'prepend' => 
        array (
          'position' => 2,
          'name' => 'prepend',
          'type' => NULL,
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
    'set' => 
    array (
      'name' => 'set',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
        'paths' => 
        array (
          'position' => 1,
          'name' => 'paths',
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
    'setPsr4' => 
    array (
      'name' => 'setPsr4',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
        'paths' => 
        array (
          'position' => 1,
          'name' => 'paths',
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
    'setUseIncludePath' => 
    array (
      'name' => 'setUseIncludePath',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'parameters' => 
      array (
        'useIncludePath' => 
        array (
          'position' => 0,
          'name' => 'useIncludePath',
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
    'getUseIncludePath' => 
    array (
      'name' => 'getUseIncludePath',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
    'setClassMapAuthoritative' => 
    array (
      'name' => 'setClassMapAuthoritative',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'parameters' => 
      array (
        'classMapAuthoritative' => 
        array (
          'position' => 0,
          'name' => 'classMapAuthoritative',
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
    'isClassMapAuthoritative' => 
    array (
      'name' => 'isClassMapAuthoritative',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
    'setApcuPrefix' => 
    array (
      'name' => 'setApcuPrefix',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'parameters' => 
      array (
        'apcuPrefix' => 
        array (
          'position' => 0,
          'name' => 'apcuPrefix',
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
    'getApcuPrefix' => 
    array (
      'name' => 'getApcuPrefix',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
    'register' => 
    array (
      'name' => 'register',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'parameters' => 
      array (
        'prepend' => 
        array (
          'position' => 0,
          'name' => 'prepend',
          'type' => NULL,
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
    'unregister' => 
    array (
      'name' => 'unregister',
      'class' => 'Composer\\Autoload\\ClassLoader',
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
    'loadClass' => 
    array (
      'name' => 'loadClass',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'parameters' => 
      array (
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
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
    'findFile' => 
    array (
      'name' => 'findFile',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'parameters' => 
      array (
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
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
    'getRegisteredLoaders' => 
    array (
      'name' => 'getRegisteredLoaders',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'findFileWithExtension' => 
    array (
      'name' => 'findFileWithExtension',
      'class' => 'Composer\\Autoload\\ClassLoader',
      'parameters' => 
      array (
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'ext' => 
        array (
          'position' => 1,
          'name' => 'ext',
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
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
);
