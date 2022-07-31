<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Apprenant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Apprenant controller.
 *
 */
class ApprenantController extends Controller
{
    /**
     * Lists all apprenant entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $apprenants = $em->getRepository('AppBundle:Apprenant')->findAll();

        return $this->render('backend/apprenant/index.html.twig', array(
            'apprenants' => $apprenants,
        ));
    }

    /**
     * Finds and displays a apprenant entity.
     *
     */
    public function showBackendAction(Apprenant $apprenant)
    {

        return $this->render('backend/apprenant/show.html.twig', array(
            'apprenant' => $apprenant,
        ));
    }
}
