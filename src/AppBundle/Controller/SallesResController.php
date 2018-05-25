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

class SallesResController extends Controller {

    /**
     * @Route("/salles", name="salles")
     */
    public function salleAction(Request $request)
    {

    $em = $this->getDoctrine()->getManager();
        $listeRes = $em->getRepository(Reservation::class)->findAll();
    $am = $this->getDoctrine()->getManager();
        $listeSal = $am->getRepository(SalleReunion::class)->findAll();

       //Création de Formulaire Page Events
 $form = $this->createFormBuilder()
            
                  // ,'data' => $salle->getLieu()))
       
            ->add('idSr', EntityType::class, array('class' => 'AppBundle:SalleReunion',
                                                    'label' => 'Choisir la Salle :',
                                                    'choice_label' => function ($nomsr){ return $nomsr->getNomsr();},
                                                    'placeholder' => '...'))
                  //'data' => $salle->getNomsr()))
            ->add('nbpers', TextType::class , array('label' => 'Choix du Nombre de personne prévu :'))
                  //'data' => $salle->getNbpers()))
            ->add('dateD', DateTimeType::class, array('date_widget' => 'single_text','time_widget' => 'single_text','label' => 'Date & heure de Début :'))
            ->add('dateF', DateTimeType::class, array('date_widget' => 'single_text','time_widget' => 'single_text','label' => 'Date & heure de Fin :'))
     
            ->add('Réserver', SubmitType::class, array('label' => 'Réserver'))
              ->add('Annuler', ResetType::class, array('label' => 'Annuler'))
            ->getForm();
                
            $form->handleRequest($request);

             //Validation  du formulaire avec le bouton Ajouter (Submit)
            if($form->isValid()){
               
                $infoSalle = $form->getData();
               
                $idSr = $infoSalle['idSr'];
                $nbpers = $infoSalle['nbpers'];
                $DateD = $infoSalle['dateD'];
                $DateF = $infoSalle['dateF'];


                          $session =  $request->getSession();
                          
                     $idPers = $session->get('idPers');

       $repository = $this->getDoctrine()->getRepository(Personnel::class);
$personnel = $repository->findByIdPers($idPers);    
/*dump($personnel[0]);  */
             
       $reservation = new reservation();
   
        $reservation->setIdSr($idSr);
        $reservation->setNbpers($nbpers);
        $reservation->setDateD($DateD);
        $reservation->setDateF($DateF);
      
       $reservation->setIdPers($personnel[0]);
        

 $em->persist($reservation);
 

      
        $em->flush();
        return $this->redirectToRoute('salles');
    }
     
        return $this->render('default/salles.html.twig', array('sallesform'=>$form->createView(),'liste' => $listeRes, 'listes' => $listeSal));
 }

  
/**
     * @Route("/{idRes}/editRes", name="editRes")
     */   
     public function EditResAction(Request $request, Reservation $salleM){

$em = $this->getDoctrine()->getManager();

dump($salleM);

       //Création de Formulaire Page Events
 $formModif = $this->createFormBuilder()
                                        // ,'data' => $salle->getLieu()))
            ->add('idSr', EntityType::class, array('class' => 'AppBundle:SalleReunion','label' => 'Choisir la Salle :','choice_label' => function ($nomsr){ return $nomsr->getNomsr(); },
              'data'=> $salleM->getIdSr()))
                  //'data' => $salle->getNomsr()))
            ->add('nbpers', TextType::class , array('label' => 'Choix du Nombre de personne prévu :', 'data' => $salleM->getNbpers()))
            ->add('dateD', DateTimeType::class, array('date_widget' => 'single_text','time_widget' => 'single_text','label' => 'Date & heure de Début :' , 'data' => $salleM->getDateD()))
            ->add('dateF', DateTimeType::class, array('date_widget' => 'single_text','time_widget' => 'single_text','label' => 'Date & heure de Fin :', 'data' => $salleM->getDateF()))
     
            ->add('Modifier', SubmitType::class, array('label' => 'Modifier'))
           
            ->getForm();

            $formModif->handleRequest($request);
           
 //Validation  du formulaire avec le bouton Ajouter (Submit)
            if($formModif->isSubmitted() && $formModif->isValid()){
               
                $infoSalle = $formModif->getData();
               
                $idSr = $infoSalle['idSr'];
                $nbpers = $infoSalle['nbpers'];
                $DateD = $infoSalle['dateD'];
                $DateF = $infoSalle['dateF'];


                          $session =  $request->getSession();
                          
                     $idPers = $session->get('idPers');

       $repository = $this->getDoctrine()->getRepository(Personnel::class);
$personnel = $repository->findByIdPers($idPers);    
/*dump($personnel[0]);  */
             
       $reservation = new reservation();
   
        $reservation->setIdSr($idSr);
        $reservation->setNbpers($nbpers);
        $reservation->setDateD($DateD);
        $reservation->setDateF($DateF);
      
       $reservation->setIdPers($personnel[0]);
dump($salleM); 
      
        $em->flush();
       // return $this->render($this->generateUrl('default/events.html.twig'));
            
            return $this->redirectToRoute('salles');
        }
        return $this->render('default/sallesEdit.html.twig',array('sallesMform'=>$formModif->createView(), 'Reservation' => $salleM));    
    }

    /**
     * @Route("/deleteRes", name="deleteRes")
     */
   
    public function deleteResAction(Request $request)
    {
      $idRes = $request->get('idRes');
  if(!empty($idRes)){
      // dump($idRes);
	$em = $this->getDoctrine()->getManager();
     $repository = $this->getDoctrine()->getRepository(Reservation::class);

// recherche d'un seul évènement correspondant au id indiqué
	$reservation = $repository->findOneBy(  array('idRes' => $idRes));
       
      // dump($reservation);
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute('salles');
      }  
	return $this->render('default/deleteRes.html.twig');
	}
}