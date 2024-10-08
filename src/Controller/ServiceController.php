<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
    #[Route('/showService/{name}/{department}', name: 'app_service')]
    public function showService($name,$department): Response
    {
        return $this->render('service/showService.html.twig', [ 'var'=>$name,'dep'=>$department,
            'controller_name' => 'ServiceController',
        ]);
    }
    #[Route('/goToIndex', name: 'app_service')]
    public function goToIndex(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

}
