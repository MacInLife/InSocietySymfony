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
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Personnel;
use AppBundle\Entity\Document;
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

        // replace this example code with whatever you need
                                          $liste= $this->getAlldocument() ;
                                          $path=  $this->getParameter('brochures_directory');
         $form->handleRequest($request);
         if($form->isValid())
         {   $file = $form->getData();
          $uploadFile =  $file["Fichier"];
          // generateUniqueFileName() permet de generer une cle unique pour chaque fichier
          $fileName =$this->generateUniqueFileName().'.'.$uploadFile->getClientOriginalName();
        // var_dump($uploadFile->guessExtension());
          // Move the file to the directory where brochures are stored  dans le dossier web /uploads / documents
          $fileEx =  $uploadFile->getMimeType();
         
          $uploadFile->move($this->getParameter('brochures_directory'),$fileName);
          $this->fileDoc = null;
          // sauvegarder les données sur la base de donnés 
          $document = new Document();
          $document->setFileDoc($fileName);
          $document->setTypeDoc($fileEx);
          $em = $this->getDoctrine()->getManager();
          // tells Doctrine you want to (eventually) save the Product (no queries yet)
          $em->persist($document);
          // actually executes the queries (i.e. the INSERT query)
          $em->flush();
          $GLOBALS['liste']= $this->getAlldocument() ;
        
         }
         return $this->render('default/docs.html.twig', ["docsform"=>$form->createView(), 'liste'=>$liste, 'path'=> $path]);
    }
    
    private function getAlldocument()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
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
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }


    /**
     * @Route("/events", name="events")
     */
    public function eventAction(Request $request)
    {
              
  
    // replace this example code with whatever you need

//Création de Formulaire Page Connexion
 $form = $this->createFormBuilder()
            ->add('nomEvt', TextType::class,  array('label' => 'Nom de l\'évènement :'))
            ->add('type', TextType::class, array('label' => 'Description :'))
            ->add('jourD', DateType::class, array('label' => 'Date de Début :'))
            ->add('jourF', DateType::class, array('label' => 'Date de Fin :'))
            ->add('hDebut', TimeType::class, array('label' => 'Heure de Début :'))
            ->add('hFin', TimeType::class, array('label' => 'Heure de Fin :'))
            ->add('lieu', TextType::class, array('label' => 'Lieu :'))
            ->add('idSR', ChoiceType::class, array('label' => 'Salle :'))
            ->add('Ajouter', SubmitType::class, array('label' => 'Ajouter'))
            ->add('Annuler', ResetType::class, array('label' => 'Annuler'))

            ->getForm();
            $form->handleRequest($request);

            //Validation  du formulaire avec le bouton Connexion (Submit)
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

              $em = $this->getDoctrine()->getManager();

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

            }

             
        return $this->render('default/events.html.twig', ['eventform'=>$form->createView()])  ;
   
    
      //  */return $this->render('default/events.html.twig'  ) ;
    }

    /**
     * @Route("/salles", name="salles")
     */
    public function salleAction(Request $request)
    {


   
    
        return $this->render('default/salles.html.twig'  ) ;
    }
}

