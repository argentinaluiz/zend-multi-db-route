<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Model\PostTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\View;

class IndexController extends AbstractActionController
{
    /**
     * @var PostTable
     */
    private $table;


    /**
     * IndexController constructor.
     */
    public function __construct(PostTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function outraRotaAction(){
        return new ViewModel();
    }
}
