<?php
declare(strict_types=1);

namespace App\User\Application\DTO;

final class UserDTO
{
    public function __construct(
        public readonly string $id
    )
    {
    }
}
