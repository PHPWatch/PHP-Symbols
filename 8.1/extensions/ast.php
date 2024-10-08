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
    'ast\\AST_TYPE_UNION' => 144,
    'ast\\AST_TYPE_INTERSECTION' => 145,
    'ast\\AST_ATTRIBUTE_LIST' => 146,
    'ast\\AST_ATTRIBUTE_GROUP' => 147,
    'ast\\AST_MATCH_ARM_LIST' => 148,
    'ast\\AST_NAME' => 2048,
    'ast\\AST_CLOSURE_VAR' => 2049,
    'ast\\AST_NULLABLE_TYPE' => 2050,
    'ast\\AST_FUNC_DECL' => 67,
    'ast\\AST_CLOSURE' => 68,
    'ast\\AST_METHOD' => 69,
    'ast\\AST_ARROW_FUNC' => 71,
    'ast\\AST_CLASS' => 70,
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
    'ast\\AST_GLOBAL' => 277,
    'ast\\AST_UNSET' => 278,
    'ast\\AST_RETURN' => 279,
    'ast\\AST_LABEL' => 280,
    'ast\\AST_REF' => 281,
    'ast\\AST_HALT_COMPILER' => 282,
    'ast\\AST_ECHO' => 283,
    'ast\\AST_THROW' => 284,
    'ast\\AST_GOTO' => 285,
    'ast\\AST_BREAK' => 286,
    'ast\\AST_CONTINUE' => 287,
    'ast\\AST_CLASS_NAME' => 276,
    'ast\\AST_PROPERTY_HOOK_SHORT_BODY' => 510,
    'ast\\AST_CLASS_CONST_GROUP' => 546,
    'ast\\AST_DIM' => 512,
    'ast\\AST_PROP' => 513,
    'ast\\AST_NULLSAFE_PROP' => 514,
    'ast\\AST_STATIC_PROP' => 515,
    'ast\\AST_CALL' => 516,
    'ast\\AST_CLASS_CONST' => 517,
    'ast\\AST_ASSIGN' => 518,
    'ast\\AST_ASSIGN_REF' => 519,
    'ast\\AST_ASSIGN_OP' => 520,
    'ast\\AST_BINARY_OP' => 521,
    'ast\\AST_ARRAY_ELEM' => 526,
    'ast\\AST_NEW' => 527,
    'ast\\AST_INSTANCEOF' => 528,
    'ast\\AST_YIELD' => 529,
    'ast\\AST_STATIC' => 532,
    'ast\\AST_WHILE' => 533,
    'ast\\AST_DO_WHILE' => 534,
    'ast\\AST_IF_ELEM' => 535,
    'ast\\AST_SWITCH' => 536,
    'ast\\AST_SWITCH_CASE' => 537,
    'ast\\AST_DECLARE' => 538,
    'ast\\AST_PROP_ELEM' => 775,
    'ast\\AST_PROP_GROUP' => 774,
    'ast\\AST_CONST_ELEM' => 776,
    'ast\\AST_USE_TRAIT' => 539,
    'ast\\AST_TRAIT_PRECEDENCE' => 540,
    'ast\\AST_METHOD_REFERENCE' => 541,
    'ast\\AST_NAMESPACE' => 542,
    'ast\\AST_USE_ELEM' => 543,
    'ast\\AST_TRAIT_ALIAS' => 544,
    'ast\\AST_GROUP_USE' => 545,
    'ast\\AST_ATTRIBUTE' => 547,
    'ast\\AST_MATCH' => 548,
    'ast\\AST_MATCH_ARM' => 549,
    'ast\\AST_NAMED_ARG' => 550,
    'ast\\AST_METHOD_CALL' => 768,
    'ast\\AST_NULLSAFE_METHOD_CALL' => 769,
    'ast\\AST_STATIC_CALL' => 770,
    'ast\\AST_CONDITIONAL' => 771,
    'ast\\AST_TRY' => 772,
    'ast\\AST_CATCH' => 773,
    'ast\\AST_FOR' => 1024,
    'ast\\AST_FOREACH' => 1025,
    'ast\\AST_ENUM_CASE' => 1026,
    'ast\\AST_PARAM' => 1280,
    'ast\\flags\\NAME_FQ' => 0,
    'ast\\flags\\NAME_NOT_FQ' => 1,
    'ast\\flags\\NAME_RELATIVE' => 2,
    'ast\\flags\\MODIFIER_PUBLIC' => 1,
    'ast\\flags\\MODIFIER_PROTECTED' => 2,
    'ast\\flags\\MODIFIER_PRIVATE' => 4,
    'ast\\flags\\MODIFIER_STATIC' => 16,
    'ast\\flags\\MODIFIER_ABSTRACT' => 64,
    'ast\\flags\\MODIFIER_FINAL' => 32,
    'ast\\flags\\MODIFIER_READONLY' => 128,
    'ast\\flags\\PARAM_MODIFIER_PUBLIC' => 1,
    'ast\\flags\\PARAM_MODIFIER_PROTECTED' => 2,
    'ast\\flags\\PARAM_MODIFIER_PRIVATE' => 4,
    'ast\\flags\\RETURNS_REF' => 4096,
    'ast\\flags\\FUNC_RETURNS_REF' => 4096,
    'ast\\flags\\FUNC_GENERATOR' => 16777216,
    'ast\\flags\\ARRAY_ELEM_REF' => 1,
    'ast\\flags\\CLOSURE_USE_REF' => 1,
    'ast\\flags\\CLASS_ABSTRACT' => 64,
    'ast\\flags\\CLASS_FINAL' => 32,
    'ast\\flags\\CLASS_TRAIT' => 2,
    'ast\\flags\\CLASS_INTERFACE' => 1,
    'ast\\flags\\CLASS_ANONYMOUS' => 4,
    'ast\\flags\\CLASS_ENUM' => 268435456,
    'ast\\flags\\CLASS_READONLY' => 8388608,
    'ast\\flags\\PARAM_REF' => 8,
    'ast\\flags\\PARAM_VARIADIC' => 16,
    'ast\\flags\\TYPE_NULL' => 1,
    'ast\\flags\\TYPE_FALSE' => 2,
    'ast\\flags\\TYPE_TRUE' => 3,
    'ast\\flags\\TYPE_BOOL' => 18,
    'ast\\flags\\TYPE_LONG' => 4,
    'ast\\flags\\TYPE_DOUBLE' => 5,
    'ast\\flags\\TYPE_STRING' => 6,
    'ast\\flags\\TYPE_ARRAY' => 7,
    'ast\\flags\\TYPE_OBJECT' => 8,
    'ast\\flags\\TYPE_CALLABLE' => 12,
    'ast\\flags\\TYPE_VOID' => 14,
    'ast\\flags\\TYPE_ITERABLE' => 13,
    'ast\\flags\\TYPE_STATIC' => 15,
    'ast\\flags\\TYPE_MIXED' => 16,
    'ast\\flags\\TYPE_NEVER' => 17,
    'ast\\flags\\UNARY_BOOL_NOT' => 14,
    'ast\\flags\\UNARY_BITWISE_NOT' => 13,
    'ast\\flags\\UNARY_SILENCE' => 260,
    'ast\\flags\\UNARY_PLUS' => 261,
    'ast\\flags\\UNARY_MINUS' => 262,
    'ast\\flags\\BINARY_BOOL_AND' => 259,
    'ast\\flags\\BINARY_BOOL_OR' => 258,
    'ast\\flags\\BINARY_BOOL_XOR' => 15,
    'ast\\flags\\BINARY_BITWISE_OR' => 9,
    'ast\\flags\\BINARY_BITWISE_AND' => 10,
    'ast\\flags\\BINARY_BITWISE_XOR' => 11,
    'ast\\flags\\BINARY_CONCAT' => 8,
    'ast\\flags\\BINARY_ADD' => 1,
    'ast\\flags\\BINARY_SUB' => 2,
    'ast\\flags\\BINARY_MUL' => 3,
    'ast\\flags\\BINARY_DIV' => 4,
    'ast\\flags\\BINARY_MOD' => 5,
    'ast\\flags\\BINARY_POW' => 12,
    'ast\\flags\\BINARY_SHIFT_LEFT' => 6,
    'ast\\flags\\BINARY_SHIFT_RIGHT' => 7,
    'ast\\flags\\BINARY_IS_IDENTICAL' => 16,
    'ast\\flags\\BINARY_IS_NOT_IDENTICAL' => 17,
    'ast\\flags\\BINARY_IS_EQUAL' => 18,
    'ast\\flags\\BINARY_IS_NOT_EQUAL' => 19,
    'ast\\flags\\BINARY_IS_SMALLER' => 20,
    'ast\\flags\\BINARY_IS_SMALLER_OR_EQUAL' => 21,
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
    'ast\\flags\\MAGIC_LINE' => 343,
    'ast\\flags\\MAGIC_FILE' => 344,
    'ast\\flags\\MAGIC_DIR' => 345,
    'ast\\flags\\MAGIC_NAMESPACE' => 350,
    'ast\\flags\\MAGIC_FUNCTION' => 349,
    'ast\\flags\\MAGIC_METHOD' => 348,
    'ast\\flags\\MAGIC_CLASS' => 346,
    'ast\\flags\\MAGIC_TRAIT' => 347,
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
