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
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'TYPE_VOID' => 0,
    'TYPE_FLOAT' => 1,
    'TYPE_DOUBLE' => 2,
    'TYPE_LONGDOUBLE' => 3,
    'TYPE_UINT8' => 4,
    'TYPE_SINT8' => 5,
    'TYPE_UINT16' => 6,
    'TYPE_SINT16' => 7,
    'TYPE_UINT32' => 8,
    'TYPE_SINT32' => 9,
    'TYPE_UINT64' => 10,
    'TYPE_SINT64' => 11,
    'TYPE_ENUM' => 12,
    'TYPE_BOOL' => 13,
    'TYPE_CHAR' => 14,
    'TYPE_POINTER' => 15,
    'TYPE_FUNC' => 16,
    'TYPE_ARRAY' => 17,
    'TYPE_STRUCT' => 18,
    'ATTR_CONST' => 1,
    'ATTR_INCOMPLETE_TAG' => 2,
    'ATTR_VARIADIC' => 4,
    'ATTR_INCOMPLETE_ARRAY' => 8,
    'ATTR_VLA' => 16,
    'ATTR_UNION' => 32,
    'ATTR_PACKED' => 64,
    'ATTR_MS_STRUCT' => 128,
    'ATTR_GCC_STRUCT' => 256,
    'ABI_DEFAULT' => 0,
    'ABI_CDECL' => 1,
    'ABI_FASTCALL' => 2,
    'ABI_THISCALL' => 3,
    'ABI_STDCALL' => 4,
    'ABI_PASCAL' => 5,
    'ABI_REGISTER' => 6,
    'ABI_MS' => 7,
    'ABI_SYSV' => 8,
    'ABI_VECTORCALL' => 9,
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
);
