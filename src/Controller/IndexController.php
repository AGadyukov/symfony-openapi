<?php

namespace App\Controller;

use App\DTO\UserDTO;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/user/{email}", name="user")
     * @OA\Get(
     *     path="/user/{email}",
     *     tags={"user"},
     *     summary="Returns user by email",
     *     operationId="getUser",
     *     @OA\Parameter(
     *         name="email",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Requested user",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found"
     *     )
     * )
     * @param string $email
     * @return JsonResponse
     */
    public function view(string $email): JsonResponse
    {
        return $this->json(new UserDTO('example', $email));
    }
}
