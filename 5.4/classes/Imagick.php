<?php

return array (
  'type' => 'class',
  'name' => 'Imagick',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Imagick',
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
        'name' => 'Imagick class (php.net)',
        'url' => 'https://www.php.net/manual/class.imagick.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
    2 => 'Countable',
  ),
  'constants' => 
  array (
    'COLOR_BLACK' => 11,
    'COLOR_BLUE' => 12,
    'COLOR_CYAN' => 13,
    'COLOR_GREEN' => 14,
    'COLOR_RED' => 15,
    'COLOR_YELLOW' => 16,
    'COLOR_MAGENTA' => 17,
    'COLOR_OPACITY' => 18,
    'COLOR_ALPHA' => 19,
    'COLOR_FUZZ' => 20,
    'IMAGICK_EXTNUM' => 30404,
    'IMAGICK_EXTVER' => '3.4.4',
    'QUANTUM_RANGE' => 65535,
    'USE_ZEND_MM' => 0,
    'COMPOSITE_DEFAULT' => 40,
    'COMPOSITE_UNDEFINED' => 0,
    'COMPOSITE_NO' => 1,
    'COMPOSITE_ADD' => 2,
    'COMPOSITE_ATOP' => 3,
    'COMPOSITE_BLEND' => 4,
    'COMPOSITE_BUMPMAP' => 5,
    'COMPOSITE_CLEAR' => 7,
    'COMPOSITE_COLORBURN' => 8,
    'COMPOSITE_COLORDODGE' => 9,
    'COMPOSITE_COLORIZE' => 10,
    'COMPOSITE_COPYBLACK' => 11,
    'COMPOSITE_COPYBLUE' => 12,
    'COMPOSITE_COPY' => 13,
    'COMPOSITE_COPYCYAN' => 14,
    'COMPOSITE_COPYGREEN' => 15,
    'COMPOSITE_COPYMAGENTA' => 16,
    'COMPOSITE_COPYOPACITY' => 17,
    'COMPOSITE_COPYRED' => 18,
    'COMPOSITE_COPYYELLOW' => 19,
    'COMPOSITE_DARKEN' => 20,
    'COMPOSITE_DSTATOP' => 21,
    'COMPOSITE_DST' => 22,
    'COMPOSITE_DSTIN' => 23,
    'COMPOSITE_DSTOUT' => 24,
    'COMPOSITE_DSTOVER' => 25,
    'COMPOSITE_DIFFERENCE' => 26,
    'COMPOSITE_DISPLACE' => 27,
    'COMPOSITE_DISSOLVE' => 28,
    'COMPOSITE_EXCLUSION' => 29,
    'COMPOSITE_HARDLIGHT' => 30,
    'COMPOSITE_HUE' => 31,
    'COMPOSITE_IN' => 32,
    'COMPOSITE_LIGHTEN' => 33,
    'COMPOSITE_LUMINIZE' => 35,
    'COMPOSITE_MINUS' => 36,
    'COMPOSITE_MODULATE' => 37,
    'COMPOSITE_MULTIPLY' => 38,
    'COMPOSITE_OUT' => 39,
    'COMPOSITE_OVER' => 40,
    'COMPOSITE_OVERLAY' => 41,
    'COMPOSITE_PLUS' => 42,
    'COMPOSITE_REPLACE' => 43,
    'COMPOSITE_SATURATE' => 44,
    'COMPOSITE_SCREEN' => 45,
    'COMPOSITE_SOFTLIGHT' => 46,
    'COMPOSITE_SRCATOP' => 47,
    'COMPOSITE_SRC' => 48,
    'COMPOSITE_SRCIN' => 49,
    'COMPOSITE_SRCOUT' => 50,
    'COMPOSITE_SRCOVER' => 51,
    'COMPOSITE_SUBTRACT' => 52,
    'COMPOSITE_THRESHOLD' => 53,
    'COMPOSITE_XOR' => 54,
    'COMPOSITE_CHANGEMASK' => 6,
    'COMPOSITE_LINEARLIGHT' => 34,
    'COMPOSITE_DIVIDE' => 55,
    'COMPOSITE_DISTORT' => 56,
    'COMPOSITE_BLUR' => 57,
    'COMPOSITE_PEGTOPLIGHT' => 58,
    'COMPOSITE_VIVIDLIGHT' => 59,
    'COMPOSITE_PINLIGHT' => 60,
    'COMPOSITE_LINEARDODGE' => 61,
    'COMPOSITE_LINEARBURN' => 62,
    'COMPOSITE_MATHEMATICS' => 63,
    'COMPOSITE_MODULUSADD' => 2,
    'COMPOSITE_MODULUSSUBTRACT' => 52,
    'COMPOSITE_MINUSDST' => 36,
    'COMPOSITE_DIVIDEDST' => 55,
    'COMPOSITE_DIVIDESRC' => 64,
    'COMPOSITE_MINUSSRC' => 65,
    'COMPOSITE_DARKENINTENSITY' => 66,
    'COMPOSITE_LIGHTENINTENSITY' => 67,
    'MONTAGEMODE_FRAME' => 1,
    'MONTAGEMODE_UNFRAME' => 2,
    'MONTAGEMODE_CONCATENATE' => 3,
    'STYLE_NORMAL' => 1,
    'STYLE_ITALIC' => 2,
    'STYLE_OBLIQUE' => 3,
    'STYLE_ANY' => 4,
    'FILTER_UNDEFINED' => 0,
    'FILTER_POINT' => 1,
    'FILTER_BOX' => 2,
    'FILTER_TRIANGLE' => 3,
    'FILTER_HERMITE' => 4,
    'FILTER_HANNING' => 5,
    'FILTER_HAMMING' => 6,
    'FILTER_BLACKMAN' => 7,
    'FILTER_GAUSSIAN' => 8,
    'FILTER_QUADRATIC' => 9,
    'FILTER_CUBIC' => 10,
    'FILTER_CATROM' => 11,
    'FILTER_MITCHELL' => 12,
    'FILTER_LANCZOS' => 22,
    'FILTER_BESSEL' => 13,
    'FILTER_SINC' => 14,
    'FILTER_KAISER' => 16,
    'FILTER_WELSH' => 17,
    'FILTER_PARZEN' => 18,
    'FILTER_LAGRANGE' => 21,
    'FILTER_SENTINEL' => 30,
    'FILTER_BOHMAN' => 19,
    'FILTER_BARTLETT' => 20,
    'FILTER_JINC' => 13,
    'FILTER_SINCFAST' => 15,
    'FILTER_ROBIDOUX' => 26,
    'FILTER_LANCZOSSHARP' => 23,
    'FILTER_LANCZOS2' => 24,
    'FILTER_LANCZOS2SHARP' => 25,
    'FILTER_ROBIDOUXSHARP' => 27,
    'FILTER_COSINE' => 28,
    'IMGTYPE_UNDEFINED' => 0,
    'IMGTYPE_BILEVEL' => 1,
    'IMGTYPE_GRAYSCALE' => 2,
    'IMGTYPE_GRAYSCALEMATTE' => 3,
    'IMGTYPE_PALETTE' => 4,
    'IMGTYPE_PALETTEMATTE' => 5,
    'IMGTYPE_TRUECOLOR' => 6,
    'IMGTYPE_TRUECOLORMATTE' => 7,
    'IMGTYPE_COLORSEPARATION' => 8,
    'IMGTYPE_COLORSEPARATIONMATTE' => 9,
    'IMGTYPE_OPTIMIZE' => 10,
    'IMGTYPE_PALETTEBILEVELMATTE' => 11,
    'RESOLUTION_UNDEFINED' => 0,
    'RESOLUTION_PIXELSPERINCH' => 1,
    'RESOLUTION_PIXELSPERCENTIMETER' => 2,
    'COMPRESSION_UNDEFINED' => 0,
    'COMPRESSION_NO' => 1,
    'COMPRESSION_BZIP' => 2,
    'COMPRESSION_FAX' => 6,
    'COMPRESSION_GROUP4' => 7,
    'COMPRESSION_JPEG' => 8,
    'COMPRESSION_JPEG2000' => 9,
    'COMPRESSION_LOSSLESSJPEG' => 10,
    'COMPRESSION_LZW' => 11,
    'COMPRESSION_RLE' => 12,
    'COMPRESSION_ZIP' => 13,
    'COMPRESSION_DXT1' => 3,
    'COMPRESSION_DXT3' => 4,
    'COMPRESSION_DXT5' => 5,
    'COMPRESSION_ZIPS' => 14,
    'COMPRESSION_PIZ' => 15,
    'COMPRESSION_PXR24' => 16,
    'COMPRESSION_B44' => 17,
    'COMPRESSION_B44A' => 18,
    'COMPRESSION_LZMA' => 19,
    'COMPRESSION_JBIG1' => 20,
    'COMPRESSION_JBIG2' => 21,
    'PAINT_POINT' => 1,
    'PAINT_REPLACE' => 2,
    'PAINT_FLOODFILL' => 3,
    'PAINT_FILLTOBORDER' => 4,
    'PAINT_RESET' => 5,
    'GRAVITY_NORTHWEST' => 1,
    'GRAVITY_NORTH' => 2,
    'GRAVITY_NORTHEAST' => 3,
    'GRAVITY_WEST' => 4,
    'GRAVITY_CENTER' => 5,
    'GRAVITY_EAST' => 6,
    'GRAVITY_SOUTHWEST' => 7,
    'GRAVITY_SOUTH' => 8,
    'GRAVITY_SOUTHEAST' => 9,
    'GRAVITY_FORGET' => 0,
    'GRAVITY_STATIC' => 10,
    'STRETCH_NORMAL' => 1,
    'STRETCH_ULTRACONDENSED' => 2,
    'STRETCH_EXTRACONDENSED' => 3,
    'STRETCH_CONDENSED' => 4,
    'STRETCH_SEMICONDENSED' => 5,
    'STRETCH_SEMIEXPANDED' => 6,
    'STRETCH_EXPANDED' => 7,
    'STRETCH_EXTRAEXPANDED' => 8,
    'STRETCH_ULTRAEXPANDED' => 9,
    'STRETCH_ANY' => 10,
    'ALIGN_UNDEFINED' => 0,
    'ALIGN_LEFT' => 1,
    'ALIGN_CENTER' => 2,
    'ALIGN_RIGHT' => 3,
    'DECORATION_NO' => 1,
    'DECORATION_UNDERLINE' => 2,
    'DECORATION_OVERLINE' => 3,
    'DECORATION_LINETROUGH' => 4,
    'DECORATION_LINETHROUGH' => 4,
    'NOISE_UNIFORM' => 1,
    'NOISE_GAUSSIAN' => 2,
    'NOISE_MULTIPLICATIVEGAUSSIAN' => 3,
    'NOISE_IMPULSE' => 4,
    'NOISE_LAPLACIAN' => 5,
    'NOISE_POISSON' => 6,
    'NOISE_RANDOM' => 7,
    'CHANNEL_UNDEFINED' => 0,
    'CHANNEL_RED' => 1,
    'CHANNEL_GRAY' => 1,
    'CHANNEL_CYAN' => 1,
    'CHANNEL_GREEN' => 2,
    'CHANNEL_MAGENTA' => 2,
    'CHANNEL_BLUE' => 4,
    'CHANNEL_YELLOW' => 4,
    'CHANNEL_ALPHA' => 8,
    'CHANNEL_OPACITY' => 8,
    'CHANNEL_MATTE' => 8,
    'CHANNEL_BLACK' => 32,
    'CHANNEL_INDEX' => 32,
    'CHANNEL_ALL' => 134217727,
    'CHANNEL_DEFAULT' => 134217719,
    'CHANNEL_RGBA' => 15,
    'CHANNEL_TRUEALPHA' => 64,
    'CHANNEL_RGBS' => 128,
    'CHANNEL_GRAY_CHANNELS' => 128,
    'CHANNEL_SYNC' => 256,
    'CHANNEL_COMPOSITES' => 47,
    'METRIC_UNDEFINED' => 0,
    'METRIC_ABSOLUTEERRORMETRIC' => 1,
    'METRIC_MEANABSOLUTEERROR' => 2,
    'METRIC_MEANERRORPERPIXELMETRIC' => 3,
    'METRIC_MEANSQUAREERROR' => 4,
    'METRIC_PEAKABSOLUTEERROR' => 5,
    'METRIC_PEAKSIGNALTONOISERATIO' => 6,
    'METRIC_ROOTMEANSQUAREDERROR' => 7,
    'PIXEL_CHAR' => 1,
    'PIXEL_DOUBLE' => 2,
    'PIXEL_FLOAT' => 3,
    'PIXEL_INTEGER' => 4,
    'PIXEL_LONG' => 5,
    'PIXEL_QUANTUM' => 6,
    'PIXEL_SHORT' => 7,
    'EVALUATE_UNDEFINED' => 0,
    'EVALUATE_ADD' => 1,
    'EVALUATE_AND' => 2,
    'EVALUATE_DIVIDE' => 3,
    'EVALUATE_LEFTSHIFT' => 4,
    'EVALUATE_MAX' => 5,
    'EVALUATE_MIN' => 6,
    'EVALUATE_MULTIPLY' => 7,
    'EVALUATE_OR' => 8,
    'EVALUATE_RIGHTSHIFT' => 9,
    'EVALUATE_SET' => 10,
    'EVALUATE_SUBTRACT' => 11,
    'EVALUATE_XOR' => 12,
    'EVALUATE_POW' => 13,
    'EVALUATE_LOG' => 14,
    'EVALUATE_THRESHOLD' => 15,
    'EVALUATE_THRESHOLDBLACK' => 16,
    'EVALUATE_THRESHOLDWHITE' => 17,
    'EVALUATE_GAUSSIANNOISE' => 18,
    'EVALUATE_IMPULSENOISE' => 19,
    'EVALUATE_LAPLACIANNOISE' => 20,
    'EVALUATE_MULTIPLICATIVENOISE' => 21,
    'EVALUATE_POISSONNOISE' => 22,
    'EVALUATE_UNIFORMNOISE' => 23,
    'EVALUATE_COSINE' => 24,
    'EVALUATE_SINE' => 25,
    'EVALUATE_ADDMODULUS' => 26,
    'EVALUATE_MEAN' => 27,
    'EVALUATE_ABS' => 28,
    'EVALUATE_EXPONENTIAL' => 29,
    'EVALUATE_MEDIAN' => 30,
    'EVALUATE_SUM' => 31,
    'COLORSPACE_UNDEFINED' => 0,
    'COLORSPACE_RGB' => 1,
    'COLORSPACE_GRAY' => 2,
    'COLORSPACE_TRANSPARENT' => 3,
    'COLORSPACE_OHTA' => 4,
    'COLORSPACE_LAB' => 5,
    'COLORSPACE_XYZ' => 6,
    'COLORSPACE_YCBCR' => 7,
    'COLORSPACE_YCC' => 8,
    'COLORSPACE_YIQ' => 9,
    'COLORSPACE_YPBPR' => 10,
    'COLORSPACE_YUV' => 11,
    'COLORSPACE_CMYK' => 12,
    'COLORSPACE_SRGB' => 13,
    'COLORSPACE_HSB' => 14,
    'COLORSPACE_HSL' => 15,
    'COLORSPACE_HWB' => 16,
    'COLORSPACE_REC601LUMA' => 17,
    'COLORSPACE_REC709LUMA' => 19,
    'COLORSPACE_LOG' => 21,
    'COLORSPACE_CMY' => 22,
    'COLORSPACE_REC601YCBCR' => 18,
    'COLORSPACE_REC709YCBCR' => 20,
    'VIRTUALPIXELMETHOD_UNDEFINED' => 0,
    'VIRTUALPIXELMETHOD_BACKGROUND' => 1,
    'VIRTUALPIXELMETHOD_CONSTANT' => 2,
    'VIRTUALPIXELMETHOD_EDGE' => 4,
    'VIRTUALPIXELMETHOD_MIRROR' => 5,
    'VIRTUALPIXELMETHOD_TILE' => 7,
    'VIRTUALPIXELMETHOD_TRANSPARENT' => 8,
    'VIRTUALPIXELMETHOD_MASK' => 9,
    'VIRTUALPIXELMETHOD_BLACK' => 10,
    'VIRTUALPIXELMETHOD_GRAY' => 11,
    'VIRTUALPIXELMETHOD_WHITE' => 12,
    'VIRTUALPIXELMETHOD_HORIZONTALTILE' => 13,
    'VIRTUALPIXELMETHOD_VERTICALTILE' => 14,
    'VIRTUALPIXELMETHOD_HORIZONTALTILEEDGE' => 15,
    'VIRTUALPIXELMETHOD_VERTICALTILEEDGE' => 16,
    'VIRTUALPIXELMETHOD_CHECKERTILE' => 17,
    'PREVIEW_UNDEFINED' => 0,
    'PREVIEW_ROTATE' => 1,
    'PREVIEW_SHEAR' => 2,
    'PREVIEW_ROLL' => 3,
    'PREVIEW_HUE' => 4,
    'PREVIEW_SATURATION' => 5,
    'PREVIEW_BRIGHTNESS' => 6,
    'PREVIEW_GAMMA' => 7,
    'PREVIEW_SPIFF' => 8,
    'PREVIEW_DULL' => 9,
    'PREVIEW_GRAYSCALE' => 10,
    'PREVIEW_QUANTIZE' => 11,
    'PREVIEW_DESPECKLE' => 12,
    'PREVIEW_REDUCENOISE' => 13,
    'PREVIEW_ADDNOISE' => 14,
    'PREVIEW_SHARPEN' => 15,
    'PREVIEW_BLUR' => 16,
    'PREVIEW_THRESHOLD' => 17,
    'PREVIEW_EDGEDETECT' => 18,
    'PREVIEW_SPREAD' => 19,
    'PREVIEW_SOLARIZE' => 20,
    'PREVIEW_SHADE' => 21,
    'PREVIEW_RAISE' => 22,
    'PREVIEW_SEGMENT' => 23,
    'PREVIEW_SWIRL' => 24,
    'PREVIEW_IMPLODE' => 25,
    'PREVIEW_WAVE' => 26,
    'PREVIEW_OILPAINT' => 27,
    'PREVIEW_CHARCOALDRAWING' => 28,
    'PREVIEW_JPEG' => 29,
    'RENDERINGINTENT_UNDEFINED' => 0,
    'RENDERINGINTENT_SATURATION' => 1,
    'RENDERINGINTENT_PERCEPTUAL' => 2,
    'RENDERINGINTENT_ABSOLUTE' => 3,
    'RENDERINGINTENT_RELATIVE' => 4,
    'INTERLACE_UNDEFINED' => 0,
    'INTERLACE_NO' => 1,
    'INTERLACE_LINE' => 2,
    'INTERLACE_PLANE' => 3,
    'INTERLACE_PARTITION' => 4,
    'INTERLACE_GIF' => 5,
    'INTERLACE_JPEG' => 6,
    'INTERLACE_PNG' => 7,
    'FILLRULE_UNDEFINED' => 0,
    'FILLRULE_EVENODD' => 1,
    'FILLRULE_NONZERO' => 2,
    'PATHUNITS_UNDEFINED' => 0,
    'PATHUNITS_USERSPACE' => 1,
    'PATHUNITS_USERSPACEONUSE' => 2,
    'PATHUNITS_OBJECTBOUNDINGBOX' => 3,
    'LINECAP_UNDEFINED' => 0,
    'LINECAP_BUTT' => 1,
    'LINECAP_ROUND' => 2,
    'LINECAP_SQUARE' => 3,
    'LINEJOIN_UNDEFINED' => 0,
    'LINEJOIN_MITER' => 1,
    'LINEJOIN_ROUND' => 2,
    'LINEJOIN_BEVEL' => 3,
    'RESOURCETYPE_UNDEFINED' => 0,
    'RESOURCETYPE_AREA' => 1,
    'RESOURCETYPE_DISK' => 2,
    'RESOURCETYPE_FILE' => 3,
    'RESOURCETYPE_MAP' => 4,
    'RESOURCETYPE_MEMORY' => 5,
    'RESOURCETYPE_TIME' => 7,
    'RESOURCETYPE_THROTTLE' => 8,
    'DISPOSE_UNRECOGNIZED' => 0,
    'DISPOSE_UNDEFINED' => 0,
    'DISPOSE_NONE' => 1,
    'DISPOSE_BACKGROUND' => 2,
    'DISPOSE_PREVIOUS' => 3,
    'INTERPOLATE_UNDEFINED' => 0,
    'INTERPOLATE_AVERAGE' => 1,
    'INTERPOLATE_BICUBIC' => 2,
    'INTERPOLATE_BILINEAR' => 3,
    'INTERPOLATE_FILTER' => 4,
    'INTERPOLATE_INTEGER' => 5,
    'INTERPOLATE_MESH' => 6,
    'INTERPOLATE_NEARESTNEIGHBOR' => 7,
    'INTERPOLATE_SPLINE' => 8,
    'LAYERMETHOD_UNDEFINED' => 0,
    'LAYERMETHOD_COALESCE' => 1,
    'LAYERMETHOD_COMPAREANY' => 2,
    'LAYERMETHOD_COMPARECLEAR' => 3,
    'LAYERMETHOD_COMPAREOVERLAY' => 4,
    'LAYERMETHOD_DISPOSE' => 5,
    'LAYERMETHOD_OPTIMIZE' => 6,
    'LAYERMETHOD_OPTIMIZEPLUS' => 8,
    'LAYERMETHOD_OPTIMIZETRANS' => 9,
    'LAYERMETHOD_COMPOSITE' => 12,
    'LAYERMETHOD_OPTIMIZEIMAGE' => 7,
    'LAYERMETHOD_REMOVEDUPS' => 10,
    'LAYERMETHOD_REMOVEZERO' => 11,
    'LAYERMETHOD_TRIMBOUNDS' => 16,
    'ORIENTATION_UNDEFINED' => 0,
    'ORIENTATION_TOPLEFT' => 1,
    'ORIENTATION_TOPRIGHT' => 2,
    'ORIENTATION_BOTTOMRIGHT' => 3,
    'ORIENTATION_BOTTOMLEFT' => 4,
    'ORIENTATION_LEFTTOP' => 5,
    'ORIENTATION_RIGHTTOP' => 6,
    'ORIENTATION_RIGHTBOTTOM' => 7,
    'ORIENTATION_LEFTBOTTOM' => 8,
    'DISTORTION_UNDEFINED' => 0,
    'DISTORTION_AFFINE' => 1,
    'DISTORTION_AFFINEPROJECTION' => 2,
    'DISTORTION_ARC' => 9,
    'DISTORTION_BILINEAR' => 6,
    'DISTORTION_PERSPECTIVE' => 4,
    'DISTORTION_PERSPECTIVEPROJECTION' => 5,
    'DISTORTION_SCALEROTATETRANSLATE' => 3,
    'DISTORTION_POLYNOMIAL' => 8,
    'DISTORTION_POLAR' => 10,
    'DISTORTION_DEPOLAR' => 11,
    'DISTORTION_BARREL' => 14,
    'DISTORTION_SHEPARDS' => 16,
    'DISTORTION_SENTINEL' => 18,
    'DISTORTION_BARRELINVERSE' => 15,
    'DISTORTION_BILINEARFORWARD' => 6,
    'DISTORTION_BILINEARREVERSE' => 7,
    'DISTORTION_RESIZE' => 17,
    'DISTORTION_CYLINDER2PLANE' => 12,
    'DISTORTION_PLANE2CYLINDER' => 13,
    'LAYERMETHOD_MERGE' => 13,
    'LAYERMETHOD_FLATTEN' => 14,
    'LAYERMETHOD_MOSAIC' => 15,
    'ALPHACHANNEL_ACTIVATE' => 1,
    'ALPHACHANNEL_RESET' => 7,
    'ALPHACHANNEL_SET' => 8,
    'ALPHACHANNEL_UNDEFINED' => 0,
    'ALPHACHANNEL_COPY' => 3,
    'ALPHACHANNEL_DEACTIVATE' => 4,
    'ALPHACHANNEL_EXTRACT' => 5,
    'ALPHACHANNEL_OPAQUE' => 6,
    'ALPHACHANNEL_SHAPE' => 9,
    'ALPHACHANNEL_TRANSPARENT' => 10,
    'SPARSECOLORMETHOD_UNDEFINED' => 0,
    'SPARSECOLORMETHOD_BARYCENTRIC' => 1,
    'SPARSECOLORMETHOD_BILINEAR' => 7,
    'SPARSECOLORMETHOD_POLYNOMIAL' => 8,
    'SPARSECOLORMETHOD_SPEPARDS' => 16,
    'SPARSECOLORMETHOD_VORONOI' => 18,
    'DITHERMETHOD_UNDEFINED' => 0,
    'DITHERMETHOD_NO' => 1,
    'DITHERMETHOD_RIEMERSMA' => 2,
    'DITHERMETHOD_FLOYDSTEINBERG' => 3,
    'FUNCTION_UNDEFINED' => 0,
    'FUNCTION_POLYNOMIAL' => 1,
    'FUNCTION_SINUSOID' => 2,
    'ALPHACHANNEL_BACKGROUND' => 2,
    'FUNCTION_ARCSIN' => 3,
    'FUNCTION_ARCTAN' => 4,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'optimizeimagelayers' => 
    array (
      'name' => 'optimizeimagelayers',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compareimagelayers' => 
    array (
      'name' => 'compareimagelayers',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'LAYER' => 
        array (
          'position' => 0,
          'name' => 'LAYER',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pingimageblob' => 
    array (
      'name' => 'pingimageblob',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'imageContents' => 
        array (
          'position' => 0,
          'name' => 'imageContents',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pingimagefile' => 
    array (
      'name' => 'pingimagefile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'fp' => 
        array (
          'position' => 0,
          'name' => 'fp',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'transposeimage' => 
    array (
      'name' => 'transposeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'transverseimage' => 
    array (
      'name' => 'transverseimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'trimimage' => 
    array (
      'name' => 'trimimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'fuzz' => 
        array (
          'position' => 0,
          'name' => 'fuzz',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'waveimage' => 
    array (
      'name' => 'waveimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'amplitude' => 
        array (
          'position' => 0,
          'name' => 'amplitude',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'waveLenght' => 
        array (
          'position' => 1,
          'name' => 'waveLenght',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'vignetteimage' => 
    array (
      'name' => 'vignetteimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'blackPoint' => 
        array (
          'position' => 0,
          'name' => 'blackPoint',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'whitePoint' => 
        array (
          'position' => 1,
          'name' => 'whitePoint',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'uniqueimagecolors' => 
    array (
      'name' => 'uniqueimagecolors',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagematte' => 
    array (
      'name' => 'getimagematte',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagematte' => 
    array (
      'name' => 'setimagematte',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'enable' => 
        array (
          'position' => 0,
          'name' => 'enable',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'adaptiveresizeimage' => 
    array (
      'name' => 'adaptiveresizeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 1,
          'name' => 'rows',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bestfit' => 
        array (
          'position' => 2,
          'name' => 'bestfit',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 3,
          'name' => 'legacy',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sketchimage' => 
    array (
      'name' => 'sketchimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'angle' => 
        array (
          'position' => 2,
          'name' => 'angle',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'shadeimage' => 
    array (
      'name' => 'shadeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'gray' => 
        array (
          'position' => 0,
          'name' => 'gray',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'azimuth' => 
        array (
          'position' => 1,
          'name' => 'azimuth',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'elevation' => 
        array (
          'position' => 2,
          'name' => 'elevation',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getsizeoffset' => 
    array (
      'name' => 'getsizeoffset',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setsizeoffset' => 
    array (
      'name' => 'setsizeoffset',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 1,
          'name' => 'rows',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 2,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'adaptiveblurimage' => 
    array (
      'name' => 'adaptiveblurimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 2,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'contraststretchimage' => 
    array (
      'name' => 'contraststretchimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'blackPoint' => 
        array (
          'position' => 0,
          'name' => 'blackPoint',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'whitePoint' => 
        array (
          'position' => 1,
          'name' => 'whitePoint',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 2,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'adaptivesharpenimage' => 
    array (
      'name' => 'adaptivesharpenimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 2,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'randomthresholdimage' => 
    array (
      'name' => 'randomthresholdimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'low' => 
        array (
          'position' => 0,
          'name' => 'low',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'high' => 
        array (
          'position' => 1,
          'name' => 'high',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNELTYPE' => 
        array (
          'position' => 2,
          'name' => 'CHANNELTYPE',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'roundcornersimage' => 
    array (
      'name' => 'roundcornersimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'xRounding' => 
        array (
          'position' => 0,
          'name' => 'xRounding',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'yRounding' => 
        array (
          'position' => 1,
          'name' => 'yRounding',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'strokeWidth' => 
        array (
          'position' => 2,
          'name' => 'strokeWidth',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'displace' => 
        array (
          'position' => 3,
          'name' => 'displace',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sizeCorrection' => 
        array (
          'position' => 4,
          'name' => 'sizeCorrection',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'roundcorners' => 
    array (
      'name' => 'roundcorners',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'xRounding' => 
        array (
          'position' => 0,
          'name' => 'xRounding',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'yRounding' => 
        array (
          'position' => 1,
          'name' => 'yRounding',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'strokeWidth' => 
        array (
          'position' => 2,
          'name' => 'strokeWidth',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'displace' => 
        array (
          'position' => 3,
          'name' => 'displace',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sizeCorrection' => 
        array (
          'position' => 4,
          'name' => 'sizeCorrection',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setiteratorindex' => 
    array (
      'name' => 'setiteratorindex',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getiteratorindex' => 
    array (
      'name' => 'getiteratorindex',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'transformimage' => 
    array (
      'name' => 'transformimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'crop' => 
        array (
          'position' => 0,
          'name' => 'crop',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'geometry' => 
        array (
          'position' => 1,
          'name' => 'geometry',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageopacity' => 
    array (
      'name' => 'setimageopacity',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'opacity' => 
        array (
          'position' => 0,
          'name' => 'opacity',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'orderedposterizeimage' => 
    array (
      'name' => 'orderedposterizeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold_map' => 
        array (
          'position' => 0,
          'name' => 'threshold_map',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 1,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'polaroidimage' => 
    array (
      'name' => 'polaroidimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'ImagickDraw' => 
        array (
          'position' => 0,
          'name' => 'ImagickDraw',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'angle' => 
        array (
          'position' => 1,
          'name' => 'angle',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageproperty' => 
    array (
      'name' => 'getimageproperty',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageproperty' => 
    array (
      'name' => 'setimageproperty',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'deleteimageproperty' => 
    array (
      'name' => 'deleteimageproperty',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'identifyformat' => 
    array (
      'name' => 'identifyformat',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'embedText' => 
        array (
          'position' => 0,
          'name' => 'embedText',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageinterpolatemethod' => 
    array (
      'name' => 'setimageinterpolatemethod',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'INTERPOLATE' => 
        array (
          'position' => 0,
          'name' => 'INTERPOLATE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageinterpolatemethod' => 
    array (
      'name' => 'getimageinterpolatemethod',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'linearstretchimage' => 
    array (
      'name' => 'linearstretchimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'blackPoint' => 
        array (
          'position' => 0,
          'name' => 'blackPoint',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'whitePoint' => 
        array (
          'position' => 1,
          'name' => 'whitePoint',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagelength' => 
    array (
      'name' => 'getimagelength',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'extentimage' => 
    array (
      'name' => 'extentimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageorientation' => 
    array (
      'name' => 'getimageorientation',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageorientation' => 
    array (
      'name' => 'setimageorientation',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'ORIENTATION' => 
        array (
          'position' => 0,
          'name' => 'ORIENTATION',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'paintfloodfillimage' => 
    array (
      'name' => 'paintfloodfillimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fill' => 
        array (
          'position' => 1,
          'name' => 'fill',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fuzz' => 
        array (
          'position' => 2,
          'name' => 'fuzz',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bordercolor' => 
        array (
          'position' => 3,
          'name' => 'bordercolor',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 4,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 5,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clutimage' => 
    array (
      'name' => 'clutimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNELTYPE' => 
        array (
          'position' => 1,
          'name' => 'CHANNELTYPE',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageproperties' => 
    array (
      'name' => 'getimageproperties',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'values' => 
        array (
          'position' => 1,
          'name' => 'values',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageprofiles' => 
    array (
      'name' => 'getimageprofiles',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'values' => 
        array (
          'position' => 1,
          'name' => 'values',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'distortimage' => 
    array (
      'name' => 'distortimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'method' => 
        array (
          'position' => 0,
          'name' => 'method',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arguments' => 
        array (
          'position' => 1,
          'name' => 'arguments',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bestfit' => 
        array (
          'position' => 2,
          'name' => 'bestfit',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeimagefile' => 
    array (
      'name' => 'writeimagefile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'handle' => 
        array (
          'position' => 0,
          'name' => 'handle',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'format' => 
        array (
          'position' => 1,
          'name' => 'format',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeimagesfile' => 
    array (
      'name' => 'writeimagesfile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'handle' => 
        array (
          'position' => 0,
          'name' => 'handle',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'format' => 
        array (
          'position' => 1,
          'name' => 'format',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'resetimagepage' => 
    array (
      'name' => 'resetimagepage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'page' => 
        array (
          'position' => 0,
          'name' => 'page',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageclipmask' => 
    array (
      'name' => 'setimageclipmask',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageclipmask' => 
    array (
      'name' => 'getimageclipmask',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'animateimages' => 
    array (
      'name' => 'animateimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'server_name' => 
        array (
          'position' => 0,
          'name' => 'server_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'recolorimage' => 
    array (
      'name' => 'recolorimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'matrix' => 
        array (
          'position' => 0,
          'name' => 'matrix',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setfont' => 
    array (
      'name' => 'setfont',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'font' => 
        array (
          'position' => 0,
          'name' => 'font',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getfont' => 
    array (
      'name' => 'getfont',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setpointsize' => 
    array (
      'name' => 'setpointsize',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pointsize' => 
        array (
          'position' => 0,
          'name' => 'pointsize',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getpointsize' => 
    array (
      'name' => 'getpointsize',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mergeimagelayers' => 
    array (
      'name' => 'mergeimagelayers',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'LAYERMETHOD' => 
        array (
          'position' => 0,
          'name' => 'LAYERMETHOD',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagealphachannel' => 
    array (
      'name' => 'setimagealphachannel',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'ALPHACHANNELTYPE' => 
        array (
          'position' => 0,
          'name' => 'ALPHACHANNELTYPE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'floodfillpaintimage' => 
    array (
      'name' => 'floodfillpaintimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'fill' => 
        array (
          'position' => 0,
          'name' => 'fill',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fuzz' => 
        array (
          'position' => 1,
          'name' => 'fuzz',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bordercolor' => 
        array (
          'position' => 2,
          'name' => 'bordercolor',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 3,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 4,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'invert' => 
        array (
          'position' => 5,
          'name' => 'invert',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 6,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'opaquepaintimage' => 
    array (
      'name' => 'opaquepaintimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'target' => 
        array (
          'position' => 0,
          'name' => 'target',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fill' => 
        array (
          'position' => 1,
          'name' => 'fill',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fuzz' => 
        array (
          'position' => 2,
          'name' => 'fuzz',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'invert' => 
        array (
          'position' => 3,
          'name' => 'invert',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 4,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'transparentpaintimage' => 
    array (
      'name' => 'transparentpaintimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'target' => 
        array (
          'position' => 0,
          'name' => 'target',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'alpha' => 
        array (
          'position' => 1,
          'name' => 'alpha',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fuzz' => 
        array (
          'position' => 2,
          'name' => 'fuzz',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'invert' => 
        array (
          'position' => 3,
          'name' => 'invert',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'liquidrescaleimage' => 
    array (
      'name' => 'liquidrescaleimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 1,
          'name' => 'rows',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'delta_x' => 
        array (
          'position' => 2,
          'name' => 'delta_x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rigidity' => 
        array (
          'position' => 3,
          'name' => 'rigidity',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'encipherimage' => 
    array (
      'name' => 'encipherimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'passphrase' => 
        array (
          'position' => 0,
          'name' => 'passphrase',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'decipherimage' => 
    array (
      'name' => 'decipherimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'passphrase' => 
        array (
          'position' => 0,
          'name' => 'passphrase',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setgravity' => 
    array (
      'name' => 'setgravity',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'GRAVITY' => 
        array (
          'position' => 0,
          'name' => 'GRAVITY',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getgravity' => 
    array (
      'name' => 'getgravity',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagechannelrange' => 
    array (
      'name' => 'getimagechannelrange',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagealphachannel' => 
    array (
      'name' => 'getimagealphachannel',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagechanneldistortions' => 
    array (
      'name' => 'getimagechanneldistortions',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'METRICTYPE' => 
        array (
          'position' => 1,
          'name' => 'METRICTYPE',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 2,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagegravity' => 
    array (
      'name' => 'setimagegravity',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'GRAVITY' => 
        array (
          'position' => 0,
          'name' => 'GRAVITY',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagegravity' => 
    array (
      'name' => 'getimagegravity',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'importimagepixels' => 
    array (
      'name' => 'importimagepixels',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 1,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'width' => 
        array (
          'position' => 2,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 3,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'map' => 
        array (
          'position' => 4,
          'name' => 'map',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'storage' => 
        array (
          'position' => 5,
          'name' => 'storage',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'PIXEL' => 
        array (
          'position' => 6,
          'name' => 'PIXEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'deskewimage' => 
    array (
      'name' => 'deskewimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold' => 
        array (
          'position' => 0,
          'name' => 'threshold',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'segmentimage' => 
    array (
      'name' => 'segmentimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'COLORSPACE' => 
        array (
          'position' => 0,
          'name' => 'COLORSPACE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'cluster_threshold' => 
        array (
          'position' => 1,
          'name' => 'cluster_threshold',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'smooth_threshold' => 
        array (
          'position' => 2,
          'name' => 'smooth_threshold',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'verbose' => 
        array (
          'position' => 3,
          'name' => 'verbose',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sparsecolorimage' => 
    array (
      'name' => 'sparsecolorimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'SPARSE_METHOD' => 
        array (
          'position' => 0,
          'name' => 'SPARSE_METHOD',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arguments' => 
        array (
          'position' => 1,
          'name' => 'arguments',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 2,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'remapimage' => 
    array (
      'name' => 'remapimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'DITHER' => 
        array (
          'position' => 1,
          'name' => 'DITHER',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'exportimagepixels' => 
    array (
      'name' => 'exportimagepixels',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 1,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'width' => 
        array (
          'position' => 2,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 3,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'map' => 
        array (
          'position' => 4,
          'name' => 'map',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'STORAGE' => 
        array (
          'position' => 5,
          'name' => 'STORAGE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagechannelkurtosis' => 
    array (
      'name' => 'getimagechannelkurtosis',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'functionimage' => 
    array (
      'name' => 'functionimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'FUNCTION' => 
        array (
          'position' => 0,
          'name' => 'FUNCTION',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arguments' => 
        array (
          'position' => 1,
          'name' => 'arguments',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'transformimagecolorspace' => 
    array (
      'name' => 'transformimagecolorspace',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'COLORSPACE' => 
        array (
          'position' => 0,
          'name' => 'COLORSPACE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'haldclutimage' => 
    array (
      'name' => 'haldclutimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 1,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'autolevelimage' => 
    array (
      'name' => 'autolevelimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'blueshiftimage' => 
    array (
      'name' => 'blueshiftimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'factor' => 
        array (
          'position' => 0,
          'name' => 'factor',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageartifact' => 
    array (
      'name' => 'getimageartifact',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'artifact' => 
        array (
          'position' => 0,
          'name' => 'artifact',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageartifact' => 
    array (
      'name' => 'setimageartifact',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'artifact' => 
        array (
          'position' => 0,
          'name' => 'artifact',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'deleteimageartifact' => 
    array (
      'name' => 'deleteimageartifact',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'artifact' => 
        array (
          'position' => 0,
          'name' => 'artifact',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getcolorspace' => 
    array (
      'name' => 'getcolorspace',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setcolorspace' => 
    array (
      'name' => 'setcolorspace',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'COLORSPACE' => 
        array (
          'position' => 0,
          'name' => 'COLORSPACE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clampimage' => 
    array (
      'name' => 'clampimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'smushimages' => 
    array (
      'name' => 'smushimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'stack' => 
        array (
          'position' => 0,
          'name' => 'stack',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'files' => 
        array (
          'position' => 0,
          'name' => 'files',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__tostring' => 
    array (
      'name' => '__tostring',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'count' => 
    array (
      'name' => 'count',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getpixeliterator' => 
    array (
      'name' => 'getpixeliterator',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getpixelregioniterator' => 
    array (
      'name' => 'getpixelregioniterator',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 1,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'columns' => 
        array (
          'position' => 2,
          'name' => 'columns',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 3,
          'name' => 'rows',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'modify' => 
        array (
          'position' => 4,
          'name' => 'modify',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'readimage' => 
    array (
      'name' => 'readimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'readimages' => 
    array (
      'name' => 'readimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filenames' => 
        array (
          'position' => 0,
          'name' => 'filenames',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'readimageblob' => 
    array (
      'name' => 'readimageblob',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'imageContents' => 
        array (
          'position' => 0,
          'name' => 'imageContents',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'filename' => 
        array (
          'position' => 1,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageformat' => 
    array (
      'name' => 'setimageformat',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'imageFormat' => 
        array (
          'position' => 0,
          'name' => 'imageFormat',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'scaleimage' => 
    array (
      'name' => 'scaleimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bestfit' => 
        array (
          'position' => 2,
          'name' => 'bestfit',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 3,
          'name' => 'legacy',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeimage' => 
    array (
      'name' => 'writeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeimages' => 
    array (
      'name' => 'writeimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'adjoin' => 
        array (
          'position' => 1,
          'name' => 'adjoin',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'blurimage' => 
    array (
      'name' => 'blurimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNELTYPE' => 
        array (
          'position' => 2,
          'name' => 'CHANNELTYPE',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'thumbnailimage' => 
    array (
      'name' => 'thumbnailimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bestfit' => 
        array (
          'position' => 2,
          'name' => 'bestfit',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fill' => 
        array (
          'position' => 3,
          'name' => 'fill',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 4,
          'name' => 'legacy',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'cropthumbnailimage' => 
    array (
      'name' => 'cropthumbnailimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 2,
          'name' => 'legacy',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagefilename' => 
    array (
      'name' => 'getimagefilename',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagefilename' => 
    array (
      'name' => 'setimagefilename',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageformat' => 
    array (
      'name' => 'getimageformat',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagemimetype' => 
    array (
      'name' => 'getimagemimetype',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'removeimage' => 
    array (
      'name' => 'removeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'destroy' => 
    array (
      'name' => 'destroy',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clear' => 
    array (
      'name' => 'clear',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clone' => 
    array (
      'name' => 'clone',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagesize' => 
    array (
      'name' => 'getimagesize',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageblob' => 
    array (
      'name' => 'getimageblob',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagesblob' => 
    array (
      'name' => 'getimagesblob',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setfirstiterator' => 
    array (
      'name' => 'setfirstiterator',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setlastiterator' => 
    array (
      'name' => 'setlastiterator',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'resetiterator' => 
    array (
      'name' => 'resetiterator',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'previousimage' => 
    array (
      'name' => 'previousimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'nextimage' => 
    array (
      'name' => 'nextimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'haspreviousimage' => 
    array (
      'name' => 'haspreviousimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasnextimage' => 
    array (
      'name' => 'hasnextimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageindex' => 
    array (
      'name' => 'setimageindex',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageindex' => 
    array (
      'name' => 'getimageindex',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'commentimage' => 
    array (
      'name' => 'commentimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'comment' => 
        array (
          'position' => 0,
          'name' => 'comment',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'cropimage' => 
    array (
      'name' => 'cropimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'labelimage' => 
    array (
      'name' => 'labelimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'label' => 
        array (
          'position' => 0,
          'name' => 'label',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagegeometry' => 
    array (
      'name' => 'getimagegeometry',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'drawimage' => 
    array (
      'name' => 'drawimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'ImagickDraw' => 
        array (
          'position' => 0,
          'name' => 'ImagickDraw',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagecompressionquality' => 
    array (
      'name' => 'setimagecompressionquality',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'quality' => 
        array (
          'position' => 0,
          'name' => 'quality',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagecompressionquality' => 
    array (
      'name' => 'getimagecompressionquality',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagecompression' => 
    array (
      'name' => 'setimagecompression',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'COMPRESSION' => 
        array (
          'position' => 0,
          'name' => 'COMPRESSION',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagecompression' => 
    array (
      'name' => 'getimagecompression',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'annotateimage' => 
    array (
      'name' => 'annotateimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'ImagickDraw' => 
        array (
          'position' => 0,
          'name' => 'ImagickDraw',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 1,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 2,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'angle' => 
        array (
          'position' => 3,
          'name' => 'angle',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'text' => 
        array (
          'position' => 4,
          'name' => 'text',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compositeimage' => 
    array (
      'name' => 'compositeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'COMPOSITE' => 
        array (
          'position' => 1,
          'name' => 'COMPOSITE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNELTYPE' => 
        array (
          'position' => 4,
          'name' => 'CHANNELTYPE',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'modulateimage' => 
    array (
      'name' => 'modulateimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'brightness' => 
        array (
          'position' => 0,
          'name' => 'brightness',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'saturation' => 
        array (
          'position' => 1,
          'name' => 'saturation',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'hue' => 
        array (
          'position' => 2,
          'name' => 'hue',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagecolors' => 
    array (
      'name' => 'getimagecolors',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'montageimage' => 
    array (
      'name' => 'montageimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'ImagickDraw' => 
        array (
          'position' => 0,
          'name' => 'ImagickDraw',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'tileGeometry' => 
        array (
          'position' => 1,
          'name' => 'tileGeometry',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'thumbnailGeometry' => 
        array (
          'position' => 2,
          'name' => 'thumbnailGeometry',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'MONTAGEMODE' => 
        array (
          'position' => 3,
          'name' => 'MONTAGEMODE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'frame' => 
        array (
          'position' => 4,
          'name' => 'frame',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'identifyimage' => 
    array (
      'name' => 'identifyimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'appendRawOutput' => 
        array (
          'position' => 0,
          'name' => 'appendRawOutput',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'thresholdimage' => 
    array (
      'name' => 'thresholdimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold' => 
        array (
          'position' => 0,
          'name' => 'threshold',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNELTYPE' => 
        array (
          'position' => 1,
          'name' => 'CHANNELTYPE',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'adaptivethresholdimage' => 
    array (
      'name' => 'adaptivethresholdimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 2,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'blackthresholdimage' => 
    array (
      'name' => 'blackthresholdimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color' => 
        array (
          'position' => 0,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'whitethresholdimage' => 
    array (
      'name' => 'whitethresholdimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color' => 
        array (
          'position' => 0,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'appendimages' => 
    array (
      'name' => 'appendimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'stack' => 
        array (
          'position' => 0,
          'name' => 'stack',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'charcoalimage' => 
    array (
      'name' => 'charcoalimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'normalizeimage' => 
    array (
      'name' => 'normalizeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'oilpaintimage' => 
    array (
      'name' => 'oilpaintimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'posterizeimage' => 
    array (
      'name' => 'posterizeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'levels' => 
        array (
          'position' => 0,
          'name' => 'levels',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dither' => 
        array (
          'position' => 1,
          'name' => 'dither',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'radialblurimage' => 
    array (
      'name' => 'radialblurimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'angle' => 
        array (
          'position' => 0,
          'name' => 'angle',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 1,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'raiseimage' => 
    array (
      'name' => 'raiseimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'raise' => 
        array (
          'position' => 4,
          'name' => 'raise',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'resampleimage' => 
    array (
      'name' => 'resampleimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'xResolution' => 
        array (
          'position' => 0,
          'name' => 'xResolution',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'yResolution' => 
        array (
          'position' => 1,
          'name' => 'yResolution',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'FILTER' => 
        array (
          'position' => 2,
          'name' => 'FILTER',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'blur' => 
        array (
          'position' => 3,
          'name' => 'blur',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'resizeimage' => 
    array (
      'name' => 'resizeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 1,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'filter' => 
        array (
          'position' => 2,
          'name' => 'filter',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'blur' => 
        array (
          'position' => 3,
          'name' => 'blur',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bestfit' => 
        array (
          'position' => 4,
          'name' => 'bestfit',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 5,
          'name' => 'legacy',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rollimage' => 
    array (
      'name' => 'rollimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 1,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rotateimage' => 
    array (
      'name' => 'rotateimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color' => 
        array (
          'position' => 0,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'degrees' => 
        array (
          'position' => 1,
          'name' => 'degrees',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sampleimage' => 
    array (
      'name' => 'sampleimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 1,
          'name' => 'rows',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'solarizeimage' => 
    array (
      'name' => 'solarizeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold' => 
        array (
          'position' => 0,
          'name' => 'threshold',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'shadowimage' => 
    array (
      'name' => 'shadowimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'opacity' => 
        array (
          'position' => 0,
          'name' => 'opacity',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageattribute' => 
    array (
      'name' => 'setimageattribute',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagebackgroundcolor' => 
    array (
      'name' => 'setimagebackgroundcolor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color' => 
        array (
          'position' => 0,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagecompose' => 
    array (
      'name' => 'setimagecompose',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'COMPOSITE' => 
        array (
          'position' => 0,
          'name' => 'COMPOSITE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagedelay' => 
    array (
      'name' => 'setimagedelay',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'delay' => 
        array (
          'position' => 0,
          'name' => 'delay',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagedepth' => 
    array (
      'name' => 'setimagedepth',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'depth' => 
        array (
          'position' => 0,
          'name' => 'depth',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagegamma' => 
    array (
      'name' => 'setimagegamma',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'gamma' => 
        array (
          'position' => 0,
          'name' => 'gamma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageiterations' => 
    array (
      'name' => 'setimageiterations',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'iterations' => 
        array (
          'position' => 0,
          'name' => 'iterations',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagemattecolor' => 
    array (
      'name' => 'setimagemattecolor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color' => 
        array (
          'position' => 0,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagepage' => 
    array (
      'name' => 'setimagepage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageprogressmonitor' => 
    array (
      'name' => 'setimageprogressmonitor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setprogressmonitor' => 
    array (
      'name' => 'setprogressmonitor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageresolution' => 
    array (
      'name' => 'setimageresolution',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'xResolution' => 
        array (
          'position' => 0,
          'name' => 'xResolution',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'yResolution' => 
        array (
          'position' => 1,
          'name' => 'yResolution',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagescene' => 
    array (
      'name' => 'setimagescene',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'scene' => 
        array (
          'position' => 0,
          'name' => 'scene',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagetickspersecond' => 
    array (
      'name' => 'setimagetickspersecond',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'ticksPerSecond' => 
        array (
          'position' => 0,
          'name' => 'ticksPerSecond',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagetype' => 
    array (
      'name' => 'setimagetype',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'IMGTYPE' => 
        array (
          'position' => 0,
          'name' => 'IMGTYPE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageunits' => 
    array (
      'name' => 'setimageunits',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'RESOLUTION' => 
        array (
          'position' => 0,
          'name' => 'RESOLUTION',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sharpenimage' => 
    array (
      'name' => 'sharpenimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 2,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'shaveimage' => 
    array (
      'name' => 'shaveimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 1,
          'name' => 'rows',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'shearimage' => 
    array (
      'name' => 'shearimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color' => 
        array (
          'position' => 0,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'xShear' => 
        array (
          'position' => 1,
          'name' => 'xShear',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'yShear' => 
        array (
          'position' => 2,
          'name' => 'yShear',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'spliceimage' => 
    array (
      'name' => 'spliceimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pingimage' => 
    array (
      'name' => 'pingimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'readimagefile' => 
    array (
      'name' => 'readimagefile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'fp' => 
        array (
          'position' => 0,
          'name' => 'fp',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'displayimage' => 
    array (
      'name' => 'displayimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'serverName' => 
        array (
          'position' => 0,
          'name' => 'serverName',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'displayimages' => 
    array (
      'name' => 'displayimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'serverName' => 
        array (
          'position' => 0,
          'name' => 'serverName',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'spreadimage' => 
    array (
      'name' => 'spreadimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'swirlimage' => 
    array (
      'name' => 'swirlimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'degrees' => 
        array (
          'position' => 0,
          'name' => 'degrees',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'stripimage' => 
    array (
      'name' => 'stripimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'queryformats' => 
    array (
      'name' => 'queryformats',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'queryfonts' => 
    array (
      'name' => 'queryfonts',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'queryfontmetrics' => 
    array (
      'name' => 'queryfontmetrics',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'ImagickDraw' => 
        array (
          'position' => 0,
          'name' => 'ImagickDraw',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'text' => 
        array (
          'position' => 1,
          'name' => 'text',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'multiline' => 
        array (
          'position' => 2,
          'name' => 'multiline',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'steganoimage' => 
    array (
      'name' => 'steganoimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addnoiseimage' => 
    array (
      'name' => 'addnoiseimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'NOISE' => 
        array (
          'position' => 0,
          'name' => 'NOISE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 1,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'motionblurimage' => 
    array (
      'name' => 'motionblurimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'angle' => 
        array (
          'position' => 2,
          'name' => 'angle',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 3,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mosaicimages' => 
    array (
      'name' => 'mosaicimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'morphimages' => 
    array (
      'name' => 'morphimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'frames' => 
        array (
          'position' => 0,
          'name' => 'frames',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'minifyimage' => 
    array (
      'name' => 'minifyimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'affinetransformimage' => 
    array (
      'name' => 'affinetransformimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'ImagickDraw' => 
        array (
          'position' => 0,
          'name' => 'ImagickDraw',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'averageimages' => 
    array (
      'name' => 'averageimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'borderimage' => 
    array (
      'name' => 'borderimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color' => 
        array (
          'position' => 0,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'width' => 
        array (
          'position' => 1,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 2,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'calculatecrop' => 
    array (
      'name' => 'calculatecrop',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'orig_width' => 
        array (
          'position' => 0,
          'name' => 'orig_width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'orig_height' => 
        array (
          'position' => 1,
          'name' => 'orig_height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'desired_width' => 
        array (
          'position' => 2,
          'name' => 'desired_width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'desired_height' => 
        array (
          'position' => 3,
          'name' => 'desired_height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 4,
          'name' => 'legacy',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'chopimage' => 
    array (
      'name' => 'chopimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clipimage' => 
    array (
      'name' => 'clipimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clippathimage' => 
    array (
      'name' => 'clippathimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pathname' => 
        array (
          'position' => 0,
          'name' => 'pathname',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'inside' => 
        array (
          'position' => 1,
          'name' => 'inside',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clipimagepath' => 
    array (
      'name' => 'clipimagepath',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pathname' => 
        array (
          'position' => 0,
          'name' => 'pathname',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'inside' => 
        array (
          'position' => 1,
          'name' => 'inside',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'coalesceimages' => 
    array (
      'name' => 'coalesceimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'colorfloodfillimage' => 
    array (
      'name' => 'colorfloodfillimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'fill_color' => 
        array (
          'position' => 0,
          'name' => 'fill_color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fuzz' => 
        array (
          'position' => 1,
          'name' => 'fuzz',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'border_color' => 
        array (
          'position' => 2,
          'name' => 'border_color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 4,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'colorizeimage' => 
    array (
      'name' => 'colorizeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'colorize_color' => 
        array (
          'position' => 0,
          'name' => 'colorize_color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opacity' => 
        array (
          'position' => 1,
          'name' => 'opacity',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 2,
          'name' => 'legacy',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compareimagechannels' => 
    array (
      'name' => 'compareimagechannels',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 1,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'METRIC' => 
        array (
          'position' => 2,
          'name' => 'METRIC',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compareimages' => 
    array (
      'name' => 'compareimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'METRIC' => 
        array (
          'position' => 1,
          'name' => 'METRIC',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'contrastimage' => 
    array (
      'name' => 'contrastimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'sharpen' => 
        array (
          'position' => 0,
          'name' => 'sharpen',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'combineimages' => 
    array (
      'name' => 'combineimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'convolveimage' => 
    array (
      'name' => 'convolveimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'kernel' => 
        array (
          'position' => 0,
          'name' => 'kernel',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 1,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'cyclecolormapimage' => 
    array (
      'name' => 'cyclecolormapimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'displace' => 
        array (
          'position' => 0,
          'name' => 'displace',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'deconstructimages' => 
    array (
      'name' => 'deconstructimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'despeckleimage' => 
    array (
      'name' => 'despeckleimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'edgeimage' => 
    array (
      'name' => 'edgeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'embossimage' => 
    array (
      'name' => 'embossimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'enhanceimage' => 
    array (
      'name' => 'enhanceimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'equalizeimage' => 
    array (
      'name' => 'equalizeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'evaluateimage' => 
    array (
      'name' => 'evaluateimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'EVALUATE' => 
        array (
          'position' => 0,
          'name' => 'EVALUATE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'constant' => 
        array (
          'position' => 1,
          'name' => 'constant',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 2,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flattenimages' => 
    array (
      'name' => 'flattenimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flipimage' => 
    array (
      'name' => 'flipimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flopimage' => 
    array (
      'name' => 'flopimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'forwardfouriertransformimage' => 
    array (
      'name' => 'forwardfouriertransformimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'magnitude' => 
        array (
          'position' => 0,
          'name' => 'magnitude',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'frameimage' => 
    array (
      'name' => 'frameimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color' => 
        array (
          'position' => 0,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'width' => 
        array (
          'position' => 1,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 2,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'innerBevel' => 
        array (
          'position' => 3,
          'name' => 'innerBevel',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'outerBevel' => 
        array (
          'position' => 4,
          'name' => 'outerBevel',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fximage' => 
    array (
      'name' => 'fximage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'expression' => 
        array (
          'position' => 0,
          'name' => 'expression',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 1,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'gammaimage' => 
    array (
      'name' => 'gammaimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'gamma' => 
        array (
          'position' => 0,
          'name' => 'gamma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 1,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'gaussianblurimage' => 
    array (
      'name' => 'gaussianblurimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 2,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageattribute' => 
    array (
      'name' => 'getimageattribute',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagebackgroundcolor' => 
    array (
      'name' => 'getimagebackgroundcolor',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageblueprimary' => 
    array (
      'name' => 'getimageblueprimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagebordercolor' => 
    array (
      'name' => 'getimagebordercolor',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagechanneldepth' => 
    array (
      'name' => 'getimagechanneldepth',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagechanneldistortion' => 
    array (
      'name' => 'getimagechanneldistortion',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 1,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'METRIC' => 
        array (
          'position' => 2,
          'name' => 'METRIC',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagechannelextrema' => 
    array (
      'name' => 'getimagechannelextrema',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagechannelmean' => 
    array (
      'name' => 'getimagechannelmean',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagechannelstatistics' => 
    array (
      'name' => 'getimagechannelstatistics',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagecolormapcolor' => 
    array (
      'name' => 'getimagecolormapcolor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagecolorspace' => 
    array (
      'name' => 'getimagecolorspace',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagecompose' => 
    array (
      'name' => 'getimagecompose',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagedelay' => 
    array (
      'name' => 'getimagedelay',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagedepth' => 
    array (
      'name' => 'getimagedepth',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagedistortion' => 
    array (
      'name' => 'getimagedistortion',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'METRIC' => 
        array (
          'position' => 1,
          'name' => 'METRIC',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageextrema' => 
    array (
      'name' => 'getimageextrema',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagedispose' => 
    array (
      'name' => 'getimagedispose',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagegamma' => 
    array (
      'name' => 'getimagegamma',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagegreenprimary' => 
    array (
      'name' => 'getimagegreenprimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageheight' => 
    array (
      'name' => 'getimageheight',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagehistogram' => 
    array (
      'name' => 'getimagehistogram',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageinterlacescheme' => 
    array (
      'name' => 'getimageinterlacescheme',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageiterations' => 
    array (
      'name' => 'getimageiterations',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagemattecolor' => 
    array (
      'name' => 'getimagemattecolor',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagepage' => 
    array (
      'name' => 'getimagepage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagepixelcolor' => 
    array (
      'name' => 'getimagepixelcolor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 1,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageprofile' => 
    array (
      'name' => 'getimageprofile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageredprimary' => 
    array (
      'name' => 'getimageredprimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagerenderingintent' => 
    array (
      'name' => 'getimagerenderingintent',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageresolution' => 
    array (
      'name' => 'getimageresolution',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagescene' => 
    array (
      'name' => 'getimagescene',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagesignature' => 
    array (
      'name' => 'getimagesignature',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagetickspersecond' => 
    array (
      'name' => 'getimagetickspersecond',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagetype' => 
    array (
      'name' => 'getimagetype',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageunits' => 
    array (
      'name' => 'getimageunits',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagevirtualpixelmethod' => 
    array (
      'name' => 'getimagevirtualpixelmethod',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagewhitepoint' => 
    array (
      'name' => 'getimagewhitepoint',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagewidth' => 
    array (
      'name' => 'getimagewidth',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getnumberimages' => 
    array (
      'name' => 'getnumberimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimagetotalinkdensity' => 
    array (
      'name' => 'getimagetotalinkdensity',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimageregion' => 
    array (
      'name' => 'getimageregion',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'implodeimage' => 
    array (
      'name' => 'implodeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'inversefouriertransformimage' => 
    array (
      'name' => 'inversefouriertransformimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'complement' => 
        array (
          'position' => 0,
          'name' => 'complement',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'magnitude' => 
        array (
          'position' => 1,
          'name' => 'magnitude',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'levelimage' => 
    array (
      'name' => 'levelimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'blackPoint' => 
        array (
          'position' => 0,
          'name' => 'blackPoint',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'gamma' => 
        array (
          'position' => 1,
          'name' => 'gamma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'whitePoint' => 
        array (
          'position' => 2,
          'name' => 'whitePoint',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 3,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'magnifyimage' => 
    array (
      'name' => 'magnifyimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mapimage' => 
    array (
      'name' => 'mapimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dither' => 
        array (
          'position' => 1,
          'name' => 'dither',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mattefloodfillimage' => 
    array (
      'name' => 'mattefloodfillimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'alpha' => 
        array (
          'position' => 0,
          'name' => 'alpha',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fuzz' => 
        array (
          'position' => 1,
          'name' => 'fuzz',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'color' => 
        array (
          'position' => 2,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 3,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 4,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'medianfilterimage' => 
    array (
      'name' => 'medianfilterimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'negateimage' => 
    array (
      'name' => 'negateimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'gray' => 
        array (
          'position' => 0,
          'name' => 'gray',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 1,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'paintopaqueimage' => 
    array (
      'name' => 'paintopaqueimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'target_color' => 
        array (
          'position' => 0,
          'name' => 'target_color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fill_color' => 
        array (
          'position' => 1,
          'name' => 'fill_color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fuzz' => 
        array (
          'position' => 2,
          'name' => 'fuzz',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 3,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'painttransparentimage' => 
    array (
      'name' => 'painttransparentimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'target_color' => 
        array (
          'position' => 0,
          'name' => 'target_color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'alpha' => 
        array (
          'position' => 1,
          'name' => 'alpha',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fuzz' => 
        array (
          'position' => 2,
          'name' => 'fuzz',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'previewimages' => 
    array (
      'name' => 'previewimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'PREVIEW' => 
        array (
          'position' => 0,
          'name' => 'PREVIEW',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'profileimage' => 
    array (
      'name' => 'profileimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'profile' => 
        array (
          'position' => 1,
          'name' => 'profile',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'quantizeimage' => 
    array (
      'name' => 'quantizeimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'numColors' => 
        array (
          'position' => 0,
          'name' => 'numColors',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'COLORSPACE' => 
        array (
          'position' => 1,
          'name' => 'COLORSPACE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'treeDepth' => 
        array (
          'position' => 2,
          'name' => 'treeDepth',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dither' => 
        array (
          'position' => 3,
          'name' => 'dither',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'measureError' => 
        array (
          'position' => 4,
          'name' => 'measureError',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'quantizeimages' => 
    array (
      'name' => 'quantizeimages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'numColors' => 
        array (
          'position' => 0,
          'name' => 'numColors',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'COLORSPACE' => 
        array (
          'position' => 1,
          'name' => 'COLORSPACE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'treeDepth' => 
        array (
          'position' => 2,
          'name' => 'treeDepth',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dither' => 
        array (
          'position' => 3,
          'name' => 'dither',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'measureError' => 
        array (
          'position' => 4,
          'name' => 'measureError',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'reducenoiseimage' => 
    array (
      'name' => 'reducenoiseimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'removeimageprofile' => 
    array (
      'name' => 'removeimageprofile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'separateimagechannel' => 
    array (
      'name' => 'separateimagechannel',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sepiatoneimage' => 
    array (
      'name' => 'sepiatoneimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold' => 
        array (
          'position' => 0,
          'name' => 'threshold',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagebias' => 
    array (
      'name' => 'setimagebias',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'bias' => 
        array (
          'position' => 0,
          'name' => 'bias',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagebiasquantum' => 
    array (
      'name' => 'setimagebiasquantum',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'bias' => 
        array (
          'position' => 0,
          'name' => 'bias',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageblueprimary' => 
    array (
      'name' => 'setimageblueprimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 1,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagebordercolor' => 
    array (
      'name' => 'setimagebordercolor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color' => 
        array (
          'position' => 0,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagechanneldepth' => 
    array (
      'name' => 'setimagechanneldepth',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'depth' => 
        array (
          'position' => 1,
          'name' => 'depth',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagecolormapcolor' => 
    array (
      'name' => 'setimagecolormapcolor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'color' => 
        array (
          'position' => 1,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagecolorspace' => 
    array (
      'name' => 'setimagecolorspace',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'COLORSPACE' => 
        array (
          'position' => 0,
          'name' => 'COLORSPACE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagedispose' => 
    array (
      'name' => 'setimagedispose',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'DISPOSETYPE' => 
        array (
          'position' => 0,
          'name' => 'DISPOSETYPE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageextent' => 
    array (
      'name' => 'setimageextent',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 1,
          'name' => 'rows',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagegreenprimary' => 
    array (
      'name' => 'setimagegreenprimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 1,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageinterlacescheme' => 
    array (
      'name' => 'setimageinterlacescheme',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'INTERLACE' => 
        array (
          'position' => 0,
          'name' => 'INTERLACE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageprofile' => 
    array (
      'name' => 'setimageprofile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'profile' => 
        array (
          'position' => 1,
          'name' => 'profile',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimageredprimary' => 
    array (
      'name' => 'setimageredprimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 1,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagerenderingintent' => 
    array (
      'name' => 'setimagerenderingintent',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'RENDERINGINTENT' => 
        array (
          'position' => 0,
          'name' => 'RENDERINGINTENT',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagevirtualpixelmethod' => 
    array (
      'name' => 'setimagevirtualpixelmethod',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'VIRTUALPIXELMETHOD' => 
        array (
          'position' => 0,
          'name' => 'VIRTUALPIXELMETHOD',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimagewhitepoint' => 
    array (
      'name' => 'setimagewhitepoint',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 1,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sigmoidalcontrastimage' => 
    array (
      'name' => 'sigmoidalcontrastimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'sharpen' => 
        array (
          'position' => 0,
          'name' => 'sharpen',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contrast' => 
        array (
          'position' => 1,
          'name' => 'contrast',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'midpoint' => 
        array (
          'position' => 2,
          'name' => 'midpoint',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 3,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'stereoimage' => 
    array (
      'name' => 'stereoimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'textureimage' => 
    array (
      'name' => 'textureimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'tintimage' => 
    array (
      'name' => 'tintimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'tint_color' => 
        array (
          'position' => 0,
          'name' => 'tint_color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opacity' => 
        array (
          'position' => 1,
          'name' => 'opacity',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 2,
          'name' => 'legacy',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unsharpmaskimage' => 
    array (
      'name' => 'unsharpmaskimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'amount' => 
        array (
          'position' => 2,
          'name' => 'amount',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'threshold' => 
        array (
          'position' => 3,
          'name' => 'threshold',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 4,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getimage' => 
    array (
      'name' => 'getimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addimage' => 
    array (
      'name' => 'addimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setimage' => 
    array (
      'name' => 'setimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'newimage' => 
    array (
      'name' => 'newimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 1,
          'name' => 'rows',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'background_color' => 
        array (
          'position' => 2,
          'name' => 'background_color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'format' => 
        array (
          'position' => 3,
          'name' => 'format',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'newpseudoimage' => 
    array (
      'name' => 'newpseudoimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 1,
          'name' => 'rows',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pseudoString' => 
        array (
          'position' => 2,
          'name' => 'pseudoString',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getcompression' => 
    array (
      'name' => 'getcompression',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getcompressionquality' => 
    array (
      'name' => 'getcompressionquality',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getcopyright' => 
    array (
      'name' => 'getcopyright',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getconfigureoptions' => 
    array (
      'name' => 'getconfigureoptions',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getfeatures' => 
    array (
      'name' => 'getfeatures',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getfilename' => 
    array (
      'name' => 'getfilename',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getformat' => 
    array (
      'name' => 'getformat',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'gethomeurl' => 
    array (
      'name' => 'gethomeurl',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getinterlacescheme' => 
    array (
      'name' => 'getinterlacescheme',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getoption' => 
    array (
      'name' => 'getoption',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getpackagename' => 
    array (
      'name' => 'getpackagename',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getpage' => 
    array (
      'name' => 'getpage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getquantum' => 
    array (
      'name' => 'getquantum',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'gethdrienabled' => 
    array (
      'name' => 'gethdrienabled',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getquantumdepth' => 
    array (
      'name' => 'getquantumdepth',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getquantumrange' => 
    array (
      'name' => 'getquantumrange',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getreleasedate' => 
    array (
      'name' => 'getreleasedate',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getresource' => 
    array (
      'name' => 'getresource',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'resource_type' => 
        array (
          'position' => 0,
          'name' => 'resource_type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getresourcelimit' => 
    array (
      'name' => 'getresourcelimit',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'resource_type' => 
        array (
          'position' => 0,
          'name' => 'resource_type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getsamplingfactors' => 
    array (
      'name' => 'getsamplingfactors',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getsize' => 
    array (
      'name' => 'getsize',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getversion' => 
    array (
      'name' => 'getversion',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setbackgroundcolor' => 
    array (
      'name' => 'setbackgroundcolor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color' => 
        array (
          'position' => 0,
          'name' => 'color',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setcompression' => 
    array (
      'name' => 'setcompression',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'compression' => 
        array (
          'position' => 0,
          'name' => 'compression',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setcompressionquality' => 
    array (
      'name' => 'setcompressionquality',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'compressionquality' => 
        array (
          'position' => 0,
          'name' => 'compressionquality',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setfilename' => 
    array (
      'name' => 'setfilename',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setformat' => 
    array (
      'name' => 'setformat',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setinterlacescheme' => 
    array (
      'name' => 'setinterlacescheme',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'INTERLACE' => 
        array (
          'position' => 0,
          'name' => 'INTERLACE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setoption' => 
    array (
      'name' => 'setoption',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setpage' => 
    array (
      'name' => 'setpage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'height' => 
        array (
          'position' => 1,
          'name' => 'height',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 2,
          'name' => 'x',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 3,
          'name' => 'y',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setresourcelimit' => 
    array (
      'name' => 'setresourcelimit',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'RESOURCETYPE' => 
        array (
          'position' => 0,
          'name' => 'RESOURCETYPE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'limit' => 
        array (
          'position' => 1,
          'name' => 'limit',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setresolution' => 
    array (
      'name' => 'setresolution',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'xResolution' => 
        array (
          'position' => 0,
          'name' => 'xResolution',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'yResolution' => 
        array (
          'position' => 1,
          'name' => 'yResolution',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setsamplingfactors' => 
    array (
      'name' => 'setsamplingfactors',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'factors' => 
        array (
          'position' => 0,
          'name' => 'factors',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setsize' => 
    array (
      'name' => 'setsize',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 1,
          'name' => 'rows',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'settype' => 
    array (
      'name' => 'settype',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'IMGTYPE' => 
        array (
          'position' => 0,
          'name' => 'IMGTYPE',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'key' => 
    array (
      'name' => 'key',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'next' => 
    array (
      'name' => 'next',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'current' => 
    array (
      'name' => 'current',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'brightnesscontrastimage' => 
    array (
      'name' => 'brightnesscontrastimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'brightness' => 
        array (
          'position' => 0,
          'name' => 'brightness',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contrast' => 
        array (
          'position' => 1,
          'name' => 'contrast',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 2,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'colormatriximage' => 
    array (
      'name' => 'colormatriximage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color_matrix' => 
        array (
          'position' => 0,
          'name' => 'color_matrix',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'selectiveblurimage' => 
    array (
      'name' => 'selectiveblurimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sigma' => 
        array (
          'position' => 1,
          'name' => 'sigma',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'threshold' => 
        array (
          'position' => 2,
          'name' => 'threshold',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'CHANNEL' => 
        array (
          'position' => 3,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'subimagematch' => 
    array (
      'name' => 'subimagematch',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'similarity' => 
        array (
          'position' => 2,
          'name' => 'similarity',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'similarity_threshold' => 
        array (
          'position' => 3,
          'name' => 'similarity_threshold',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'metric' => 
        array (
          'position' => 4,
          'name' => 'metric',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'similarityimage' => 
    array (
      'name' => 'similarityimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'Imagick' => 
        array (
          'position' => 0,
          'name' => 'Imagick',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'similarity' => 
        array (
          'position' => 2,
          'name' => 'similarity',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'similarity_threshold' => 
        array (
          'position' => 3,
          'name' => 'similarity_threshold',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'metric' => 
        array (
          'position' => 4,
          'name' => 'metric',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setregistry' => 
    array (
      'name' => 'setregistry',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getregistry' => 
    array (
      'name' => 'getregistry',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'listregistry' => 
    array (
      'name' => 'listregistry',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setantialias' => 
    array (
      'name' => 'setantialias',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'antialias' => 
        array (
          'position' => 0,
          'name' => 'antialias',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getantialias' => 
    array (
      'name' => 'getantialias',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'colordecisionlistimage' => 
    array (
      'name' => 'colordecisionlistimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'antialias' => 
        array (
          'position' => 0,
          'name' => 'antialias',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'autogammaimage' => 
    array (
      'name' => 'autogammaimage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'CHANNEL' => 
        array (
          'position' => 0,
          'name' => 'CHANNEL',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
);
