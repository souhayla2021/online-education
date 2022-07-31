<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Cours controller.
 *
 */
class CoursController extends Controller
{
    /**
     * Lists all cour entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cours = $em->getRepository('AppBundle:Cours')->findAll();

        return $this->render('backend/cours/index.html.twig', array(
            'cours' => $cours,
        ));
    }

    /**
     * Creates a new cour entity.
     *
     */
    public function newBackendAction(Request $request)
    {
        $cours = new Cours();
        $form = $this->createForm('AppBundle\Form\CoursType', $cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush($cours);

            return $this->redirectToRoute('cours_show', array('id' => $cours->getId()));
        }

        return $this->render('backend/cours/new.html.twig', array(
            'cour' => $cours,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cour entity.
     *
     */
    public function showBackendAction(Cours $cours)
    {
        $deleteForm = $this->createDeleteForm($cours);

        return $this->render('backend/cours/show.html.twig', array(
            'cour' => $cours,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cour entity.
     *
     */
    public function editBackendAction(Request $request, Cours $cours)
    {
        $deleteForm = $this->createDeleteForm($cours);
        $editForm = $this->createForm('AppBundle\Form\CoursType', $cours);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cours_edit', array('id' => $cours->getId()));
        }

        return $this->render('backend/cours/edit.html.twig', array(
            'cour' => $cours,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cour entity.
     *
     */
    public function deleteBackendAction(Request $request, Cours $cours)
    {
        $form = $this->createDeleteForm($cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cours);
            $em->flush($cours);
        }

        return $this->redirectToRoute('cours_index');
    }

    /**
     * Creates a form to delete a cour entity.
     *
     * @param Cours $cours The cour entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cours $cours)
    {
        return $this->createFormBuilder()
            ->setBackendAction($this->generateUrl('cours_delete', array('id' => $cours->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
