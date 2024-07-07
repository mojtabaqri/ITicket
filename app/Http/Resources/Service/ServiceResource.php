<?php

namespace App\Http\Resources\Service;

use App\Http\Enums\Services\Status;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            "id" => $this->id,
            "service_category"=>  ServiceCategoryResource::collection($this->whenLoaded('category')) ,
            "Service_state"=>$this->location()->get() ,
            "service_name"=>$this->service_name,
            "service_price" => $this->service_price,
            "service_description"=> $this->service_description,
            "service_status"=>Status::from($this->service_status)->label(),
            "updated_at" =>$this->updated_at ,
            "created_at"=> $this->updated_at,
            ];



    }
}
