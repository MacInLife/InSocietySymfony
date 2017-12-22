<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Personnel
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
     * @Route("/docs", name="docs")
     */
    public function docAction(Request $request)
    {


   
    
        return $this->render('default/docs.html.twig'  ) ;
    }
    /**
     * @Route("/events", name="events")
     */
    public function eventAction(Request $request)
    {


   
    
        return $this->render('default/events.html.twig'  ) ;
    }
    /**
     * @Route("/salles", name="salles")
     */
    public function salleAction(Request $request)
    {


   
    
        return $this->render('default/salles.html.twig'  ) ;
    }
}

