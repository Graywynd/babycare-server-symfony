<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Document\Parnt;
use AppBundle\Document\Babysitter;
use AppBundle\Repository\ParentRepository;
use AppBundle\Repository\BabysitterRepository;

class AuthentificationController extends Controller
{

    public $parentrepository;
    public $babysitterrepository;

    public function __construct(ParentRepository $parentrepository, BabysitterRepository $babysitterrepository)
    {
        $this->parentrepository =  $parentrepository;
        $this->babysitterrepository =  $babysitterrepository; 
    }

    /**
     * @Route("/register", name="register")
     * @Method({"POST"})
     */
    public function register(Request $request)
    {
        $data = json_decode($request->getContent(), true);


        if(empty($data["email"]) || empty($data["username"]) || empty($data["password"]) ){

           return new JsonResponse(array('success' => false,'message' => 'Vous devez fournir un email , un nom utilisateur et un mot de passe'));
        }else if ($data["usertype"] == "parent"){
         $parent = new Parnt();
         $parent->setLastname($data["lastname"]);
         $parent->setFirstname($data["firstname"]);
         $parent->setEmail(strtolower($data["email"]));
         $parent->setUsername(strtolower($data["username"]));
         $parent->setPassword($data["password"]);
         $parent->hashPassword();
         $parent->setGender($data["gender"]);
         $parent->setAddress($data["address"]);
         $parent->setBirthdate($data["Birthdate"]);

        // $this->parentrepository = $this->get('doctrine.orm.entity_manager')->getRepository('AppBundle\Document\Parnt');
         $this->parentrepository->AddParent($parent);      

      /* $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($parent);
        $dm->flush(); */
 
         return new JsonResponse(array('success' => true,'message' => 'Compte enregistré'));
                
        }else if($data["usertype"] == "babysitter"){

         $babysitter = new Babysitter();
         $babysitter->setLastname($data["lastname"]);
         $babysitter->setFirstname($data["firstname"]);
         $babysitter->setEmail(strtolower($data["email"]));
         $babysitter->setUsername(strtolower($data["username"]));
         $babysitter->setPassword($data["password"]);
         $babysitter->hashPassword();
         $babysitter->setGender($data["gender"]);
         $babysitter->setAddress($data["address"]);
         $babysitter->setBirthdate($data["Birthdate"]);

        $this->babysitterrepository->AddBabysitter($babysitter);      

      /*  $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($babysitter);
        $dm->flush(); */
 
         return new JsonResponse(array('success' => true,'message' => 'Compte enregistré'));

        }
    }



    /**
     * @Route("/test", name="testing")
     * @Method({"POST"})
     */
    public function test_post(Request $request)
    {
        $data = json_decode($request->getContent(), true);


        if(empty($data["email"]) || empty($data["username"]) || empty($data["password"]) ){

           return new JsonResponse(array('success' => false,'message' => 'test not ok'));
        }else if ($data["usertype"] == "parent"){
         
         return new JsonResponse(array('succccess' => true,'message' => 'test ok with docker in jenkins'));
                
        }
    }

    /**
     * @Route("/test", name="places_list")
     * @Method({"GET"})
     */
    public function getPlacesAction()
    {

      return new JsonResponse(array('success' => true,'message' => 'Cest bon'));
    }

}