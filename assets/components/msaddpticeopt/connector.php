<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var msAddPticeOpt $msAddPticeOpt */
$msAddPticeOpt = $modx->getService('msaddpticeopt', 'msAddPticeOpt', $modx->getOption('msaddpticeopt_core_path', null,
        $modx->getOption('core_path') . 'components/msaddpticeopt/') . 'model/msaddpticeopt/'
);
$modx->lexicon->load('msaddpticeopt:default');

// handle request
$corePath = $modx->getOption('msaddpticeopt_core_path', null, $modx->getOption('core_path') . 'components/msaddpticeopt/');
$path = $modx->getOption('processorsPath', $msAddPticeOpt->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));