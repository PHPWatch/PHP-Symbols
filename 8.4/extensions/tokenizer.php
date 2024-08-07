<?php

return array (
  'type' => 'extension',
  'name' => 'tokenizer',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'tokenizer',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'tokenizer',
    )),
    'removed' => NULL,
    'version' => '8.4.0-dev',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'tokenizer extension (php.net)',
        'url' => 'https://www.php.net/manual/book.tokenizer.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'PhpToken',
  ),
  'functions' => 
  array (
    'token_get_all' => 'token_get_all',
    'token_name' => 'token_name',
  ),
  'constants' => 
  array (
    'T_LNUMBER' => 260,
    'T_DNUMBER' => 261,
    'T_STRING' => 262,
    'T_NAME_FULLY_QUALIFIED' => 263,
    'T_NAME_RELATIVE' => 264,
    'T_NAME_QUALIFIED' => 265,
    'T_VARIABLE' => 266,
    'T_INLINE_HTML' => 267,
    'T_ENCAPSED_AND_WHITESPACE' => 268,
    'T_CONSTANT_ENCAPSED_STRING' => 269,
    'T_STRING_VARNAME' => 270,
    'T_NUM_STRING' => 271,
    'T_INCLUDE' => 272,
    'T_INCLUDE_ONCE' => 273,
    'T_EVAL' => 274,
    'T_REQUIRE' => 275,
    'T_REQUIRE_ONCE' => 276,
    'T_LOGICAL_OR' => 277,
    'T_LOGICAL_XOR' => 278,
    'T_LOGICAL_AND' => 279,
    'T_PRINT' => 280,
    'T_YIELD' => 281,
    'T_YIELD_FROM' => 282,
    'T_INSTANCEOF' => 283,
    'T_NEW' => 284,
    'T_CLONE' => 285,
    'T_EXIT' => 286,
    'T_IF' => 287,
    'T_ELSEIF' => 288,
    'T_ELSE' => 289,
    'T_ENDIF' => 290,
    'T_ECHO' => 291,
    'T_DO' => 292,
    'T_WHILE' => 293,
    'T_ENDWHILE' => 294,
    'T_FOR' => 295,
    'T_ENDFOR' => 296,
    'T_FOREACH' => 297,
    'T_ENDFOREACH' => 298,
    'T_DECLARE' => 299,
    'T_ENDDECLARE' => 300,
    'T_AS' => 301,
    'T_SWITCH' => 302,
    'T_ENDSWITCH' => 303,
    'T_CASE' => 304,
    'T_DEFAULT' => 305,
    'T_MATCH' => 306,
    'T_BREAK' => 307,
    'T_CONTINUE' => 308,
    'T_GOTO' => 309,
    'T_FUNCTION' => 310,
    'T_FN' => 311,
    'T_CONST' => 312,
    'T_RETURN' => 313,
    'T_TRY' => 314,
    'T_CATCH' => 315,
    'T_FINALLY' => 316,
    'T_THROW' => 317,
    'T_USE' => 318,
    'T_INSTEADOF' => 319,
    'T_GLOBAL' => 320,
    'T_STATIC' => 321,
    'T_ABSTRACT' => 322,
    'T_FINAL' => 323,
    'T_PRIVATE' => 324,
    'T_PROTECTED' => 325,
    'T_PUBLIC' => 326,
    'T_READONLY' => 327,
    'T_VAR' => 328,
    'T_UNSET' => 329,
    'T_ISSET' => 330,
    'T_EMPTY' => 331,
    'T_HALT_COMPILER' => 332,
    'T_CLASS' => 333,
    'T_TRAIT' => 334,
    'T_INTERFACE' => 335,
    'T_ENUM' => 336,
    'T_EXTENDS' => 337,
    'T_IMPLEMENTS' => 338,
    'T_NAMESPACE' => 339,
    'T_LIST' => 340,
    'T_ARRAY' => 341,
    'T_CALLABLE' => 342,
    'T_LINE' => 343,
    'T_FILE' => 344,
    'T_DIR' => 345,
    'T_CLASS_C' => 346,
    'T_TRAIT_C' => 347,
    'T_METHOD_C' => 348,
    'T_FUNC_C' => 349,
    'T_PROPERTY_C' => 350,
    'T_NS_C' => 351,
    'T_ATTRIBUTE' => 352,
    'T_PLUS_EQUAL' => 353,
    'T_MINUS_EQUAL' => 354,
    'T_MUL_EQUAL' => 355,
    'T_DIV_EQUAL' => 356,
    'T_CONCAT_EQUAL' => 357,
    'T_MOD_EQUAL' => 358,
    'T_AND_EQUAL' => 359,
    'T_OR_EQUAL' => 360,
    'T_XOR_EQUAL' => 361,
    'T_SL_EQUAL' => 362,
    'T_SR_EQUAL' => 363,
    'T_COALESCE_EQUAL' => 364,
    'T_BOOLEAN_OR' => 365,
    'T_BOOLEAN_AND' => 366,
    'T_IS_EQUAL' => 367,
    'T_IS_NOT_EQUAL' => 368,
    'T_IS_IDENTICAL' => 369,
    'T_IS_NOT_IDENTICAL' => 370,
    'T_IS_SMALLER_OR_EQUAL' => 371,
    'T_IS_GREATER_OR_EQUAL' => 372,
    'T_SPACESHIP' => 373,
    'T_SL' => 374,
    'T_SR' => 375,
    'T_INC' => 376,
    'T_DEC' => 377,
    'T_INT_CAST' => 378,
    'T_DOUBLE_CAST' => 379,
    'T_STRING_CAST' => 380,
    'T_ARRAY_CAST' => 381,
    'T_OBJECT_CAST' => 382,
    'T_BOOL_CAST' => 383,
    'T_UNSET_CAST' => 384,
    'T_OBJECT_OPERATOR' => 385,
    'T_NULLSAFE_OBJECT_OPERATOR' => 386,
    'T_DOUBLE_ARROW' => 387,
    'T_COMMENT' => 388,
    'T_DOC_COMMENT' => 389,
    'T_OPEN_TAG' => 390,
    'T_OPEN_TAG_WITH_ECHO' => 391,
    'T_CLOSE_TAG' => 392,
    'T_WHITESPACE' => 393,
    'T_START_HEREDOC' => 394,
    'T_END_HEREDOC' => 395,
    'T_DOLLAR_OPEN_CURLY_BRACES' => 396,
    'T_CURLY_OPEN' => 397,
    'T_PAAMAYIM_NEKUDOTAYIM' => 398,
    'T_NS_SEPARATOR' => 399,
    'T_ELLIPSIS' => 400,
    'T_COALESCE' => 401,
    'T_POW' => 402,
    'T_POW_EQUAL' => 403,
    'T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG' => 404,
    'T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG' => 405,
    'T_BAD_CHARACTER' => 406,
    'T_DOUBLE_COLON' => 398,
    'TOKEN_PARSE' => 1,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
