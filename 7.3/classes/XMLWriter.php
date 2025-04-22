<?php

return array (
  'type' => 'class',
  'name' => 'XMLWriter',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'XMLWriter',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'XMLWriter interface (php.net)',
        'url' => 'https://www.php.net/manual/class.xmlwriter.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    'openUri' => 
    array (
      'name' => 'openUri',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'uri' => 
        array (
          'position' => 0,
          'name' => 'uri',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'openMemory' => 
    array (
      'name' => 'openMemory',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setIndent' => 
    array (
      'name' => 'setIndent',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'indent' => 
        array (
          'position' => 0,
          'name' => 'indent',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setIndentString' => 
    array (
      'name' => 'setIndentString',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'indentString' => 
        array (
          'position' => 0,
          'name' => 'indentString',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startComment' => 
    array (
      'name' => 'startComment',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endComment' => 
    array (
      'name' => 'endComment',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startAttribute' => 
    array (
      'name' => 'startAttribute',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endAttribute' => 
    array (
      'name' => 'endAttribute',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeAttribute' => 
    array (
      'name' => 'writeAttribute',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startAttributeNs' => 
    array (
      'name' => 'startAttributeNs',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'uri' => 
        array (
          'position' => 2,
          'name' => 'uri',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeAttributeNs' => 
    array (
      'name' => 'writeAttributeNs',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'uri' => 
        array (
          'position' => 2,
          'name' => 'uri',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'content' => 
        array (
          'position' => 3,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startElement' => 
    array (
      'name' => 'startElement',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endElement' => 
    array (
      'name' => 'endElement',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fullEndElement' => 
    array (
      'name' => 'fullEndElement',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startElementNs' => 
    array (
      'name' => 'startElementNs',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'uri' => 
        array (
          'position' => 2,
          'name' => 'uri',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeElement' => 
    array (
      'name' => 'writeElement',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'content' => 
        array (
          'position' => 1,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeElementNs' => 
    array (
      'name' => 'writeElementNs',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'uri' => 
        array (
          'position' => 2,
          'name' => 'uri',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'content' => 
        array (
          'position' => 3,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startPi' => 
    array (
      'name' => 'startPi',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'target' => 
        array (
          'position' => 0,
          'name' => 'target',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endPi' => 
    array (
      'name' => 'endPi',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writePi' => 
    array (
      'name' => 'writePi',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'target' => 
        array (
          'position' => 0,
          'name' => 'target',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'content' => 
        array (
          'position' => 1,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startCdata' => 
    array (
      'name' => 'startCdata',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endCdata' => 
    array (
      'name' => 'endCdata',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeCdata' => 
    array (
      'name' => 'writeCdata',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'content' => 
        array (
          'position' => 0,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'text' => 
    array (
      'name' => 'text',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'content' => 
        array (
          'position' => 0,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeRaw' => 
    array (
      'name' => 'writeRaw',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'content' => 
        array (
          'position' => 0,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startDocument' => 
    array (
      'name' => 'startDocument',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'version' => 
        array (
          'position' => 0,
          'name' => 'version',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 1,
          'name' => 'encoding',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'standalone' => 
        array (
          'position' => 2,
          'name' => 'standalone',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endDocument' => 
    array (
      'name' => 'endDocument',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeComment' => 
    array (
      'name' => 'writeComment',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'content' => 
        array (
          'position' => 0,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startDtd' => 
    array (
      'name' => 'startDtd',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'publicId' => 
        array (
          'position' => 1,
          'name' => 'publicId',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'systemId' => 
        array (
          'position' => 2,
          'name' => 'systemId',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endDtd' => 
    array (
      'name' => 'endDtd',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeDtd' => 
    array (
      'name' => 'writeDtd',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'publicId' => 
        array (
          'position' => 1,
          'name' => 'publicId',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'systemId' => 
        array (
          'position' => 2,
          'name' => 'systemId',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'subset' => 
        array (
          'position' => 3,
          'name' => 'subset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startDtdElement' => 
    array (
      'name' => 'startDtdElement',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endDtdElement' => 
    array (
      'name' => 'endDtdElement',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeDtdElement' => 
    array (
      'name' => 'writeDtdElement',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'content' => 
        array (
          'position' => 1,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startDtdAttlist' => 
    array (
      'name' => 'startDtdAttlist',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endDtdAttlist' => 
    array (
      'name' => 'endDtdAttlist',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeDtdAttlist' => 
    array (
      'name' => 'writeDtdAttlist',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'content' => 
        array (
          'position' => 1,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startDtdEntity' => 
    array (
      'name' => 'startDtdEntity',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'isparam' => 
        array (
          'position' => 1,
          'name' => 'isparam',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'endDtdEntity' => 
    array (
      'name' => 'endDtdEntity',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeDtdEntity' => 
    array (
      'name' => 'writeDtdEntity',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'content' => 
        array (
          'position' => 1,
          'name' => 'content',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'outputMemory' => 
    array (
      'name' => 'outputMemory',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'flush' => 
        array (
          'position' => 0,
          'name' => 'flush',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flush' => 
    array (
      'name' => 'flush',
      'class' => 'XMLWriter',
      'parameters' => 
      array (
        'empty' => 
        array (
          'position' => 0,
          'name' => 'empty',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'xmlwriter',
  'toString' => 'Class [ <internal:xmlwriter> class XMLWriter ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [42] {
    Method [ <internal:xmlwriter> public method openUri ] {

      - Parameters [1] {
        Parameter #0 [ <required> $uri ]
      }
    }

    Method [ <internal:xmlwriter> public method openMemory ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method setIndent ] {

      - Parameters [1] {
        Parameter #0 [ <required> $indent ]
      }
    }

    Method [ <internal:xmlwriter> public method setIndentString ] {

      - Parameters [1] {
        Parameter #0 [ <required> $indentString ]
      }
    }

    Method [ <internal:xmlwriter> public method startComment ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method endComment ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method startAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:xmlwriter> public method endAttribute ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method writeAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:xmlwriter> public method startAttributeNs ] {

      - Parameters [3] {
        Parameter #0 [ <required> $prefix ]
        Parameter #1 [ <required> $name ]
        Parameter #2 [ <required> $uri ]
      }
    }

    Method [ <internal:xmlwriter> public method writeAttributeNs ] {

      - Parameters [4] {
        Parameter #0 [ <required> $prefix ]
        Parameter #1 [ <required> $name ]
        Parameter #2 [ <required> $uri ]
        Parameter #3 [ <required> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method startElement ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:xmlwriter> public method endElement ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method fullEndElement ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method startElementNs ] {

      - Parameters [3] {
        Parameter #0 [ <required> $prefix ]
        Parameter #1 [ <required> $name ]
        Parameter #2 [ <required> $uri ]
      }
    }

    Method [ <internal:xmlwriter> public method writeElement ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <optional> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method writeElementNs ] {

      - Parameters [4] {
        Parameter #0 [ <required> $prefix ]
        Parameter #1 [ <required> $name ]
        Parameter #2 [ <required> $uri ]
        Parameter #3 [ <optional> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method startPi ] {

      - Parameters [1] {
        Parameter #0 [ <required> $target ]
      }
    }

    Method [ <internal:xmlwriter> public method endPi ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method writePi ] {

      - Parameters [2] {
        Parameter #0 [ <required> $target ]
        Parameter #1 [ <required> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method startCdata ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method endCdata ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method writeCdata ] {

      - Parameters [1] {
        Parameter #0 [ <required> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method text ] {

      - Parameters [1] {
        Parameter #0 [ <required> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method writeRaw ] {

      - Parameters [1] {
        Parameter #0 [ <required> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method startDocument ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $version ]
        Parameter #1 [ <optional> $encoding ]
        Parameter #2 [ <optional> $standalone ]
      }
    }

    Method [ <internal:xmlwriter> public method endDocument ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method writeComment ] {

      - Parameters [1] {
        Parameter #0 [ <required> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method startDtd ] {

      - Parameters [3] {
        Parameter #0 [ <required> $qualifiedName ]
        Parameter #1 [ <optional> $publicId ]
        Parameter #2 [ <optional> $systemId ]
      }
    }

    Method [ <internal:xmlwriter> public method endDtd ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method writeDtd ] {

      - Parameters [4] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <optional> $publicId ]
        Parameter #2 [ <optional> $systemId ]
        Parameter #3 [ <optional> $subset ]
      }
    }

    Method [ <internal:xmlwriter> public method startDtdElement ] {

      - Parameters [1] {
        Parameter #0 [ <required> $qualifiedName ]
      }
    }

    Method [ <internal:xmlwriter> public method endDtdElement ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method writeDtdElement ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method startDtdAttlist ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:xmlwriter> public method endDtdAttlist ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method writeDtdAttlist ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method startDtdEntity ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $isparam ]
      }
    }

    Method [ <internal:xmlwriter> public method endDtdEntity ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:xmlwriter> public method writeDtdEntity ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $content ]
      }
    }

    Method [ <internal:xmlwriter> public method outputMemory ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $flush ]
      }
    }

    Method [ <internal:xmlwriter> public method flush ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $empty ]
      }
    }
  }
}
',
  'modifiers' => 0,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
