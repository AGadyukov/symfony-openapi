<?php


namespace App\DTO;

/**
 * @OA\Schema(
 *   schema="User",
 *   type="object"
 * )
 */
class UserDTO implements \JsonSerializable
{

    /**
     * @OA\Property()
     */
    private string $name;

    /**
     * @OA\Property()
     */
    private string $email;

    private int $internalFlag = 0;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function jsonSerialize(): array
    {
        return [
            'name' =>  $this->name,
            'email' => $this->email
        ];
    }
}