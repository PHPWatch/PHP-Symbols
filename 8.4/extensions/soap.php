<?php

return array (
  'type' => 'extension',
  'name' => 'soap',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'soap',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'soap',
    )),
    'removed' => NULL,
    'version' => '8.4.7-dev',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'soap extension (php.net)',
        'url' => 'https://www.php.net/manual/book.soap.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'SoapClient',
    1 => 'SoapVar',
    2 => 'SoapServer',
    3 => 'SoapFault',
    4 => 'SoapParam',
    5 => 'SoapHeader',
    6 => 'Soap\\Url',
    7 => 'Soap\\Sdl',
  ),
  'functions' => 
  array (
    'use_soap_error_handler' => 'use_soap_error_handler',
    'is_soap_fault' => 'is_soap_fault',
  ),
  'constants' => 
  array (
    'SOAP_1_1' => 1,
    'SOAP_1_2' => 2,
    'SOAP_PERSISTENCE_SESSION' => 1,
    'SOAP_PERSISTENCE_REQUEST' => 2,
    'SOAP_FUNCTIONS_ALL' => 999,
    'SOAP_ENCODED' => 1,
    'SOAP_LITERAL' => 2,
    'SOAP_RPC' => 1,
    'SOAP_DOCUMENT' => 2,
    'SOAP_ACTOR_NEXT' => 1,
    'SOAP_ACTOR_NONE' => 2,
    'SOAP_ACTOR_UNLIMATERECEIVER' => 3,
    'SOAP_COMPRESSION_ACCEPT' => 32,
    'SOAP_COMPRESSION_GZIP' => 0,
    'SOAP_COMPRESSION_DEFLATE' => 16,
    'SOAP_AUTHENTICATION_BASIC' => 0,
    'SOAP_AUTHENTICATION_DIGEST' => 1,
    'UNKNOWN_TYPE' => 999998,
    'XSD_STRING' => 101,
    'XSD_BOOLEAN' => 102,
    'XSD_DECIMAL' => 103,
    'XSD_FLOAT' => 104,
    'XSD_DOUBLE' => 105,
    'XSD_DURATION' => 106,
    'XSD_DATETIME' => 107,
    'XSD_TIME' => 108,
    'XSD_DATE' => 109,
    'XSD_GYEARMONTH' => 110,
    'XSD_GYEAR' => 111,
    'XSD_GMONTHDAY' => 112,
    'XSD_GDAY' => 113,
    'XSD_GMONTH' => 114,
    'XSD_HEXBINARY' => 115,
    'XSD_BASE64BINARY' => 116,
    'XSD_ANYURI' => 117,
    'XSD_QNAME' => 118,
    'XSD_NOTATION' => 119,
    'XSD_NORMALIZEDSTRING' => 120,
    'XSD_TOKEN' => 121,
    'XSD_LANGUAGE' => 122,
    'XSD_NMTOKEN' => 123,
    'XSD_NAME' => 124,
    'XSD_NCNAME' => 125,
    'XSD_ID' => 126,
    'XSD_IDREF' => 127,
    'XSD_IDREFS' => 128,
    'XSD_ENTITY' => 129,
    'XSD_ENTITIES' => 130,
    'XSD_INTEGER' => 131,
    'XSD_NONPOSITIVEINTEGER' => 132,
    'XSD_NEGATIVEINTEGER' => 133,
    'XSD_LONG' => 134,
    'XSD_INT' => 135,
    'XSD_SHORT' => 136,
    'XSD_BYTE' => 137,
    'XSD_NONNEGATIVEINTEGER' => 138,
    'XSD_UNSIGNEDLONG' => 139,
    'XSD_UNSIGNEDINT' => 140,
    'XSD_UNSIGNEDSHORT' => 141,
    'XSD_UNSIGNEDBYTE' => 142,
    'XSD_POSITIVEINTEGER' => 143,
    'XSD_NMTOKENS' => 144,
    'XSD_ANYTYPE' => 145,
    'XSD_ANYXML' => 147,
    'APACHE_MAP' => 200,
    'SOAP_ENC_OBJECT' => 301,
    'SOAP_ENC_ARRAY' => 300,
    'XSD_1999_TIMEINSTANT' => 401,
    'XSD_NAMESPACE' => 'http://www.w3.org/2001/XMLSchema',
    'XSD_1999_NAMESPACE' => 'http://www.w3.org/1999/XMLSchema',
    'SOAP_SINGLE_ELEMENT_ARRAYS' => 1,
    'SOAP_WAIT_ONE_WAY_CALLS' => 2,
    'SOAP_USE_XSI_ARRAY_TYPE' => 4,
    'WSDL_CACHE_NONE' => 0,
    'WSDL_CACHE_DISK' => 1,
    'WSDL_CACHE_MEMORY' => 2,
    'WSDL_CACHE_BOTH' => 3,
    'SOAP_SSL_METHOD_TLS' => 0,
    'SOAP_SSL_METHOD_SSLv2' => 1,
    'SOAP_SSL_METHOD_SSLv3' => 2,
    'SOAP_SSL_METHOD_SSLv23' => 3,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'soap.wsdl_cache' => '1',
    'soap.wsdl_cache_dir' => '/tmp',
    'soap.wsdl_cache_enabled' => '1',
    'soap.wsdl_cache_limit' => '5',
    'soap.wsdl_cache_ttl' => '86400',
  ),
);
