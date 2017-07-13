<?php
class Precisionpros_Subscriber_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     */
    public function saveAdditionalData(Varien_Event_Observer $observer)
    {
        $subscriber  = $observer->getSubscriber();
        $firstname = Mage::app()->getRequest()->getParam('firstname');
        $lastname = Mage::app()->getRequest()->getParam('lastname');

        $subscriber->setFirstName($firstname);
        $subscriber->setLastName($lastname);
    }

    /**
     * @param Varien_Event_Observer $observer
     */
    public function addGridColumn(Varien_Event_Observer $observer)
    {
        $block = $observer->getBlock();
        if ($block && $block instanceof Mage_Adminhtml_Block_Newsletter_Subscriber_Grid) {
            /** @var Mage_Adminhtml_Block_Newsletter_Subscriber_Grid $block */
            $block->addColumnAfter('guest_first_name', array(
                'header'    => Mage::helper('newsletter')->__('Guest Subscriber First Name'),
                'index'     => 'first_name',
                'default'   =>    '----'
            ),'type');
            /** @var Mage_Adminhtml_Block_Newsletter_Subscriber_Grid $block */
            $block->addColumnAfter('guest_last_name', array(
                'header'    => Mage::helper('newsletter')->__('Guest Subscriber Last Name'),
                'index'     => 'last_name',
                'default'   =>    '----'
            ),'guest_first_name');
        }
    }
}