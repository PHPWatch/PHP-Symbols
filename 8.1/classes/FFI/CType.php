<?php

return array (
  'type' => 'class',
  'name' => 'FFI\\CType',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'FFI\\CType',
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
        'name' => 'FFI\\CType class (php.net)',
        'url' => 'https://www.php.net/manual/class.ffi-ctype.php',
      ),
    ),
  ),
  'modifiers' => 32,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => 'FFI',
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
    'getName' => 
    array (
      'name' => 'getName',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getKind' => 
    array (
      'name' => 'getKind',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getSize' => 
    array (
      'name' => 'getSize',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAlignment' => 
    array (
      'name' => 'getAlignment',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAttributes' => 
    array (
      'name' => 'getAttributes',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getEnumKind' => 
    array (
      'name' => 'getEnumKind',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getArrayElementType' => 
    array (
      'name' => 'getArrayElementType',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'FFI\\CType',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getArrayLength' => 
    array (
      'name' => 'getArrayLength',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPointerType' => 
    array (
      'name' => 'getPointerType',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'FFI\\CType',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getStructFieldNames' => 
    array (
      'name' => 'getStructFieldNames',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getStructFieldOffset' => 
    array (
      'name' => 'getStructFieldOffset',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getStructFieldType' => 
    array (
      'name' => 'getStructFieldType',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'FFI\\CType',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFuncABI' => 
    array (
      'name' => 'getFuncABI',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFuncReturnType' => 
    array (
      'name' => 'getFuncReturnType',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'FFI\\CType',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFuncParameterCount' => 
    array (
      'name' => 'getFuncParameterCount',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFuncParameterType' => 
    array (
      'name' => 'getFuncParameterType',
      'class' => 'FFI\\CType',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'FFI\\CType',
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
  'is_final' => true,
  'is_read_only' => false,
  'extension' => 'FFI',
  'toString' => 'Class [ <internal:FFI> final class FFI\\CType ] {

  - Constants [38] {
    Constant [ public int TYPE_VOID ] { 0 }
    Constant [ public int TYPE_FLOAT ] { 1 }
    Constant [ public int TYPE_DOUBLE ] { 2 }
    Constant [ public int TYPE_LONGDOUBLE ] { 3 }
    Constant [ public int TYPE_UINT8 ] { 4 }
    Constant [ public int TYPE_SINT8 ] { 5 }
    Constant [ public int TYPE_UINT16 ] { 6 }
    Constant [ public int TYPE_SINT16 ] { 7 }
    Constant [ public int TYPE_UINT32 ] { 8 }
    Constant [ public int TYPE_SINT32 ] { 9 }
    Constant [ public int TYPE_UINT64 ] { 10 }
    Constant [ public int TYPE_SINT64 ] { 11 }
    Constant [ public int TYPE_ENUM ] { 12 }
    Constant [ public int TYPE_BOOL ] { 13 }
    Constant [ public int TYPE_CHAR ] { 14 }
    Constant [ public int TYPE_POINTER ] { 15 }
    Constant [ public int TYPE_FUNC ] { 16 }
    Constant [ public int TYPE_ARRAY ] { 17 }
    Constant [ public int TYPE_STRUCT ] { 18 }
    Constant [ public int ATTR_CONST ] { 1 }
    Constant [ public int ATTR_INCOMPLETE_TAG ] { 2 }
    Constant [ public int ATTR_VARIADIC ] { 4 }
    Constant [ public int ATTR_INCOMPLETE_ARRAY ] { 8 }
    Constant [ public int ATTR_VLA ] { 16 }
    Constant [ public int ATTR_UNION ] { 32 }
    Constant [ public int ATTR_PACKED ] { 64 }
    Constant [ public int ATTR_MS_STRUCT ] { 128 }
    Constant [ public int ATTR_GCC_STRUCT ] { 256 }
    Constant [ public int ABI_DEFAULT ] { 0 }
    Constant [ public int ABI_CDECL ] { 1 }
    Constant [ public int ABI_FASTCALL ] { 2 }
    Constant [ public int ABI_THISCALL ] { 3 }
    Constant [ public int ABI_STDCALL ] { 4 }
    Constant [ public int ABI_PASCAL ] { 5 }
    Constant [ public int ABI_REGISTER ] { 6 }
    Constant [ public int ABI_MS ] { 7 }
    Constant [ public int ABI_SYSV ] { 8 }
    Constant [ public int ABI_VECTORCALL ] { 9 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [16] {
    Method [ <internal:FFI> public method getName ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:FFI> public method getKind ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:FFI> public method getSize ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:FFI> public method getAlignment ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:FFI> public method getAttributes ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:FFI> public method getEnumKind ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:FFI> public method getArrayElementType ] {

      - Parameters [0] {
      }
      - Return [ FFI\\CType ]
    }

    Method [ <internal:FFI> public method getArrayLength ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:FFI> public method getPointerType ] {

      - Parameters [0] {
      }
      - Return [ FFI\\CType ]
    }

    Method [ <internal:FFI> public method getStructFieldNames ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:FFI> public method getStructFieldOffset ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
      - Return [ int ]
    }

    Method [ <internal:FFI> public method getStructFieldType ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
      - Return [ FFI\\CType ]
    }

    Method [ <internal:FFI> public method getFuncABI ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:FFI> public method getFuncReturnType ] {

      - Parameters [0] {
      }
      - Return [ FFI\\CType ]
    }

    Method [ <internal:FFI> public method getFuncParameterCount ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:FFI> public method getFuncParameterType ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
      - Return [ FFI\\CType ]
    }
  }
}
',
);
