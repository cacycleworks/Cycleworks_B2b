<?php
// from: http://www.human-element.com/Blog/ArticleDetailsPage/tabid/91/ArticleID/69/Magento-Non-CMS-Pages-Creating-Pages-Via-Frontend-Routers.aspx
class Cycleworks_B2b_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        //Get current layout state
        $this->loadLayout();          
        $block = $this->getLayout()->createBlock(
            'Mage_Catalog_Block_Product_List', //'Mage_Core_Block_Template',
            'b2b',
            array('template' => 'b2b/content.phtml')
        );
        $this->getLayout()->getBlock('root')->setTemplate('page/1column.phtml');
        $this->getLayout()->getBlock('content')->append($block);
        $this->_initLayoutMessages('core/session'); 
        $this->renderLayout();
    }
}
?>
