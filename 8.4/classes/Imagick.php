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
    0 => 'Stringable',
    1 => 'Iterator',
    2 => 'Traversable',
    3 => 'Countable',
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
    'IMAGICK_EXTNUM' => 30700,
    'IMAGICK_EXTVER' => '3.7.0',
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
    'COMPOSITE_HARDMIX' => 68,
    'COMPOSITE_STEREO' => 69,
    'MONTAGEMODE_FRAME' => 1,
    'MONTAGEMODE_UNFRAME' => 2,
    'MONTAGEMODE_CONCATENATE' => 3,
    'STYLE_NORMAL' => 1,
    'STYLE_ITALIC' => 2,
    'STYLE_OBLIQUE' => 3,
    'STYLE_ANY' => 4,
    'STYLE_BOLD' => 5,
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
    'FILTER_SENTINEL' => 31,
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
    'FILTER_SPLINE' => 29,
    'FILTER_LANCZOSRADIUS' => 30,
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
    'METRIC_NORMALIZEDCROSSCORRELATIONERRORMETRIC' => 8,
    'METRIC_FUZZERROR' => 9,
    'METRIC_PERCEPTUALHASH_ERROR' => 255,
    'PIXEL_CHAR' => 1,
    'PIXELSTORAGE_CHAR' => 1,
    'PIXEL_DOUBLE' => 2,
    'PIXELSTORAGE_DOUBLE' => 2,
    'PIXEL_FLOAT' => 3,
    'PIXELSTORAGE_FLOAT' => 3,
    'PIXEL_INTEGER' => 4,
    'PIXELSTORAGE_INTEGER' => 4,
    'PIXEL_LONG' => 5,
    'PIXELSTORAGE_LONG' => 5,
    'PIXEL_QUANTUM' => 6,
    'PIXELSTORAGE_QUANTUM' => 6,
    'PIXEL_SHORT' => 7,
    'PIXELSTORAGE_SHORT' => 7,
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
    'EVALUATE_ROOT_MEAN_SQUARE' => 32,
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
    'COLORSPACE_LUV' => 23,
    'COLORSPACE_HCL' => 24,
    'COLORSPACE_LCH' => 25,
    'COLORSPACE_LMS' => 26,
    'COLORSPACE_LCHAB' => 27,
    'COLORSPACE_LCHUV' => 28,
    'COLORSPACE_SCRGB' => 29,
    'COLORSPACE_HSI' => 30,
    'COLORSPACE_HSV' => 31,
    'COLORSPACE_HCLP' => 32,
    'COLORSPACE_YDBDR' => 33,
    'COLORSPACE_REC601YCBCR' => 18,
    'COLORSPACE_REC709YCBCR' => 20,
    'COLORSPACE_XYY' => 34,
    'COLORSPACE_LINEARGRAY' => 35,
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
    'VIRTUALPIXELMETHOD_DITHER' => 3,
    'VIRTUALPIXELMETHOD_RANDOM' => 6,
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
    'RESOURCETYPE_THREAD' => 6,
    'RESOURCETYPE_WIDTH' => 9,
    'RESOURCETYPE_HEIGHT' => 10,
    'RESOURCETYPE_LISTLENGTH' => 11,
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
    'INTERPOLATE_AVERAGE_9' => 9,
    'INTERPOLATE_AVERAGE_16' => 10,
    'INTERPOLATE_BLEND' => 11,
    'INTERPOLATE_BACKGROUND_COLOR' => 12,
    'INTERPOLATE_CATROM' => 13,
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
    'ALPHACHANNEL_ASSOCIATE' => 13,
    'ALPHACHANNEL_DISSOCIATE' => 14,
    'SPARSECOLORMETHOD_UNDEFINED' => 0,
    'SPARSECOLORMETHOD_BARYCENTRIC' => 1,
    'SPARSECOLORMETHOD_BILINEAR' => 7,
    'SPARSECOLORMETHOD_POLYNOMIAL' => 8,
    'SPARSECOLORMETHOD_SPEPARDS' => 16,
    'SPARSECOLORMETHOD_VORONOI' => 18,
    'SPARSECOLORMETHOD_INVERSE' => 19,
    'SPARSECOLORMETHOD_MANHATTAN' => 20,
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
    'ALPHACHANNEL_FLATTEN' => 11,
    'ALPHACHANNEL_REMOVE' => 12,
    'STATISTIC_GRADIENT' => 1,
    'STATISTIC_MAXIMUM' => 2,
    'STATISTIC_MEAN' => 3,
    'STATISTIC_MEDIAN' => 4,
    'STATISTIC_MINIMUM' => 5,
    'STATISTIC_MODE' => 6,
    'STATISTIC_NONPEAK' => 7,
    'STATISTIC_STANDARD_DEVIATION' => 8,
    'STATISTIC_ROOT_MEAN_SQUARE' => 9,
    'MORPHOLOGY_CONVOLVE' => 1,
    'MORPHOLOGY_CORRELATE' => 2,
    'MORPHOLOGY_ERODE' => 3,
    'MORPHOLOGY_DILATE' => 4,
    'MORPHOLOGY_ERODE_INTENSITY' => 5,
    'MORPHOLOGY_DILATE_INTENSITY' => 6,
    'MORPHOLOGY_DISTANCE' => 7,
    'MORPHOLOGY_OPEN' => 8,
    'MORPHOLOGY_CLOSE' => 9,
    'MORPHOLOGY_OPEN_INTENSITY' => 10,
    'MORPHOLOGY_CLOSE_INTENSITY' => 11,
    'MORPHOLOGY_SMOOTH' => 12,
    'MORPHOLOGY_EDGE_IN' => 13,
    'MORPHOLOGY_EDGE_OUT' => 14,
    'MORPHOLOGY_EDGE' => 15,
    'MORPHOLOGY_TOP_HAT' => 16,
    'MORPHOLOGY_BOTTOM_HAT' => 17,
    'MORPHOLOGY_HIT_AND_MISS' => 18,
    'MORPHOLOGY_THINNING' => 19,
    'MORPHOLOGY_THICKEN' => 20,
    'MORPHOLOGY_VORONOI' => 21,
    'MORPHOLOGY_ITERATIVE' => 22,
    'KERNEL_UNITY' => 1,
    'KERNEL_GAUSSIAN' => 2,
    'KERNEL_DIFFERENCE_OF_GAUSSIANS' => 3,
    'KERNEL_LAPLACIAN_OF_GAUSSIANS' => 4,
    'KERNEL_BLUR' => 5,
    'KERNEL_COMET' => 6,
    'KERNEL_LAPLACIAN' => 7,
    'KERNEL_SOBEL' => 8,
    'KERNEL_FREI_CHEN' => 9,
    'KERNEL_ROBERTS' => 10,
    'KERNEL_PREWITT' => 11,
    'KERNEL_COMPASS' => 12,
    'KERNEL_KIRSCH' => 13,
    'KERNEL_DIAMOND' => 14,
    'KERNEL_SQUARE' => 15,
    'KERNEL_RECTANGLE' => 16,
    'KERNEL_OCTAGON' => 17,
    'KERNEL_DISK' => 18,
    'KERNEL_PLUS' => 19,
    'KERNEL_CROSS' => 20,
    'KERNEL_RING' => 21,
    'KERNEL_PEAKS' => 22,
    'KERNEL_EDGES' => 23,
    'KERNEL_CORNERS' => 24,
    'KERNEL_DIAGONALS' => 25,
    'KERNEL_LINE_ENDS' => 26,
    'KERNEL_LINE_JUNCTIONS' => 27,
    'KERNEL_RIDGES' => 28,
    'KERNEL_CONVEX_HULL' => 29,
    'KERNEL_THIN_SE' => 30,
    'KERNEL_SKELETON' => 31,
    'KERNEL_CHEBYSHEV' => 32,
    'KERNEL_MANHATTAN' => 33,
    'KERNEL_OCTAGONAL' => 34,
    'KERNEL_EUCLIDEAN' => 35,
    'KERNEL_USER_DEFINED' => 36,
    'KERNEL_BINOMIAL' => 37,
    'DIRECTION_LEFT_TO_RIGHT' => 2,
    'DIRECTION_RIGHT_TO_LEFT' => 1,
    'NORMALIZE_KERNEL_NONE' => 0,
    'NORMALIZE_KERNEL_VALUE' => 8192,
    'NORMALIZE_KERNEL_CORRELATE' => 65536,
    'NORMALIZE_KERNEL_PERCENT' => 4096,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'optimizeImageLayers' => 
    array (
      'name' => 'optimizeImageLayers',
      'class' => 'Imagick',
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
    'compareImageLayers' => 
    array (
      'name' => 'compareImageLayers',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'metric' => 
        array (
          'position' => 0,
          'name' => 'metric',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pingImageBlob' => 
    array (
      'name' => 'pingImageBlob',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'image' => 
        array (
          'position' => 0,
          'name' => 'image',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pingImageFile' => 
    array (
      'name' => 'pingImageFile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filehandle' => 
        array (
          'position' => 0,
          'name' => 'filehandle',
          'type' => 'mixed',
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
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'transposeImage' => 
    array (
      'name' => 'transposeImage',
      'class' => 'Imagick',
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
    'transverseImage' => 
    array (
      'name' => 'transverseImage',
      'class' => 'Imagick',
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
    'trimImage' => 
    array (
      'name' => 'trimImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'fuzz' => 
        array (
          'position' => 0,
          'name' => 'fuzz',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'waveImage' => 
    array (
      'name' => 'waveImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'amplitude' => 
        array (
          'position' => 0,
          'name' => 'amplitude',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 1,
          'name' => 'length',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'vignetteImage' => 
    array (
      'name' => 'vignetteImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'black_point' => 
        array (
          'position' => 0,
          'name' => 'black_point',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'white_point' => 
        array (
          'position' => 1,
          'name' => 'white_point',
          'type' => 'float',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'uniqueImageColors' => 
    array (
      'name' => 'uniqueImageColors',
      'class' => 'Imagick',
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
    'getImageMatte' => 
    array (
      'name' => 'getImageMatte',
      'class' => 'Imagick',
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
    'setImageMatte' => 
    array (
      'name' => 'setImageMatte',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'matte' => 
        array (
          'position' => 0,
          'name' => 'matte',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'adaptiveResizeImage' => 
    array (
      'name' => 'adaptiveResizeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 3,
          'name' => 'legacy',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sketchImage' => 
    array (
      'name' => 'sketchImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'shadeImage' => 
    array (
      'name' => 'shadeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'gray' => 
        array (
          'position' => 0,
          'name' => 'gray',
          'type' => 'bool',
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
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getSizeOffset' => 
    array (
      'name' => 'getSizeOffset',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setSizeOffset' => 
    array (
      'name' => 'setSizeOffset',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'adaptiveBlurImage' => 
    array (
      'name' => 'adaptiveBlurImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'contrastStretchImage' => 
    array (
      'name' => 'contrastStretchImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'black_point' => 
        array (
          'position' => 0,
          'name' => 'black_point',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'white_point' => 
        array (
          'position' => 1,
          'name' => 'white_point',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'adaptiveSharpenImage' => 
    array (
      'name' => 'adaptiveSharpenImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'randomThresholdImage' => 
    array (
      'name' => 'randomThresholdImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'low' => 
        array (
          'position' => 0,
          'name' => 'low',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'roundCornersImage' => 
    array (
      'name' => 'roundCornersImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x_rounding' => 
        array (
          'position' => 0,
          'name' => 'x_rounding',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y_rounding' => 
        array (
          'position' => 1,
          'name' => 'y_rounding',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'stroke_width' => 
        array (
          'position' => 2,
          'name' => 'stroke_width',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 10,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'displace' => 
        array (
          'position' => 3,
          'name' => 'displace',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 5,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'size_correction' => 
        array (
          'position' => 4,
          'name' => 'size_correction',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -6,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'roundCorners' => 
    array (
      'name' => 'roundCorners',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x_rounding' => 
        array (
          'position' => 0,
          'name' => 'x_rounding',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y_rounding' => 
        array (
          'position' => 1,
          'name' => 'y_rounding',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'stroke_width' => 
        array (
          'position' => 2,
          'name' => 'stroke_width',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 10,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'displace' => 
        array (
          'position' => 3,
          'name' => 'displace',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 5,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'size_correction' => 
        array (
          'position' => 4,
          'name' => 'size_correction',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -6,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setIteratorIndex' => 
    array (
      'name' => 'setIteratorIndex',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getIteratorIndex' => 
    array (
      'name' => 'getIteratorIndex',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'transformImage' => 
    array (
      'name' => 'transformImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'crop' => 
        array (
          'position' => 0,
          'name' => 'crop',
          'type' => 'string',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageOpacity' => 
    array (
      'name' => 'setImageOpacity',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'opacity' => 
        array (
          'position' => 0,
          'name' => 'opacity',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'orderedPosterizeImage' => 
    array (
      'name' => 'orderedPosterizeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold_map' => 
        array (
          'position' => 0,
          'name' => 'threshold_map',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'polaroidImage' => 
    array (
      'name' => 'polaroidImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'settings' => 
        array (
          'position' => 0,
          'name' => 'settings',
          'type' => 'ImagickDraw',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageProperty' => 
    array (
      'name' => 'getImageProperty',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageProperty' => 
    array (
      'name' => 'setImageProperty',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'deleteImageProperty' => 
    array (
      'name' => 'deleteImageProperty',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'identifyFormat' => 
    array (
      'name' => 'identifyFormat',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageInterpolateMethod' => 
    array (
      'name' => 'setImageInterpolateMethod',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'method' => 
        array (
          'position' => 0,
          'name' => 'method',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageInterpolateMethod' => 
    array (
      'name' => 'getImageInterpolateMethod',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'linearStretchImage' => 
    array (
      'name' => 'linearStretchImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'black_point' => 
        array (
          'position' => 0,
          'name' => 'black_point',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'white_point' => 
        array (
          'position' => 1,
          'name' => 'white_point',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageLength' => 
    array (
      'name' => 'getImageLength',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'extentImage' => 
    array (
      'name' => 'extentImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageOrientation' => 
    array (
      'name' => 'getImageOrientation',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageOrientation' => 
    array (
      'name' => 'setImageOrientation',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'orientation' => 
        array (
          'position' => 0,
          'name' => 'orientation',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'paintFloodfillImage' => 
    array (
      'name' => 'paintFloodfillImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'fill_color' => 
        array (
          'position' => 0,
          'name' => 'fill_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'float',
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
          'type' => 'ImagickPixel|string',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 5,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clutImage' => 
    array (
      'name' => 'clutImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'lookup_table' => 
        array (
          'position' => 0,
          'name' => 'lookup_table',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageProperties' => 
    array (
      'name' => 'getImageProperties',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '*',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'include_values' => 
        array (
          'position' => 1,
          'name' => 'include_values',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageProfiles' => 
    array (
      'name' => 'getImageProfiles',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '*',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'include_values' => 
        array (
          'position' => 1,
          'name' => 'include_values',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'distortImage' => 
    array (
      'name' => 'distortImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'distortion' => 
        array (
          'position' => 0,
          'name' => 'distortion',
          'type' => 'int',
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
          'type' => 'array',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeImageFile' => 
    array (
      'name' => 'writeImageFile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filehandle' => 
        array (
          'position' => 0,
          'name' => 'filehandle',
          'type' => 'mixed',
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
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeImagesFile' => 
    array (
      'name' => 'writeImagesFile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filehandle' => 
        array (
          'position' => 0,
          'name' => 'filehandle',
          'type' => 'mixed',
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
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'resetImagePage' => 
    array (
      'name' => 'resetImagePage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'page' => 
        array (
          'position' => 0,
          'name' => 'page',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageClipMask' => 
    array (
      'name' => 'setImageClipMask',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'clip_mask' => 
        array (
          'position' => 0,
          'name' => 'clip_mask',
          'type' => 'imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageClipMask' => 
    array (
      'name' => 'getImageClipMask',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'animateImages' => 
    array (
      'name' => 'animateImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x_server' => 
        array (
          'position' => 0,
          'name' => 'x_server',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'recolorImage' => 
    array (
      'name' => 'recolorImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'matrix' => 
        array (
          'position' => 0,
          'name' => 'matrix',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setFont' => 
    array (
      'name' => 'setFont',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'font' => 
        array (
          'position' => 0,
          'name' => 'font',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFont' => 
    array (
      'name' => 'getFont',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setPointSize' => 
    array (
      'name' => 'setPointSize',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'point_size' => 
        array (
          'position' => 0,
          'name' => 'point_size',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPointSize' => 
    array (
      'name' => 'getPointSize',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'float',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mergeImageLayers' => 
    array (
      'name' => 'mergeImageLayers',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'layermethod' => 
        array (
          'position' => 0,
          'name' => 'layermethod',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageAlphaChannel' => 
    array (
      'name' => 'setImageAlphaChannel',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'alphachannel' => 
        array (
          'position' => 0,
          'name' => 'alphachannel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'floodfillPaintImage' => 
    array (
      'name' => 'floodfillPaintImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'fill_color' => 
        array (
          'position' => 0,
          'name' => 'fill_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'float',
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
          'type' => 'ImagickPixel|string',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 6,
          'name' => 'channel',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'opaquePaintImage' => 
    array (
      'name' => 'opaquePaintImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'target_color' => 
        array (
          'position' => 0,
          'name' => 'target_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'ImagickPixel|string',
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
          'type' => 'float',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 4,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'transparentPaintImage' => 
    array (
      'name' => 'transparentPaintImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'target_color' => 
        array (
          'position' => 0,
          'name' => 'target_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'liquidRescaleImage' => 
    array (
      'name' => 'liquidRescaleImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'encipherImage' => 
    array (
      'name' => 'encipherImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'passphrase' => 
        array (
          'position' => 0,
          'name' => 'passphrase',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'decipherImage' => 
    array (
      'name' => 'decipherImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'passphrase' => 
        array (
          'position' => 0,
          'name' => 'passphrase',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setGravity' => 
    array (
      'name' => 'setGravity',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'gravity' => 
        array (
          'position' => 0,
          'name' => 'gravity',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getGravity' => 
    array (
      'name' => 'getGravity',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageChannelRange' => 
    array (
      'name' => 'getImageChannelRange',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageAlphaChannel' => 
    array (
      'name' => 'getImageAlphaChannel',
      'class' => 'Imagick',
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
    'getImageChannelDistortions' => 
    array (
      'name' => 'getImageChannelDistortions',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'reference_image' => 
        array (
          'position' => 0,
          'name' => 'reference_image',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'metric' => 
        array (
          'position' => 1,
          'name' => 'metric',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'float',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageGravity' => 
    array (
      'name' => 'setImageGravity',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'gravity' => 
        array (
          'position' => 0,
          'name' => 'gravity',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageGravity' => 
    array (
      'name' => 'getImageGravity',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'importImagePixels' => 
    array (
      'name' => 'importImagePixels',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pixelstorage' => 
        array (
          'position' => 5,
          'name' => 'pixelstorage',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pixels' => 
        array (
          'position' => 6,
          'name' => 'pixels',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'deskewImage' => 
    array (
      'name' => 'deskewImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold' => 
        array (
          'position' => 0,
          'name' => 'threshold',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'segmentImage' => 
    array (
      'name' => 'segmentImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'colorspace' => 
        array (
          'position' => 0,
          'name' => 'colorspace',
          'type' => 'int',
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
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sparseColorImage' => 
    array (
      'name' => 'sparseColorImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'sparsecolormethod' => 
        array (
          'position' => 0,
          'name' => 'sparsecolormethod',
          'type' => 'int',
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
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'remapImage' => 
    array (
      'name' => 'remapImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'replacement' => 
        array (
          'position' => 0,
          'name' => 'replacement',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dither_method' => 
        array (
          'position' => 1,
          'name' => 'dither_method',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'exportImagePixels' => 
    array (
      'name' => 'exportImagePixels',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pixelstorage' => 
        array (
          'position' => 5,
          'name' => 'pixelstorage',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageChannelKurtosis' => 
    array (
      'name' => 'getImageChannelKurtosis',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'functionImage' => 
    array (
      'name' => 'functionImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'function' => 
        array (
          'position' => 0,
          'name' => 'function',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'parameters' => 
        array (
          'position' => 1,
          'name' => 'parameters',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'transformImageColorspace' => 
    array (
      'name' => 'transformImageColorspace',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'colorspace' => 
        array (
          'position' => 0,
          'name' => 'colorspace',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'haldClutImage' => 
    array (
      'name' => 'haldClutImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'clut' => 
        array (
          'position' => 0,
          'name' => 'clut',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'autoLevelImage' => 
    array (
      'name' => 'autoLevelImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'blueShiftImage' => 
    array (
      'name' => 'blueShiftImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'factor' => 
        array (
          'position' => 0,
          'name' => 'factor',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 1.5,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageArtifact' => 
    array (
      'name' => 'getImageArtifact',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'artifact' => 
        array (
          'position' => 0,
          'name' => 'artifact',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageArtifact' => 
    array (
      'name' => 'setImageArtifact',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'artifact' => 
        array (
          'position' => 0,
          'name' => 'artifact',
          'type' => 'string',
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
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'deleteImageArtifact' => 
    array (
      'name' => 'deleteImageArtifact',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'artifact' => 
        array (
          'position' => 0,
          'name' => 'artifact',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getColorspace' => 
    array (
      'name' => 'getColorspace',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setColorspace' => 
    array (
      'name' => 'setColorspace',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'colorspace' => 
        array (
          'position' => 0,
          'name' => 'colorspace',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clampImage' => 
    array (
      'name' => 'clampImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'smushImages' => 
    array (
      'name' => 'smushImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'stack' => 
        array (
          'position' => 0,
          'name' => 'stack',
          'type' => 'bool',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
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
          'type' => 'array|string|int|float|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
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
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPixelIterator' => 
    array (
      'name' => 'getPixelIterator',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'ImagickPixelIterator',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPixelRegionIterator' => 
    array (
      'name' => 'getPixelRegionIterator',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'ImagickPixelIterator',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'readImage' => 
    array (
      'name' => 'readImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'readImages' => 
    array (
      'name' => 'readImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filenames' => 
        array (
          'position' => 0,
          'name' => 'filenames',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'readImageBlob' => 
    array (
      'name' => 'readImageBlob',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'image' => 
        array (
          'position' => 0,
          'name' => 'image',
          'type' => 'string',
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
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageFormat' => 
    array (
      'name' => 'setImageFormat',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'scaleImage' => 
    array (
      'name' => 'scaleImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 3,
          'name' => 'legacy',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeImage' => 
    array (
      'name' => 'writeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'writeImages' => 
    array (
      'name' => 'writeImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'blurImage' => 
    array (
      'name' => 'blurImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'thumbnailImage' => 
    array (
      'name' => 'thumbnailImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => '?int',
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
          'type' => '?int',
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
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fill' => 
        array (
          'position' => 3,
          'name' => 'fill',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 4,
          'name' => 'legacy',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'cropThumbnailImage' => 
    array (
      'name' => 'cropThumbnailImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageFilename' => 
    array (
      'name' => 'getImageFilename',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageFilename' => 
    array (
      'name' => 'setImageFilename',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageFormat' => 
    array (
      'name' => 'getImageFormat',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageMimeType' => 
    array (
      'name' => 'getImageMimeType',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'removeImage' => 
    array (
      'name' => 'removeImage',
      'class' => 'Imagick',
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
    'destroy' => 
    array (
      'name' => 'destroy',
      'class' => 'Imagick',
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
    'clear' => 
    array (
      'name' => 'clear',
      'class' => 'Imagick',
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
    'clone' => 
    array (
      'name' => 'clone',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageSize' => 
    array (
      'name' => 'getImageSize',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageBlob' => 
    array (
      'name' => 'getImageBlob',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImagesBlob' => 
    array (
      'name' => 'getImagesBlob',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setFirstIterator' => 
    array (
      'name' => 'setFirstIterator',
      'class' => 'Imagick',
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
    'setLastIterator' => 
    array (
      'name' => 'setLastIterator',
      'class' => 'Imagick',
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
    'resetIterator' => 
    array (
      'name' => 'resetIterator',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'previousImage' => 
    array (
      'name' => 'previousImage',
      'class' => 'Imagick',
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
    'nextImage' => 
    array (
      'name' => 'nextImage',
      'class' => 'Imagick',
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
    'hasPreviousImage' => 
    array (
      'name' => 'hasPreviousImage',
      'class' => 'Imagick',
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
    'hasNextImage' => 
    array (
      'name' => 'hasNextImage',
      'class' => 'Imagick',
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
    'setImageIndex' => 
    array (
      'name' => 'setImageIndex',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageIndex' => 
    array (
      'name' => 'getImageIndex',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'commentImage' => 
    array (
      'name' => 'commentImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'comment' => 
        array (
          'position' => 0,
          'name' => 'comment',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'cropImage' => 
    array (
      'name' => 'cropImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'labelImage' => 
    array (
      'name' => 'labelImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'label' => 
        array (
          'position' => 0,
          'name' => 'label',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageGeometry' => 
    array (
      'name' => 'getImageGeometry',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'drawImage' => 
    array (
      'name' => 'drawImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'drawing' => 
        array (
          'position' => 0,
          'name' => 'drawing',
          'type' => 'ImagickDraw',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageCompressionQuality' => 
    array (
      'name' => 'setImageCompressionQuality',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'quality' => 
        array (
          'position' => 0,
          'name' => 'quality',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageCompressionQuality' => 
    array (
      'name' => 'getImageCompressionQuality',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageCompression' => 
    array (
      'name' => 'setImageCompression',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'compression' => 
        array (
          'position' => 0,
          'name' => 'compression',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageCompression' => 
    array (
      'name' => 'getImageCompression',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'annotateImage' => 
    array (
      'name' => 'annotateImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'settings' => 
        array (
          'position' => 0,
          'name' => 'settings',
          'type' => 'ImagickDraw',
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
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compositeImage' => 
    array (
      'name' => 'compositeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'composite_image' => 
        array (
          'position' => 0,
          'name' => 'composite_image',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'composite' => 
        array (
          'position' => 1,
          'name' => 'composite',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 4,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'modulateImage' => 
    array (
      'name' => 'modulateImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'brightness' => 
        array (
          'position' => 0,
          'name' => 'brightness',
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageColors' => 
    array (
      'name' => 'getImageColors',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'montageImage' => 
    array (
      'name' => 'montageImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'settings' => 
        array (
          'position' => 0,
          'name' => 'settings',
          'type' => 'ImagickDraw',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'tile_geometry' => 
        array (
          'position' => 1,
          'name' => 'tile_geometry',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'thumbnail_geometry' => 
        array (
          'position' => 2,
          'name' => 'thumbnail_geometry',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'monatgemode' => 
        array (
          'position' => 3,
          'name' => 'monatgemode',
          'type' => 'int',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'identifyImage' => 
    array (
      'name' => 'identifyImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'append_raw_output' => 
        array (
          'position' => 0,
          'name' => 'append_raw_output',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'thresholdImage' => 
    array (
      'name' => 'thresholdImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold' => 
        array (
          'position' => 0,
          'name' => 'threshold',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'adaptiveThresholdImage' => 
    array (
      'name' => 'adaptiveThresholdImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'blackThresholdImage' => 
    array (
      'name' => 'blackThresholdImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold_color' => 
        array (
          'position' => 0,
          'name' => 'threshold_color',
          'type' => 'ImagickPixel|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'whiteThresholdImage' => 
    array (
      'name' => 'whiteThresholdImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold_color' => 
        array (
          'position' => 0,
          'name' => 'threshold_color',
          'type' => 'ImagickPixel|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'appendImages' => 
    array (
      'name' => 'appendImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'stack' => 
        array (
          'position' => 0,
          'name' => 'stack',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'charcoalImage' => 
    array (
      'name' => 'charcoalImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'normalizeImage' => 
    array (
      'name' => 'normalizeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'oilPaintImage' => 
    array (
      'name' => 'oilPaintImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'posterizeImage' => 
    array (
      'name' => 'posterizeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'levels' => 
        array (
          'position' => 0,
          'name' => 'levels',
          'type' => 'int',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'radialBlurImage' => 
    array (
      'name' => 'radialBlurImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'angle' => 
        array (
          'position' => 0,
          'name' => 'angle',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'raiseImage' => 
    array (
      'name' => 'raiseImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'resampleImage' => 
    array (
      'name' => 'resampleImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x_resolution' => 
        array (
          'position' => 0,
          'name' => 'x_resolution',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y_resolution' => 
        array (
          'position' => 1,
          'name' => 'y_resolution',
          'type' => 'float',
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
          'type' => 'int',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'resizeImage' => 
    array (
      'name' => 'resizeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bestfit' => 
        array (
          'position' => 4,
          'name' => 'bestfit',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'legacy' => 
        array (
          'position' => 5,
          'name' => 'legacy',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rollImage' => 
    array (
      'name' => 'rollImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rotateImage' => 
    array (
      'name' => 'rotateImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'background_color' => 
        array (
          'position' => 0,
          'name' => 'background_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sampleImage' => 
    array (
      'name' => 'sampleImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'solarizeImage' => 
    array (
      'name' => 'solarizeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold' => 
        array (
          'position' => 0,
          'name' => 'threshold',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'shadowImage' => 
    array (
      'name' => 'shadowImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'opacity' => 
        array (
          'position' => 0,
          'name' => 'opacity',
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageAttribute' => 
    array (
      'name' => 'setImageAttribute',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'string',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageBackgroundColor' => 
    array (
      'name' => 'setImageBackgroundColor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'background_color' => 
        array (
          'position' => 0,
          'name' => 'background_color',
          'type' => 'ImagickPixel|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageCompose' => 
    array (
      'name' => 'setImageCompose',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'compose' => 
        array (
          'position' => 0,
          'name' => 'compose',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageDelay' => 
    array (
      'name' => 'setImageDelay',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'delay' => 
        array (
          'position' => 0,
          'name' => 'delay',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageDepth' => 
    array (
      'name' => 'setImageDepth',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'depth' => 
        array (
          'position' => 0,
          'name' => 'depth',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageGamma' => 
    array (
      'name' => 'setImageGamma',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'gamma' => 
        array (
          'position' => 0,
          'name' => 'gamma',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageIterations' => 
    array (
      'name' => 'setImageIterations',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'iterations' => 
        array (
          'position' => 0,
          'name' => 'iterations',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageMatteColor' => 
    array (
      'name' => 'setImageMatteColor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'matte_color' => 
        array (
          'position' => 0,
          'name' => 'matte_color',
          'type' => 'ImagickPixel|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImagePage' => 
    array (
      'name' => 'setImagePage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageProgressMonitor' => 
    array (
      'name' => 'setImageProgressMonitor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setProgressMonitor' => 
    array (
      'name' => 'setProgressMonitor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageResolution' => 
    array (
      'name' => 'setImageResolution',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x_resolution' => 
        array (
          'position' => 0,
          'name' => 'x_resolution',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y_resolution' => 
        array (
          'position' => 1,
          'name' => 'y_resolution',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageScene' => 
    array (
      'name' => 'setImageScene',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'scene' => 
        array (
          'position' => 0,
          'name' => 'scene',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageTicksPerSecond' => 
    array (
      'name' => 'setImageTicksPerSecond',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'ticks_per_second' => 
        array (
          'position' => 0,
          'name' => 'ticks_per_second',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageType' => 
    array (
      'name' => 'setImageType',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'image_type' => 
        array (
          'position' => 0,
          'name' => 'image_type',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageUnits' => 
    array (
      'name' => 'setImageUnits',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'units' => 
        array (
          'position' => 0,
          'name' => 'units',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sharpenImage' => 
    array (
      'name' => 'sharpenImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'shaveImage' => 
    array (
      'name' => 'shaveImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'shearImage' => 
    array (
      'name' => 'shearImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'background_color' => 
        array (
          'position' => 0,
          'name' => 'background_color',
          'type' => 'ImagickPixel|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x_shear' => 
        array (
          'position' => 1,
          'name' => 'x_shear',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y_shear' => 
        array (
          'position' => 2,
          'name' => 'y_shear',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'spliceImage' => 
    array (
      'name' => 'spliceImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pingImage' => 
    array (
      'name' => 'pingImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'readImageFile' => 
    array (
      'name' => 'readImageFile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filehandle' => 
        array (
          'position' => 0,
          'name' => 'filehandle',
          'type' => 'mixed',
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
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'displayImage' => 
    array (
      'name' => 'displayImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'servername' => 
        array (
          'position' => 0,
          'name' => 'servername',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'displayImages' => 
    array (
      'name' => 'displayImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'servername' => 
        array (
          'position' => 0,
          'name' => 'servername',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'spreadImage' => 
    array (
      'name' => 'spreadImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'swirlImage' => 
    array (
      'name' => 'swirlImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'degrees' => 
        array (
          'position' => 0,
          'name' => 'degrees',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'stripImage' => 
    array (
      'name' => 'stripImage',
      'class' => 'Imagick',
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
    'queryFormats' => 
    array (
      'name' => 'queryFormats',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '*',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'queryFonts' => 
    array (
      'name' => 'queryFonts',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '*',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'queryFontMetrics' => 
    array (
      'name' => 'queryFontMetrics',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'settings' => 
        array (
          'position' => 0,
          'name' => 'settings',
          'type' => 'ImagickDraw',
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
          'type' => 'string',
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
          'type' => '?bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'steganoImage' => 
    array (
      'name' => 'steganoImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'watermark' => 
        array (
          'position' => 0,
          'name' => 'watermark',
          'type' => 'Imagick',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addNoiseImage' => 
    array (
      'name' => 'addNoiseImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'noise' => 
        array (
          'position' => 0,
          'name' => 'noise',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'motionBlurImage' => 
    array (
      'name' => 'motionBlurImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 3,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mosaicImages' => 
    array (
      'name' => 'mosaicImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'morphImages' => 
    array (
      'name' => 'morphImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'number_frames' => 
        array (
          'position' => 0,
          'name' => 'number_frames',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'minifyImage' => 
    array (
      'name' => 'minifyImage',
      'class' => 'Imagick',
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
    'affineTransformImage' => 
    array (
      'name' => 'affineTransformImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'settings' => 
        array (
          'position' => 0,
          'name' => 'settings',
          'type' => 'ImagickDraw',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'averageImages' => 
    array (
      'name' => 'averageImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'borderImage' => 
    array (
      'name' => 'borderImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'border_color' => 
        array (
          'position' => 0,
          'name' => 'border_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'calculateCrop' => 
    array (
      'name' => 'calculateCrop',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'original_width' => 
        array (
          'position' => 0,
          'name' => 'original_width',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'original_height' => 
        array (
          'position' => 1,
          'name' => 'original_height',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'chopImage' => 
    array (
      'name' => 'chopImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clipImage' => 
    array (
      'name' => 'clipImage',
      'class' => 'Imagick',
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
    'clipPathImage' => 
    array (
      'name' => 'clipPathImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pathname' => 
        array (
          'position' => 0,
          'name' => 'pathname',
          'type' => 'string',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clipImagePath' => 
    array (
      'name' => 'clipImagePath',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pathname' => 
        array (
          'position' => 0,
          'name' => 'pathname',
          'type' => 'string',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'coalesceImages' => 
    array (
      'name' => 'coalesceImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'colorFloodfillImage' => 
    array (
      'name' => 'colorFloodfillImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'fill_color' => 
        array (
          'position' => 0,
          'name' => 'fill_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'float',
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
          'type' => 'ImagickPixel|string',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'colorizeImage' => 
    array (
      'name' => 'colorizeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'colorize_color' => 
        array (
          'position' => 0,
          'name' => 'colorize_color',
          'type' => 'ImagickPixel|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opacity_color' => 
        array (
          'position' => 1,
          'name' => 'opacity_color',
          'type' => 'ImagickPixel|string|false',
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
          'type' => '?bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compareImageChannels' => 
    array (
      'name' => 'compareImageChannels',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'reference' => 
        array (
          'position' => 0,
          'name' => 'reference',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'metric' => 
        array (
          'position' => 2,
          'name' => 'metric',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compareImages' => 
    array (
      'name' => 'compareImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'reference' => 
        array (
          'position' => 0,
          'name' => 'reference',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'metric' => 
        array (
          'position' => 1,
          'name' => 'metric',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'contrastImage' => 
    array (
      'name' => 'contrastImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'sharpen' => 
        array (
          'position' => 0,
          'name' => 'sharpen',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'combineImages' => 
    array (
      'name' => 'combineImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'colorspace' => 
        array (
          'position' => 0,
          'name' => 'colorspace',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'convolveImage' => 
    array (
      'name' => 'convolveImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'kernel' => 
        array (
          'position' => 0,
          'name' => 'kernel',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'cycleColormapImage' => 
    array (
      'name' => 'cycleColormapImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'displace' => 
        array (
          'position' => 0,
          'name' => 'displace',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'deconstructImages' => 
    array (
      'name' => 'deconstructImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'despeckleImage' => 
    array (
      'name' => 'despeckleImage',
      'class' => 'Imagick',
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
    'edgeImage' => 
    array (
      'name' => 'edgeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'embossImage' => 
    array (
      'name' => 'embossImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'enhanceImage' => 
    array (
      'name' => 'enhanceImage',
      'class' => 'Imagick',
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
    'equalizeImage' => 
    array (
      'name' => 'equalizeImage',
      'class' => 'Imagick',
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
    'evaluateImage' => 
    array (
      'name' => 'evaluateImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'evaluate' => 
        array (
          'position' => 0,
          'name' => 'evaluate',
          'type' => 'int',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'evaluateImages' => 
    array (
      'name' => 'evaluateImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'evaluate' => 
        array (
          'position' => 0,
          'name' => 'evaluate',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flattenImages' => 
    array (
      'name' => 'flattenImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flipImage' => 
    array (
      'name' => 'flipImage',
      'class' => 'Imagick',
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
    'flopImage' => 
    array (
      'name' => 'flopImage',
      'class' => 'Imagick',
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
    'forwardFourierTransformImage' => 
    array (
      'name' => 'forwardFourierTransformImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'magnitude' => 
        array (
          'position' => 0,
          'name' => 'magnitude',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'frameImage' => 
    array (
      'name' => 'frameImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'matte_color' => 
        array (
          'position' => 0,
          'name' => 'matte_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'inner_bevel' => 
        array (
          'position' => 3,
          'name' => 'inner_bevel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'outer_bevel' => 
        array (
          'position' => 4,
          'name' => 'outer_bevel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fxImage' => 
    array (
      'name' => 'fxImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'expression' => 
        array (
          'position' => 0,
          'name' => 'expression',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'gammaImage' => 
    array (
      'name' => 'gammaImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'gamma' => 
        array (
          'position' => 0,
          'name' => 'gamma',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'gaussianBlurImage' => 
    array (
      'name' => 'gaussianBlurImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageAttribute' => 
    array (
      'name' => 'getImageAttribute',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageBackgroundColor' => 
    array (
      'name' => 'getImageBackgroundColor',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'ImagickPixel',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageBluePrimary' => 
    array (
      'name' => 'getImageBluePrimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageBorderColor' => 
    array (
      'name' => 'getImageBorderColor',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'ImagickPixel',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageChannelDepth' => 
    array (
      'name' => 'getImageChannelDepth',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageChannelDistortion' => 
    array (
      'name' => 'getImageChannelDistortion',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'reference' => 
        array (
          'position' => 0,
          'name' => 'reference',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'metric' => 
        array (
          'position' => 2,
          'name' => 'metric',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'float',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageChannelExtrema' => 
    array (
      'name' => 'getImageChannelExtrema',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageChannelMean' => 
    array (
      'name' => 'getImageChannelMean',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageChannelStatistics' => 
    array (
      'name' => 'getImageChannelStatistics',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageColormapColor' => 
    array (
      'name' => 'getImageColormapColor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'ImagickPixel',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageColorspace' => 
    array (
      'name' => 'getImageColorspace',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageCompose' => 
    array (
      'name' => 'getImageCompose',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageDelay' => 
    array (
      'name' => 'getImageDelay',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageDepth' => 
    array (
      'name' => 'getImageDepth',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageDistortion' => 
    array (
      'name' => 'getImageDistortion',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'reference' => 
        array (
          'position' => 0,
          'name' => 'reference',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'metric' => 
        array (
          'position' => 1,
          'name' => 'metric',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'float',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageExtrema' => 
    array (
      'name' => 'getImageExtrema',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageDispose' => 
    array (
      'name' => 'getImageDispose',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageGamma' => 
    array (
      'name' => 'getImageGamma',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'float',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageGreenPrimary' => 
    array (
      'name' => 'getImageGreenPrimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageHeight' => 
    array (
      'name' => 'getImageHeight',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageHistogram' => 
    array (
      'name' => 'getImageHistogram',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageInterlaceScheme' => 
    array (
      'name' => 'getImageInterlaceScheme',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageIterations' => 
    array (
      'name' => 'getImageIterations',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageMatteColor' => 
    array (
      'name' => 'getImageMatteColor',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'ImagickPixel',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImagePage' => 
    array (
      'name' => 'getImagePage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImagePixelColor' => 
    array (
      'name' => 'getImagePixelColor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'ImagickPixel',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageProfile' => 
    array (
      'name' => 'getImageProfile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageRedPrimary' => 
    array (
      'name' => 'getImageRedPrimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageRenderingIntent' => 
    array (
      'name' => 'getImageRenderingIntent',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageResolution' => 
    array (
      'name' => 'getImageResolution',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageScene' => 
    array (
      'name' => 'getImageScene',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageSignature' => 
    array (
      'name' => 'getImageSignature',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageTicksPerSecond' => 
    array (
      'name' => 'getImageTicksPerSecond',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageType' => 
    array (
      'name' => 'getImageType',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageUnits' => 
    array (
      'name' => 'getImageUnits',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageVirtualPixelMethod' => 
    array (
      'name' => 'getImageVirtualPixelMethod',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageWhitePoint' => 
    array (
      'name' => 'getImageWhitePoint',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageWidth' => 
    array (
      'name' => 'getImageWidth',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getNumberImages' => 
    array (
      'name' => 'getNumberImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageTotalInkDensity' => 
    array (
      'name' => 'getImageTotalInkDensity',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'float',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImageRegion' => 
    array (
      'name' => 'getImageRegion',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'implodeImage' => 
    array (
      'name' => 'implodeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'inverseFourierTransformImage' => 
    array (
      'name' => 'inverseFourierTransformImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'complement' => 
        array (
          'position' => 0,
          'name' => 'complement',
          'type' => 'Imagick',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'levelImage' => 
    array (
      'name' => 'levelImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'black_point' => 
        array (
          'position' => 0,
          'name' => 'black_point',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'white_point' => 
        array (
          'position' => 2,
          'name' => 'white_point',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 3,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'magnifyImage' => 
    array (
      'name' => 'magnifyImage',
      'class' => 'Imagick',
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
    'mapImage' => 
    array (
      'name' => 'mapImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'map' => 
        array (
          'position' => 0,
          'name' => 'map',
          'type' => 'imagick',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'matteFloodfillImage' => 
    array (
      'name' => 'matteFloodfillImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'alpha' => 
        array (
          'position' => 0,
          'name' => 'alpha',
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'ImagickPixel|string',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'medianFilterImage' => 
    array (
      'name' => 'medianFilterImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'negateImage' => 
    array (
      'name' => 'negateImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'gray' => 
        array (
          'position' => 0,
          'name' => 'gray',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'paintOpaqueImage' => 
    array (
      'name' => 'paintOpaqueImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'target_color' => 
        array (
          'position' => 0,
          'name' => 'target_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'ImagickPixel|string',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 3,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'paintTransparentImage' => 
    array (
      'name' => 'paintTransparentImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'target_color' => 
        array (
          'position' => 0,
          'name' => 'target_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'previewImages' => 
    array (
      'name' => 'previewImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'preview' => 
        array (
          'position' => 0,
          'name' => 'preview',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'profileImage' => 
    array (
      'name' => 'profileImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
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
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'quantizeImage' => 
    array (
      'name' => 'quantizeImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'number_colors' => 
        array (
          'position' => 0,
          'name' => 'number_colors',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'colorspace' => 
        array (
          'position' => 1,
          'name' => 'colorspace',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'tree_depth' => 
        array (
          'position' => 2,
          'name' => 'tree_depth',
          'type' => 'int',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'measure_error' => 
        array (
          'position' => 4,
          'name' => 'measure_error',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'quantizeImages' => 
    array (
      'name' => 'quantizeImages',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'number_colors' => 
        array (
          'position' => 0,
          'name' => 'number_colors',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'colorspace' => 
        array (
          'position' => 1,
          'name' => 'colorspace',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'tree_depth' => 
        array (
          'position' => 2,
          'name' => 'tree_depth',
          'type' => 'int',
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
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'measure_error' => 
        array (
          'position' => 4,
          'name' => 'measure_error',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'reduceNoiseImage' => 
    array (
      'name' => 'reduceNoiseImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'removeImageProfile' => 
    array (
      'name' => 'removeImageProfile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'separateImageChannel' => 
    array (
      'name' => 'separateImageChannel',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sepiaToneImage' => 
    array (
      'name' => 'sepiaToneImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'threshold' => 
        array (
          'position' => 0,
          'name' => 'threshold',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageBias' => 
    array (
      'name' => 'setImageBias',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'bias' => 
        array (
          'position' => 0,
          'name' => 'bias',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageBiasQuantum' => 
    array (
      'name' => 'setImageBiasQuantum',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'bias' => 
        array (
          'position' => 0,
          'name' => 'bias',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageBluePrimary' => 
    array (
      'name' => 'setImageBluePrimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageBorderColor' => 
    array (
      'name' => 'setImageBorderColor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'border_color' => 
        array (
          'position' => 0,
          'name' => 'border_color',
          'type' => 'ImagickPixel|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageChannelDepth' => 
    array (
      'name' => 'setImageChannelDepth',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageColormapColor' => 
    array (
      'name' => 'setImageColormapColor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
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
          'type' => 'ImagickPixel|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageColorspace' => 
    array (
      'name' => 'setImageColorspace',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'colorspace' => 
        array (
          'position' => 0,
          'name' => 'colorspace',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageDispose' => 
    array (
      'name' => 'setImageDispose',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'dispose' => 
        array (
          'position' => 0,
          'name' => 'dispose',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageExtent' => 
    array (
      'name' => 'setImageExtent',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageGreenPrimary' => 
    array (
      'name' => 'setImageGreenPrimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageInterlaceScheme' => 
    array (
      'name' => 'setImageInterlaceScheme',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'interlace' => 
        array (
          'position' => 0,
          'name' => 'interlace',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageProfile' => 
    array (
      'name' => 'setImageProfile',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageRedPrimary' => 
    array (
      'name' => 'setImageRedPrimary',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageRenderingIntent' => 
    array (
      'name' => 'setImageRenderingIntent',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'rendering_intent' => 
        array (
          'position' => 0,
          'name' => 'rendering_intent',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageVirtualPixelMethod' => 
    array (
      'name' => 'setImageVirtualPixelMethod',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'method' => 
        array (
          'position' => 0,
          'name' => 'method',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImageWhitePoint' => 
    array (
      'name' => 'setImageWhitePoint',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x' => 
        array (
          'position' => 0,
          'name' => 'x',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sigmoidalContrastImage' => 
    array (
      'name' => 'sigmoidalContrastImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'sharpen' => 
        array (
          'position' => 0,
          'name' => 'sharpen',
          'type' => 'bool',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'beta' => 
        array (
          'position' => 2,
          'name' => 'beta',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 3,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'stereoImage' => 
    array (
      'name' => 'stereoImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'offset_image' => 
        array (
          'position' => 0,
          'name' => 'offset_image',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'textureImage' => 
    array (
      'name' => 'textureImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'texture' => 
        array (
          'position' => 0,
          'name' => 'texture',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'tintImage' => 
    array (
      'name' => 'tintImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'tint_color' => 
        array (
          'position' => 0,
          'name' => 'tint_color',
          'type' => 'ImagickPixel|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opacity_color' => 
        array (
          'position' => 1,
          'name' => 'opacity_color',
          'type' => 'ImagickPixel|string',
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
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unsharpMaskImage' => 
    array (
      'name' => 'unsharpMaskImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 4,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getImage' => 
    array (
      'name' => 'getImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addImage' => 
    array (
      'name' => 'addImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'image' => 
        array (
          'position' => 0,
          'name' => 'image',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setImage' => 
    array (
      'name' => 'setImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'image' => 
        array (
          'position' => 0,
          'name' => 'image',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'newImage' => 
    array (
      'name' => 'newImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'ImagickPixel|string',
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
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'newPseudoImage' => 
    array (
      'name' => 'newPseudoImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pseudo_format' => 
        array (
          'position' => 2,
          'name' => 'pseudo_format',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getCompression' => 
    array (
      'name' => 'getCompression',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getCompressionQuality' => 
    array (
      'name' => 'getCompressionQuality',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getCopyright' => 
    array (
      'name' => 'getCopyright',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getConfigureOptions' => 
    array (
      'name' => 'getConfigureOptions',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '*',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFeatures' => 
    array (
      'name' => 'getFeatures',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFilename' => 
    array (
      'name' => 'getFilename',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFormat' => 
    array (
      'name' => 'getFormat',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getHomeURL' => 
    array (
      'name' => 'getHomeURL',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getInterlaceScheme' => 
    array (
      'name' => 'getInterlaceScheme',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getOption' => 
    array (
      'name' => 'getOption',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPackageName' => 
    array (
      'name' => 'getPackageName',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPage' => 
    array (
      'name' => 'getPage',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getQuantum' => 
    array (
      'name' => 'getQuantum',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getHdriEnabled' => 
    array (
      'name' => 'getHdriEnabled',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getQuantumDepth' => 
    array (
      'name' => 'getQuantumDepth',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getQuantumRange' => 
    array (
      'name' => 'getQuantumRange',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getReleaseDate' => 
    array (
      'name' => 'getReleaseDate',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getResource' => 
    array (
      'name' => 'getResource',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getResourceLimit' => 
    array (
      'name' => 'getResourceLimit',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getSamplingFactors' => 
    array (
      'name' => 'getSamplingFactors',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getSize' => 
    array (
      'name' => 'getSize',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getVersion' => 
    array (
      'name' => 'getVersion',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setBackgroundColor' => 
    array (
      'name' => 'setBackgroundColor',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'background_color' => 
        array (
          'position' => 0,
          'name' => 'background_color',
          'type' => 'ImagickPixel|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setCompression' => 
    array (
      'name' => 'setCompression',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'compression' => 
        array (
          'position' => 0,
          'name' => 'compression',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setCompressionQuality' => 
    array (
      'name' => 'setCompressionQuality',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'quality' => 
        array (
          'position' => 0,
          'name' => 'quality',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setFilename' => 
    array (
      'name' => 'setFilename',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setFormat' => 
    array (
      'name' => 'setFormat',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setInterlaceScheme' => 
    array (
      'name' => 'setInterlaceScheme',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'interlace' => 
        array (
          'position' => 0,
          'name' => 'interlace',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setOption' => 
    array (
      'name' => 'setOption',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'string',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setPage' => 
    array (
      'name' => 'setPage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'width' => 
        array (
          'position' => 0,
          'name' => 'width',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setResourceLimit' => 
    array (
      'name' => 'setResourceLimit',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setResolution' => 
    array (
      'name' => 'setResolution',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'x_resolution' => 
        array (
          'position' => 0,
          'name' => 'x_resolution',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y_resolution' => 
        array (
          'position' => 1,
          'name' => 'y_resolution',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setSamplingFactors' => 
    array (
      'name' => 'setSamplingFactors',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'factors' => 
        array (
          'position' => 0,
          'name' => 'factors',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setSize' => 
    array (
      'name' => 'setSize',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'columns' => 
        array (
          'position' => 0,
          'name' => 'columns',
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setType' => 
    array (
      'name' => 'setType',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'imgtype' => 
        array (
          'position' => 0,
          'name' => 'imgtype',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
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
      'return_type' => 'int',
      'has_return_type' => true,
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
      'has_return_type' => false,
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
      'has_return_type' => false,
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
      'return_type' => 'bool',
      'has_return_type' => true,
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
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'brightnessContrastImage' => 
    array (
      'name' => 'brightnessContrastImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'brightness' => 
        array (
          'position' => 0,
          'name' => 'brightness',
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 2,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'colorMatrixImage' => 
    array (
      'name' => 'colorMatrixImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color_matrix' => 
        array (
          'position' => 0,
          'name' => 'color_matrix',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'selectiveBlurImage' => 
    array (
      'name' => 'selectiveBlurImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
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
          'type' => 'float',
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
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 3,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rotationalBlurImage' => 
    array (
      'name' => 'rotationalBlurImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'angle' => 
        array (
          'position' => 0,
          'name' => 'angle',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'statisticImage' => 
    array (
      'name' => 'statisticImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 3,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'subimageMatch' => 
    array (
      'name' => 'subimageMatch',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'image' => 
        array (
          'position' => 0,
          'name' => 'image',
          'type' => 'Imagick',
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
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'similarity' => 
        array (
          'position' => 2,
          'name' => 'similarity',
          'type' => '?float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'threshold' => 
        array (
          'position' => 3,
          'name' => 'threshold',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0.0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'metric' => 
        array (
          'position' => 4,
          'name' => 'metric',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'similarityImage' => 
    array (
      'name' => 'similarityImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'image' => 
        array (
          'position' => 0,
          'name' => 'image',
          'type' => 'Imagick',
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
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'similarity' => 
        array (
          'position' => 2,
          'name' => 'similarity',
          'type' => '?float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'threshold' => 
        array (
          'position' => 3,
          'name' => 'threshold',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0.0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'metric' => 
        array (
          'position' => 4,
          'name' => 'metric',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Imagick',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setRegistry' => 
    array (
      'name' => 'setRegistry',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'string',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getRegistry' => 
    array (
      'name' => 'getRegistry',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'listRegistry' => 
    array (
      'name' => 'listRegistry',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'morphology' => 
    array (
      'name' => 'morphology',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'morphology' => 
        array (
          'position' => 0,
          'name' => 'morphology',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'iterations' => 
        array (
          'position' => 1,
          'name' => 'iterations',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'kernel' => 
        array (
          'position' => 2,
          'name' => 'kernel',
          'type' => 'ImagickKernel',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 3,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217719,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_DEFAULT',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'filter' => 
    array (
      'name' => 'filter',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'kernel' => 
        array (
          'position' => 0,
          'name' => 'kernel',
          'type' => 'ImagickKernel',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'channel' => 
        array (
          'position' => 1,
          'name' => 'channel',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_UNDEFINED',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setAntialias' => 
    array (
      'name' => 'setAntialias',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'antialias' => 
        array (
          'position' => 0,
          'name' => 'antialias',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAntialias' => 
    array (
      'name' => 'getAntialias',
      'class' => 'Imagick',
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
    'colorDecisionListImage' => 
    array (
      'name' => 'colorDecisionListImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'color_correction_collection' => 
        array (
          'position' => 0,
          'name' => 'color_correction_collection',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'optimizeImageTransparency' => 
    array (
      'name' => 'optimizeImageTransparency',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'autoGammaImage' => 
    array (
      'name' => 'autoGammaImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 134217727,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Imagick::CHANNEL_ALL',
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'autoOrient' => 
    array (
      'name' => 'autoOrient',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'autoOrientate' => 
    array (
      'name' => 'autoOrientate',
      'class' => 'Imagick',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compositeImageGravity' => 
    array (
      'name' => 'compositeImageGravity',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'image' => 
        array (
          'position' => 0,
          'name' => 'image',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'composite_constant' => 
        array (
          'position' => 1,
          'name' => 'composite_constant',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'gravity' => 
        array (
          'position' => 2,
          'name' => 'gravity',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'localContrastImage' => 
    array (
      'name' => 'localContrastImage',
      'class' => 'Imagick',
      'parameters' => 
      array (
        'radius' => 
        array (
          'position' => 0,
          'name' => 'radius',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'strength' => 
        array (
          'position' => 1,
          'name' => 'strength',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
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
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
);
