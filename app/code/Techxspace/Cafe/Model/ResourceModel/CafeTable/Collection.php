<?php
namespace Techxspace\Cafe\Model\ResourceModel\CafeTable;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';
	protected $_eventPrefix = 'techxspace_cafe_table_collection';
	protected $_eventObject = 'cafe_table_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Techxspace\Cafe\Model\CafeTable', 'Techxspace\Cafe\Model\ResourceModel\CafeTable');
	}
}