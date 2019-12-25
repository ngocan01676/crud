<?php

namespace Koian\Banner\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'id';

    protected function _construct()
    {
        // Model + Resource Model
        $this->_init('Koian\Banner\Model\Banner', 'Koian\Banner\Model\ResourceModel\Banner');
    }

}