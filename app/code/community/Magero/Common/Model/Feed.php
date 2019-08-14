<?php
class Magero_Common_Model_Feed extends Mage_AdminNotification_Model_Feed {
    public function getFeedUrl() {
        //return Mage::getStoreConfigFlag(self::XML_USE_HTTPS_PATH) ? 'https://' : 'http://'
        return 'http://'
                . Mage::getStoreConfig('magero_general/general/feed_url');
    }

    public function observe() {
        if(Mage::getStoreConfig('magero_general/general/notification_status')) {
            $model  = Mage::getModel('magero_common/feed');
            $model->checkUpdate();
        }

        return $this;
    }
}