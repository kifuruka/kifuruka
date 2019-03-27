<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class School extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'school_name' => $this->school_name,
        'activity_count' => $this->activity_count,
        'school_img'=> $this->school_img,
        'url'=> $this->url,
        ];
    }
}
