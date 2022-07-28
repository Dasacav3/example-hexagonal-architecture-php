<?php

declare(strict_types=1);

namespace Core\Domain\Entities\Image;

class Image
{
    private string $id;
    private string $name;
    private string $uri;
    private string $mimeType;
    private int $size;
    private string $createdAt;
    private string $updatedAt;
    
    public function __construct(
        string $id,
        string $name,
        string $uri,
        string $mimeType,
        int $size,
        string $createdAt = '',
        string $updatedAt = ''
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->uri = $uri;
        $this->mimeType = $mimeType;
        $this->size = $size;
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
    
    public function getUri(): string
    {
        return $this->uri;
    }
    
    public function getMimeType(): string
    {
        return $this->mimeType;
    }
    
    public function getSize(): int
    {
        return $this->size;
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