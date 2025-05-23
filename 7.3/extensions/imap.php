<?php

return array (
  'type' => 'extension',
  'name' => 'imap',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'imap',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'imap',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap extension (php.net)',
        'url' => 'https://www.php.net/manual/book.imap.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'imap_open' => 'imap_open',
    'imap_reopen' => 'imap_reopen',
    'imap_close' => 'imap_close',
    'imap_num_msg' => 'imap_num_msg',
    'imap_num_recent' => 'imap_num_recent',
    'imap_headers' => 'imap_headers',
    'imap_headerinfo' => 'imap_headerinfo',
    'imap_rfc822_parse_headers' => 'imap_rfc822_parse_headers',
    'imap_rfc822_write_address' => 'imap_rfc822_write_address',
    'imap_rfc822_parse_adrlist' => 'imap_rfc822_parse_adrlist',
    'imap_body' => 'imap_body',
    'imap_bodystruct' => 'imap_bodystruct',
    'imap_fetchbody' => 'imap_fetchbody',
    'imap_fetchmime' => 'imap_fetchmime',
    'imap_savebody' => 'imap_savebody',
    'imap_fetchheader' => 'imap_fetchheader',
    'imap_fetchstructure' => 'imap_fetchstructure',
    'imap_gc' => 'imap_gc',
    'imap_expunge' => 'imap_expunge',
    'imap_delete' => 'imap_delete',
    'imap_undelete' => 'imap_undelete',
    'imap_check' => 'imap_check',
    'imap_listscan' => 'imap_listscan',
    'imap_mail_copy' => 'imap_mail_copy',
    'imap_mail_move' => 'imap_mail_move',
    'imap_mail_compose' => 'imap_mail_compose',
    'imap_createmailbox' => 'imap_createmailbox',
    'imap_renamemailbox' => 'imap_renamemailbox',
    'imap_deletemailbox' => 'imap_deletemailbox',
    'imap_subscribe' => 'imap_subscribe',
    'imap_unsubscribe' => 'imap_unsubscribe',
    'imap_append' => 'imap_append',
    'imap_ping' => 'imap_ping',
    'imap_base64' => 'imap_base64',
    'imap_qprint' => 'imap_qprint',
    'imap_8bit' => 'imap_8bit',
    'imap_binary' => 'imap_binary',
    'imap_utf8' => 'imap_utf8',
    'imap_status' => 'imap_status',
    'imap_mailboxmsginfo' => 'imap_mailboxmsginfo',
    'imap_setflag_full' => 'imap_setflag_full',
    'imap_clearflag_full' => 'imap_clearflag_full',
    'imap_sort' => 'imap_sort',
    'imap_uid' => 'imap_uid',
    'imap_msgno' => 'imap_msgno',
    'imap_list' => 'imap_list',
    'imap_lsub' => 'imap_lsub',
    'imap_fetch_overview' => 'imap_fetch_overview',
    'imap_alerts' => 'imap_alerts',
    'imap_errors' => 'imap_errors',
    'imap_last_error' => 'imap_last_error',
    'imap_search' => 'imap_search',
    'imap_utf7_decode' => 'imap_utf7_decode',
    'imap_utf7_encode' => 'imap_utf7_encode',
    'imap_utf8_to_mutf7' => 'imap_utf8_to_mutf7',
    'imap_mutf7_to_utf8' => 'imap_mutf7_to_utf8',
    'imap_mime_header_decode' => 'imap_mime_header_decode',
    'imap_thread' => 'imap_thread',
    'imap_timeout' => 'imap_timeout',
    'imap_get_quota' => 'imap_get_quota',
    'imap_get_quotaroot' => 'imap_get_quotaroot',
    'imap_set_quota' => 'imap_set_quota',
    'imap_setacl' => 'imap_setacl',
    'imap_getacl' => 'imap_getacl',
    'imap_mail' => 'imap_mail',
    'imap_header' => 'imap_header',
    'imap_listmailbox' => 'imap_listmailbox',
    'imap_getmailboxes' => 'imap_getmailboxes',
    'imap_scanmailbox' => 'imap_scanmailbox',
    'imap_listsubscribed' => 'imap_listsubscribed',
    'imap_getsubscribed' => 'imap_getsubscribed',
    'imap_fetchtext' => 'imap_fetchtext',
    'imap_scan' => 'imap_scan',
    'imap_create' => 'imap_create',
    'imap_rename' => 'imap_rename',
  ),
  'constants' => 
  array (
    'NIL' => 0,
    'IMAP_OPENTIMEOUT' => 1,
    'IMAP_READTIMEOUT' => 2,
    'IMAP_WRITETIMEOUT' => 3,
    'IMAP_CLOSETIMEOUT' => 4,
    'OP_DEBUG' => 1,
    'OP_READONLY' => 2,
    'OP_ANONYMOUS' => 4,
    'OP_SHORTCACHE' => 8,
    'OP_SILENT' => 16,
    'OP_PROTOTYPE' => 32,
    'OP_HALFOPEN' => 64,
    'OP_EXPUNGE' => 128,
    'OP_SECURE' => 256,
    'CL_EXPUNGE' => 32768,
    'FT_UID' => 1,
    'FT_PEEK' => 2,
    'FT_NOT' => 4,
    'FT_INTERNAL' => 8,
    'FT_PREFETCHTEXT' => 32,
    'ST_UID' => 1,
    'ST_SILENT' => 2,
    'ST_SET' => 4,
    'CP_UID' => 1,
    'CP_MOVE' => 2,
    'SE_UID' => 1,
    'SE_FREE' => 2,
    'SE_NOPREFETCH' => 4,
    'SO_FREE' => 8,
    'SO_NOSERVER' => 16,
    'SA_MESSAGES' => 1,
    'SA_RECENT' => 2,
    'SA_UNSEEN' => 4,
    'SA_UIDNEXT' => 8,
    'SA_UIDVALIDITY' => 16,
    'SA_ALL' => 31,
    'LATT_NOINFERIORS' => 1,
    'LATT_NOSELECT' => 2,
    'LATT_MARKED' => 4,
    'LATT_UNMARKED' => 8,
    'LATT_REFERRAL' => 16,
    'LATT_HASCHILDREN' => 32,
    'LATT_HASNOCHILDREN' => 64,
    'SORTDATE' => 0,
    'SORTARRIVAL' => 1,
    'SORTFROM' => 2,
    'SORTSUBJECT' => 3,
    'SORTTO' => 4,
    'SORTCC' => 5,
    'SORTSIZE' => 6,
    'TYPETEXT' => 0,
    'TYPEMULTIPART' => 1,
    'TYPEMESSAGE' => 2,
    'TYPEAPPLICATION' => 3,
    'TYPEAUDIO' => 4,
    'TYPEIMAGE' => 5,
    'TYPEVIDEO' => 6,
    'TYPEMODEL' => 7,
    'TYPEOTHER' => 8,
    'ENC7BIT' => 0,
    'ENC8BIT' => 1,
    'ENCBINARY' => 2,
    'ENCBASE64' => 3,
    'ENCQUOTEDPRINTABLE' => 4,
    'ENCOTHER' => 5,
    'IMAP_GC_ELT' => 1,
    'IMAP_GC_ENV' => 2,
    'IMAP_GC_TEXTS' => 4,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'imap.enable_insecure_rsh' => '0',
  ),
);
