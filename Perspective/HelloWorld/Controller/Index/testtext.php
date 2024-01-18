<?php

declare(strict_types=1);

namespace Perspective\HelloWorld\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Testtext implements ActionInterface
{
    public function execute()
    {
        die("Controller 1");
    }
}
