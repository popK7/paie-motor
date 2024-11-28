<?php

namespace App\Controller;

use App\Handler\CountryHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('api')]
class CountryController extends AbstractController
{
    public function __construct(private CountryHandler $handler)
    {
    }

    #[Route('/countries', name: 'app_countries')]
    public function index(Request $request): Response
    {
        return $this->handler->getAll($request);
    }
}
