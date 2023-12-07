<?php

return array (
  'type' => 'class',
  'name' => 'Spoofchecker',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Spoofchecker',
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
        'name' => 'Spoofchecker class (php.net)',
        'url' => 'https://www.php.net/manual/class.spoofchecker.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'SINGLE_SCRIPT_CONFUSABLE' => 1,
    'MIXED_SCRIPT_CONFUSABLE' => 2,
    'WHOLE_SCRIPT_CONFUSABLE' => 4,
    'ANY_CASE' => 8,
    'SINGLE_SCRIPT' => 16,
    'INVISIBLE' => 32,
    'CHAR_LIMIT' => 64,
    'ASCII' => 268435456,
    'HIGHLY_RESTRICTIVE' => 805306368,
    'MODERATELY_RESTRICTIVE' => 1073741824,
    'MINIMALLY_RESTRICTIVE' => 1342177280,
    'UNRESTRICTIVE' => 1610612736,
    'SINGLE_SCRIPT_RESTRICTIVE' => 536870912,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Spoofchecker',
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
    'isSuspicious' => 
    array (
      'name' => 'isSuspicious',
      'class' => 'Spoofchecker',
      'parameters' => 
      array (
        'text' => 
        array (
          'position' => 0,
          'name' => 'text',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'error' => 
        array (
          'position' => 1,
          'name' => 'error',
          'type' => NULL,
          'is_optional' => true,
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
    'areConfusable' => 
    array (
      'name' => 'areConfusable',
      'class' => 'Spoofchecker',
      'parameters' => 
      array (
        's1' => 
        array (
          'position' => 0,
          'name' => 's1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        's2' => 
        array (
          'position' => 1,
          'name' => 's2',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'error' => 
        array (
          'position' => 2,
          'name' => 'error',
          'type' => NULL,
          'is_optional' => true,
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
    'setAllowedLocales' => 
    array (
      'name' => 'setAllowedLocales',
      'class' => 'Spoofchecker',
      'parameters' => 
      array (
        'locale_list' => 
        array (
          'position' => 0,
          'name' => 'locale_list',
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
    'setChecks' => 
    array (
      'name' => 'setChecks',
      'class' => 'Spoofchecker',
      'parameters' => 
      array (
        'checks' => 
        array (
          'position' => 0,
          'name' => 'checks',
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
    'setRestrictionLevel' => 
    array (
      'name' => 'setRestrictionLevel',
      'class' => 'Spoofchecker',
      'parameters' => 
      array (
        'level' => 
        array (
          'position' => 0,
          'name' => 'level',
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
