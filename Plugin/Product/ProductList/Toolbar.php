<?php
namespace Indglobal\SortByFeatured\Plugin\Product\ProductList;

use Magento\Catalog\Block\Product\ProductList\Toolbar as Productdata;
 
class Toolbar
{
    public function aroundSetCollection(Productdata $subject, \Closure $proceed, $collection)
    {
        $currentOrder = $subject->getCurrentOrder();
        if ($currentOrder) {
            if ($currentOrder == "featured") {
                $direction = $subject->getCurrentDirection();
                $collection->getSelect()->order('featured ' . $direction);
            }
            return $proceed($collection);
        }
    }
}
