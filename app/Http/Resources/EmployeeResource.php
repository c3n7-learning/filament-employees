<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,

            'address' => $this->address,
            'zipCode' => $this->zip_code,

            'birthDate' => $this->birth_date,
            'dateHired' => $this->date_hired,

            'countryId' => $this->country->id,
            'countryName' => $this->country->name,

            'stateId' => $this->state->id,
            'stateName' => $this->state->name,

            'departmentId' => $this->department->id,
            'departmentName' => $this->department->name,
        ];
    }
}
