<?php return array (
  'd534cc922b3f5fa4f3aaebf38c9940bc' => 
  array (
    'criteria' => 
    array (
      'name' => 'imageplus',
    ),
    'object' => 
    array (
      'name' => 'imageplus',
      'path' => '{core_path}components/imageplus/',
      'assets_path' => '{assets_path}components/imageplus/',
    ),
  ),
  'e8afcf080f74df32837815e8a712a033' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.debug',
    ),
    'object' => 
    array (
      'key' => 'imageplus.debug',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'system',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c09831dd06791daf473154d45f8c16a7' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.target_width',
    ),
    'object' => 
    array (
      'key' => 'imageplus.target_width',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c0844c296f27ecb6937c37e89f011afc' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.target_height',
    ),
    'object' => 
    array (
      'key' => 'imageplus.target_height',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '73999da6ec1c1b10192acd04f171408f' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.target_ratio',
    ),
    'object' => 
    array (
      'key' => 'imageplus.target_ratio',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e67abdeea28e3047f6328890e88da9dd' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.thumbnail_width',
    ),
    'object' => 
    array (
      'key' => 'imageplus.thumbnail_width',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fb7ad31dc278f4a1c192359d04f11963' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.allow_alt_tag',
    ),
    'object' => 
    array (
      'key' => 'imageplus.allow_alt_tag',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4752ec3aa3c9fac51c7ca203b44d6b53' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.allow_caption',
    ),
    'object' => 
    array (
      'key' => 'imageplus.allow_caption',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '821c6bd661953968ccfff31304347098' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.allow_credits',
    ),
    'object' => 
    array (
      'key' => 'imageplus.allow_credits',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '468a1b7bfd31d4ac33720ff65d01382f' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.select_config',
    ),
    'object' => 
    array (
      'key' => 'imageplus.select_config',
      'value' => '[]',
      'xtype' => 'sizes-ratio-grid',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '98b1a969e26d4c52d025f93cb118ae2b' => 
  array (
    'criteria' => 
    array (
      'key' => 'imageplus.force_config',
    ),
    'object' => 
    array (
      'key' => 'imageplus.force_config',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'imageplus',
      'area' => 'imageplus',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ff0a4de166a2f404f8cbf2c05130b622' => 
  array (
    'criteria' => 
    array (
      'category' => 'ImagePlus',
    ),
    'object' => 
    array (
      'id' => 23,
      'parent' => 0,
      'category' => 'ImagePlus',
      'rank' => 0,
    ),
  ),
  'fa4761185801fed23bee774586387c39' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus.demo',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus.demo',
      'description' => 'Demo chunk for Image+ template variable output.',
      'editor_type' => 0,
      'category' => 23,
      'cache_type' => 0,
      'snippet' => '<div>
    <h3>Image+ Demo Chunk</h3>
    <table>
        <thead>
        <tr>
            <th>Description</th>
            <th>Current Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>[[%imageplus.placeholder.url? &namespace=`imageplus`]]</td>
            <td>[[+url]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.alt? &namespace=`imageplus`]]</td>
            <td>[[+alt]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.width? &namespace=`imageplus`]]</td>
            <td>[[+width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.height? &namespace=`imageplus`]]</td>
            <td>[[+height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.src? &namespace=`imageplus`]]</td>
            <td>[[+source.src]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.width? &namespace=`imageplus`]]</td>
            <td>[[+source.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.height? &namespace=`imageplus`]]</td>
            <td>[[+source.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.width? &namespace=`imageplus`]]</td>
            <td>[[+crop.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.height? &namespace=`imageplus`]]</td>
            <td>[[+crop.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.x? &namespace=`imageplus`]]</td>
            <td>[[+crop.x]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.y? &namespace=`imageplus`]]</td>
            <td>[[+crop.y]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.options? &namespace=`imageplus`]]</td>
            <td>[[+options]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.options? &namespace=`imageplus`]]</td>
            <td>[[+crop.options]]</td>
        </tr>
        </tbody>
    </table>

    <h4>Default image output</h4>

    <div>
        <img src="[[+url]]" alt="[[+alt]]"/>
        [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
        [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
    </div>

    <h4>Responsive image output (different crops for different viewports)</h4>

    <p>
        <picture>
            <source media="(min-width: 36em)"
                    srcset="[[+source.src:pthumb=`w=1024`]] 1024w,
                        [[+source.src:pthumb=`w=640`]] 640w,
                        [[+source.src:pthumb=`w=320`]] 320w"
                    sizes="33.3vw"/>
            <source srcset="[[+source.src:pthumb=`[[+crop.options]]&w=640`]] 2x,
                        [[+source.src:pthumb=`[[+crop.options]]&w=320`]] 1x"/>
            <img src="[[+url]]" alt="[[+alt]]"/>
        </picture>
    </p>
    [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
    [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
</div>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div>
    <h3>Image+ Demo Chunk</h3>
    <table>
        <thead>
        <tr>
            <th>Description</th>
            <th>Current Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>[[%imageplus.placeholder.url? &namespace=`imageplus`]]</td>
            <td>[[+url]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.alt? &namespace=`imageplus`]]</td>
            <td>[[+alt]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.width? &namespace=`imageplus`]]</td>
            <td>[[+width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.height? &namespace=`imageplus`]]</td>
            <td>[[+height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.src? &namespace=`imageplus`]]</td>
            <td>[[+source.src]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.width? &namespace=`imageplus`]]</td>
            <td>[[+source.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.source.height? &namespace=`imageplus`]]</td>
            <td>[[+source.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.width? &namespace=`imageplus`]]</td>
            <td>[[+crop.width]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.height? &namespace=`imageplus`]]</td>
            <td>[[+crop.height]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.x? &namespace=`imageplus`]]</td>
            <td>[[+crop.x]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.y? &namespace=`imageplus`]]</td>
            <td>[[+crop.y]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.options? &namespace=`imageplus`]]</td>
            <td>[[+options]]</td>
        </tr>
        <tr>
            <td>[[%imageplus.placeholder.crop.options? &namespace=`imageplus`]]</td>
            <td>[[+crop.options]]</td>
        </tr>
        </tbody>
    </table>

    <h4>Default image output</h4>

    <div>
        <img src="[[+url]]" alt="[[+alt]]"/>
        [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
        [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
    </div>

    <h4>Responsive image output (different crops for different viewports)</h4>

    <p>
        <picture>
            <source media="(min-width: 36em)"
                    srcset="[[+source.src:pthumb=`w=1024`]] 1024w,
                        [[+source.src:pthumb=`w=640`]] 640w,
                        [[+source.src:pthumb=`w=320`]] 320w"
                    sizes="33.3vw"/>
            <source srcset="[[+source.src:pthumb=`[[+crop.options]]&w=640`]] 2x,
                        [[+source.src:pthumb=`[[+crop.options]]&w=320`]] 1x"/>
            <img src="[[+url]]" alt="[[+alt]]"/>
        </picture>
    </p>
    [[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
    [[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
</div>',
    ),
  ),
  '5d9342073f120848c12bc7930c9c6c32' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus.image',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus.image',
      'description' => 'Demo chunk for Image+ snippet output.',
      'editor_type' => 0,
      'category' => 23,
      'cache_type' => 0,
      'snippet' => '<img src="[[+url]]" alt="[[+alt]]"/>
[[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
[[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<img src="[[+url]]" alt="[[+alt]]"/>
[[+caption:notempty=`<p class="caption">[[+caption]]</p>`]]
[[+credits:notempty=`<p class="credits">[[+credits]]</p>`]]
',
    ),
  ),
  'bfe74b88ab13fab4316e30c311cfe055' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus',
    ),
    'object' => 
    array (
      'id' => 27,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus',
      'description' => 'Snippet as alternative to Image+ TV Output Type',
      'editor_type' => 0,
      'category' => 23,
      'cache_type' => 0,
      'snippet' => '/**
 * ImagePlus Snippet as alternative to Image+ TV Output Type
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2020 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage snippet
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2020
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
/** @var ImagePlus $imageplus */
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\', true);
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource)) ? $modx->resource->get(\'id\') : 0, true);
$type = $modx->getOption(\'type\', $scriptProperties, \'\', true);
$options = $modx->getOption(\'options\', $scriptProperties, \'\', true);
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'ImagePlus.image\', true);
$value = $modx->getOption(\'value\', $scriptProperties, \'\', true);
$debug = $modx->getOption(\'debug\', $scriptProperties, $imageplus->getOption(\'debug\'), false);

if ($value) {
    // Value is set by snippet property
    $data = json_decode($value);
    if (!$data) {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unable to decode JSON in snippet property\', \'\', \'Image+\');
            return \'Unable to decode JSON in snippet property\';
        }
    }
    // No TV is used
    $tv = null;
    $tvOutputProperties = array();
} else {
    // Value is retreived from template variable
    /** @var modTemplateVar $tv */
    $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname));
    if ($tv) {
        // Get the raw content of the TV
        $value = $tv->getValue($docid);
        $value = $tv->processBindings($value, $docid);
        $tvOutputProperties = $tv->get(\'output_properties\');
        foreach ($tvOutputProperties as &$tvOutputProperty) {
            switch ($tvOutputProperty) {
                case \'true\' :
                    $tvOutputProperty = true;
                    break;
                case \'false\' :
                    $tvOutputProperty = false;
                    break;
            }
        }
    } else {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, "Template Variable \'{$tvname}\' not found.", \'\', \'Image+\');
            return "Template Variable \'{$tvname}\' not found.";
        }
        $tvOutputProperties = array();
    }
}

$output = \'\';
// Render output
switch ($type) {
    case \'check\':
        $data = json_decode($value);
        $output = ($data && $data->sourceImg->src) ? \'image\' : \'noimage\';
        break;
    case \'tpl\':
        $data = json_decode($value);
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
            \'outputChunk\' => $tpl,
            \'caption\' => ($data && $data->caption) ? $data->caption : \'\',
            \'credits\' => ($data && $data->credits) ? $data->credits : \'\'
        )), $tv) : \'\';
        break;
    case \'thumb\':
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
            \'outputChunk\' => \'\',
        )), $tv) : \'\';
        break;
    default:
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
        )), $tv) : \'\';
        break;
}
return $output;',
      'locked' => 0,
      'properties' => 'a:5:{s:6:"tvname";a:7:{s:4:"name";s:6:"tvname";s:4:"desc";s:26:"imageplus.imageplus.tvname";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:5:"docid";a:7:{s:4:"name";s:5:"docid";s:4:"desc";s:25:"imageplus.imageplus.docid";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"desc";s:24:"imageplus.imageplus.type";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:7:"options";a:7:{s:4:"name";s:7:"options";s:4:"desc";s:27:"imageplus.imageplus.options";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:23:"imageplus.imageplus.tpl";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"ImagePlus.image";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * ImagePlus Snippet as alternative to Image+ TV Output Type
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2020 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage snippet
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2020
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
/** @var ImagePlus $imageplus */
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\', true);
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource)) ? $modx->resource->get(\'id\') : 0, true);
$type = $modx->getOption(\'type\', $scriptProperties, \'\', true);
$options = $modx->getOption(\'options\', $scriptProperties, \'\', true);
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'ImagePlus.image\', true);
$value = $modx->getOption(\'value\', $scriptProperties, \'\', true);
$debug = $modx->getOption(\'debug\', $scriptProperties, $imageplus->getOption(\'debug\'), false);

if ($value) {
    // Value is set by snippet property
    $data = json_decode($value);
    if (!$data) {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, \'Unable to decode JSON in snippet property\', \'\', \'Image+\');
            return \'Unable to decode JSON in snippet property\';
        }
    }
    // No TV is used
    $tv = null;
    $tvOutputProperties = array();
} else {
    // Value is retreived from template variable
    /** @var modTemplateVar $tv */
    $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname));
    if ($tv) {
        // Get the raw content of the TV
        $value = $tv->getValue($docid);
        $value = $tv->processBindings($value, $docid);
        $tvOutputProperties = $tv->get(\'output_properties\');
        foreach ($tvOutputProperties as &$tvOutputProperty) {
            switch ($tvOutputProperty) {
                case \'true\' :
                    $tvOutputProperty = true;
                    break;
                case \'false\' :
                    $tvOutputProperty = false;
                    break;
            }
        }
    } else {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, "Template Variable \'{$tvname}\' not found.", \'\', \'Image+\');
            return "Template Variable \'{$tvname}\' not found.";
        }
        $tvOutputProperties = array();
    }
}

$output = \'\';
// Render output
switch ($type) {
    case \'check\':
        $data = json_decode($value);
        $output = ($data && $data->sourceImg->src) ? \'image\' : \'noimage\';
        break;
    case \'tpl\':
        $data = json_decode($value);
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
            \'outputChunk\' => $tpl,
            \'caption\' => ($data && $data->caption) ? $data->caption : \'\',
            \'credits\' => ($data && $data->credits) ? $data->credits : \'\'
        )), $tv) : \'\';
        break;
    case \'thumb\':
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
            \'outputChunk\' => \'\',
        )), $tv) : \'\';
        break;
    default:
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            \'docid\' => $docid,
            \'phpThumbParams\' => $options,
        )), $tv) : \'\';
        break;
}
return $output;',
    ),
  ),
  '2c59e45f10a5d1f04e507967818a0718' => 
  array (
    'criteria' => 
    array (
      'name' => 'ImagePlus',
    ),
    'object' => 
    array (
      'id' => 20,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'ImagePlus',
      'description' => 'Image+ runtime hooks - registers custom TV input & output types and includes javascripts on document edit pages.',
      'editor_type' => 0,
      'category' => 23,
      'cache_type' => 0,
      'plugincode' => '/**
 * Image+ Runtime Hooks
 *
 * Registers custom TV input & output types and includes javascripts on document
 * edit pages so that the TV can be used from within other extras (i.e. MIGX,
 * Collections)
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2020 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage plugin
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2020
 *
 * @event OnManagerPageBeforeRender
 * @event OnTVInputRenderList
 * @event OnTVOutputRenderList
 * @event OnTVInputPropertiesList
 * @event OnTVOutputRenderPropertiesList
 * @event OnDocFormRender
 *
 * @var modX $modx
 */

$eventName = $modx->event->name;

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
/** @var ImagePlus $imageplus */
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

switch ($eventName) {
    case \'OnManagerPageBeforeRender\':
        $modx->controller->addLexiconTopic(\'imageplus:default\');
        $imageplus->includeScriptAssets();
        break;
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath . \'elements/tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath . \'elements/tv/output/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/input/options/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/output/options/\');
        break;
    case \'OnDocFormRender\':
        $imageplus->includeScriptAssets();
        break;
};',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Image+ Runtime Hooks
 *
 * Registers custom TV input & output types and includes javascripts on document
 * edit pages so that the TV can be used from within other extras (i.e. MIGX,
 * Collections)
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2020 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage plugin
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2020
 *
 * @event OnManagerPageBeforeRender
 * @event OnTVInputRenderList
 * @event OnTVOutputRenderList
 * @event OnTVInputPropertiesList
 * @event OnTVOutputRenderPropertiesList
 * @event OnDocFormRender
 *
 * @var modX $modx
 */

$eventName = $modx->event->name;

$corePath = $modx->getOption(\'imageplus.core_path\', null, $modx->getOption(\'core_path\') . \'components/imageplus/\');
/** @var ImagePlus $imageplus */
$imageplus = $modx->getService(\'imageplus\', \'ImagePlus\', $corePath . \'model/imageplus/\', array(
    \'core_path\' => $corePath
));

switch ($eventName) {
    case \'OnManagerPageBeforeRender\':
        $modx->controller->addLexiconTopic(\'imageplus:default\');
        $imageplus->includeScriptAssets();
        break;
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath . \'elements/tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath . \'elements/tv/output/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/input/options/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/output/options/\');
        break;
    case \'OnDocFormRender\':
        $imageplus->includeScriptAssets();
        break;
};',
    ),
  ),
  '5fe08c580d1f066f3203ad6f568be106' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 20,
      'event' => 'OnManagerPageBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 20,
      'event' => 'OnManagerPageBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'bc6038f8c6f64a0b893bb0a36106df24' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 20,
      'event' => 'OnTVInputPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 20,
      'event' => 'OnTVInputPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'fcbea986c083b2130142268851241290' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 20,
      'event' => 'OnTVInputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 20,
      'event' => 'OnTVInputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'add4c573ffb820be139a7af2c853552f' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 20,
      'event' => 'OnTVOutputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 20,
      'event' => 'OnTVOutputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '341b46d25e7478c120a13b66057b4909' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 20,
      'event' => 'OnTVOutputRenderPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 20,
      'event' => 'OnTVOutputRenderPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '86d32422793912673b975b2f40dfe03f' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 20,
      'event' => 'OnDocFormRender',
    ),
    'object' => 
    array (
      'pluginid' => 20,
      'event' => 'OnDocFormRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);