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
;
class DefaultController extends Controller
{
    /**
     * @Route("/connexion", name="connexion")
     */

    public function connexionAction(Request $request)
    {
        // replace this example code with whatever you need

//Création de Formulaire Page Connexion
 $form = $this->createFormBuilder()
            ->add('Login', TextType::class,  array('label' => 'Login / Identifiant :') )
            ->add('MDP', PasswordType::class, array('label' => 'Mot de passe :'))
            ->add('Connexion', SubmitType::class, array('label' => 'Connexion'))

            ->getForm();
            $form->handleRequest($request);

            //Validation  du formulaire avec le bouton Connexion (Submit)
            if($form->isValid()){


                $infoUser = $form->getData();
                $Login = $infoUser['Login'];
                $MDP = $infoUser['MDP'];

                //affiche données dans la console Symfony
                dump($Login);
                dump($MDP);

$repository = $this->getDoctrine()->getRepository(Personnel::class);

// query for a single product matching the given name and price
$personnel = $repository->findOneBy(
    array('login' => $Login, 'mdp' => $MDP)
);
//var_dump($personnel->getPrenom());
 $nom = $personnel->getNom() ;
 $prenom = $personnel->getPrenom() ;
//session recuperer nom prénom
                     if($personnel != null){

                          $session =  $request->getSession();
                          $session->set('nom', $nom);
                         $session->set('prenom', $prenom);


              return  $this->render('default/accueil.html.twig' ,[ 'nom'=> $nom, 'prenom'=> $prenom]);
                    }
            }
        return $this->render('default/connexion.html.twig', ['connectform'=>$form->createView()])  ;
   
  }

/**
     * @Route("/accueil", name="accueil")
     */
    public function accueilAction(Request $request)
    {


   
    
        return $this->render('default/accueil.html.twig'  ) ;
    }

/**
     * @Route("/myspace", name="myspace")
     */
    public function myspaceAction(Request $request)
    {


   
    
        return $this->render('default/myspace.html.twig'  ) ;
    }


/**
     * @Route("/calendrier", name="calendrier")
     */
    public function calendrierAction(Request $request)
    {


   
    
        return $this->render('default/calendrier.html.twig'  ) ;
    }
/**
     * @Route("/docs", name="docs")
     */
    public function docAction(Request $request)
    {


   
    
        return $this->render('default/docs.html.twig'  ) ;
    }


        /**
     * @Route("/docs", name="docs")
     */
    public function uploadAction(Request $request)
    {
        
        $form = $this->createFormBuilder()->add('Fichier',FileType::class)
                                          ->add('Envoyer', SubmitType::class)
                                          ->add('Annuler', ResetType::class)
                                          ->getForm();

        // remplacer le code exemple par ce dont vous avez besoin
                                          $liste= $this->getAlldocument() ;
                                          $path=  $this->getParameter('brochures_directory');
         $form->handleRequest($request);

         if($form->isValid())
         {      dump("ok");
          $file = $form->getData();
              
          $uploadFile =  $file["Fichier"];
          // generateUniqueFileName() permet de generer une cle unique pour chaque fichier
          $fileName =$this->generateUniqueFileName().'.'.$uploadFile->getClientOriginalName();
        // var_dump($uploadFile->guessExtension());
          // Déplacez le fichier dans le répertoire où les brochures sont stockées dans le dossier web /uploads / documents
          $fileEx =  $uploadFile->getMimeType();
         
          $uploadFile->move($this->getParameter('brochures_directory'),$fileName);
          $this->fileDoc = null;
          // sauvegarder les données sur la base de donnés 
          $document = new Document();
          $document->setFileDoc($fileName);
          $document->setTypeDoc($fileEx);
          $em = $this->getDoctrine()->getManager();
          // indique à Doctrine que vous souhaitez (éventuellement) sauvegarder le Document (aucune requête pour l'instant)
          $em->persist($document);
          // exécute réellement les requêtes (i. e. la requête INSÉRER)
          $em->flush();

          
          $GLOBALS['liste']= $this->getAlldocument() ;
       
         }
         return $this->render('default/docs.html.twig', ["docsform"=>$form->createView(), 'liste'=>$liste, 'path'=> $path]);
    }
    
  /**
     * @Route("/delete", name="delete")
     */
   
    public function deleteAction(Request $request)
    {
      $idDoc = $request->get('id');
       
       dump( $idDoc);
$em = $this->getDoctrine()->getManager();


     $repository = $this->getDoctrine()->getRepository(Document::class);

// recherche d'un seul document correspondant au id indiqué
$document = $repository->findOneBy(  array('idDoc' => $idDoc));
       

       dump($document);
        $em->remove($document);
        $em->flush();
return $this->render('default/accueil.html.twig');

   
    }


    private function getAlldocument()
    {
        //md5 () réduit la similarité des noms de fichiers générés par
        //uniqid (), qui est basé sur les horodatages
        $docs = $this->getDoctrine()

        ->getRepository(Document::class)
        ->findAll();
        
        
        return $docs;
    }
    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        //md5 () réduit la similarité des noms de fichiers générés par
        //uniqid (), qui est basé sur les horodatages
        return md5(uniqid());
    }
  


    /**
     * @Route("/events", name="events")
     */
    public function addEvtAction(Request $request)
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
 dump($idSR[0]->getIdSr());
             
        $event = new Evenement();
        $event->setNomevt($nomEvt);
        $event->setType($type);
        $event->setJourD($jourD);
        $event->setJourF($jourF);
        $event->setHDebut($hDebut);
        $event->setHFin($hFin);
        $event->setLieu($lieu);
        $event->setIdSR($idSR[0]);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
       $em->persist($event);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
 // On redirige vers la page de visualisation de l'annonce nouvellement créée
      //return $this->redirect($this->generateUrl('default/events.html.twig', array('idEvent' => $event->getIdEvent())));

            }

/////////////////////////modif/////////////////////////////////
     
            $idEvent = $request->get('idEvt');    
       
 $formModif = $this->createFormBuilder()->getForm();
if(!empty($idEvent)){

    dump( $idEvent);

     $repository = $this->getDoctrine()->getRepository(Evenement::class);

// recherche d'un seul évènement correspondant au id indiqué
$eventM = $repository->findOneBy(array('idEvent' => $idEvent));

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
                        'placeholder' => 'Choississez ...'))
            ->add('Modifier', SubmitType::class, array('label' => 'Modifier'))
            ->add('Annuler', ResetType::class, array('label' => 'Annuler'))
            ->getForm();
                
            $formModif->handleRequest($request);
           
 //Validation  du formulaire avec le bouton Ajouter (Submit)
            if($formModif->isValid()){
                
                $infoEvent = $form->getData();
                $nomEvt = $infoEvent['nomEvt'];
                $type = $infoEvent['type'];
                $jourD = $infoEvent['jourD'];
                $jourF = $infoEvent['jourF'];
                $hDebut = $infoEvent['hDebut'];
                $hFin = $infoEvent['hFin'];
                $lieu = $infoEvent['lieu'];
                $idSR = $infoEvent['idSR'];
 dump($idSR[0]->getIdSr());
             
       
        $eventM->setNomevt($nomEvt);
        $eventM->setType($type);
        $eventM->setJourD($jourD);
        $eventM->setJourF($jourF);
        $eventM->setHDebut($hDebut);
        $eventM->setHFin($hFin);
        $eventM->setLieu($lieu);
        $eventM->setIdSR($idSR[0]);
 

dump($eventM); 
      
        $em->flush();
       // return $this->render($this->generateUrl('default/events.html.twig'));
            }
        }
        return $this->render('default/events.html.twig',
         ['eventform'=>$form->createView(),'eventMform'=>$formModif->createView(), 'liste'=> $listeEvt])  ;
   
    
      //  return $this->render('default/events.html.twig'  ) ;*/
    }


     /*
     public function modifEvtAction(Request $request){
$idEvent = $request->get('idEvt');
       
       dump( $idEvent);
$em = $this->getDoctrine()->getManager();


     $repository = $this->getDoctrine()->getRepository(Evenement::class);

// recherche d'un seul évènement correspondant au id indiqué
$eventM = $repository->findOneBy(  array('idEvent' => $idEvent));


       //Création de Formulaire Page Events
 $formModif = $this->createFormBuilder()
            ->add('nomEvt', TextType::class,  array('label' => 'Nom de l\'évènement :' ,'data' => $eventM->getNomevt()))
            ->add('type', TextType::class, array('label' => 'Description :','data' => $eventM->getType()))
            ->add('jourD', DateType::class , array('label' => 'Date de Début :','data' => $eventM->getJourD()))
            ->add('jourF', DateType::class, array('label' => 'Date de Fin :','data' => $eventM->getJourF()))
            ->add('hDebut', TimeType::class, array('label' => 'Heure de Début :','data' => $eventM->getHDebut()))
            ->add('hFin', TimeType::class, array('label' => 'Heure de Fin :','data' => $eventM->getHFin()))
            ->add('lieu', TextType::class, array('label' => 'Lieu :','data' => $eventM->getLieu()))
            ->add('idSR', ChoiceType::class, array('label' => 'Salle :','data' => $eventM->getIdSr()))
            ->add('idSR', EntityType::class, 
                 array('class' => 'AppBundle:SalleReunion',
                        'label' => 'Salle :',
                        'multiple' => 'true',
                        'choice_label' => function($nomsr){
                            return $nomsr->getNomsr();
                        },
                        'placeholder' => 'Choississez ...'))
            ->add('Modifier', SubmitType::class, array('label' => 'Modifier'))
            ->add('Annuler', ResetType::class, array('label' => 'Annuler'))
            ->getForm();
                
            $formModif->handleRequest($request);
 //Validation  du formulaire avec le bouton Ajouter (Submit)
            if($formModif->isValid()){
                
                $infoEvent = $form->getData();
                $nomEvt = $infoEvent['nomEvt'];
                $type = $infoEvent['type'];
                $jourD = $infoEvent['jourD'];
                $jourF = $infoEvent['jourF'];
                $hDebut = $infoEvent['hDebut'];
                $hFin = $infoEvent['hFin'];
                $lieu = $infoEvent['lieu'];
                $idSR = $infoEvent['idSR'];
 dump($idSR[0]->getIdSr());
             
       
        $event->setNomevt($nomEvt);
        $event->setType($type);
        $event->setJourD($jourD);
        $event->setJourF($jourF);
        $event->setHDebut($hDebut);
        $event->setHFin($hFin);
        $event->setLieu($lieu);
        $event->setIdSR($idSR[0]);
 

dump($event); 
      
        $em->flush();
        return $this->render($this->generateUrl('default/events.html.twig'));
            }
        
        
   return $this->render('default/Modifier.html.twig', ['eventMform'=>$formModif->createView()]);

    }
*/


    /**
     * @Route("/deleteEvt", name="deleteEvt")
     */
   
    public function deleteEvtAction(Request $request)
    {
      $idEvent = $request->get('idEvt');
       
       dump( $idEvent);
$em = $this->getDoctrine()->getManager();


     $repository = $this->getDoctrine()->getRepository(Evenement::class);

// recherche d'un seul évènement correspondant au id indiqué
$event = $repository->findOneBy(  array('idEvent' => $idEvent));
       

       dump($event);
        $em->remove($event);
      
        $em->flush();
        
return $this->render('default/accueil.html.twig');

   
    }

    /**
     * @Route("/salles", name="salles")
     */
    public function salleAction(Request $request)
    {

      $em = $this->getDoctrine()->getManager();
       $listeSal = $em->getRepository(SalleReunion::class)->findAll();


$idSr = $request->get('idSr');
       

      
       dump( $idSr);
$em = $this->getDoctrine()->getManager();
       $listeSal = $em->getRepository(SalleReunion::class)->findAll();

     $repository = $this->getDoctrine()->getRepository(SalleReunion::class);

// recherche d'un seul évènement correspondant au id indiqué
$salle = $repository->findOneBy(  array('idSr' => $idSr));
 dump($salle);
       $em = $this->getDoctrine()->getManager();

       //Création de Formulaire Page Events
 $form = $this->createFormBuilder()
            ->add('lieu', EntityType::class,  array('class' => 'AppBundle:SalleReunion', 'label' => 'Choisir le Lieu :', 'choice_label' => function ($lieu){ return $lieu->getLieu();}, 
                  'placeholder' => 'Choississez le lieu'))
                  // ,'data' => $salle->getLieu()))
            ->add('nomsr', EntityType::class, array('class' => 'AppBundle:SalleReunion','label' => 'Choisir la Salle :','choice_label' => function ($nomsr){ return $nomsr->getNomsr();},
                  'placeholder' => 'Choississez le nom'))
                  //'data' => $salle->getNomsr()))
            ->add('nbpers', TextType::class , array('label' => 'Choix du Nombre de personne prévu :'))
                  //'data' => $salle->getNbpers()))
            ->add('dateD', DateTimeType::class, array('date_widget' => 'single_text','time_widget' => 'single_text','label' => 'Date & heure de Début :'))
            ->add('dateF', DateTimeType::class, array('date_widget' => 'single_text','time_widget' => 'single_text','label' => 'Date & heure de Fin :'))
               
          
           /* -            ->add('idSR', EntityType::class, 
                 array('class' => 'AppBundle:SalleReunion', 
                        'label' => 'Salle :',
                         'choice_label' => function($nomsr){
                            return $nomsr->getNomsr();
                        },
                        'placeholder' => 'Choississez ...'))*/
            ->add('Réserver', SubmitType::class, array('label' => 'Réserver'))
            ->getForm();
                
            $form->handleRequest($request);

             //Validation  du formulaire avec le bouton Ajouter (Submit)
            if($form->isValid()){
                
                $infoSalle = $form->getData();
                $lieu = $infoSalle['lieu'];
                $nomsr = $infoSalle['nomsr'];
                $nbpers = $infoSalle['nbpers'];
                $DateD = $infoSalle['dateD'];
                $DateF = $infoSalle['dateF'];
             
       
        $salle->setLieu($lieu);
        $salle->setNomsr($nomsr);
        $salle->setNbpers($nbpers);
        $salle->setDateD($dateD);
        $salle->setDateF($dateF);
        

dump($salle); 
      
        $em->flush();
    }
  
        return $this->render('default/salles.html.twig',['sallesform'=>$form->createView(), 'liste' => $listeSal]  ) ;
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {    
        return $this->render('default/contact.html.twig') ;
    }
}