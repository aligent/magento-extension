<?php
class Bazaarvoice_Connector_IndexController extends Mage_Core_Controller_Front_Action
{
    public function preDispatch()
    {
        parent::preDispatch();
        if ($this->getRequest()->getParam('bvauthenticateuser') == 'true') {
            if (!Mage::getSingleton('customer/session')->authenticate($this)) {
                $this->setFlag('', self::FLAG_NO_DISPATCH, true);
            }
        }
    }

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}