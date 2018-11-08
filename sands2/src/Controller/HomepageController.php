<?php
/**
 * Created by PhpStorm.
 * User: Jean-baptiste
 * Date: 29/10/2018
 * Time: 17:55
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends Controller {

    /**
     * @Route("/")
     */
    public function index() {
        $articles = $this->getDoctrine()
            ->getRepository('App:Article')
            ->findAll();
        return $this->render('homepage/index.html.twig', ['mainNavHome'=>true, 'title'=>'Accueil', 'articles'=>$articles]);
    }

}