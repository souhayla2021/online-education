<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Inscription;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Inscription controller.
 *
 */
class InscriptionController extends Controller
{
    /**
     * Lists all inscription entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $inscriptions = $em->getRepository('AppBundle:Inscription')->findAll();

        return $this->render('backend/inscription/index.html.twig', array(
            'inscriptions' => $inscriptions,
        ));
    }

    /**
     * Finds and displays a inscription entity.
     *
     */
    public function showBackendAction(Inscription $inscription)
    {

        return $this->render('backend/inscription/show.html.twig', array(
            'inscription' => $inscription,
        ));
    }
}
