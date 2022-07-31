<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Image controller.
 *
 */
class ImageController extends Controller
{
    /**
     * Lists all image entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $images = $em->getRepository('AppBundle:Image')->findAll();

        return $this->render('backend/image/index.html.twig', array(
            'images' => $images,
        ));
    }

    /**
     * Finds and displays a image entity.
     *
     */
    public function showBackendAction(Image $image)
    {

        return $this->render('backend/image/show.html.twig', array(
            'image' => $image,
        ));
    }
}
