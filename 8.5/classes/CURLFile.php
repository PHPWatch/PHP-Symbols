<?php

return array (
  'type' => 'class',
  'name' => 'CURLFile',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'CURLFile',
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
        'name' => 'CURLFile class (php.net)',
        'url' => 'https://www.php.net/manual/class.curlfile.php',
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
    'name' => 
    array (
      'name' => 'name',
      'class' => 'CURLFile',
      'type' => 'string',
      'has_default_value' => true,
      'default_value' => '',
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'mime' => 
    array (
      'name' => 'mime',
      'class' => 'CURLFile',
      'type' => 'string',
      'has_default_value' => true,
      'default_value' => '',
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'postname' => 
    array (
      'name' => 'postname',
      'class' => 'CURLFile',
      'type' => 'string',
      'has_default_value' => true,
      'default_value' => '',
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'CURLFile',
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
        'mime_type' => 
        array (
          'position' => 1,
          'name' => 'mime_type',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'posted_filename' => 
        array (
          'position' => 2,
          'name' => 'posted_filename',
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
    'getFilename' => 
    array (
      'name' => 'getFilename',
      'class' => 'CURLFile',
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
    'getMimeType' => 
    array (
      'name' => 'getMimeType',
      'class' => 'CURLFile',
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
    'getPostFilename' => 
    array (
      'name' => 'getPostFilename',
      'class' => 'CURLFile',
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
    'setMimeType' => 
    array (
      'name' => 'setMimeType',
      'class' => 'CURLFile',
      'parameters' => 
      array (
        'mime_type' => 
        array (
          'position' => 0,
          'name' => 'mime_type',
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
    'setPostFilename' => 
    array (
      'name' => 'setPostFilename',
      'class' => 'CURLFile',
      'parameters' => 
      array (
        'posted_filename' => 
        array (
          'position' => 0,
          'name' => 'posted_filename',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:curl> class CURLFile ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [3] {
    Property [ public string $name = \'\' ]
    Property [ public string $mime = \'\' ]
    Property [ public string $postname = \'\' ]
  }

  - Methods [6] {
    Method [ <internal:curl, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> ?string $mime_type = null ]
        Parameter #2 [ <optional> ?string $posted_filename = null ]
      }
    }

    Method [ <internal:curl> public method getFilename ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:curl> public method getMimeType ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:curl> public method getPostFilename ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:curl> public method setMimeType ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $mime_type ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:curl> public method setPostFilename ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $posted_filename ]
      }
      - Tentative return [ void ]
    }
  }
}
',
);
