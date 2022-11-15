<?php
namespace App\Controller;

use App\Repository\SquirrelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name:'app_index')]
    public function index(SquirrelRepository $repository): Response
    {
        return $this->render('index.html.twig', [
            'squirrels' => $repository->findOneBy(array('name' => 'NOM : 1')),
         ]);
    }
}