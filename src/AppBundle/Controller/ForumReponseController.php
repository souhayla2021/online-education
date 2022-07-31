<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ForumReponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Forumreponse controller.
 *
 */
class ForumReponseController extends Controller
{
    /**
     * Lists all forumReponse entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $forumReponses = $em->getRepository('AppBundle:ForumReponse')->findAll();

        return $this->render('backend/forumreponse/index.html.twig', array(
            'forumReponses' => $forumReponses,
        ));
    }

    /**
     * Finds and displays a forumReponse entity.
     *
     */
    public function showBackendAction(ForumReponse $forumReponse)
    {

        return $this->render('backend/forumreponse/show.html.twig', array(
            'forumReponse' => $forumReponse,
        ));
    }
}
