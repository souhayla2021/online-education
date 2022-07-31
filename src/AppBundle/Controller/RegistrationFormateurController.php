<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationFormateurController extends Controller
{
    public function registerBackendAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('AppBundle\Entity\Formateur');
    }
}