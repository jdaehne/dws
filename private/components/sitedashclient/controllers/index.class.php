<?php
class SiteDashClientIndexManagerController extends modExtraManagerController {
  public $sitedashclient;

  public function process(array $scriptProperties = array()) {}
  public function getPageTitle() {
    return $this->modx->lexicon('sitedashclient');
  }
  public function getTemplateFile() {
    return 'index.tpl';
  }

  /**
   * Initializes the main manager controller. In this case we set up the
   * SiteDashClient class and add the required javascript on all controllers.
   */
  public function initialize() {
    /* Instantiate the SiteDashClient class in the controller */
    //$this->modx->log(modX::LOG_LEVEL_ERROR, $this->modx->getOption('sitedashclient.core_path',null,$this->modx->getOption('core_path').'components/sitedashclient/').'model/sitedashclient/');
    $corePath = $this->modx->getOption('sitedashclient.core_path',null,$this->modx->getOption('core_path').'components/sitedashclient/');
    $this->sitedashclient = $this->modx->getService('sitedashclient', 'SiteDashClient', $corePath . 'model/sitedashclient/');
    /* Add the main javascript class and our configuration */
    $this->addJavascript($this->sitedashclient->config['jsUrl'].'mgr/sitedashclient.class.js');
    //$this->addCss($this->sitedashclient->config['cssUrl'].'mgr/sitedashclient.css');
    $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            SiteDashClient.config = '.$this->modx->toJSON($this->sitedashclient->config).';
        });
        </script>');
  }

  public function getLanguageTopics() {
    return array('sitedashclient:default');
  }

  /**
   * Register all the needed javascript files. Using this method, it will automagically
   * combine and compress them if enabled in system settings.
   */
  public function loadCustomCssJs() {
    $grids = array(
      'iminvites',
      );
    $windows = $grids;
    foreach($grids as $grid) {
      $this->addJavascript($this->sitedashclient->config['jsUrl'].'mgr/widgets/grid.' . $grid . '.js');
    }
    foreach($windows as $window) {
      $this->addJavascript($this->sitedashclient->config['jsUrl'].'mgr/widgets/window.' . $window . '.js');
    }

    $this->addJavascript($this->sitedashclient->config['jsUrl'].'mgr/widgets/combos.js');
    $this->addLastJavascript($this->sitedashclient->config['jsUrl'].'mgr/sections/index.js');
    $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
//            MODx.config.help_url = "https://www.modmore.com/extras/sitedashclient/documentation/?embed=1";
            MODx.load({ xtype: "sitedashclient-page-index" });
        });
        </script>');
  }
}