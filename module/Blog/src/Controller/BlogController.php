<?php

namespace Blog\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class BlogController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel([
            'message' => 'Welcome to the Blog Module!',
        ]);
    }

    public function formAction()
    {
        return new ViewModel([
            'message' => 'Welcome to the blog form page',
        ]);
    }

    public function detailAction()
    {
        $id = $this->params()->fromRoute('id', null);

        return new ViewModel([
            'message' => 'Welcome to the blog detail under blog module! The blog ID is: ' . $id,
        ]);
    }
}
