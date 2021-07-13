<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\TodoItem;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $items = [];
        for ($i = 1; $i <= 10; $i++)
        {
            $name = "Test" . $i;
            $body = $name;
            array_push($items, new TodoItem($name, $body));
        }
        $view_model = new ViewModel();
        $view_model->setVariable("items", $items);

        return $view_model;
    }
}
