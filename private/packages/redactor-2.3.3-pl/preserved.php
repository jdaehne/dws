<?php return array (
  '4e0940599e10249a48ebaac286f33c6e' => 
  array (
    'criteria' => 
    array (
      'name' => 'redactor',
    ),
    'object' => 
    array (
      'name' => 'redactor',
      'path' => '{core_path}components/redactor/',
      'assets_path' => '',
    ),
  ),
  '8852c48cd7a04dd6279174d7460a2eb8' => 
  array (
    'criteria' => 
    array (
      'name' => 'Redactor',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Redactor',
      'description' => 'Redactor WYSIWYG editor plugin for MODX Revolution',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * Redactor WYSIWYG Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnRichTextBrowserInit, OnDocFormPrerender
 *
 * @author JP DeVries <mail@devries.jp>
 *
 * @package redactor
 */

$corePath = $modx->getOption(\'redactor.core_path\', null, $modx->getOption(\'core_path\').\'components/redactor/\');

switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tvs/input/\');
        break;

    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tvs/inputoptions/\'); 
        break;

    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tvs/properties/\');
        break;

    case \'OnManagerPageBeforeRender\':
        break;

    case \'OnRichTextEditorRegister\':
        $modx->event->output(\'Redactor\');
        break;

    case \'OnFileManagerFileRename\':
        /**
         * @var string $path
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }
        $redactor->renames[] = $path;

        break;

    case \'OnRichTextEditorInit\':
        /**
         * @var string $editor
         * @var array $elements
         *
         * Only load up the editor if the editor is Redactor, and use_editor is enabled.
         */
        $rte = isset($editor) ? $editor : $modx->getOption(\'which_editor\', null, \'\');
        if ($rte !== \'Redactor\' || !$modx->getOption(\'use_editor\', null, true)) {
            return;
        }

        /**
         * Attempt to load the Redactor service class. Log error and halt processing if it fails.
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }

        if (isset($resource) && $resource instanceof modResource) {
            $redactor->setResource($resource);
        }
        elseif ($modx->resource) {
            $redactor->setResource($modx->resource);
        }
        elseif ($modx->controller && isset($modx->controller->resource) && $modx->controller->resource instanceof modResource) {
            $redactor->setResource($modx->controller->resource);
        }

        $customCss = $redactor->getOption(\'redactor.css\');

        if ($modx->controller && !($modx->controller instanceof modManagerControllerDeprecated)) {
            $modx->controller->addLexiconTopic(\'redactor:default\');
            $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'redactor-2.3.1.min.css\');
            if ($redactor->degradeUI) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if ($redactor->rebeccaDay) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if ($customCss) $modx->controller->addCss($customCss);
        }
        else {
            $modx->lexicon->load(\'redactor:default\');
            $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'redactor-2.3.1.min.css\');
            if($redactor->degradeUI) $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if($redactor->rebeccaDay) $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if($customCss) $modx->regClientCSS($customCss);
        }

        $html = $redactor->getHtml();
        $modx->event->output($html);
        break;
}

return;',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Redactor WYSIWYG Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnRichTextBrowserInit, OnDocFormPrerender
 *
 * @author JP DeVries <mail@devries.jp>
 *
 * @package redactor
 */

$corePath = $modx->getOption(\'redactor.core_path\', null, $modx->getOption(\'core_path\').\'components/redactor/\');

switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tvs/input/\');
        break;

    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tvs/inputoptions/\'); 
        break;

    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tvs/properties/\');
        break;

    case \'OnManagerPageBeforeRender\':
        break;

    case \'OnRichTextEditorRegister\':
        $modx->event->output(\'Redactor\');
        break;

    case \'OnFileManagerFileRename\':
        /**
         * @var string $path
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }
        $redactor->renames[] = $path;

        break;

    case \'OnRichTextEditorInit\':
        /**
         * @var string $editor
         * @var array $elements
         *
         * Only load up the editor if the editor is Redactor, and use_editor is enabled.
         */
        $rte = isset($editor) ? $editor : $modx->getOption(\'which_editor\', null, \'\');
        if ($rte !== \'Redactor\' || !$modx->getOption(\'use_editor\', null, true)) {
            return;
        }

        /**
         * Attempt to load the Redactor service class. Log error and halt processing if it fails.
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }

        if (isset($resource) && $resource instanceof modResource) {
            $redactor->setResource($resource);
        }
        elseif ($modx->resource) {
            $redactor->setResource($modx->resource);
        }
        elseif ($modx->controller && isset($modx->controller->resource) && $modx->controller->resource instanceof modResource) {
            $redactor->setResource($modx->controller->resource);
        }

        $customCss = $redactor->getOption(\'redactor.css\');

        if ($modx->controller && !($modx->controller instanceof modManagerControllerDeprecated)) {
            $modx->controller->addLexiconTopic(\'redactor:default\');
            $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'redactor-2.3.1.min.css\');
            if ($redactor->degradeUI) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if ($redactor->rebeccaDay) $modx->controller->addCss($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if ($customCss) $modx->controller->addCss($customCss);
        }
        else {
            $modx->lexicon->load(\'redactor:default\');
            $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'redactor-2.3.1.min.css\');
            if($redactor->degradeUI) $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'buttons-legacy.min.css\');
            if($redactor->rebeccaDay) $modx->regClientCSS($redactor->config[\'assetsUrl\'].\'rebecca.min.css\');
            if($customCss) $modx->regClientCSS($customCss);
        }

        $html = $redactor->getHtml();
        $modx->event->output($html);
        break;
}

return;',
    ),
  ),
  '399f911a063cd83d368577e50a89d4c9' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextBrowserInit',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextBrowserInit',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '0148df604e0a042ec3ef4495b76fe4d0' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnManagerPageBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnManagerPageBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '60084724add5e545c8c9015ce96ce1b9' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnDocFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnDocFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '36deeb525293ed05777a39f76ab29317' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorRegister',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorRegister',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'a0a81649a7b2d78559024363f5b4ffb9' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '7d7784cfbc69d0817213bc71045622c2' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVOutputRenderList',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVOutputRenderList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '70e5c59c37fd9cd8107df4a5cda48ee6' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVInputPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '7bf1a7614fc9d85380ae6679990e08f0' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVOutputRenderPropertiesList',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnTVOutputRenderPropertiesList',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '6f4db75ef23f24d82322f835eebbcdcf' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorInit',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnRichTextEditorInit',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '61cd6c744fe518cd33cc3539ae205cc8' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'OnFileManagerFileRename',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'OnFileManagerFileRename',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '2b141711845a58980104cf262e54a0f5' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.lang',
    ),
    'object' => 
    array (
      'key' => 'redactor.lang',
      'value' => 'de',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Internationalisation',
      'editedon' => '2016-04-22 18:20:42',
    ),
  ),
  '42bbf15814277e7e6328960805b99bdd' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.direction',
    ),
    'object' => 
    array (
      'key' => 'redactor.direction',
      'value' => 'ltr',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Internationalisation',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '5a8275a98e822ca53a91ac6678e514c1' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.buttons',
    ),
    'object' => 
    array (
      'key' => 'redactor.buttons',
      'value' => 'html,|,formatting,|,bold,italic,|,unorderedlist,orderedlist,outdent,indent,|,image,file,table,link,|,alignment',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '2016-05-26 13:54:18',
    ),
  ),
  '4832af1cf4fcc043855db3d82b29cff3' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.activeButtons',
    ),
    'object' => 
    array (
      'key' => 'redactor.activeButtons',
      'value' => 'deleted,italic,bold,underline,unorderedlist,orderedlist,alignleft,aligncenter,alignright,justify',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'eecf7b9103d0659a02c05b3fab843404' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.activeButtonsStates',
    ),
    'object' => 
    array (
      'key' => 'redactor.activeButtonsStates',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'af63a07858772b18a58cd11ee804e217' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.formattingTags',
    ),
    'object' => 
    array (
      'key' => 'redactor.formattingTags',
      'value' => 'p,h1,h2,h3,h4',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '2016-05-26 13:50:34',
    ),
  ),
  '2d4a98e10d37ea7fdff6aa1da7363111' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.buttonSource',
    ),
    'object' => 
    array (
      'key' => 'redactor.buttonSource',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c5f42078c46bc5477cbf5353bd676da7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.buttonFullScreen',
    ),
    'object' => 
    array (
      'key' => 'redactor.buttonFullScreen',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '2fd34f73c864164b79b096875b3301d4' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.css',
    ),
    'object' => 
    array (
      'key' => 'redactor.css',
      'value' => '/assets/templates/web/css/redactor.css',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '2018-01-09 16:45:29',
    ),
  ),
  'fc89f19cb10d8da5d0395be638a9d75c' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.shortcuts',
    ),
    'object' => 
    array (
      'key' => 'redactor.shortcuts',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'df073d8727caee0307471ec52161da0b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.cleanup',
    ),
    'object' => 
    array (
      'key' => 'redactor.cleanup',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '354734edc6bc9b90de585ec6029460fb' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.convertLinks',
    ),
    'object' => 
    array (
      'key' => 'redactor.convertLinks',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '376f6098d136f17bef510ccc76590166' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.tabindex',
    ),
    'object' => 
    array (
      'key' => 'redactor.tabindex',
      'value' => '0',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'dfdc11104777a59cf625522762f9efe3' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.minHeight',
    ),
    'object' => 
    array (
      'key' => 'redactor.minHeight',
      'value' => '200',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0f79689a1ab96cf0c8943ea13370bac9' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.colors',
    ),
    'object' => 
    array (
      'key' => 'redactor.colors',
      'value' => '#ffffff,#000000,#eeece1,#1f497d,#4f81bd,#c0504d,#9bbb59,#8064a2,#4bacc6,#f79646,#ffff00,#f2f2f2,#7f7f7f,#ddd9c3,#c6d9f0,#dbe5f1,#f2dcdb,#ebf1dd,#e5e0ec,#dbeef3,#fdeada,#fff2ca,#d8d8d8,#595959,#c4bd97,#8db3e2,#b8cce4,#e5b9b7,#d7e3bc,#ccc1d9,#b7dde8,#fbd5b5,#ffe694,#bfbfbf,#3f3f3f,#938953,#548dd4,#95b3d7,#d99694,#c3d69b,#b2a2c7,#b7dde8,#fac08f,#f2c314,#a5a5a5,#262626,#494429,#17365d,#366092,#953734,#76923c,#5f497a,#92cddc,#e36c09,#c09100,#7f7f7f,#0c0c0c,#1d1b10,#0f243e,#244061,#632423,#4f6128,#3f3151,#31859b,#974806,#7f6000',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '843efcac598c5e112685b496bb2e7fc8' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.wym',
    ),
    'object' => 
    array (
      'key' => 'redactor.wym',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3ff0e3424087c6fe93448b3482ae11f3' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkProtocol',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkProtocol',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '7b00a1e1f78db7da407a7010aabcf815' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.placeholder',
    ),
    'object' => 
    array (
      'key' => 'redactor.placeholder',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '50b25cd66ce841f9542552e0f731ef42' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linebreaks',
    ),
    'object' => 
    array (
      'key' => 'redactor.linebreaks',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ca3fce40a6913ed262f87ea4651b339d' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.allowedTags',
    ),
    'object' => 
    array (
      'key' => 'redactor.allowedTags',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f82d09e6ce2a64233c6b1110d140c886' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.deniedTags',
    ),
    'object' => 
    array (
      'key' => 'redactor.deniedTags',
      'value' => 'html,head,link,body,meta,script,style,applet',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f7a1a0312bef7cb085fdf16a81af5ded' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkEmail',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkEmail',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '692e0de8355ea49b88e48c246a057848' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkAnchor',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkAnchor',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '7285b804f4bed0681c4f231560dfb094' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.pastePlainText',
    ),
    'object' => 
    array (
      'key' => 'redactor.pastePlainText',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4cc74b2607fd5dc211094ecbe37875c8' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.paragraphize',
    ),
    'object' => 
    array (
      'key' => 'redactor.paragraphize',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e75125543f060831bc3b2ab1af1d5e7f' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.removeComments',
    ),
    'object' => 
    array (
      'key' => 'redactor.removeComments',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '436d0bb6828f3f2b42718ac5ae176fb3' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.visual',
    ),
    'object' => 
    array (
      'key' => 'redactor.visual',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '5577a7268751e5787b2ae53c66fea5ec' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.marginFloatLeft',
    ),
    'object' => 
    array (
      'key' => 'redactor.marginFloatLeft',
      'value' => '0 10px 10px 0',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd91f3376917eaab6d7fdad2eb79dead0' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.marginFloatRight',
    ),
    'object' => 
    array (
      'key' => 'redactor.marginFloatRight',
      'value' => '0 0 10px 10px',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'dd1ed73044660c4281942ad1ad08a9b6' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.mediasource',
    ),
    'object' => 
    array (
      'key' => 'redactor.mediasource',
      'value' => '2',
      'xtype' => 'modx-combo-source',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:23:19',
    ),
  ),
  'bf613acf5a20bd6dd90752e2b66ce726' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.file_mediasource',
    ),
    'object' => 
    array (
      'key' => 'redactor.file_mediasource',
      'value' => '2',
      'xtype' => 'modx-combo-source',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:22:46',
    ),
  ),
  'd0f427a9acbcdc0202f133ca6062c3a4' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.image_upload_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.image_upload_path',
      'value' => 'bilder/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:23:06',
    ),
  ),
  'ccf908878443cceddc1bbfe013bf8d9a' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.image_browse_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.image_browse_path',
      'value' => 'bilder/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:23:02',
    ),
  ),
  '832a53fad43760ae095585040b0c4047' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.file_upload_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.file_upload_path',
      'value' => 'dateien/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:22:56',
    ),
  ),
  'ddd9bd88b3d72cec70c5de800136f6c9' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.file_browse_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.file_browse_path',
      'value' => 'dateien/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:22:52',
    ),
  ),
  '93b7c82d714b4de24c2f83ce43965ee3' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.browse_files',
    ),
    'object' => 
    array (
      'key' => 'redactor.browse_files',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '260c33b6493df17d1002cca615c2e5b7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.date_images',
    ),
    'object' => 
    array (
      'key' => 'redactor.date_images',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c3442c311957dedeeebd2e1441a45025' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.date_files',
    ),
    'object' => 
    array (
      'key' => 'redactor.date_files',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '803bddde373ff1e0acbcf7988ebf9d44' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.typeahead.include_introtext',
    ),
    'object' => 
    array (
      'key' => 'redactor.typeahead.include_introtext',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Resource Typeahead',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b55d4805f734b3c5e692da489d135385' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.prefetch_ttl',
    ),
    'object' => 
    array (
      'key' => 'redactor.prefetch_ttl',
      'value' => '3600000',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Resource Typeahead',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '485937196ba55413e48e62cb0416b744' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkResource',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkResource',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fb34e4a118c946cb0872179b25880fac' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.cleanFileNames',
    ),
    'object' => 
    array (
      'key' => 'redactor.cleanFileNames',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ae90ec36c7b358f0c477d2ac4e0125c4' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.dynamicThumbs',
    ),
    'object' => 
    array (
      'key' => 'redactor.dynamicThumbs',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e9f04ee57de57f28498e6682cec94593' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.clipsJson',
    ),
    'object' => 
    array (
      'key' => 'redactor.clipsJson',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3c9a2c6c2f5a9aba58ed83a28aab25b3' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.additionalPlugins',
    ),
    'object' => 
    array (
      'key' => 'redactor.additionalPlugins',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '302ebefc88b65e5fb473a92a96e149da' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.dragUpload',
    ),
    'object' => 
    array (
      'key' => 'redactor.dragUpload',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f02fab9823195dc7d7b8eae686b05dbc' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.convertImageLinks',
    ),
    'object' => 
    array (
      'key' => 'redactor.convertImageLinks',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd237ab1954b5e3f9235061725afb03c2' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.convertVideoLinks',
    ),
    'object' => 
    array (
      'key' => 'redactor.convertVideoLinks',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '60b3031750c44b109d661e5a70c532ee' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.tabAsSpaces',
    ),
    'object' => 
    array (
      'key' => 'redactor.tabAsSpaces',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e9627c2a6abea574e797b0641fec6991' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.removeEmptyTags',
    ),
    'object' => 
    array (
      'key' => 'redactor.removeEmptyTags',
      'value' => 'p',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '9546e3301a5d28f620c20634fabc24ba' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.sanitizePattern',
    ),
    'object' => 
    array (
      'key' => 'redactor.sanitizePattern',
      'value' => '/([[:alnum:]_\\.-]*)/',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4007da7b0066b1d96a4a6266b55e9636' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.sanitizeReplace',
    ),
    'object' => 
    array (
      'key' => 'redactor.sanitizeReplace',
      'value' => '_',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f33ff95b459c15bb07a79623749909af' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkSize',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkSize',
      'value' => '50',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '41393af95321308bc647836891bf6335' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.advAttrib',
    ),
    'object' => 
    array (
      'key' => 'redactor.advAttrib',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b29e97ca382a2f9e0545906e08e43801' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkNofollow',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkNofollow',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '730678f28c97b484b41bec2f6876e932' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.typewriter',
    ),
    'object' => 
    array (
      'key' => 'redactor.typewriter',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b71b6a7b32ab4edf80af63501893b070' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.buttonsHideOnMobile',
    ),
    'object' => 
    array (
      'key' => 'redactor.buttonsHideOnMobile',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c1bb5fe55e32970a4fbf0043717b0746' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.toolbarOverflow',
    ),
    'object' => 
    array (
      'key' => 'redactor.toolbarOverflow',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd5e94b03b6ce7fe9e6c3a00726862038' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.cleanSpaces',
    ),
    'object' => 
    array (
      'key' => 'redactor.cleanSpaces',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c473ad04068f632a711c6321f829eb92' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.predefinedLinks',
    ),
    'object' => 
    array (
      'key' => 'redactor.predefinedLinks',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e0a561e20d00e313f322629d3aa89515' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.shortcutsAdd',
    ),
    'object' => 
    array (
      'key' => 'redactor.shortcutsAdd',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '001bfd82844f4145dd352be1b67940ec' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.commemorateRebecca',
    ),
    'object' => 
    array (
      'key' => 'redactor.commemorateRebecca',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0136b7cc0a03c8d5aebb82369a51f8e6' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.toolbarFixed',
    ),
    'object' => 
    array (
      'key' => 'redactor.toolbarFixed',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '122362177f02e454a320a5c98666df61' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.focus',
    ),
    'object' => 
    array (
      'key' => 'redactor.focus',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '0fe8e10a9a5ef9fbc59f1a13526b7a5e' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.focusEnd',
    ),
    'object' => 
    array (
      'key' => 'redactor.focusEnd',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e2ee564023f672c23aff5d86fa7a2210' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.scrollTarget',
    ),
    'object' => 
    array (
      'key' => 'redactor.scrollTarget',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '18d730f6349376657070763e334a9320' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.enterKey',
    ),
    'object' => 
    array (
      'key' => 'redactor.enterKey',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ae324bd7a2ce8fdb19c455337b966f36' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.cleanStyleOnEnter',
    ),
    'object' => 
    array (
      'key' => 'redactor.cleanStyleOnEnter',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '66f76e8efa931407d56fb4159b7f555e' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.linkTooltip',
    ),
    'object' => 
    array (
      'key' => 'redactor.linkTooltip',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'cbda02148c3151fad88e5b2078bb89c2' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.imageEditable',
    ),
    'object' => 
    array (
      'key' => 'redactor.imageEditable',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4fb38d0468872c6f18ef8071e191defe' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.imageResizable',
    ),
    'object' => 
    array (
      'key' => 'redactor.imageResizable',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8e5672234aa9005ae07f9a157546161f' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.imageLink',
    ),
    'object' => 
    array (
      'key' => 'redactor.imageLink',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '2fa96f243b2c1eed727276d60b2e14c2' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.imagePosition',
    ),
    'object' => 
    array (
      'key' => 'redactor.imagePosition',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '41051e2a7af8b6a621fb2c0c78680e71' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.buttonsHide',
    ),
    'object' => 
    array (
      'key' => 'redactor.buttonsHide',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Toolbar',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ad35cf3743ebb01b43c69128c2f5a3ce' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.formattingAdd',
    ),
    'object' => 
    array (
      'key' => 'redactor.formattingAdd',
      'value' => '[{
	"tag": "span",
	"title": "Introtext",
	"class": "introtext",
	"style": "font-size: 1.3rem;"
}]',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '2018-01-09 16:41:51',
    ),
  ),
  '8061ad819e67435f9e1ec562be89087d' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.tabifier',
    ),
    'object' => 
    array (
      'key' => 'redactor.tabifier',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '92277ac1dd0578576830daa0b8ed584f' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.replaceTags',
    ),
    'object' => 
    array (
      'key' => 'redactor.replaceTags',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c57e927e01537d220d92438e09eec9d7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.replaceStyles',
    ),
    'object' => 
    array (
      'key' => 'redactor.replaceStyles',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fdd22d5cf5a265d18affc393219a874f' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.removeDataAttr',
    ),
    'object' => 
    array (
      'key' => 'redactor.removeDataAttr',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '73b89f22ee84ad1870a59922ee05d900' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.removeAttr',
    ),
    'object' => 
    array (
      'key' => 'redactor.removeAttr',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '50e837f4e3f0819f50332dc4da66d9eb' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.allowedAttr',
    ),
    'object' => 
    array (
      'key' => 'redactor.allowedAttr',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'bbcf9adecea4c8ce7588389e734d2b75' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.dragImageUpload',
    ),
    'object' => 
    array (
      'key' => 'redactor.dragImageUpload',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e874820fe1af15039cb1f2064921fa24' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.dragFileUpload',
    ),
    'object' => 
    array (
      'key' => 'redactor.dragFileUpload',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '55e5bed3784776f5ebd39d7988a85a62' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.replaceDivs',
    ),
    'object' => 
    array (
      'key' => 'redactor.replaceDivs',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a9609e904f6addd3a53908f2dbf2f47d' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.preSpaces',
    ),
    'object' => 
    array (
      'key' => 'redactor.preSpaces',
      'value' => '4',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Markup',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '6bb950a84693288b9a95243bd656efdc' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.parse_parent_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.parse_parent_path',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'cd66767e95e84ca7e1e82459df1cc7b7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.increment_file_names',
    ),
    'object' => 
    array (
      'key' => 'redactor.increment_file_names',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fdfbeede601ce864165741bf8eff5218' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.parse_parent_path_height',
    ),
    'object' => 
    array (
      'key' => 'redactor.parse_parent_path_height',
      'value' => '10',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '9ca1549fe6a2071fb946823b71f082fa' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.baseurls_mode',
    ),
    'object' => 
    array (
      'key' => 'redactor.baseurls_mode',
      'value' => 'absolute',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '2016-04-22 18:21:56',
    ),
  ),
  'bb04b0a950f180792fe662c3eb2de880' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.showDimensionsOnResize',
    ),
    'object' => 
    array (
      'key' => 'redactor.showDimensionsOnResize',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'c66f77e1958b4beced3d23e0f6f3cfd7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_counter',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_counter',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '12b0d70ba1e8302c9aaf692938d01c19' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_fontcolor',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_fontcolor',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'aff490c9534753690d49304b55402263' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_fontfamily',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_fontfamily',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '2016-04-22 18:23:50',
    ),
  ),
  '4ee6a43565937142e8a0238f02440d05' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_fontsize',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_fontsize',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '2016-04-22 18:24:18',
    ),
  ),
  '1954d7fd3e63dd30f39d641e274ef6cd' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_limiter',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_limiter',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '7868ed57312a5882bbce99c4e4071bab' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_table',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_table',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '1d79e195d5ed41ed4af642b124e01b7c' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_textdirection',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_textdirection',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '2016-05-26 13:55:18',
    ),
  ),
  '6a4eceac0aa144fad6ca02a2112832cc' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_video',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_video',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '2016-04-22 18:25:06',
    ),
  ),
  '7b4bddda98783624bf58dfa5ada5e846' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_replacer',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_replacer',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '22cedfcb9507b62ea5cbdca3e03832c0' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_syntax',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_syntax',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '29413f895ba8dad2447f4d0c2295c175' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_speek',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_speek',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a6b6243fcf02bab73e02f068b2687796' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_contrast',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_contrast',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '58bc04a2e0c860fcf23b42570be4f215' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_eureka',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_eureka',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '042907402715066a55fa8e6c920ab4d6' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_eureka_shivie9',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_eureka_shivie9',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '37e433171014d27fa287fe52f9780a47' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.eurekaUpload',
    ),
    'object' => 
    array (
      'key' => 'redactor.eurekaUpload',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '3f0f34e9b2b419f26aba4cc3c92116a7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.initial_directory_depth',
    ),
    'object' => 
    array (
      'key' => 'redactor.initial_directory_depth',
      'value' => '3',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Media',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'ca049851c865f55e24898308994de5dd' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_zoom',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_zoom',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8bf767f41db1206454808780531b3b60' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_download',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_download',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f3ea8c6fac0167ad17f65238d7753270' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_imagepx',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_imagepx',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'aee9efbd33b0407a8de65d6780a1d19b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_imageurl',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_imageurl',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '1991728aa307a614d0808a8c484f0957' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_breadcrumb',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_breadcrumb',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '370c6dfa6271a04594b5040ab540fbff' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_norphan',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_norphan',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8915c9fd228387b6384b9fc0ba116e8f' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_baseurls',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_baseurls',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '56eb9dda42dd05f44644cf73629c8e11' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.textexpander',
    ),
    'object' => 
    array (
      'key' => 'redactor.textexpander',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f06744607e210d6baaaf5a3effed2f91' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.speechPitch',
    ),
    'object' => 
    array (
      'key' => 'redactor.speechPitch',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '85b3bc7b5b579b58e4cfab81d35990b0' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.speechRate',
    ),
    'object' => 
    array (
      'key' => 'redactor.speechRate',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '7a76e07deda60d9a4e565d644d0ec608' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.speechVolume',
    ),
    'object' => 
    array (
      'key' => 'redactor.speechVolume',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '17b5aca96c2608c461c15fa8f3ee9791' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.speechVoice',
    ),
    'object' => 
    array (
      'key' => 'redactor.speechVoice',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '4f8632702c0c539d80452b9e08636882' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.counterWPM',
    ),
    'object' => 
    array (
      'key' => 'redactor.counterWPM',
      'value' => '275',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '430acd849a120a154b49fb77f2d7b45b' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.codemirror',
    ),
    'object' => 
    array (
      'key' => 'redactor.codemirror',
      'value' => '1',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '413d66cba6afaa62322f07abfb8b7ec7' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.plugin_uploadcare',
    ),
    'object' => 
    array (
      'key' => 'redactor.plugin_uploadcare',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Plugin',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'fbb51fb5ed86b7b77af3b0161dc17ce8' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.uploadcare_pub_key',
    ),
    'object' => 
    array (
      'key' => 'redactor.uploadcare_pub_key',
      'value' => 'demopublickey',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Uploadcare',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'd55a35c7e83a4ef3c2e03b5a021ea80d' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.uploadcare_locale',
    ),
    'object' => 
    array (
      'key' => 'redactor.uploadcare_locale',
      'value' => 'en',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Uploadcare',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a7a7fdad48887d7dcb5d279db4c6f2e0' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.uploadcare_crop',
    ),
    'object' => 
    array (
      'key' => 'redactor.uploadcare_crop',
      'value' => 'free',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Uploadcare',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '12b57426205754faa80dd96e97bd4ebb' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.uploadcare_tabs',
    ),
    'object' => 
    array (
      'key' => 'redactor.uploadcare_tabs',
      'value' => 'all',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'Uploadcare',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8882c1ce5ee789faedd0c9cc08fa2145' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.loadIntrotext',
    ),
    'object' => 
    array (
      'key' => 'redactor.loadIntrotext',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f4ca5b94c5217a38d754fd000d9fb3c2' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.limiter',
    ),
    'object' => 
    array (
      'key' => 'redactor.limiter',
      'value' => '150',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'Editor',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
);