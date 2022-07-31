<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexBackendAction()
    {
        return $this->render('backend/AppBundle:Default:index.html.twig');
    }

    public function contactBackendAction()
    {//render() fonction qui  retoure une template
        return $this->render('backend/default/contact.html.twig');

    }
    public function surfferBackendAction()
    {//render() fonction qui  retoure une template
        return $this->render('backend/default/surffer.html.twig');

    }
}
