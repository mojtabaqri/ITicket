<?php

namespace App\Http\Resources\Service;

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
            "service_category"=> $this->category() ,
//            "Service_state"=>$this->state() ,
            "service_name"=>$this->service_name,
            "service_price" => $this->service_price,
            "service_description"=> $this->service_description,
//            "service_status"=>'Service status accessor' ,
            "updated_at" =>$this->updated_at ,
            "created_at"=> $this->updated_at,
            "id" => $this->id
            ];
    }
}
