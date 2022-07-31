<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Formateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Formateur controller.
 *
 */
class FormateurController extends Controller
{
    /**
     * Lists all formateur entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formateurs = $em->getRepository('AppBundle:Formateur')->findAll();

        return $this->render('backend/formateur/index.html.twig', array(
            'formateurs' => $formateurs,
        ));
    }

    /**
     * Finds and displays a formateur entity.
     *
     */
    public function showBackendAction(Formateur $formateur)
    {

        return $this->render('backend/formateur/show.html.twig', array(
            'formateur' => $formateur,
        ));
    }
}
