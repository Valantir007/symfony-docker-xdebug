<?php

declare(strict_types=1);

namespace App;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/ping", name="ping", methods={"GET"})
 */
final class PingController extends AbstractController
{
    public function __invoke(): JsonResponse
    {
        return JsonResponse::fromJsonString("tes2t");
    }
}
