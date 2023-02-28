<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Operations\Crud\Block;

use Magento\Framework\View\Element\Template;
use Operations\Crud\Model\ResourceModel\View\CollectionFactory;
use Operations\Crud\Model\ViewFactory;
/**
 * Main contact form block
 *
 * @api
 * @since 100.0.2
 */
class Index extends Template
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(Template\Context $context,CollectionFactory $collection,ViewFactory $view,array $data = [])
    {
       
        $this->collection = $collection;
        $this->view = $view;
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
      
    }

    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('blue/post/index', ['_secure' => true]);
    }

    public function getMember()
    {
      return $member = $this->collection->create()->addFieldToSelect('*')->load();
    //   dump($member->getItems());
    }
  public function editMember()
  {
    $id = $this->getRequest()->getParam('id');
//   echo ($id);
//     die;
    return $this->view->create()->load($id);
    
  }

  public function getCollection()
  {

    $id = $this->getRequest()->getParam('id');
    return $this->view->create()->load($id);
  
  }
    
}
