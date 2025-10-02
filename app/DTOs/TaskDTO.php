<?php

namespace App\DTOs;

class TaskDTO
{
    public function __construct(
        public readonly string $title,
        public readonly string $description,
        public readonly string $status,
    ) {}
    public static function fromArray(array $data) : self
    {
        return new self(
            title: $data['title'],
            description: $data['description'],
            status: $data['status'],
        );
    }
    public  function toArray() : array{
        return [
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
        ];
    }

}
