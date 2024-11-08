<?php

return array (
  'type' => 'extension',
  'name' => 'ast',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'ast',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'ast',
    )),
    'removed' => NULL,
    'version' => '1.1.2',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ast extension (php.net)',
        'url' => 'https://www.php.net/manual/book.ast.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'ast\\Node',
    1 => 'ast\\Metadata',
  ),
  'functions' => 
  array (
    'ast\\parse_code' => 'ast\\parse_code',
    'ast\\parse_file' => 'ast\\parse_file',
    'ast\\get_kind_name' => 'ast\\get_kind_name',
    'ast\\kind_uses_flags' => 'ast\\kind_uses_flags',
    'ast\\get_metadata' => 'ast\\get_metadata',
    'ast\\get_supported_versions' => 'ast\\get_supported_versions',
  ),
  'constants' => 
  array (
    'ast\\AST_ARG_LIST' => 128,
    'ast\\AST_LIST' => 255,
    'ast\\AST_ARRAY' => 129,
    'ast\\AST_ENCAPS_LIST' => 130,
    'ast\\AST_EXPR_LIST' => 131,
    'ast\\AST_STMT_LIST' => 132,
    'ast\\AST_IF' => 133,
    'ast\\AST_SWITCH_LIST' => 134,
    'ast\\AST_CATCH_LIST' => 135,
    'ast\\AST_PARAM_LIST' => 136,
    'ast\\AST_CLOSURE_USES' => 137,
    'ast\\AST_PROP_DECL' => 138,
    'ast\\AST_CONST_DECL' => 139,
    'ast\\AST_CLASS_CONST_DECL' => 140,
    'ast\\AST_NAME_LIST' => 141,
    'ast\\AST_TRAIT_ADAPTATIONS' => 142,
    'ast\\AST_USE' => 143,
    'ast\\AST_TYPE_UNION' => 254,
    'ast\\AST_TYPE_INTERSECTION' => 250,
    'ast\\AST_ATTRIBUTE_LIST' => 253,
    'ast\\AST_ATTRIBUTE_GROUP' => 251,
    'ast\\AST_MATCH_ARM_LIST' => 252,
    'ast\\AST_NAME' => 2048,
    'ast\\AST_CLOSURE_VAR' => 2049,
    'ast\\AST_NULLABLE_TYPE' => 2050,
    'ast\\AST_FUNC_DECL' => 66,
    'ast\\AST_CLOSURE' => 67,
    'ast\\AST_METHOD' => 68,
    'ast\\AST_ARROW_FUNC' => 1535,
    'ast\\AST_CLASS' => 69,
    'ast\\AST_PROPERTY_HOOK' => 127,
    'ast\\AST_MAGIC_CONST' => 0,
    'ast\\AST_TYPE' => 1,
    'ast\\AST_CALLABLE_CONVERT' => 3,
    'ast\\AST_VAR' => 256,
    'ast\\AST_CONST' => 257,
    'ast\\AST_UNPACK' => 258,
    'ast\\AST_CAST' => 261,
    'ast\\AST_EMPTY' => 262,
    'ast\\AST_ISSET' => 263,
    'ast\\AST_SHELL_EXEC' => 265,
    'ast\\AST_CLONE' => 266,
    'ast\\AST_EXIT' => 267,
    'ast\\AST_PRINT' => 268,
    'ast\\AST_INCLUDE_OR_EVAL' => 269,
    'ast\\AST_UNARY_OP' => 270,
    'ast\\AST_PRE_INC' => 271,
    'ast\\AST_PRE_DEC' => 272,
    'ast\\AST_POST_INC' => 273,
    'ast\\AST_POST_DEC' => 274,
    'ast\\AST_YIELD_FROM' => 275,
    'ast\\AST_GLOBAL' => 276,
    'ast\\AST_UNSET' => 277,
    'ast\\AST_RETURN' => 278,
    'ast\\AST_LABEL' => 279,
    'ast\\AST_REF' => 280,
    'ast\\AST_HALT_COMPILER' => 281,
    'ast\\AST_ECHO' => 282,
    'ast\\AST_THROW' => 283,
    'ast\\AST_GOTO' => 284,
    'ast\\AST_BREAK' => 285,
    'ast\\AST_CONTINUE' => 286,
    'ast\\AST_CLASS_NAME' => 511,
    'ast\\AST_PROPERTY_HOOK_SHORT_BODY' => 510,
    'ast\\AST_CLASS_CONST_GROUP' => 766,
    'ast\\AST_DIM' => 512,
    'ast\\AST_PROP' => 513,
    'ast\\AST_NULLSAFE_PROP' => 761,
    'ast\\AST_STATIC_PROP' => 514,
    'ast\\AST_CALL' => 515,
    'ast\\AST_CLASS_CONST' => 516,
    'ast\\AST_ASSIGN' => 517,
    'ast\\AST_ASSIGN_REF' => 518,
    'ast\\AST_ASSIGN_OP' => 519,
    'ast\\AST_BINARY_OP' => 520,
    'ast\\AST_ARRAY_ELEM' => 525,
    'ast\\AST_NEW' => 526,
    'ast\\AST_INSTANCEOF' => 527,
    'ast\\AST_YIELD' => 528,
    'ast\\AST_STATIC' => 530,
    'ast\\AST_WHILE' => 531,
    'ast\\AST_DO_WHILE' => 532,
    'ast\\AST_IF_ELEM' => 533,
    'ast\\AST_SWITCH' => 534,
    'ast\\AST_SWITCH_CASE' => 535,
    'ast\\AST_DECLARE' => 536,
    'ast\\AST_PROP_ELEM' => 774,
    'ast\\AST_PROP_GROUP' => 767,
    'ast\\AST_CONST_ELEM' => 775,
    'ast\\AST_USE_TRAIT' => 537,
    'ast\\AST_TRAIT_PRECEDENCE' => 538,
    'ast\\AST_METHOD_REFERENCE' => 539,
    'ast\\AST_NAMESPACE' => 540,
    'ast\\AST_USE_ELEM' => 541,
    'ast\\AST_TRAIT_ALIAS' => 542,
    'ast\\AST_GROUP_USE' => 543,
    'ast\\AST_ATTRIBUTE' => 765,
    'ast\\AST_MATCH' => 764,
    'ast\\AST_MATCH_ARM' => 763,
    'ast\\AST_NAMED_ARG' => 762,
    'ast\\AST_METHOD_CALL' => 768,
    'ast\\AST_NULLSAFE_METHOD_CALL' => 1023,
    'ast\\AST_STATIC_CALL' => 769,
    'ast\\AST_CONDITIONAL' => 770,
    'ast\\AST_TRY' => 771,
    'ast\\AST_CATCH' => 772,
    'ast\\AST_FOR' => 1024,
    'ast\\AST_FOREACH' => 1025,
    'ast\\AST_ENUM_CASE' => 1022,
    'ast\\AST_PARAM' => 773,
    'ast\\flags\\NAME_FQ' => 0,
    'ast\\flags\\NAME_NOT_FQ' => 1,
    'ast\\flags\\NAME_RELATIVE' => 2,
    'ast\\flags\\MODIFIER_PUBLIC' => 256,
    'ast\\flags\\MODIFIER_PROTECTED' => 512,
    'ast\\flags\\MODIFIER_PRIVATE' => 1024,
    'ast\\flags\\MODIFIER_STATIC' => 1,
    'ast\\flags\\MODIFIER_ABSTRACT' => 2,
    'ast\\flags\\MODIFIER_FINAL' => 4,
    'ast\\flags\\MODIFIER_READONLY' => 128,
    'ast\\flags\\PARAM_MODIFIER_PUBLIC' => 4,
    'ast\\flags\\PARAM_MODIFIER_PROTECTED' => 8,
    'ast\\flags\\PARAM_MODIFIER_PRIVATE' => 16,
    'ast\\flags\\RETURNS_REF' => 67108864,
    'ast\\flags\\FUNC_RETURNS_REF' => 67108864,
    'ast\\flags\\FUNC_GENERATOR' => 8388608,
    'ast\\flags\\ARRAY_ELEM_REF' => 1,
    'ast\\flags\\CLOSURE_USE_REF' => 1,
    'ast\\flags\\CLASS_ABSTRACT' => 32,
    'ast\\flags\\CLASS_FINAL' => 4,
    'ast\\flags\\CLASS_TRAIT' => 128,
    'ast\\flags\\CLASS_INTERFACE' => 64,
    'ast\\flags\\CLASS_ANONYMOUS' => 256,
    'ast\\flags\\CLASS_ENUM' => 4194304,
    'ast\\flags\\CLASS_READONLY' => 8388608,
    'ast\\flags\\PARAM_REF' => 1,
    'ast\\flags\\PARAM_VARIADIC' => 2,
    'ast\\flags\\TYPE_NULL' => 1,
    'ast\\flags\\TYPE_FALSE' => 2,
    'ast\\flags\\TYPE_TRUE' => 3,
    'ast\\flags\\TYPE_BOOL' => 13,
    'ast\\flags\\TYPE_LONG' => 4,
    'ast\\flags\\TYPE_DOUBLE' => 5,
    'ast\\flags\\TYPE_STRING' => 6,
    'ast\\flags\\TYPE_ARRAY' => 7,
    'ast\\flags\\TYPE_OBJECT' => 8,
    'ast\\flags\\TYPE_CALLABLE' => 14,
    'ast\\flags\\TYPE_VOID' => 18,
    'ast\\flags\\TYPE_ITERABLE' => 19,
    'ast\\flags\\TYPE_STATIC' => 20,
    'ast\\flags\\TYPE_MIXED' => 21,
    'ast\\flags\\TYPE_NEVER' => 22,
    'ast\\flags\\UNARY_BOOL_NOT' => 13,
    'ast\\flags\\UNARY_BITWISE_NOT' => 12,
    'ast\\flags\\UNARY_SILENCE' => 260,
    'ast\\flags\\UNARY_PLUS' => 261,
    'ast\\flags\\UNARY_MINUS' => 262,
    'ast\\flags\\BINARY_BOOL_AND' => 259,
    'ast\\flags\\BINARY_BOOL_OR' => 258,
    'ast\\flags\\BINARY_BOOL_XOR' => 14,
    'ast\\flags\\BINARY_BITWISE_OR' => 9,
    'ast\\flags\\BINARY_BITWISE_AND' => 10,
    'ast\\flags\\BINARY_BITWISE_XOR' => 11,
    'ast\\flags\\BINARY_CONCAT' => 8,
    'ast\\flags\\BINARY_ADD' => 1,
    'ast\\flags\\BINARY_SUB' => 2,
    'ast\\flags\\BINARY_MUL' => 3,
    'ast\\flags\\BINARY_DIV' => 4,
    'ast\\flags\\BINARY_MOD' => 5,
    'ast\\flags\\BINARY_POW' => 166,
    'ast\\flags\\BINARY_SHIFT_LEFT' => 6,
    'ast\\flags\\BINARY_SHIFT_RIGHT' => 7,
    'ast\\flags\\BINARY_IS_IDENTICAL' => 15,
    'ast\\flags\\BINARY_IS_NOT_IDENTICAL' => 16,
    'ast\\flags\\BINARY_IS_EQUAL' => 17,
    'ast\\flags\\BINARY_IS_NOT_EQUAL' => 18,
    'ast\\flags\\BINARY_IS_SMALLER' => 19,
    'ast\\flags\\BINARY_IS_SMALLER_OR_EQUAL' => 20,
    'ast\\flags\\BINARY_IS_GREATER' => 256,
    'ast\\flags\\BINARY_IS_GREATER_OR_EQUAL' => 257,
    'ast\\flags\\BINARY_SPACESHIP' => 170,
    'ast\\flags\\BINARY_COALESCE' => 260,
    'ast\\flags\\EXEC_EVAL' => 1,
    'ast\\flags\\EXEC_INCLUDE' => 2,
    'ast\\flags\\EXEC_INCLUDE_ONCE' => 4,
    'ast\\flags\\EXEC_REQUIRE' => 8,
    'ast\\flags\\EXEC_REQUIRE_ONCE' => 16,
    'ast\\flags\\USE_NORMAL' => 1,
    'ast\\flags\\USE_FUNCTION' => 2,
    'ast\\flags\\USE_CONST' => 4,
    'ast\\flags\\MAGIC_LINE' => 370,
    'ast\\flags\\MAGIC_FILE' => 371,
    'ast\\flags\\MAGIC_DIR' => 372,
    'ast\\flags\\MAGIC_NAMESPACE' => 389,
    'ast\\flags\\MAGIC_FUNCTION' => 376,
    'ast\\flags\\MAGIC_METHOD' => 375,
    'ast\\flags\\MAGIC_CLASS' => 373,
    'ast\\flags\\MAGIC_TRAIT' => 374,
    'ast\\flags\\ARRAY_SYNTAX_LIST' => 1,
    'ast\\flags\\ARRAY_SYNTAX_LONG' => 2,
    'ast\\flags\\ARRAY_SYNTAX_SHORT' => 3,
    'ast\\flags\\DIM_ALTERNATIVE_SYNTAX' => 2,
    'ast\\flags\\PARENTHESIZED_CONDITIONAL' => 1,
    'ast\\flags\\ENCAPS_VAR_DOLLAR_CURLY' => 1,
    'ast\\flags\\ENCAPS_VAR_DOLLAR_CURLY_VAR_VAR' => 2,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
