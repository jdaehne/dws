<?php return array (
  'c86468b7dd78c08f8901c44bab3d1363' => 
  array (
    'criteria' => 
    array (
      'name' => 'redactor',
    ),
    'object' => 
    array (
      'name' => 'redactor',
      'path' => '{core_path}components/redactor/',
      'assets_path' => '{assets_path}components/redactor/',
    ),
  ),
  'b895995c0f6e2188a94087ae1399d2e8' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.configuration_set',
    ),
    'object' => 
    array (
      'key' => 'redactor.configuration_set',
      'value' => '4',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'configuration',
      'editedon' => '2020-02-21 13:07:29',
    ),
  ),
  'fcd2c2f40ba180d9941ed93dd2667017' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.introtext',
    ),
    'object' => 
    array (
      'key' => 'redactor.introtext',
      'value' => '',
      'xtype' => 'modx-combo-boolean',
      'namespace' => 'redactor',
      'area' => 'configuration',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '83cdbe9e31591ce3d01bd63c65dff835' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.introtext.configuration_set',
    ),
    'object' => 
    array (
      'key' => 'redactor.introtext.configuration_set',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'redactor',
      'area' => 'configuration',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '726ab32c33895cf749609511e43dacb6' => 
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
  '3b719a2fa1abcb09bfc96035125a2fa6' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.js',
    ),
    'object' => 
    array (
      'key' => 'redactor.js',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'configuration',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f3da703d2d26721602326e9982b9a82a' => 
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
  'ffcb39c822f885879b9925c1a2928351' => 
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
  '9899eff7565ad02a923f1eb2f88ed7c1' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.translit',
    ),
    'object' => 
    array (
      'key' => 'redactor.translit',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'a4cc67ae9c8213625f5e7161e2bb9ddd' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.translit_class',
    ),
    'object' => 
    array (
      'key' => 'redactor.translit_class',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '1ddafa45a5914e252736532082cfb8ac' => 
  array (
    'criteria' => 
    array (
      'key' => 'redactor.translit_class_path',
    ),
    'object' => 
    array (
      'key' => 'redactor.translit_class_path',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'redactor',
      'area' => 'advanced',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '364209d276b2a6f9c24c40163767154d' => 
  array (
    'criteria' => 
    array (
      'text' => 'redactor.configuration',
    ),
    'object' => 
    array (
      'text' => 'redactor.configuration',
      'parent' => 'components',
      'action' => 'configuration',
      'description' => 'redactor.configuration.menu_desc',
      'icon' => '',
      'menuindex' => 5,
      'params' => '',
      'handler' => '',
      'permissions' => 'redactor_configurator',
      'namespace' => 'redactor',
    ),
  ),
  '7b84dca847ff3b279b9fcbb00ea1f110' => 
  array (
    'criteria' => 
    array (
      'name' => 'RedactorTemplate',
    ),
    'object' => 
    array (
      'id' => 10,
      'template_group' => 1,
      'name' => 'RedactorTemplate',
      'description' => 'Policy Template for access to the Redactor configurator.',
      'lexicon' => 'redactor:permissions',
    ),
  ),
  '6a36166a0622b6df4bbee9a48c30de55' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_configurator',
    ),
    'object' => 
    array (
      'id' => 260,
      'template' => 10,
      'name' => 'redactor_configurator',
      'description' => 'redactor.permission.configurator',
      'value' => 1,
    ),
  ),
  'ba5d236e9558b2381b0075282da6c998' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_view',
    ),
    'object' => 
    array (
      'id' => 261,
      'template' => 10,
      'name' => 'redactor_sets_view',
      'description' => 'redactor.permission.sets_view',
      'value' => 1,
    ),
  ),
  '64f0406f1123032303a274bfc833b715' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_create',
    ),
    'object' => 
    array (
      'id' => 262,
      'template' => 10,
      'name' => 'redactor_sets_create',
      'description' => 'redactor.permission.sets_create',
      'value' => 1,
    ),
  ),
  '8637fa8310a3cf72886d43693afbaac8' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_save',
    ),
    'object' => 
    array (
      'id' => 263,
      'template' => 10,
      'name' => 'redactor_sets_save',
      'description' => 'redactor.permission.sets_save',
      'value' => 1,
    ),
  ),
  'c2ebff8c47be101ee2366c487b8fa539' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_export',
    ),
    'object' => 
    array (
      'id' => 264,
      'template' => 10,
      'name' => 'redactor_sets_export',
      'description' => 'redactor.permission.sets_export',
      'value' => 1,
    ),
  ),
  '7a656f5e057c1e1b64ae259241265e99' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_import',
    ),
    'object' => 
    array (
      'id' => 265,
      'template' => 10,
      'name' => 'redactor_sets_import',
      'description' => 'redactor.permission.sets_import',
      'value' => 1,
    ),
  ),
  '4a4a97cb8c6f5b8c559927d6d32160d2' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'redactor_sets_delete',
    ),
    'object' => 
    array (
      'id' => 266,
      'template' => 10,
      'name' => 'redactor_sets_delete',
      'description' => 'redactor.permission.sets_delete',
      'value' => 1,
    ),
  ),
  '549f9d874f5549c61dd67fc85b50d043' => 
  array (
    'criteria' => 
    array (
      'template' => 10,
      'name' => 'Redactor Full Access',
    ),
    'object' => 
    array (
      'id' => 16,
      'name' => 'Redactor Full Access',
      'description' => 'Access Policy for Redactor that gives full access to the configurator. Overwritten on upgrade.',
      'parent' => 0,
      'template' => 10,
      'class' => '',
      'data' => '{"redactor_configurator":true,"redactor_sets_view":true,"redactor_sets_create":true,"redactor_sets_save":true,"redactor_sets_export":true,"redactor_sets_import":true,"redactor_sets_delete":true,"formit":true,"formit_encryptions":false}',
      'lexicon' => 'redactor:permissions',
    ),
  ),
  '980a62f344fa77bdd53d00493b2ca017' => 
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
        elseif ($modx->resource && $modx->resource instanceof modResource) {
            $redactor->setResource($modx->resource);
        }
        elseif ($modx->controller && isset($modx->controller->resource) && $modx->controller->resource instanceof modResource) {
            $redactor->setResource($modx->controller->resource);
        }

        // Make sure global assets are loaded
        $redactor->initialize();

        $set = (int)$redactor->getOption(\'redactor.configuration_set\', null, 1, true);
        if (isset($resource)
            && ($resource instanceof modResource)
            && ($template = $resource->getOne(\'Template\'))
            && ($template instanceof modTemplate)
        ) {
            $props = $template->getProperties();
            $templateSet = array_key_exists(\'redactor.configuration_set\', $props) ? (int)$props[\'redactor.configuration_set\'] : 0;
            if ($templateSet > 0) {
                $set = $templateSet;
            }
        }

        $major = (int)$modx->getVersionData()[\'version\'];
        $html = <<<HTML
<script type="text/javascript">
document.documentElement.className += \' redactor-modx{$major}\';
var RedactorConfigurationSet = $set;
</script>
HTML;

        $modx->event->output($html);
        break;

    case \'ContentBlocks_RegisterInputs\':
        /**
         * @var modX $modx
         * @var ContentBlocks $contentBlocks
         * @var array $scriptProperties
         */
        if (class_exists(\'cbBaseInput\')) {
            require_once($corePath . \'elements/inputs/redactor_input.class.php\');
            $modx->event->output([
                \'redactor\' => new RedactorInput($contentBlocks)
            ]);
        }
        break;

    case \'FredBeforeRender\':
        /**
         * @var string $path
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }

        $assetsUrl = $redactor->config[\'assetsUrl\'];

        $version = \'?v=\' . $this->redactor->version;
        $css = <<<HTML
<link rel="stylesheet" href="{$assetsUrl}vendor/imperavi/redactor/redactor.min.css{$version}">
<link rel="stylesheet" href="{$assetsUrl}vendor/codemirror/codemirror.css{$version}">
<link rel="stylesheet" href="{$assetsUrl}dist/modxredactor.min.css{$version}">
HTML;
        if ($customCss = $redactor->getOption(\'redactor.css\')) {
            $customCss = array_filter(array_map(\'trim\', explode(\',\', $customCss)));
            foreach ($customCss as $url) {
                $css .= \'<link rel="stylesheet" href="\' . $url . $version . \'">\';
            }
        }

        $js = <<<HTML
<script type="text/javascript" src="{$assetsUrl}dist/imperavi/redactor.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}dist/plugins.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}dist/codemirror.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}js/fredactor.js{$version}"></script>
HTML;
        if ($customJs = $redactor->getOption(\'redactor.js\')) {
            $customJs = array_filter(array_map(\'trim\', explode(\',\', $customJs)));
            foreach ($customJs as $url) {
                $js .= \'<script type="text/javascript" src="\' . $url . $version . \'"></script>\';
            }
        }
        // Primary redactor scripts and the generated configuration sets
        $js .= \'<script type="text/javascript" src="\' . $assetsUrl . \'dist/modxredactor.min.js\' . $version . \'"></script>\';
        $js .= $redactor->getGeneratedConfigurationSets([Redactor::OPT_IS_FRED => true]);

        // Make the resource/wctx available
        if (isset($modx->resource) && $modx->resource instanceof modResource) {
            $redactor->setResource($modx->resource);
        }

        // Get the default configuration set to use from template or setting. This can be overriden with a Fred RTE Config.
        $set = (int)$redactor->getOption(\'redactor.configuration_set\', null, 1, true);
        if (isset($modx->resource)
            && ($modx->resource instanceof modResource)
            && ($template = $modx->resource->getOne(\'Template\'))
            && ($template instanceof modTemplate)
        ) {
            $props = $template->getProperties();
            $templateSet = array_key_exists(\'redactor.configuration_set\', $props) ? (int)$props[\'redactor.configuration_set\'] : 0;
            if ($templateSet > 0) {
                $set = $templateSet;
            }
        }
        $js .= \'<script type="text/javascript">var RedactorConfigurationSet = \' . $set . \';</script>\';

        // Instruct Fred that we offer a "Fredactor" function as "Redactor" RTE.
        $beforeRender = \'
    this.registerRTE("Redactor", Fredactor);
\';
        // Output it all. Woof.
        $modx->event->_output = [
            \'includes\' => $css.$js,
            \'beforeRender\' => $beforeRender,
            \'lexicons\' => [\'redactor:default\']
        ];
        return true;
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
        elseif ($modx->resource && $modx->resource instanceof modResource) {
            $redactor->setResource($modx->resource);
        }
        elseif ($modx->controller && isset($modx->controller->resource) && $modx->controller->resource instanceof modResource) {
            $redactor->setResource($modx->controller->resource);
        }

        // Make sure global assets are loaded
        $redactor->initialize();

        $set = (int)$redactor->getOption(\'redactor.configuration_set\', null, 1, true);
        if (isset($resource)
            && ($resource instanceof modResource)
            && ($template = $resource->getOne(\'Template\'))
            && ($template instanceof modTemplate)
        ) {
            $props = $template->getProperties();
            $templateSet = array_key_exists(\'redactor.configuration_set\', $props) ? (int)$props[\'redactor.configuration_set\'] : 0;
            if ($templateSet > 0) {
                $set = $templateSet;
            }
        }

        $major = (int)$modx->getVersionData()[\'version\'];
        $html = <<<HTML
<script type="text/javascript">
document.documentElement.className += \' redactor-modx{$major}\';
var RedactorConfigurationSet = $set;
</script>
HTML;

        $modx->event->output($html);
        break;

    case \'ContentBlocks_RegisterInputs\':
        /**
         * @var modX $modx
         * @var ContentBlocks $contentBlocks
         * @var array $scriptProperties
         */
        if (class_exists(\'cbBaseInput\')) {
            require_once($corePath . \'elements/inputs/redactor_input.class.php\');
            $modx->event->output([
                \'redactor\' => new RedactorInput($contentBlocks)
            ]);
        }
        break;

    case \'FredBeforeRender\':
        /**
         * @var string $path
         */
        $redactor = $modx->getService(\'redactor\', \'Redactor\', $corePath . \'model/redactor/\');
        if (!($redactor instanceof Redactor)) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[Redactor] Error loading Redactor service class.\');
            return;
        }

        $assetsUrl = $redactor->config[\'assetsUrl\'];

        $version = \'?v=\' . $this->redactor->version;
        $css = <<<HTML
<link rel="stylesheet" href="{$assetsUrl}vendor/imperavi/redactor/redactor.min.css{$version}">
<link rel="stylesheet" href="{$assetsUrl}vendor/codemirror/codemirror.css{$version}">
<link rel="stylesheet" href="{$assetsUrl}dist/modxredactor.min.css{$version}">
HTML;
        if ($customCss = $redactor->getOption(\'redactor.css\')) {
            $customCss = array_filter(array_map(\'trim\', explode(\',\', $customCss)));
            foreach ($customCss as $url) {
                $css .= \'<link rel="stylesheet" href="\' . $url . $version . \'">\';
            }
        }

        $js = <<<HTML
<script type="text/javascript" src="{$assetsUrl}dist/imperavi/redactor.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}dist/plugins.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}dist/codemirror.min.js{$version}"></script>
<script type="text/javascript" src="{$assetsUrl}js/fredactor.js{$version}"></script>
HTML;
        if ($customJs = $redactor->getOption(\'redactor.js\')) {
            $customJs = array_filter(array_map(\'trim\', explode(\',\', $customJs)));
            foreach ($customJs as $url) {
                $js .= \'<script type="text/javascript" src="\' . $url . $version . \'"></script>\';
            }
        }
        // Primary redactor scripts and the generated configuration sets
        $js .= \'<script type="text/javascript" src="\' . $assetsUrl . \'dist/modxredactor.min.js\' . $version . \'"></script>\';
        $js .= $redactor->getGeneratedConfigurationSets([Redactor::OPT_IS_FRED => true]);

        // Make the resource/wctx available
        if (isset($modx->resource) && $modx->resource instanceof modResource) {
            $redactor->setResource($modx->resource);
        }

        // Get the default configuration set to use from template or setting. This can be overriden with a Fred RTE Config.
        $set = (int)$redactor->getOption(\'redactor.configuration_set\', null, 1, true);
        if (isset($modx->resource)
            && ($modx->resource instanceof modResource)
            && ($template = $modx->resource->getOne(\'Template\'))
            && ($template instanceof modTemplate)
        ) {
            $props = $template->getProperties();
            $templateSet = array_key_exists(\'redactor.configuration_set\', $props) ? (int)$props[\'redactor.configuration_set\'] : 0;
            if ($templateSet > 0) {
                $set = $templateSet;
            }
        }
        $js .= \'<script type="text/javascript">var RedactorConfigurationSet = \' . $set . \';</script>\';

        // Instruct Fred that we offer a "Fredactor" function as "Redactor" RTE.
        $beforeRender = \'
    this.registerRTE("Redactor", Fredactor);
\';
        // Output it all. Woof.
        $modx->event->_output = [
            \'includes\' => $css.$js,
            \'beforeRender\' => $beforeRender,
            \'lexicons\' => [\'redactor:default\']
        ];
        return true;
}

return;',
    ),
  ),
  '889a47e35f68f115c2e11767ea8dada0' => 
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
  '5c47c7099106afe566a9b91c38991d86' => 
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
  'e2f30bc46100c9266ca9638310805d5c' => 
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
  '8ef4d05d4c2c59e6b2624ead432663ed' => 
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
  '7fc86fa91a4d8b7c36df7b8ce014368f' => 
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
  'eb438e75335aabb9be435afed6bc2202' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'ContentBlocks_RegisterInputs',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'ContentBlocks_RegisterInputs',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '87bf09f49f1fc0804ffe95a85638b592' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 10,
      'event' => 'FredBeforeRender',
    ),
    'object' => 
    array (
      'pluginid' => 10,
      'event' => 'FredBeforeRender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);