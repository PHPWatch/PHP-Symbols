<?php

return array (
  'type' => 'extension',
  'name' => 'bcmath',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'bcmath',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'bcmath',
    )),
    'removed' => NULL,
    'version' => '8.4.1-dev',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'bcmath extension (php.net)',
        'url' => 'https://www.php.net/manual/book.bcmath.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'BcMath\\Number',
  ),
  'functions' => 
  array (
    'bcadd' => 'bcadd',
    'bcsub' => 'bcsub',
    'bcmul' => 'bcmul',
    'bcdiv' => 'bcdiv',
    'bcmod' => 'bcmod',
    'bcdivmod' => 'bcdivmod',
    'bcpowmod' => 'bcpowmod',
    'bcpow' => 'bcpow',
    'bcsqrt' => 'bcsqrt',
    'bccomp' => 'bccomp',
    'bcscale' => 'bcscale',
    'bcfloor' => 'bcfloor',
    'bcceil' => 'bcceil',
    'bcround' => 'bcround',
  ),
  'constants' => 
  array (
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'bcmath.scale' => '0',
  ),
);
