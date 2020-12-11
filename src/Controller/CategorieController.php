<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie/show/{sms?}", name="categorie_show",methods={"POST","GET"})
     */
    public function index(CategorieRepository $repo): Response
    {
        //dd($repo->findAll());
        $categories=$repo->findAll();
        return $this->render('categorie/index.html.twig', [
            "categories"=>$categories
        ]);
    }
}
