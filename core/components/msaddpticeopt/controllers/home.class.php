<?php

/**
 * The home manager controller for msAddPticeOpt.
 *
 */
class msAddPticeOptHomeManagerController extends modExtraManagerController
{
    /** @var msAddPticeOpt $msAddPticeOpt */
    public $msAddPticeOpt;


    /**
     *
     */
    public function initialize()
    {
        $path = $this->modx->getOption('msaddpticeopt_core_path', null,
                $this->modx->getOption('core_path') . 'components/msaddpticeopt/') . 'model/msaddpticeopt/';
        $this->msAddPticeOpt = $this->modx->getService('msaddpticeopt', 'msAddPticeOpt', $path);
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return array('msaddpticeopt:default');
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('msaddpticeopt');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->msAddPticeOpt->config['cssUrl'] . 'mgr/main.css');
        $this->addCss($this->msAddPticeOpt->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
        $this->addJavascript($this->msAddPticeOpt->config['jsUrl'] . 'mgr/msaddpticeopt.js');
        $this->addJavascript($this->msAddPticeOpt->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->msAddPticeOpt->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->msAddPticeOpt->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->msAddPticeOpt->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->msAddPticeOpt->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->msAddPticeOpt->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        msAddPticeOpt.config = ' . json_encode($this->msAddPticeOpt->config) . ';
        msAddPticeOpt.config.connector_url = "' . $this->msAddPticeOpt->config['connectorUrl'] . '";
        Ext.onReady(function() {
            MODx.load({ xtype: "msaddpticeopt-page-home"});
        });
        </script>
        ');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->msAddPticeOpt->config['templatesPath'] . 'home.tpl';
    }
}