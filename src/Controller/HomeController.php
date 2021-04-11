<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        return $this->twig->render('Home/index.html.twig');
    }


    /**Dans le fichier /src/Controller/HomeController.php, ajoute une nouvelle méthode d'action 
    * showProducts() comportant l'initialisation du tableau ci-dessous :
     $products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre']; */


    public function showProducts()
    {
        $products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre'];
        return $this->twig->render('Home/products.html.twig', ['products' => $products]);
    }
    
}


 
