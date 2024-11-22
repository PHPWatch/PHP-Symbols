<?php

return array (
  'type' => 'extension',
  'name' => 'curl',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'curl',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'curl',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'curl extension (php.net)',
        'url' => 'https://www.php.net/manual/book.curl.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'curl_init' => 'curl_init',
    'curl_copy_handle' => 'curl_copy_handle',
    'curl_version' => 'curl_version',
    'curl_setopt' => 'curl_setopt',
    'curl_setopt_array' => 'curl_setopt_array',
    'curl_exec' => 'curl_exec',
    'curl_getinfo' => 'curl_getinfo',
    'curl_error' => 'curl_error',
    'curl_errno' => 'curl_errno',
    'curl_close' => 'curl_close',
    'curl_multi_init' => 'curl_multi_init',
    'curl_multi_add_handle' => 'curl_multi_add_handle',
    'curl_multi_remove_handle' => 'curl_multi_remove_handle',
    'curl_multi_select' => 'curl_multi_select',
    'curl_multi_exec' => 'curl_multi_exec',
    'curl_multi_getcontent' => 'curl_multi_getcontent',
    'curl_multi_info_read' => 'curl_multi_info_read',
    'curl_multi_close' => 'curl_multi_close',
  ),
  'constants' => 
  array (
    'CURLOPT_IPRESOLVE' => 113,
    'CURL_IPRESOLVE_WHATEVER' => 0,
    'CURL_IPRESOLVE_V4' => 1,
    'CURL_IPRESOLVE_V6' => 2,
    'CURLOPT_DNS_USE_GLOBAL_CACHE' => 91,
    'CURLOPT_DNS_CACHE_TIMEOUT' => 92,
    'CURLOPT_PORT' => 3,
    'CURLOPT_FILE' => 10001,
    'CURLOPT_READDATA' => 10009,
    'CURLOPT_INFILE' => 10009,
    'CURLOPT_INFILESIZE' => 14,
    'CURLOPT_URL' => 10002,
    'CURLOPT_PROXY' => 10004,
    'CURLOPT_VERBOSE' => 41,
    'CURLOPT_HEADER' => 42,
    'CURLOPT_HTTPHEADER' => 10023,
    'CURLOPT_NOPROGRESS' => 43,
    'CURLOPT_PROGRESSFUNCTION' => 20056,
    'CURLOPT_NOBODY' => 44,
    'CURLOPT_FAILONERROR' => 45,
    'CURLOPT_UPLOAD' => 46,
    'CURLOPT_POST' => 47,
    'CURLOPT_FTPLISTONLY' => 48,
    'CURLOPT_FTPAPPEND' => 50,
    'CURLOPT_NETRC' => 51,
    'CURLOPT_FOLLOWLOCATION' => 52,
    'CURLOPT_PUT' => 54,
    'CURLOPT_USERPWD' => 10005,
    'CURLOPT_PROXYUSERPWD' => 10006,
    'CURLOPT_RANGE' => 10007,
    'CURLOPT_TIMEOUT' => 13,
    'CURLOPT_TIMEOUT_MS' => 155,
    'CURLOPT_POSTFIELDS' => 10015,
    'CURLOPT_REFERER' => 10016,
    'CURLOPT_USERAGENT' => 10018,
    'CURLOPT_FTPPORT' => 10017,
    'CURLOPT_FTP_USE_EPSV' => 85,
    'CURLOPT_LOW_SPEED_LIMIT' => 19,
    'CURLOPT_LOW_SPEED_TIME' => 20,
    'CURLOPT_RESUME_FROM' => 21,
    'CURLOPT_COOKIE' => 10022,
    'CURLOPT_COOKIESESSION' => 96,
    'CURLOPT_AUTOREFERER' => 58,
    'CURLOPT_SSLCERT' => 10025,
    'CURLOPT_SSLCERTPASSWD' => 10026,
    'CURLOPT_WRITEHEADER' => 10029,
    'CURLOPT_SSL_VERIFYHOST' => 81,
    'CURLOPT_COOKIEFILE' => 10031,
    'CURLOPT_SSLVERSION' => 32,
    'CURLOPT_TIMECONDITION' => 33,
    'CURLOPT_TIMEVALUE' => 34,
    'CURLOPT_CUSTOMREQUEST' => 10036,
    'CURLOPT_STDERR' => 10037,
    'CURLOPT_TRANSFERTEXT' => 53,
    'CURLOPT_RETURNTRANSFER' => 19913,
    'CURLOPT_QUOTE' => 10028,
    'CURLOPT_POSTQUOTE' => 10039,
    'CURLOPT_INTERFACE' => 10062,
    'CURLOPT_KRB4LEVEL' => 10063,
    'CURLOPT_HTTPPROXYTUNNEL' => 61,
    'CURLOPT_FILETIME' => 69,
    'CURLOPT_WRITEFUNCTION' => 20011,
    'CURLOPT_READFUNCTION' => 20012,
    'CURLOPT_HEADERFUNCTION' => 20079,
    'CURLOPT_MAXREDIRS' => 68,
    'CURLOPT_MAXCONNECTS' => 71,
    'CURLOPT_CLOSEPOLICY' => 72,
    'CURLOPT_FRESH_CONNECT' => 74,
    'CURLOPT_FORBID_REUSE' => 75,
    'CURLOPT_RANDOM_FILE' => 10076,
    'CURLOPT_EGDSOCKET' => 10077,
    'CURLOPT_CONNECTTIMEOUT' => 78,
    'CURLOPT_CONNECTTIMEOUT_MS' => 156,
    'CURLOPT_SSL_VERIFYPEER' => 64,
    'CURLOPT_CAINFO' => 10065,
    'CURLOPT_CAPATH' => 10097,
    'CURLOPT_COOKIEJAR' => 10082,
    'CURLOPT_SSL_CIPHER_LIST' => 10083,
    'CURLOPT_BINARYTRANSFER' => 19914,
    'CURLOPT_NOSIGNAL' => 99,
    'CURLOPT_PROXYTYPE' => 101,
    'CURLOPT_BUFFERSIZE' => 98,
    'CURLOPT_HTTPGET' => 80,
    'CURLOPT_HTTP_VERSION' => 84,
    'CURLOPT_SSLKEY' => 10087,
    'CURLOPT_SSLKEYTYPE' => 10088,
    'CURLOPT_SSLKEYPASSWD' => 10026,
    'CURLOPT_SSLENGINE' => 10089,
    'CURLOPT_SSLENGINE_DEFAULT' => 90,
    'CURLOPT_SSLCERTTYPE' => 10086,
    'CURLOPT_CRLF' => 27,
    'CURLOPT_ENCODING' => 10102,
    'CURLOPT_PROXYPORT' => 59,
    'CURLOPT_UNRESTRICTED_AUTH' => 105,
    'CURLOPT_FTP_USE_EPRT' => 106,
    'CURLOPT_TCP_NODELAY' => 121,
    'CURLOPT_HTTP200ALIASES' => 10104,
    'CURL_TIMECOND_IFMODSINCE' => 1,
    'CURL_TIMECOND_IFUNMODSINCE' => 2,
    'CURL_TIMECOND_LASTMOD' => 3,
    'CURLOPT_MAX_RECV_SPEED_LARGE' => 30146,
    'CURLOPT_MAX_SEND_SPEED_LARGE' => 30145,
    'CURLOPT_HTTPAUTH' => 107,
    'CURLAUTH_BASIC' => 1,
    'CURLAUTH_DIGEST' => 2,
    'CURLAUTH_GSSNEGOTIATE' => 4,
    'CURLAUTH_NTLM' => 8,
    'CURLAUTH_ANY' => -17,
    'CURLAUTH_ANYSAFE' => -18,
    'CURLOPT_PROXYAUTH' => 111,
    'CURLOPT_FTP_CREATE_MISSING_DIRS' => 110,
    'CURLOPT_PRIVATE' => 10103,
    'CURLCLOSEPOLICY_LEAST_RECENTLY_USED' => 2,
    'CURLCLOSEPOLICY_LEAST_TRAFFIC' => 3,
    'CURLCLOSEPOLICY_SLOWEST' => 4,
    'CURLCLOSEPOLICY_CALLBACK' => 5,
    'CURLCLOSEPOLICY_OLDEST' => 1,
    'CURLINFO_EFFECTIVE_URL' => 1048577,
    'CURLINFO_HTTP_CODE' => 2097154,
    'CURLINFO_HEADER_SIZE' => 2097163,
    'CURLINFO_REQUEST_SIZE' => 2097164,
    'CURLINFO_TOTAL_TIME' => 3145731,
    'CURLINFO_NAMELOOKUP_TIME' => 3145732,
    'CURLINFO_CONNECT_TIME' => 3145733,
    'CURLINFO_PRETRANSFER_TIME' => 3145734,
    'CURLINFO_SIZE_UPLOAD' => 3145735,
    'CURLINFO_SIZE_DOWNLOAD' => 3145736,
    'CURLINFO_SPEED_DOWNLOAD' => 3145737,
    'CURLINFO_SPEED_UPLOAD' => 3145738,
    'CURLINFO_FILETIME' => 2097166,
    'CURLINFO_SSL_VERIFYRESULT' => 2097165,
    'CURLINFO_CONTENT_LENGTH_DOWNLOAD' => 3145743,
    'CURLINFO_CONTENT_LENGTH_UPLOAD' => 3145744,
    'CURLINFO_STARTTRANSFER_TIME' => 3145745,
    'CURLINFO_CONTENT_TYPE' => 1048594,
    'CURLINFO_REDIRECT_TIME' => 3145747,
    'CURLINFO_REDIRECT_COUNT' => 2097172,
    'CURLINFO_HEADER_OUT' => 2,
    'CURLINFO_PRIVATE' => 1048597,
    'CURLINFO_CERTINFO' => 4194338,
    'CURLINFO_REDIRECT_URL' => 1048607,
    'CURLINFO_PRIMARY_IP' => 1048608,
    'CURLINFO_PRIMARY_PORT' => 2097192,
    'CURLINFO_LOCAL_IP' => 1048617,
    'CURLINFO_LOCAL_PORT' => 2097194,
    'CURL_VERSION_IPV6' => 1,
    'CURL_VERSION_KERBEROS4' => 2,
    'CURL_VERSION_SSL' => 4,
    'CURL_VERSION_LIBZ' => 8,
    'CURLVERSION_NOW' => 3,
    'CURLE_OK' => 0,
    'CURLE_UNSUPPORTED_PROTOCOL' => 1,
    'CURLE_FAILED_INIT' => 2,
    'CURLE_URL_MALFORMAT' => 3,
    'CURLE_URL_MALFORMAT_USER' => 4,
    'CURLE_COULDNT_RESOLVE_PROXY' => 5,
    'CURLE_COULDNT_RESOLVE_HOST' => 6,
    'CURLE_COULDNT_CONNECT' => 7,
    'CURLE_FTP_WEIRD_SERVER_REPLY' => 8,
    'CURLE_FTP_ACCESS_DENIED' => 9,
    'CURLE_FTP_USER_PASSWORD_INCORRECT' => 10,
    'CURLE_FTP_WEIRD_PASS_REPLY' => 11,
    'CURLE_FTP_WEIRD_USER_REPLY' => 12,
    'CURLE_FTP_WEIRD_PASV_REPLY' => 13,
    'CURLE_FTP_WEIRD_227_FORMAT' => 14,
    'CURLE_FTP_CANT_GET_HOST' => 15,
    'CURLE_FTP_CANT_RECONNECT' => 16,
    'CURLE_FTP_COULDNT_SET_BINARY' => 17,
    'CURLE_PARTIAL_FILE' => 18,
    'CURLE_FTP_COULDNT_RETR_FILE' => 19,
    'CURLE_FTP_WRITE_ERROR' => 20,
    'CURLE_FTP_QUOTE_ERROR' => 21,
    'CURLE_HTTP_NOT_FOUND' => 22,
    'CURLE_WRITE_ERROR' => 23,
    'CURLE_MALFORMAT_USER' => 24,
    'CURLE_FTP_COULDNT_STOR_FILE' => 25,
    'CURLE_READ_ERROR' => 26,
    'CURLE_OUT_OF_MEMORY' => 27,
    'CURLE_OPERATION_TIMEOUTED' => 28,
    'CURLE_FTP_COULDNT_SET_ASCII' => 29,
    'CURLE_FTP_PORT_FAILED' => 30,
    'CURLE_FTP_COULDNT_USE_REST' => 31,
    'CURLE_FTP_COULDNT_GET_SIZE' => 32,
    'CURLE_HTTP_RANGE_ERROR' => 33,
    'CURLE_HTTP_POST_ERROR' => 34,
    'CURLE_SSL_CONNECT_ERROR' => 35,
    'CURLE_FTP_BAD_DOWNLOAD_RESUME' => 36,
    'CURLE_FILE_COULDNT_READ_FILE' => 37,
    'CURLE_LDAP_CANNOT_BIND' => 38,
    'CURLE_LDAP_SEARCH_FAILED' => 39,
    'CURLE_LIBRARY_NOT_FOUND' => 40,
    'CURLE_FUNCTION_NOT_FOUND' => 41,
    'CURLE_ABORTED_BY_CALLBACK' => 42,
    'CURLE_BAD_FUNCTION_ARGUMENT' => 43,
    'CURLE_BAD_CALLING_ORDER' => 44,
    'CURLE_HTTP_PORT_FAILED' => 45,
    'CURLE_BAD_PASSWORD_ENTERED' => 46,
    'CURLE_TOO_MANY_REDIRECTS' => 47,
    'CURLE_UNKNOWN_TELNET_OPTION' => 48,
    'CURLE_TELNET_OPTION_SYNTAX' => 49,
    'CURLE_OBSOLETE' => 50,
    'CURLE_SSL_PEER_CERTIFICATE' => 51,
    'CURLE_GOT_NOTHING' => 52,
    'CURLE_SSL_ENGINE_NOTFOUND' => 53,
    'CURLE_SSL_ENGINE_SETFAILED' => 54,
    'CURLE_SEND_ERROR' => 55,
    'CURLE_RECV_ERROR' => 56,
    'CURLE_SHARE_IN_USE' => 57,
    'CURLE_SSL_CERTPROBLEM' => 58,
    'CURLE_SSL_CIPHER' => 59,
    'CURLE_SSL_CACERT' => 60,
    'CURLE_BAD_CONTENT_ENCODING' => 61,
    'CURLE_LDAP_INVALID_URL' => 62,
    'CURLE_FILESIZE_EXCEEDED' => 63,
    'CURLE_FTP_SSL_FAILED' => 64,
    'CURLPROXY_HTTP' => 0,
    'CURLPROXY_SOCKS4' => 4,
    'CURLPROXY_SOCKS5' => 5,
    'CURL_NETRC_OPTIONAL' => 1,
    'CURL_NETRC_IGNORED' => 0,
    'CURL_NETRC_REQUIRED' => 2,
    'CURL_HTTP_VERSION_NONE' => 0,
    'CURL_HTTP_VERSION_1_0' => 1,
    'CURL_HTTP_VERSION_1_1' => 2,
    'CURLM_CALL_MULTI_PERFORM' => -1,
    'CURLM_OK' => 0,
    'CURLM_BAD_HANDLE' => 1,
    'CURLM_BAD_EASY_HANDLE' => 2,
    'CURLM_OUT_OF_MEMORY' => 3,
    'CURLM_INTERNAL_ERROR' => 4,
    'CURLMSG_DONE' => 1,
    'CURLOPT_FTPSSLAUTH' => 129,
    'CURLFTPAUTH_DEFAULT' => 0,
    'CURLFTPAUTH_SSL' => 1,
    'CURLFTPAUTH_TLS' => 2,
    'CURLOPT_FTP_SSL' => 119,
    'CURLFTPSSL_NONE' => 0,
    'CURLFTPSSL_TRY' => 1,
    'CURLFTPSSL_CONTROL' => 2,
    'CURLFTPSSL_ALL' => 3,
    'CURLOPT_CERTINFO' => 172,
    'CURLOPT_POSTREDIR' => 161,
    'CURLSSH_AUTH_NONE' => 0,
    'CURLSSH_AUTH_PUBLICKEY' => 1,
    'CURLSSH_AUTH_PASSWORD' => 2,
    'CURLSSH_AUTH_HOST' => 4,
    'CURLSSH_AUTH_KEYBOARD' => 8,
    'CURLSSH_AUTH_DEFAULT' => -1,
    'CURLOPT_SSH_AUTH_TYPES' => 151,
    'CURLOPT_KEYPASSWD' => 10026,
    'CURLOPT_SSH_PUBLIC_KEYFILE' => 10152,
    'CURLOPT_SSH_PRIVATE_KEYFILE' => 10153,
    'CURLOPT_SSH_HOST_PUBLIC_KEY_MD5' => 10162,
    'CURLE_SSH' => 79,
    'CURLOPT_REDIR_PROTOCOLS' => 182,
    'CURLOPT_PROTOCOLS' => 181,
    'CURLPROTO_HTTP' => 1,
    'CURLPROTO_HTTPS' => 2,
    'CURLPROTO_FTP' => 4,
    'CURLPROTO_FTPS' => 8,
    'CURLPROTO_SCP' => 16,
    'CURLPROTO_SFTP' => 32,
    'CURLPROTO_TELNET' => 64,
    'CURLPROTO_LDAP' => 128,
    'CURLPROTO_LDAPS' => 256,
    'CURLPROTO_DICT' => 512,
    'CURLPROTO_FILE' => 1024,
    'CURLPROTO_TFTP' => 2048,
    'CURLPROTO_ALL' => -1,
    'CURLOPT_FTP_FILEMETHOD' => 138,
    'CURLOPT_FTP_SKIP_PASV_IP' => 137,
    'CURLFTPMETHOD_MULTICWD' => 1,
    'CURLFTPMETHOD_NOCWD' => 2,
    'CURLFTPMETHOD_SINGLECWD' => 3,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'curl.cainfo' => '',
  ),
);
