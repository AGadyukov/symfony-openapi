<?php

namespace App\Controller;

use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as AbstractSymfonyController;

/**
 * @OA\Info(
 *     title="SimpleAPI",
 *     description="Brand new Simple REST API that provides cool endpoints",
 *     version="1.0.0"
 * )
 */
abstract class AbstractController extends AbstractSymfonyController
{
}