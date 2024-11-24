<?php

namespace App\Http\Resources\V1\Consultation;

use App\Http\Resources\PaginationResource;
use App\Http\Resources\V1\Service\ServiceGeneralResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ConsultationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'content' => $this->collection,
            'pagination' => PaginationResource::make($this),
        ];
    }
}