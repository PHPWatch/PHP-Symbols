<?php

return array (
  'type' => 'extension',
  'name' => 'ftp',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'ftp',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'ftp',
    )),
    'removed' => NULL,
    'version' => '8.3.17',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ftp extension (php.net)',
        'url' => 'https://www.php.net/manual/book.ftp.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'FTP\\Connection',
  ),
  'functions' => 
  array (
    'ftp_connect' => 'ftp_connect',
    'ftp_ssl_connect' => 'ftp_ssl_connect',
    'ftp_login' => 'ftp_login',
    'ftp_pwd' => 'ftp_pwd',
    'ftp_cdup' => 'ftp_cdup',
    'ftp_chdir' => 'ftp_chdir',
    'ftp_exec' => 'ftp_exec',
    'ftp_raw' => 'ftp_raw',
    'ftp_mkdir' => 'ftp_mkdir',
    'ftp_rmdir' => 'ftp_rmdir',
    'ftp_chmod' => 'ftp_chmod',
    'ftp_alloc' => 'ftp_alloc',
    'ftp_nlist' => 'ftp_nlist',
    'ftp_rawlist' => 'ftp_rawlist',
    'ftp_mlsd' => 'ftp_mlsd',
    'ftp_systype' => 'ftp_systype',
    'ftp_fget' => 'ftp_fget',
    'ftp_nb_fget' => 'ftp_nb_fget',
    'ftp_pasv' => 'ftp_pasv',
    'ftp_get' => 'ftp_get',
    'ftp_nb_get' => 'ftp_nb_get',
    'ftp_nb_continue' => 'ftp_nb_continue',
    'ftp_fput' => 'ftp_fput',
    'ftp_nb_fput' => 'ftp_nb_fput',
    'ftp_put' => 'ftp_put',
    'ftp_append' => 'ftp_append',
    'ftp_nb_put' => 'ftp_nb_put',
    'ftp_size' => 'ftp_size',
    'ftp_mdtm' => 'ftp_mdtm',
    'ftp_rename' => 'ftp_rename',
    'ftp_delete' => 'ftp_delete',
    'ftp_site' => 'ftp_site',
    'ftp_close' => 'ftp_close',
    'ftp_quit' => 'ftp_quit',
    'ftp_set_option' => 'ftp_set_option',
    'ftp_get_option' => 'ftp_get_option',
  ),
  'constants' => 
  array (
    'FTP_ASCII' => 1,
    'FTP_TEXT' => 1,
    'FTP_BINARY' => 2,
    'FTP_IMAGE' => 2,
    'FTP_AUTORESUME' => -1,
    'FTP_TIMEOUT_SEC' => 0,
    'FTP_AUTOSEEK' => 1,
    'FTP_USEPASVADDRESS' => 2,
    'FTP_FAILED' => 0,
    'FTP_FINISHED' => 1,
    'FTP_MOREDATA' => 2,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
