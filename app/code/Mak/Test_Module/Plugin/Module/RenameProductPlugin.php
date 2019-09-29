<?php

namespace Mak\Test_Module\Plugin\Module;

use Magento\Catalog\Model\Product;

/**
 * Class RenameProductPlugin
 * @package Mak\Test_Module\Plugin\Module
 */
class RenameProductPlugin
{
    /**
     * @param Product $subject
     * @param $result
     * @return string
     */
    public function afterGetName(Product $subject, $result)
    {
        $name = $result;

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerSession = $objectManager->get('Magento\Customer\Model\Session');
        if($customerSession->isLoggedIn()) {
            if ($name == 'Test Product')
                $name = 'Test Product-Hello World';
        }

        return $name;
    }

}