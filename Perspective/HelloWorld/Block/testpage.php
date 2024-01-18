<?php

namespace Perspective\Helloworld\Block;

class Testpage extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }
    public function sayHello()
    {
        return __('Learn Magento 2 Block Layout');
    }
}
