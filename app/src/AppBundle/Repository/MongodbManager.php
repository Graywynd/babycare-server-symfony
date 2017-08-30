<?php
namespace AppBundle\Repository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class  MongodbManager extends Controller
{

    private static $dm;

    public function __construct() {  
   }




    public  function getMongodbManager(){
        if(is_null(self::$dm)){
         self::$dm = $this->get('doctrine_mongodb')->getManager();
        }






        return self::$dm;
    }


    
}