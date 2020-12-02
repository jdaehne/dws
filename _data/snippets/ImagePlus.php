id: 27
name: ImagePlus
description: 'Snippet as alternative to Image+ TV Output Type'
category: ImagePlus
properties: 'a:5:{s:6:"tvname";a:7:{s:4:"name";s:6:"tvname";s:4:"desc";s:26:"imageplus.imageplus.tvname";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:5:"docid";a:7:{s:4:"name";s:5:"docid";s:4:"desc";s:25:"imageplus.imageplus.docid";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"desc";s:24:"imageplus.imageplus.type";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:7:"options";a:7:{s:4:"name";s:7:"options";s:4:"desc";s:27:"imageplus.imageplus.options";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:23:"imageplus.imageplus.tpl";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"ImagePlus.image";s:7:"lexicon";s:20:"imageplus:properties";s:4:"area";s:0:"";}}'

-----

/**
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

$corePath = $modx->getOption('imageplus.core_path', null, $modx->getOption('core_path') . 'components/imageplus/');
/** @var ImagePlus $imageplus */
$imageplus = $modx->getService('imageplus', 'ImagePlus', $corePath . 'model/imageplus/', array(
    'core_path' => $corePath
));

$tvname = $modx->getOption('tvname', $scriptProperties, '', true);
$docid = $modx->getOption('docid', $scriptProperties, (isset($modx->resource)) ? $modx->resource->get('id') : 0, true);
$type = $modx->getOption('type', $scriptProperties, '', true);
$options = $modx->getOption('options', $scriptProperties, '', true);
$tpl = $modx->getOption('tpl', $scriptProperties, 'ImagePlus.image', true);
$value = $modx->getOption('value', $scriptProperties, '', true);
$debug = $modx->getOption('debug', $scriptProperties, $imageplus->getOption('debug'), false);

if ($value) {
    // Value is set by snippet property
    $data = json_decode($value);
    if (!$data) {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, 'Unable to decode JSON in snippet property', '', 'Image+');
            return 'Unable to decode JSON in snippet property';
        }
    }
    // No TV is used
    $tv = null;
    $tvOutputProperties = array();
} else {
    // Value is retreived from template variable
    /** @var modTemplateVar $tv */
    $tv = $modx->getObject('modTemplateVar', array('name' => $tvname));
    if ($tv) {
        // Get the raw content of the TV
        $value = $tv->getValue($docid);
        $value = $tv->processBindings($value, $docid);
        $tvOutputProperties = $tv->get('output_properties');
        foreach ($tvOutputProperties as &$tvOutputProperty) {
            switch ($tvOutputProperty) {
                case 'true' :
                    $tvOutputProperty = true;
                    break;
                case 'false' :
                    $tvOutputProperty = false;
                    break;
            }
        }
    } else {
        if ($debug) {
            $modx->log(xPDO::LOG_LEVEL_ERROR, "Template Variable '{$tvname}' not found.", '', 'Image+');
            return "Template Variable '{$tvname}' not found.";
        }
        $tvOutputProperties = array();
    }
}

$output = '';
// Render output
switch ($type) {
    case 'check':
        $data = json_decode($value);
        $output = ($data && $data->sourceImg->src) ? 'image' : 'noimage';
        break;
    case 'tpl':
        $data = json_decode($value);
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            'docid' => $docid,
            'phpThumbParams' => $options,
            'outputChunk' => $tpl,
            'caption' => ($data && $data->caption) ? $data->caption : '',
            'credits' => ($data && $data->credits) ? $data->credits : ''
        )), $tv) : '';
        break;
    case 'thumb':
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            'docid' => $docid,
            'phpThumbParams' => $options,
            'outputChunk' => '',
        )), $tv) : '';
        break;
    default:
        $output = ($value) ? $imageplus->getImageURL($value, array_merge($tvOutputProperties, $scriptProperties, array(
            'docid' => $docid,
            'phpThumbParams' => $options,
        )), $tv) : '';
        break;
}
return $output;