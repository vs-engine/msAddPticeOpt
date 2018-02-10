<?php

class msAddPticeOptItemEnableProcessor extends modObjectProcessor
{
    public $objectType = 'msAddPticeOptItem';
    public $classKey = 'msAddPticeOptItem';
    public $languageTopics = array('msaddpticeopt');
    //public $permission = 'save';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('msaddpticeopt_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var msAddPticeOptItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('msaddpticeopt_item_err_nf'));
            }

            $object->set('active', true);
            $object->save();
        }

        return $this->success();
    }

}

return 'msAddPticeOptItemEnableProcessor';
