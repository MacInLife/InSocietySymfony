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


class DocumentController extends Controller
{
	/**
     * @Route("/docs", name="docs")
     */
    public function docAction(Request $request)
    {
   
          $liste= $this->getAlldocument() ;
        $path=  $this->getParameter('brochures_directory');

        return $this->render('default/docs.html.twig', ['liste'=>$liste, 'path'=> $path]) ;
    }


        /**
     * @Route("/add", name="add")
     */
    public function uploadAction(Request $request)
    {
        
        $form = $this->createFormBuilder()->add('Fichier',FileType::class)
                                          ->add('Envoyer', SubmitType::class)
                                          ->getForm();
   
        // remplacer le code exemple par ce dont vous avez besoin
                        
                                    

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

         
         }


         return $this->render('default/docsAdd.html.twig' , array('docsform'=>$form->createView()));
    }


    
  /**
     * @Route("/delete", name="delete")
     */
   
    public function deleteAction(Request $request)
    {
      $idDoc = $request->get('id');
      
   if(!empty($idDoc)){                                    
     
$em = $this->getDoctrine()->getManager();


     $repository = $this->getDoctrine()->getRepository(Document::class);

// recherche d'un seul document correspondant au id indiqué
$document = $repository->findOneBy(  array('idDoc' => $idDoc));
       

     //  dump($document);
        $em->remove($document);
        $em->flush();
 return $this->redirectToRoute('docs');
}
return $this->render('default/docsDel.html.twig');
   
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
}