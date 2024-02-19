<?php

namespace App\Http\Resources\City;

use App\Http\Resources\BaseResource;
use Illuminate\Http\Request;

class CityResource extends BaseResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'region' => $this->region,
        ];
    }
}
