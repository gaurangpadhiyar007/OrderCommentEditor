<?php
/**
* @category Extrembler
* @package  Extrembler_OrderCommentEditor
* @author   gaurangpadhiyar1993@gmail.com
*/
namespace Extrembler\OrderCommentEditor\Block\Adminhtml\Sales\Order\View;

class History extends \Magento\Sales\Block\Adminhtml\Order\View\History
{
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $this->setTemplate('Extrembler_OrderCommentEditor::sales/order/view/history.phtml');
        return $this;
    }
}