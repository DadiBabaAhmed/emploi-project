<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        $nom = "Aron";
        $prenom= "DB";
        /* $rep = new Response('<html><head></head><body>Bonjour</body></html>');
        return $rep;*/
        $rep =$this->render('main/index.html.twig', ['n'=> $nom,'p'=> $prenom
        
        ]);
        return $rep;
        /*return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);*/
    }
    #[Route('/liste', name: 'app_liste')]
    public function liste(): Response
    {
        $nom = "Dadi Baba";
        $prenom= "Ahmed";
        /* $rep = new Response('<html><head></head><body>Bonjour</body></html>');
        return $rep;*/
        $rep =$this->render('main/liste.html.twig', ['n'=> $nom,'p'=> $prenom
        
        ]);
        return $rep;
        /*return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);*/
    }
    #[Route('/', name: 'app_welcome')]
    public function acceuil(): Response
    {
        
        return $this->render('main/acceuil.html.twig', ['controller_name'=>'MainController'
        
        ]);
    }

    #[Route('/somme/{a}/{b}', name:'app_somme')]
    public function somme($a,$b):Response
    {
        $somme= $a + $b;
        return $this->render('main/somme.html.twig', [ "elem1" => $a , "elem2" => $b , "som" => $somme ]);    
    }
}
