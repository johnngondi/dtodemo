<?php

namespace App\DTOs;

use WendellAdriel\ValidatedDTO\ValidatedDTO;

class PostDTO extends ValidatedDTO
{
    
    public string $title;
    public string $body;

    protected function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'body' => 'required'    
        ];
    }

    protected function defaults(): array
    {
        return [];
    }

    protected function casts(): array
    {
        return [];
    }
}
