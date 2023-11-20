<?php
namespace Indglobal\SortByFeatured\Plugin\Model;

use Magento\Store\Model\StoreManagerInterface;
 
class Config
{
    protected $_storeManager;
 
    public function __construct(
        StoreManagerInterface $storeManager
    )
    {
        $this->_storeManager = $storeManager;
    }
 
    public function afterGetAttributeUsedForSortByArray(\Magento\Catalog\Model\Config $catalogConfig, $options)
    {
        $customOption['featured'] = __('Featured Product');
        $options = array_merge($customOption, $options);
        return $options;
    }
}