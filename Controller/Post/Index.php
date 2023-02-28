<?php
namespace Operations\Crud\Controller\Post;
use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;
use Operations\Crud\Model\ViewFactory;
class Index extends Action
{
    protected $resultPageFactory;
    protected $logger;
    protected $view;
    protected $loggerInterface;
    public function __construct(
        Context $context,
        ViewFactory $view,
        LoggerInterface $loggerInterface,
        LocalizedException $logger,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->logger = $logger;
        $this->resultPageFactory = $resultPageFactory;
        $this->view = $view;
        $this->loggerInterface = $loggerInterface;
    }
    public function execute()
    {
        try {
            $form_data = $this->validatedParams();
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }
        $editid = $this->getRequest()->getParam("id");
        if ($editid) {
            $result = $this->view
                ->create()
                ->load($editid)
                ->setData($form_data)
                ->save();
        } else {
            unset($form_data["id"]);
            $result = $this->view->create()->setData($form_data);
        }
        if ($result->save()) {
            $this->messageManager->addSuccessMessage(
                __("Data saved successfully")
            );
        } else {
            $this->messageManager->addErrorMessage(__("Data not saved"));
        }
        return $this->resultRedirectFactory
            ->create()
            ->setPath("blue/index/index");
    }
    private function validatedParams()
    {
        $request = $this->getRequest();
        if (trim($request->getParam("name")) == "") {
            throw new LocalizedException(__("Enter the name and try again."));
        }
        if (trim($request->getParam("email")) == "") {
            throw new LocalizedException(
                __("Enter the description and try again.")
            );
        }
        if (trim($request->getParam("telephone")) == "") {
            throw new LocalizedException(
                __("Enter the telephone and try again.")
            );
        }
        return $request->getParams();
    }
}
