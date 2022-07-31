<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ForumSujet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Forumsujet controller.
 *
 */
class ForumSujetController extends Controller
{
    /**
     * Lists all forumSujet entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $forumSujets = $em->getRepository('AppBundle:ForumSujet')->findAll();

        return $this->render('backend/forumsujet/index.html.twig', array(
            'forumSujets' => $forumSujets,
        ));
    }

    /**
     * Finds and displays a forumSujet entity.
     *
     */
    public function showBackendAction(ForumSujet $forumSujet)
    {

        return $this->render('backend/forumsujet/show.html.twig', array(
            'forumSujet' => $forumSujet,
        ));
    }
}
