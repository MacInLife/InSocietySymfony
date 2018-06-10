<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
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
            ->add('MDP', PasswordType::class, array('label' => 'Mot de passe :',         
                'invalid_message' => 'Mot de passe incorrect'
            ))
           // ->add('MDP', PasswordType::class, array('label' => 'Mot de passe :'))
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
 $idPers = $personnel->getIdPers();
//session recuperer nom prénom
                     if($personnel != null){

                          $session =  $request->getSession();
                          $session->set('nom', $nom);
                         $session->set('prenom', $prenom);
                         $session->set('idPers', $idPers);


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
        return $this->render('default/myspace.html.twig'  );
    }


    /**
     * @Route("/calendrier", name="calendrier")
     */
    public function calendrierAction(Request $request)
    {
        return $this->render('default/calendrier.html.twig');
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {    
        return $this->render('default/contact.html.twig') ;
    }


    /**
     * @Route("/annuaire", name="annuaire")
     */
    public function annuaireAction(Request $request)
    {    
      $em = $this->getDoctrine()->getManager();
       $listePers = $em->getRepository(Personnel::class)->findAll();

        $idPers = $request->get('idPers');
        
        return $this->render('default/annuaire.html.twig', ['liste' => $listePers]) ;
    }


 /**
     * @Route("/plan", name="plan")
     */
    public function planAction(Request $request)
    {    
        return $this->render('default/plan.html.twig') ;
    }



    
}