<?php

return array (
  'type' => 'extension',
  'name' => 'posix',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'posix',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'posix',
    )),
    'removed' => NULL,
    'version' => '8.2.20',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'posix extension (php.net)',
        'url' => 'https://www.php.net/manual/book.posix.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'posix_kill' => 'posix_kill',
    'posix_getpid' => 'posix_getpid',
    'posix_getppid' => 'posix_getppid',
    'posix_getuid' => 'posix_getuid',
    'posix_setuid' => 'posix_setuid',
    'posix_geteuid' => 'posix_geteuid',
    'posix_seteuid' => 'posix_seteuid',
    'posix_getgid' => 'posix_getgid',
    'posix_setgid' => 'posix_setgid',
    'posix_getegid' => 'posix_getegid',
    'posix_setegid' => 'posix_setegid',
    'posix_getgroups' => 'posix_getgroups',
    'posix_getlogin' => 'posix_getlogin',
    'posix_getpgrp' => 'posix_getpgrp',
    'posix_setsid' => 'posix_setsid',
    'posix_setpgid' => 'posix_setpgid',
    'posix_getpgid' => 'posix_getpgid',
    'posix_getsid' => 'posix_getsid',
    'posix_uname' => 'posix_uname',
    'posix_times' => 'posix_times',
    'posix_ctermid' => 'posix_ctermid',
    'posix_ttyname' => 'posix_ttyname',
    'posix_isatty' => 'posix_isatty',
    'posix_getcwd' => 'posix_getcwd',
    'posix_mkfifo' => 'posix_mkfifo',
    'posix_mknod' => 'posix_mknod',
    'posix_access' => 'posix_access',
    'posix_getgrnam' => 'posix_getgrnam',
    'posix_getgrgid' => 'posix_getgrgid',
    'posix_getpwnam' => 'posix_getpwnam',
    'posix_getpwuid' => 'posix_getpwuid',
    'posix_getrlimit' => 'posix_getrlimit',
    'posix_setrlimit' => 'posix_setrlimit',
    'posix_get_last_error' => 'posix_get_last_error',
    'posix_errno' => 'posix_errno',
    'posix_strerror' => 'posix_strerror',
    'posix_initgroups' => 'posix_initgroups',
  ),
  'constants' => 
  array (
    'POSIX_F_OK' => 0,
    'POSIX_X_OK' => 1,
    'POSIX_W_OK' => 2,
    'POSIX_R_OK' => 4,
    'POSIX_S_IFREG' => 32768,
    'POSIX_S_IFCHR' => 8192,
    'POSIX_S_IFBLK' => 24576,
    'POSIX_S_IFIFO' => 4096,
    'POSIX_S_IFSOCK' => 49152,
    'POSIX_RLIMIT_AS' => 9,
    'POSIX_RLIMIT_CORE' => 4,
    'POSIX_RLIMIT_CPU' => 0,
    'POSIX_RLIMIT_DATA' => 2,
    'POSIX_RLIMIT_FSIZE' => 1,
    'POSIX_RLIMIT_LOCKS' => 10,
    'POSIX_RLIMIT_MEMLOCK' => 8,
    'POSIX_RLIMIT_MSGQUEUE' => 12,
    'POSIX_RLIMIT_NICE' => 13,
    'POSIX_RLIMIT_NOFILE' => 7,
    'POSIX_RLIMIT_NPROC' => 6,
    'POSIX_RLIMIT_RSS' => 5,
    'POSIX_RLIMIT_RTPRIO' => 14,
    'POSIX_RLIMIT_RTTIME' => 15,
    'POSIX_RLIMIT_SIGPENDING' => 11,
    'POSIX_RLIMIT_STACK' => 3,
    'POSIX_RLIMIT_INFINITY' => -1,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
