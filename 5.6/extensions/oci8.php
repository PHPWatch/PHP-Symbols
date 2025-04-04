<?php

return array (
  'type' => 'extension',
  'name' => 'oci8',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'oci8',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'oci8',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'oci8 extension (php.net)',
        'url' => 'https://www.php.net/manual/book.oci8.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'OCI-Lob',
    1 => 'OCI-Collection',
  ),
  'functions' => 
  array (
    'oci_define_by_name' => 'oci_define_by_name',
    'oci_bind_by_name' => 'oci_bind_by_name',
    'oci_bind_array_by_name' => 'oci_bind_array_by_name',
    'oci_field_is_null' => 'oci_field_is_null',
    'oci_field_name' => 'oci_field_name',
    'oci_field_size' => 'oci_field_size',
    'oci_field_scale' => 'oci_field_scale',
    'oci_field_precision' => 'oci_field_precision',
    'oci_field_type' => 'oci_field_type',
    'oci_field_type_raw' => 'oci_field_type_raw',
    'oci_execute' => 'oci_execute',
    'oci_cancel' => 'oci_cancel',
    'oci_fetch' => 'oci_fetch',
    'oci_fetch_object' => 'oci_fetch_object',
    'oci_fetch_row' => 'oci_fetch_row',
    'oci_fetch_assoc' => 'oci_fetch_assoc',
    'oci_fetch_array' => 'oci_fetch_array',
    'ocifetchinto' => 'ocifetchinto',
    'oci_fetch_all' => 'oci_fetch_all',
    'oci_free_statement' => 'oci_free_statement',
    'oci_internal_debug' => 'oci_internal_debug',
    'oci_num_fields' => 'oci_num_fields',
    'oci_parse' => 'oci_parse',
    'oci_get_implicit_resultset' => 'oci_get_implicit_resultset',
    'oci_new_cursor' => 'oci_new_cursor',
    'oci_result' => 'oci_result',
    'oci_client_version' => 'oci_client_version',
    'oci_server_version' => 'oci_server_version',
    'oci_statement_type' => 'oci_statement_type',
    'oci_num_rows' => 'oci_num_rows',
    'oci_close' => 'oci_close',
    'oci_connect' => 'oci_connect',
    'oci_new_connect' => 'oci_new_connect',
    'oci_pconnect' => 'oci_pconnect',
    'oci_error' => 'oci_error',
    'oci_free_descriptor' => 'oci_free_descriptor',
    'oci_lob_save' => 'oci_lob_save',
    'oci_lob_import' => 'oci_lob_import',
    'oci_lob_size' => 'oci_lob_size',
    'oci_lob_load' => 'oci_lob_load',
    'oci_lob_read' => 'oci_lob_read',
    'oci_lob_eof' => 'oci_lob_eof',
    'oci_lob_tell' => 'oci_lob_tell',
    'oci_lob_truncate' => 'oci_lob_truncate',
    'oci_lob_erase' => 'oci_lob_erase',
    'oci_lob_flush' => 'oci_lob_flush',
    'ocisetbufferinglob' => 'ocisetbufferinglob',
    'ocigetbufferinglob' => 'ocigetbufferinglob',
    'oci_lob_is_equal' => 'oci_lob_is_equal',
    'oci_lob_rewind' => 'oci_lob_rewind',
    'oci_lob_write' => 'oci_lob_write',
    'oci_lob_append' => 'oci_lob_append',
    'oci_lob_copy' => 'oci_lob_copy',
    'oci_lob_export' => 'oci_lob_export',
    'oci_lob_seek' => 'oci_lob_seek',
    'oci_commit' => 'oci_commit',
    'oci_rollback' => 'oci_rollback',
    'oci_new_descriptor' => 'oci_new_descriptor',
    'oci_set_prefetch' => 'oci_set_prefetch',
    'oci_set_client_identifier' => 'oci_set_client_identifier',
    'oci_set_edition' => 'oci_set_edition',
    'oci_set_module_name' => 'oci_set_module_name',
    'oci_set_action' => 'oci_set_action',
    'oci_set_client_info' => 'oci_set_client_info',
    'oci_password_change' => 'oci_password_change',
    'oci_free_collection' => 'oci_free_collection',
    'oci_collection_append' => 'oci_collection_append',
    'oci_collection_element_get' => 'oci_collection_element_get',
    'oci_collection_element_assign' => 'oci_collection_element_assign',
    'oci_collection_assign' => 'oci_collection_assign',
    'oci_collection_size' => 'oci_collection_size',
    'oci_collection_max' => 'oci_collection_max',
    'oci_collection_trim' => 'oci_collection_trim',
    'oci_new_collection' => 'oci_new_collection',
    'oci_free_cursor' => 'oci_free_cursor',
    'ocifreecursor' => 'ocifreecursor',
    'ocibindbyname' => 'ocibindbyname',
    'ocidefinebyname' => 'ocidefinebyname',
    'ocicolumnisnull' => 'ocicolumnisnull',
    'ocicolumnname' => 'ocicolumnname',
    'ocicolumnsize' => 'ocicolumnsize',
    'ocicolumnscale' => 'ocicolumnscale',
    'ocicolumnprecision' => 'ocicolumnprecision',
    'ocicolumntype' => 'ocicolumntype',
    'ocicolumntyperaw' => 'ocicolumntyperaw',
    'ociexecute' => 'ociexecute',
    'ocicancel' => 'ocicancel',
    'ocifetch' => 'ocifetch',
    'ocifetchstatement' => 'ocifetchstatement',
    'ocifreestatement' => 'ocifreestatement',
    'ociinternaldebug' => 'ociinternaldebug',
    'ocinumcols' => 'ocinumcols',
    'ociparse' => 'ociparse',
    'ocinewcursor' => 'ocinewcursor',
    'ociresult' => 'ociresult',
    'ociserverversion' => 'ociserverversion',
    'ocistatementtype' => 'ocistatementtype',
    'ocirowcount' => 'ocirowcount',
    'ocilogoff' => 'ocilogoff',
    'ocilogon' => 'ocilogon',
    'ocinlogon' => 'ocinlogon',
    'ociplogon' => 'ociplogon',
    'ocierror' => 'ocierror',
    'ocifreedesc' => 'ocifreedesc',
    'ocisavelob' => 'ocisavelob',
    'ocisavelobfile' => 'ocisavelobfile',
    'ociwritelobtofile' => 'ociwritelobtofile',
    'ociloadlob' => 'ociloadlob',
    'ocicommit' => 'ocicommit',
    'ocirollback' => 'ocirollback',
    'ocinewdescriptor' => 'ocinewdescriptor',
    'ocisetprefetch' => 'ocisetprefetch',
    'ocipasswordchange' => 'ocipasswordchange',
    'ocifreecollection' => 'ocifreecollection',
    'ocinewcollection' => 'ocinewcollection',
    'ocicollappend' => 'ocicollappend',
    'ocicollgetelem' => 'ocicollgetelem',
    'ocicollassignelem' => 'ocicollassignelem',
    'ocicollsize' => 'ocicollsize',
    'ocicollmax' => 'ocicollmax',
    'ocicolltrim' => 'ocicolltrim',
  ),
  'constants' => 
  array (
    'OCI_DEFAULT' => 0,
    'OCI_SYSOPER' => 4,
    'OCI_SYSDBA' => 2,
    'OCI_CRED_EXT' => -2147483648,
    'OCI_DESCRIBE_ONLY' => 16,
    'OCI_COMMIT_ON_SUCCESS' => 32,
    'OCI_NO_AUTO_COMMIT' => 0,
    'OCI_EXACT_FETCH' => 2,
    'OCI_SEEK_SET' => 0,
    'OCI_SEEK_CUR' => 1,
    'OCI_SEEK_END' => 2,
    'OCI_LOB_BUFFER_FREE' => 1,
    'SQLT_BFILEE' => 114,
    'SQLT_CFILEE' => 115,
    'SQLT_CLOB' => 112,
    'SQLT_BLOB' => 113,
    'SQLT_RDD' => 104,
    'SQLT_INT' => 3,
    'SQLT_NUM' => 2,
    'SQLT_RSET' => 116,
    'SQLT_AFC' => 96,
    'SQLT_CHR' => 1,
    'SQLT_VCS' => 9,
    'SQLT_AVC' => 97,
    'SQLT_STR' => 5,
    'SQLT_LVC' => 94,
    'SQLT_FLT' => 4,
    'SQLT_UIN' => 68,
    'SQLT_LNG' => 8,
    'SQLT_LBI' => 24,
    'SQLT_BIN' => 23,
    'SQLT_ODT' => 156,
    'SQLT_BDOUBLE' => 22,
    'SQLT_BFLOAT' => 21,
    'SQLT_BOL' => 252,
    'OCI_B_NTY' => 108,
    'SQLT_NTY' => 108,
    'OCI_SYSDATE' => 'SYSDATE',
    'OCI_B_BFILE' => 114,
    'OCI_B_CFILEE' => 115,
    'OCI_B_CLOB' => 112,
    'OCI_B_BLOB' => 113,
    'OCI_B_ROWID' => 104,
    'OCI_B_CURSOR' => 116,
    'OCI_B_BIN' => 23,
    'OCI_B_INT' => 3,
    'OCI_B_NUM' => 2,
    'OCI_B_BOL' => 252,
    'OCI_FETCHSTATEMENT_BY_COLUMN' => 16,
    'OCI_FETCHSTATEMENT_BY_ROW' => 32,
    'OCI_ASSOC' => 1,
    'OCI_NUM' => 2,
    'OCI_BOTH' => 3,
    'OCI_RETURN_NULLS' => 4,
    'OCI_RETURN_LOBS' => 8,
    'OCI_DTYPE_FILE' => 56,
    'OCI_DTYPE_LOB' => 50,
    'OCI_DTYPE_ROWID' => 54,
    'OCI_D_FILE' => 56,
    'OCI_D_LOB' => 50,
    'OCI_D_ROWID' => 54,
    'OCI_TEMP_CLOB' => 2,
    'OCI_TEMP_BLOB' => 1,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'oci8.connection_class' => '',
    'oci8.default_prefetch' => '100',
    'oci8.events' => '0',
    'oci8.max_persistent' => '-1',
    'oci8.old_oci_close_semantics' => '0',
    'oci8.persistent_timeout' => '-1',
    'oci8.ping_interval' => '60',
    'oci8.privileged_connect' => '0',
    'oci8.statement_cache_size' => '20',
  ),
);
