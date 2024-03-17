<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetApplication extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "image" => $this->image,
            "created_at" => date($this->created_at),
            "application_images" => $this->images->map(fn ($image) => [
                "id" => $image->id,
                "status" => $image->status,
                "color" => $image->color,
                "background" => $image->background
            ]),
        ];
    }
}