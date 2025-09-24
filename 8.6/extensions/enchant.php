<?php

return array (
  'type' => 'extension',
  'name' => 'enchant',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'enchant',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'enchant',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'enchant extension (php.net)',
        'url' => 'https://www.php.net/manual/book.enchant.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'EnchantBroker',
    1 => 'EnchantDictionary',
  ),
  'functions' => 
  array (
    'enchant_broker_init' => 'enchant_broker_init',
    'enchant_broker_free' => 'enchant_broker_free',
    'enchant_broker_get_error' => 'enchant_broker_get_error',
    'enchant_broker_set_dict_path' => 'enchant_broker_set_dict_path',
    'enchant_broker_get_dict_path' => 'enchant_broker_get_dict_path',
    'enchant_broker_list_dicts' => 'enchant_broker_list_dicts',
    'enchant_broker_request_dict' => 'enchant_broker_request_dict',
    'enchant_broker_request_pwl_dict' => 'enchant_broker_request_pwl_dict',
    'enchant_broker_free_dict' => 'enchant_broker_free_dict',
    'enchant_broker_dict_exists' => 'enchant_broker_dict_exists',
    'enchant_broker_set_ordering' => 'enchant_broker_set_ordering',
    'enchant_broker_describe' => 'enchant_broker_describe',
    'enchant_dict_quick_check' => 'enchant_dict_quick_check',
    'enchant_dict_check' => 'enchant_dict_check',
    'enchant_dict_suggest' => 'enchant_dict_suggest',
    'enchant_dict_add' => 'enchant_dict_add',
    'enchant_dict_remove' => 'enchant_dict_remove',
    'enchant_dict_add_to_personal' => 'enchant_dict_add_to_personal',
    'enchant_dict_add_to_session' => 'enchant_dict_add_to_session',
    'enchant_dict_remove_from_session' => 'enchant_dict_remove_from_session',
    'enchant_dict_is_added' => 'enchant_dict_is_added',
    'enchant_dict_is_in_session' => 'enchant_dict_is_in_session',
    'enchant_dict_store_replacement' => 'enchant_dict_store_replacement',
    'enchant_dict_get_error' => 'enchant_dict_get_error',
    'enchant_dict_describe' => 'enchant_dict_describe',
  ),
  'constants' => 
  array (
    'ENCHANT_MYSPELL' => 1,
    'ENCHANT_ISPELL' => 2,
    'LIBENCHANT_VERSION' => '2.3.3',
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
