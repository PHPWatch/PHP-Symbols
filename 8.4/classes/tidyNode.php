<?php

return array (
  'type' => 'class',
  'name' => 'tidyNode',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'tidyNode',
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
        'name' => 'tidyNode class (php.net)',
        'url' => 'https://www.php.net/manual/class.tidynode.php',
      ),
    ),
  ),
  'modifiers' => 32,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
    'value' => 
    array (
      'name' => 'value',
      'class' => 'tidyNode',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'class' => 'tidyNode',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'type' => 
    array (
      'name' => 'type',
      'class' => 'tidyNode',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'line' => 
    array (
      'name' => 'line',
      'class' => 'tidyNode',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'column' => 
    array (
      'name' => 'column',
      'class' => 'tidyNode',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'proprietary' => 
    array (
      'name' => 'proprietary',
      'class' => 'tidyNode',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'id' => 
    array (
      'name' => 'id',
      'class' => 'tidyNode',
      'type' => '?int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'attribute' => 
    array (
      'name' => 'attribute',
      'class' => 'tidyNode',
      'type' => '?array',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'child' => 
    array (
      'name' => 'child',
      'class' => 'tidyNode',
      'type' => '?array',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'hasChildren' => 
    array (
      'name' => 'hasChildren',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasSiblings' => 
    array (
      'name' => 'hasSiblings',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isComment' => 
    array (
      'name' => 'isComment',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isHtml' => 
    array (
      'name' => 'isHtml',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isText' => 
    array (
      'name' => 'isText',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isJste' => 
    array (
      'name' => 'isJste',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isAsp' => 
    array (
      'name' => 'isAsp',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isPhp' => 
    array (
      'name' => 'isPhp',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getParent' => 
    array (
      'name' => 'getParent',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => '?tidyNode',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPreviousSibling' => 
    array (
      'name' => 'getPreviousSibling',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => '?tidyNode',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getNextSibling' => 
    array (
      'name' => 'getNextSibling',
      'class' => 'tidyNode',
      'parameters' => 
      array (
      ),
      'return_type' => '?tidyNode',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'extension' => 'tidy',
  'toString' => 'Class [ <internal:tidy> final class tidyNode ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [9] {
    Property [ public protected(set) readonly string $value ]
    Property [ public protected(set) readonly string $name ]
    Property [ public protected(set) readonly int $type ]
    Property [ public protected(set) readonly int $line ]
    Property [ public protected(set) readonly int $column ]
    Property [ public protected(set) readonly bool $proprietary ]
    Property [ public protected(set) readonly ?int $id ]
    Property [ public protected(set) readonly ?array $attribute ]
    Property [ public protected(set) readonly ?array $child ]
  }

  - Methods [12] {
    Method [ <internal:tidy, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:tidy> public method hasChildren ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:tidy> public method hasSiblings ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:tidy> public method isComment ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:tidy> public method isHtml ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:tidy> public method isText ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:tidy> public method isJste ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:tidy> public method isAsp ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:tidy> public method isPhp ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:tidy> public method getParent ] {

      - Parameters [0] {
      }
      - Return [ ?tidyNode ]
    }

    Method [ <internal:tidy> public method getPreviousSibling ] {

      - Parameters [0] {
      }
      - Return [ ?tidyNode ]
    }

    Method [ <internal:tidy> public method getNextSibling ] {

      - Parameters [0] {
      }
      - Return [ ?tidyNode ]
    }
  }
}
',
);
