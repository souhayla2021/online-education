<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Matiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Matiere controller.
 *
 */
class MatiereController extends Controller
{
    /**
     * Lists all matiere entities.
     *
     */
    public function indexBackendAction()
    {
        $em = $this->getDoctrine()->getManager();//recuperer le service entity manager

        $matieres = $em->getRepository('AppBundle:Matiere')->findAll();

        return $this->render('backend/matiere/index.html.twig', array(
            'liste_matieres' => $matieres,
        ));
    }

    /**
     * Creates a new matiere entity.
     *
     */
    public function newBackendAction(Request $request)
    {
        $matiere = new Matiere();
        $form = $this->createForm('AppBundle\Form\MatiereType', $matiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //recuperer le service entity manager
            $em = $this->getDoctrine()->getManager();
            $em->persist($matiere);
            $em->flush($matiere);

            return $this->redirectToRoute('matiere_show', array('id' => $matiere->getId()));
        }

        return $this->render('backend/matiere/new.html.twig', array(
            'matiere' => $matiere,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a matiere entity.
     *
     */
    public function showBackendAction(Matiere $matiere)
    {
        $deleteForm = $this->createDeleteForm($matiere);

        return $this->render('backend/matiere/show.html.twig', array(
            'matiere' => $matiere,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing matiere entity.
     *
     */
    public function editBackendAction(Request $request, Matiere $matiere)
    {
        $deleteForm = $this->createDeleteForm($matiere);
        $editForm = $this->createForm('AppBundle\Form\MatiereType', $matiere);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('matiere_edit', array('id' => $matiere->getId()));
        }

        return $this->render('backend/matiere/edit.html.twig', array(
            'matiere' => $matiere,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a matiere entity.
     *
     */
    public function deleteBackendAction(Request $request, Matiere $matiere)
    {
        $form = $this->createDeleteForm($matiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($matiere);
            $em->flush($matiere);
        }

        return $this->redirectToRoute('matiere_index');
    }

    /**
     * Creates a form to delete a matiere entity.
     *
     * @param Matiere $matiere The matiere entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Matiere $matiere)
    {
        return $this->createFormBuilder()
            ->setBackendAction($this->generateUrl('matiere_delete', array('id' => $matiere->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
