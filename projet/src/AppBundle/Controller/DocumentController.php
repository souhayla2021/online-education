<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Document;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Document controller.
 *
 */
class DocumentController extends Controller
{
    /**
     * Lists all document entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documents = $em->getRepository('AppBundle:Document')->findAll();

        return $this->render('backend/document/index.html.twig', array(
            'documents' => $documents,
        ));
    }

    /**
     * Finds and displays a document entity.
     *
     */
    public function showBackendAction(Document $document)
    {

        return $this->render('backend/document/show.html.twig', array(
            'document' => $document,
        ));
    }
}
