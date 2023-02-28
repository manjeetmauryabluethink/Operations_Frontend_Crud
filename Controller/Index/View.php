<?php

namespace Operations\Crud\Controller\Index;

use \Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use Operations\Crud\Model\ViewFactory;
class View extends \Magento\Framework\App\Action\Action 
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
        //load Single record
        //$data = $this->view->create()->load(8)->getData();
        //print_r($data);
        //edit single record
        //$data =$this->view->create()->load(8)->setName('Raju')->save();
        //$email = $this->view->create()->load(8)->setEmail('Raju@gmail.com')->save();
        //print_r($data);
        //Delete single record
        //$dataDelete = $this->view->create()->load(9)->delete();
        //exit;
        return $this->resultPageFactory->create();
    }

   
}