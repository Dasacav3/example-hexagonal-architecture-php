<?php

declare(strict_types=1);

namespace Core\Domain\Entities\User;

class User
{
    private string $id;
    private string $name;
    private string $email;
    private string $password;
    private string $createdAt;
    private string $updatedAt;

    public function __construct(
        string $id,
        string $name,
        string $email,
        string $password,
        string $createdAt = '',
        string $updatedAt = ''
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->createdAt = $createdAt ?? date('Y-m-d H:i:s');
        $this->updatedAt = $updatedAt ?? '';
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
}
