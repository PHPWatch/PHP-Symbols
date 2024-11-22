<?php

return array (
  'type' => 'extension',
  'name' => 'ldap',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'ldap',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'ldap',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ldap extension (php.net)',
        'url' => 'https://www.php.net/manual/book.ldap.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'ldap_connect' => 'ldap_connect',
    'ldap_close' => 'ldap_close',
    'ldap_bind' => 'ldap_bind',
    'ldap_sasl_bind' => 'ldap_sasl_bind',
    'ldap_unbind' => 'ldap_unbind',
    'ldap_read' => 'ldap_read',
    'ldap_list' => 'ldap_list',
    'ldap_search' => 'ldap_search',
    'ldap_free_result' => 'ldap_free_result',
    'ldap_count_entries' => 'ldap_count_entries',
    'ldap_first_entry' => 'ldap_first_entry',
    'ldap_next_entry' => 'ldap_next_entry',
    'ldap_get_entries' => 'ldap_get_entries',
    'ldap_first_attribute' => 'ldap_first_attribute',
    'ldap_next_attribute' => 'ldap_next_attribute',
    'ldap_get_attributes' => 'ldap_get_attributes',
    'ldap_get_values' => 'ldap_get_values',
    'ldap_get_values_len' => 'ldap_get_values_len',
    'ldap_get_dn' => 'ldap_get_dn',
    'ldap_explode_dn' => 'ldap_explode_dn',
    'ldap_dn2ufn' => 'ldap_dn2ufn',
    'ldap_add' => 'ldap_add',
    'ldap_delete' => 'ldap_delete',
    'ldap_modify_batch' => 'ldap_modify_batch',
    'ldap_modify' => 'ldap_modify',
    'ldap_mod_add' => 'ldap_mod_add',
    'ldap_mod_replace' => 'ldap_mod_replace',
    'ldap_mod_del' => 'ldap_mod_del',
    'ldap_errno' => 'ldap_errno',
    'ldap_err2str' => 'ldap_err2str',
    'ldap_error' => 'ldap_error',
    'ldap_compare' => 'ldap_compare',
    'ldap_sort' => 'ldap_sort',
    'ldap_rename' => 'ldap_rename',
    'ldap_get_option' => 'ldap_get_option',
    'ldap_set_option' => 'ldap_set_option',
    'ldap_first_reference' => 'ldap_first_reference',
    'ldap_next_reference' => 'ldap_next_reference',
    'ldap_parse_reference' => 'ldap_parse_reference',
    'ldap_parse_result' => 'ldap_parse_result',
    'ldap_start_tls' => 'ldap_start_tls',
    'ldap_set_rebind_proc' => 'ldap_set_rebind_proc',
    'ldap_escape' => 'ldap_escape',
    'ldap_control_paged_result' => 'ldap_control_paged_result',
    'ldap_control_paged_result_response' => 'ldap_control_paged_result_response',
  ),
  'constants' => 
  array (
    'LDAP_DEREF_NEVER' => 0,
    'LDAP_DEREF_SEARCHING' => 1,
    'LDAP_DEREF_FINDING' => 2,
    'LDAP_DEREF_ALWAYS' => 3,
    'LDAP_MODIFY_BATCH_ADD' => 1,
    'LDAP_MODIFY_BATCH_REMOVE' => 2,
    'LDAP_MODIFY_BATCH_REMOVE_ALL' => 18,
    'LDAP_MODIFY_BATCH_REPLACE' => 3,
    'LDAP_MODIFY_BATCH_ATTRIB' => 'attrib',
    'LDAP_MODIFY_BATCH_MODTYPE' => 'modtype',
    'LDAP_MODIFY_BATCH_VALUES' => 'values',
    'LDAP_OPT_DEREF' => 2,
    'LDAP_OPT_SIZELIMIT' => 3,
    'LDAP_OPT_TIMELIMIT' => 4,
    'LDAP_OPT_NETWORK_TIMEOUT' => 20485,
    'LDAP_OPT_TIMEOUT' => 20482,
    'LDAP_OPT_PROTOCOL_VERSION' => 17,
    'LDAP_OPT_ERROR_NUMBER' => 49,
    'LDAP_OPT_REFERRALS' => 8,
    'LDAP_OPT_RESTART' => 9,
    'LDAP_OPT_HOST_NAME' => 48,
    'LDAP_OPT_ERROR_STRING' => 50,
    'LDAP_OPT_MATCHED_DN' => 51,
    'LDAP_OPT_SERVER_CONTROLS' => 18,
    'LDAP_OPT_CLIENT_CONTROLS' => 19,
    'LDAP_OPT_DEBUG_LEVEL' => 20481,
    'LDAP_OPT_DIAGNOSTIC_MESSAGE' => 50,
    'LDAP_OPT_X_SASL_MECH' => 24832,
    'LDAP_OPT_X_SASL_REALM' => 24833,
    'LDAP_OPT_X_SASL_AUTHCID' => 24834,
    'LDAP_OPT_X_SASL_AUTHZID' => 24835,
    'LDAP_ESCAPE_FILTER' => 1,
    'LDAP_ESCAPE_DN' => 2,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'ldap.max_links' => '-1',
  ),
);
