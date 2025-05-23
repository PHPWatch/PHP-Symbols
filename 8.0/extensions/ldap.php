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
    'ldap_unbind' => 'ldap_unbind',
    'ldap_close' => 'ldap_close',
    'ldap_bind' => 'ldap_bind',
    'ldap_bind_ext' => 'ldap_bind_ext',
    'ldap_sasl_bind' => 'ldap_sasl_bind',
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
    'ldap_get_values_len' => 'ldap_get_values_len',
    'ldap_get_values' => 'ldap_get_values',
    'ldap_get_dn' => 'ldap_get_dn',
    'ldap_explode_dn' => 'ldap_explode_dn',
    'ldap_dn2ufn' => 'ldap_dn2ufn',
    'ldap_add' => 'ldap_add',
    'ldap_add_ext' => 'ldap_add_ext',
    'ldap_delete' => 'ldap_delete',
    'ldap_delete_ext' => 'ldap_delete_ext',
    'ldap_modify_batch' => 'ldap_modify_batch',
    'ldap_mod_add' => 'ldap_mod_add',
    'ldap_mod_add_ext' => 'ldap_mod_add_ext',
    'ldap_mod_replace' => 'ldap_mod_replace',
    'ldap_modify' => 'ldap_modify',
    'ldap_mod_replace_ext' => 'ldap_mod_replace_ext',
    'ldap_mod_del' => 'ldap_mod_del',
    'ldap_mod_del_ext' => 'ldap_mod_del_ext',
    'ldap_errno' => 'ldap_errno',
    'ldap_error' => 'ldap_error',
    'ldap_err2str' => 'ldap_err2str',
    'ldap_compare' => 'ldap_compare',
    'ldap_rename' => 'ldap_rename',
    'ldap_rename_ext' => 'ldap_rename_ext',
    'ldap_get_option' => 'ldap_get_option',
    'ldap_set_option' => 'ldap_set_option',
    'ldap_count_references' => 'ldap_count_references',
    'ldap_first_reference' => 'ldap_first_reference',
    'ldap_next_reference' => 'ldap_next_reference',
    'ldap_parse_reference' => 'ldap_parse_reference',
    'ldap_parse_result' => 'ldap_parse_result',
    'ldap_set_rebind_proc' => 'ldap_set_rebind_proc',
    'ldap_start_tls' => 'ldap_start_tls',
    'ldap_escape' => 'ldap_escape',
    'ldap_exop' => 'ldap_exop',
    'ldap_exop_passwd' => 'ldap_exop_passwd',
    'ldap_exop_whoami' => 'ldap_exop_whoami',
    'ldap_exop_refresh' => 'ldap_exop_refresh',
    'ldap_parse_exop' => 'ldap_parse_exop',
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
    'LDAP_OPT_X_SASL_NOCANON' => 24843,
    'LDAP_OPT_X_SASL_USERNAME' => 24844,
    'LDAP_OPT_X_TLS_REQUIRE_CERT' => 24582,
    'LDAP_OPT_X_TLS_NEVER' => 0,
    'LDAP_OPT_X_TLS_HARD' => 1,
    'LDAP_OPT_X_TLS_DEMAND' => 2,
    'LDAP_OPT_X_TLS_ALLOW' => 3,
    'LDAP_OPT_X_TLS_TRY' => 4,
    'LDAP_OPT_X_TLS_CACERTDIR' => 24579,
    'LDAP_OPT_X_TLS_CACERTFILE' => 24578,
    'LDAP_OPT_X_TLS_CERTFILE' => 24580,
    'LDAP_OPT_X_TLS_CIPHER_SUITE' => 24584,
    'LDAP_OPT_X_TLS_KEYFILE' => 24581,
    'LDAP_OPT_X_TLS_RANDOM_FILE' => 24585,
    'LDAP_OPT_X_TLS_CRLCHECK' => 24587,
    'LDAP_OPT_X_TLS_CRL_NONE' => 0,
    'LDAP_OPT_X_TLS_CRL_PEER' => 1,
    'LDAP_OPT_X_TLS_CRL_ALL' => 2,
    'LDAP_OPT_X_TLS_DHFILE' => 24590,
    'LDAP_OPT_X_TLS_CRLFILE' => 24592,
    'LDAP_OPT_X_TLS_PROTOCOL_MIN' => 24583,
    'LDAP_OPT_X_TLS_PROTOCOL_SSL2' => 512,
    'LDAP_OPT_X_TLS_PROTOCOL_SSL3' => 768,
    'LDAP_OPT_X_TLS_PROTOCOL_TLS1_0' => 769,
    'LDAP_OPT_X_TLS_PROTOCOL_TLS1_1' => 770,
    'LDAP_OPT_X_TLS_PROTOCOL_TLS1_2' => 771,
    'LDAP_OPT_X_TLS_PACKAGE' => 24593,
    'LDAP_OPT_X_KEEPALIVE_IDLE' => 25344,
    'LDAP_OPT_X_KEEPALIVE_PROBES' => 25345,
    'LDAP_OPT_X_KEEPALIVE_INTERVAL' => 25346,
    'LDAP_ESCAPE_FILTER' => 1,
    'LDAP_ESCAPE_DN' => 2,
    'LDAP_EXOP_START_TLS' => '1.3.6.1.4.1.1466.20037',
    'LDAP_EXOP_MODIFY_PASSWD' => '1.3.6.1.4.1.4203.1.11.1',
    'LDAP_EXOP_REFRESH' => '1.3.6.1.4.1.1466.101.119.1',
    'LDAP_EXOP_WHO_AM_I' => '1.3.6.1.4.1.4203.1.11.3',
    'LDAP_EXOP_TURN' => '1.3.6.1.1.19',
    'LDAP_CONTROL_MANAGEDSAIT' => '2.16.840.1.113730.3.4.2',
    'LDAP_CONTROL_PROXY_AUTHZ' => '2.16.840.1.113730.3.4.18',
    'LDAP_CONTROL_SUBENTRIES' => '1.3.6.1.4.1.4203.1.10.1',
    'LDAP_CONTROL_VALUESRETURNFILTER' => '1.2.826.0.1.3344810.2.3',
    'LDAP_CONTROL_ASSERT' => '1.3.6.1.1.12',
    'LDAP_CONTROL_PRE_READ' => '1.3.6.1.1.13.1',
    'LDAP_CONTROL_POST_READ' => '1.3.6.1.1.13.2',
    'LDAP_CONTROL_SORTREQUEST' => '1.2.840.113556.1.4.473',
    'LDAP_CONTROL_SORTRESPONSE' => '1.2.840.113556.1.4.474',
    'LDAP_CONTROL_PAGEDRESULTS' => '1.2.840.113556.1.4.319',
    'LDAP_CONTROL_AUTHZID_REQUEST' => '2.16.840.1.113730.3.4.16',
    'LDAP_CONTROL_AUTHZID_RESPONSE' => '2.16.840.1.113730.3.4.15',
    'LDAP_CONTROL_SYNC' => '1.3.6.1.4.1.4203.1.9.1.1',
    'LDAP_CONTROL_SYNC_STATE' => '1.3.6.1.4.1.4203.1.9.1.2',
    'LDAP_CONTROL_SYNC_DONE' => '1.3.6.1.4.1.4203.1.9.1.3',
    'LDAP_CONTROL_DONTUSECOPY' => '1.3.6.1.1.22',
    'LDAP_CONTROL_PASSWORDPOLICYREQUEST' => '1.3.6.1.4.1.42.2.27.8.5.1',
    'LDAP_CONTROL_PASSWORDPOLICYRESPONSE' => '1.3.6.1.4.1.42.2.27.8.5.1',
    'LDAP_CONTROL_X_INCREMENTAL_VALUES' => '1.2.840.113556.1.4.802',
    'LDAP_CONTROL_X_DOMAIN_SCOPE' => '1.2.840.113556.1.4.1339',
    'LDAP_CONTROL_X_PERMISSIVE_MODIFY' => '1.2.840.113556.1.4.1413',
    'LDAP_CONTROL_X_SEARCH_OPTIONS' => '1.2.840.113556.1.4.1340',
    'LDAP_CONTROL_X_TREE_DELETE' => '1.2.840.113556.1.4.805',
    'LDAP_CONTROL_X_EXTENDED_DN' => '1.2.840.113556.1.4.529',
    'LDAP_CONTROL_VLVREQUEST' => '2.16.840.1.113730.3.4.9',
    'LDAP_CONTROL_VLVRESPONSE' => '2.16.840.1.113730.3.4.10',
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'ldap.max_links' => '-1',
  ),
);
