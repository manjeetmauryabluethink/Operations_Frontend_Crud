<?php

namespace Operations\Crud\Controller\Index;

use \Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use Operations\Crud\Model\ViewFactory;
class Viewdata extends \Magento\Framework\App\Action\Action 
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    protected $view;


    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(ViewFactory $view,PageFactory $resultPageFactory,Context $context) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->view = $view;
    }

    /**
     * Prints the information 
     * @return Page
     */
    public function execute()
    {
      
        return $this->resultPageFactory->create();
    }

   
}