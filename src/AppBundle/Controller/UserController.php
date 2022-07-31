<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAll();

        return $this->render('backend/user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     */
    public function showBackendAction(User $user)
    {

        return $this->render('backend/user/show.html.twig', array(
            'user' => $user,
        ));
    }
}
