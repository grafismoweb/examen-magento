<?php

namespace Hiberus\Rodriguez\Model\ResourceModel\Notas;
use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection
{

    /**
     * Define resource model     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Hiberus\Rodriguez\Model\Notas', 'Hiberus\Rodriguez\Model\ResourceModel\Notas');
    }

}
