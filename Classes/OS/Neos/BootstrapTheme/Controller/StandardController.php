<?php
namespace OS\Neos\BootstrapTheme\Controller;

/*
 * This file is part of the OS.Neos.BootstrapTheme package.
 */

use TYPO3\Flow\Annotations as Flow;

class StandardController extends \TYPO3\Flow\Mvc\Controller\ActionController
{

    /**
     * @return void
     */
    public function indexAction()
    {
        $this->view->assign('foos', array(
            'bar', 'baz'
        ));
    }

}
