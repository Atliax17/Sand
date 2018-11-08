<?php
/**
 * Created by PhpStorm.
 * User: Jean-baptiste
 * Date: 29/10/2018
 * Time: 18:01
 */

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/admin") */
class HomepageController extends Controller {

    /**
     * @Route("/")
     */
    public function index() {
        return $this->render('admin/homepage/index.html.twig', ['mainNavAdmin' => true, 'title' => 'Espace Admin']);
    }

}