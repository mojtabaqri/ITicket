<?php

namespace App\Http\Resources\Service;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'categoryId'=>$this->id,
          'categoryName'=>$this->name,
          'categoryDescription'=>$this->description,
          'categoryParent' => new ServiceCategoryResource($this->whenLoaded('parent')),
          'categoryChildren' => ServiceCategoryResource::collection($this->whenLoaded('children')),
        ];
    }
}
