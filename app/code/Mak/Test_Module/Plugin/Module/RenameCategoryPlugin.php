<?php

namespace Mak\Test_Module\Plugin\Module;

use Magento\Catalog\Model\Category;

/**
 * Class RenameCategoryPlugin
 * @package Mak\Test_Module\Plugin\Module
 */
class RenameCategoryPlugin
{
    /**
     * @param Category $subject
     * @param $result
     * @return string
     */
    public function afterGetName(Category $subject, $result)
    {
        $name = $result;
        if ($name == 'Test Category')
            $name = 'Test Category-Hello World';

        return $name;
    }

}