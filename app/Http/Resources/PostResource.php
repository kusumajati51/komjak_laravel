<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'description' => $this->description,
            'youtube_id' => $this->youtube_id,
            'thumbnail' => 'storage/' . $this->thumbnail,
            'caption' => $this->postImages()->caption,
            'alt' => $this->postImages()->alt,
            'image' =>  env('APP_URL', 'http://localhost:8000') . '/storage/' . $this->postImages()->path
        ];
    }
}
