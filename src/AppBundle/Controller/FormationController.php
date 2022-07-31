<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Formation controller.
 *
 */
class FormationController extends Controller
{
    /**
     * Lists all formation entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formations = $em->getRepository('AppBundle:Formation')->findAll();

        return $this->render('backend/formation/index.html.twig', array(
            'formations' => $formations,
        ));
    }

    /**
     * Finds and displays a formation entity.
     *
     */
    public function showBackendAction(Formation $formation)
    {

        return $this->render('backend/formation/show.html.twig', array(
            'formation' => $formation,
        ));
    }
}
