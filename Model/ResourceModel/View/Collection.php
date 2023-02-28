<?php
namespace Operations\Crud\Model\ResourceModel\View;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Operations\Crud\Model\View::class, \Operations\Crud\Model\ResourceModel\View::class);
    }
}