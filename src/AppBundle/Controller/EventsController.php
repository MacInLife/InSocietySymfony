<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Personnel;
use AppBundle\Entity\Evenement;
use AppBundle\Entity\Document;
use AppBundle\Entity\SalleReunion;
use AppBundle\Entity\Reservation;

class EventsController extends Controller
{
	  /**
     * @Route("/events", name="events")
     */
    public function eventAction(Request $request)
    {
     $em = $this->getDoctrine()->getManager();
         $listeEvt = $em->getRepository(Evenement::class)->findAll();
    // replace this example code with whatever you need

//Création de Formulaire Page Events
 $form = $this->createFormBuilder()
            ->add('nomEvt', TextType::class,  array('label' => 'Nom de l\'évènement :'))
            ->add('type', TextType::class, array('label' => 'Description :'))
            ->add('jourD', DateType::class , array('widget' => 'single_text' , 'label' => 'Date de Début :'))
            ->add('jourF', DateType::class, array('widget' => 'single_text' , 'label' => 'Date de Fin :'))
            ->add('hDebut', TimeType::class, array('widget' => 'single_text' , 'label' => 'Heure de Début :'))
            ->add('hFin', TimeType::class, array('widget' => 'single_text' , 'label' => 'Heure de Fin :'))
            ->add('lieu', TextType::class, array('label' => 'Lieu :'))                    
            ->add('idSR', EntityType::class, 
                 array('class' => 'AppBundle:SalleReunion', 
                        'label' => 'Salle :',
                         'choice_label' => function($nomsr){
                            return $nomsr->getNomsr();
                        },
                        'placeholder' => 'Choississez ...'))
            ->add('Ajouter', SubmitType::class, array('label' => 'Ajouter'))
            ->add('Annuler', ResetType::class, array('label' => 'Annuler'))
            ->getForm();
                  
            $form->handleRequest($request);

            //Validation  du formulaire avec le bouton Ajouter (Submit)
            if($form->isValid()){

 
                $infoEvent = $form->getData();
                $nomEvt = $infoEvent['nomEvt'];
                $type = $infoEvent['type'];
                $jourD = $infoEvent['jourD'];
                $jourF = $infoEvent['jourF'];
                $hDebut = $infoEvent['hDebut'];
                $hFin = $infoEvent['hFin'];
                $lieu = $infoEvent['lieu'];
                $idSR = $infoEvent['idSR'];
 dump($idSR);
             
        $event = new Evenement();
        $event->setNomevt($nomEvt);
        $event->setType($type);
        $event->setJourD($jourD);
        $event->setJourF($jourF);
        $event->setHDebut($hDebut);
        $event->setHFin($hFin);
        $event->setLieu($lieu);
        $event->setIdSR($idSR);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
       $em->persist($event);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
        
 // On redirige vers la page de visualisation de l'annonce nouvellement créée
      return $this->redirectToRoute('events');
            }
        return $this->render('default/events.html.twig', array('eventform'=>$form->createView(),'liste'=> $listeEvt))  ;
 }

/**
     * @Route("/{idEvent}/editEvt", name="editEvt")
     */   
     public function EditEvtAction(Request $request, Evenement $eventM){
$em = $this->getDoctrine()->getManager();

dump($eventM);
       //Création de Formulaire Page Events
 $formModif = $this->createFormBuilder()
            ->add('nomEvt', TextType::class,  array('label' => 'Nom de l\'évènement :' ,'data' => $eventM->getNomevt()))
            ->add('type', TextType::class, array('label' => 'Description :','data' => $eventM->getType()))
            ->add('jourD', DateType::class , array('widget' => 'single_text','label' => 'Date de Début :','data' => $eventM->getJourD()))
            ->add('jourF', DateType::class, array('widget' => 'single_text','label' => 'Date de Fin :','data' => $eventM->getJourF()))
            ->add('hDebut', TimeType::class, array('widget' => 'single_text','label' => 'Heure de Début :','data' => $eventM->getHDebut()))
            ->add('hFin', TimeType::class, array('widget' => 'single_text','label' => 'Heure de Fin :','data' => $eventM->getHFin()))
            ->add('lieu', TextType::class, array('label' => 'Lieu :','data' => $eventM->getLieu()))
            /*->add('idSR', ChoiceType::class, array('label' => 'Salle :','data' => $eventM->getIdSr()))*/
            ->add('idSR', EntityType::class, 
                 array('class' => 'AppBundle:SalleReunion', 
                        'label' => 'Salle :',
                         'choice_label' => function($nomsr){
                            return $nomsr->getNomsr();
                        },
                        'data'=> $eventM->getIdSr()))
            ->add('Modifier', SubmitType::class, array('label' => 'Modifier'))  
            ->getForm();
                
            $formModif->handleRequest($request);
           
 //Validation  du formulaire avec le bouton Ajouter (Submit)
            if($formModif->isSubmitted() && $formModif->isValid()){
                
                $infoEvent = $formModif->getData();
                $nomEvt = $infoEvent['nomEvt'];
                $type = $infoEvent['type'];
                $jourD = $infoEvent['jourD'];
                $jourF = $infoEvent['jourF'];
                $hDebut = $infoEvent['hDebut'];
                $hFin = $infoEvent['hFin'];
                $lieu = $infoEvent['lieu'];
                $idSR = $infoEvent['idSR'];

       
        $eventM->setNomevt($nomEvt);
        $eventM->setType($type);
        $eventM->setJourD($jourD);
        $eventM->setJourF($jourF);
        $eventM->setHDebut($hDebut);
        $eventM->setHFin($hFin);
        $eventM->setLieu($lieu);
        $eventM->setIdSR($idSR);

dump($eventM); 
      
        $em->flush();
           return $this->redirectToRoute('events');
            }
        return $this->render('default/eventsEdit.html.twig', array('eventMform'=>$formModif->createView(), 'Evenement' => $eventM));
    }


    /**
     * @Route("/deleteEvt", name="deleteEvt")
     */ 
    public function deleteEvtAction(Request $request)
    {
      $idEvent = $request->get('idEvt');
  if(!empty($idEvent)){
      // dump($idEvent);
$em = $this->getDoctrine()->getManager();
     $repository = $this->getDoctrine()->getRepository(Evenement::class);

// recherche d'un seul évènement correspondant au id indiqué
$event = $repository->findOneBy(  array('idEvent' => $idEvent));
       
      // dump($event);
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute('events');
      }  
return $this->render('default/deleteEvt.html.twig');
}

}