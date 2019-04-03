<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Activity extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'            => $this->id,
            'activity_name' => $this->activity_name,
            'activity_img'  => $this->activity_img,
            'url'           => $this->url,
            'top_contents'  => $this->top_contents,
            'total_donation'=> $this->total_donation,
            'fans'          => $this->fans,
            'title'         => $this->title,
            'top_contents'  => $this->top_contents,
            'sub_title1'    => $this->sub_title1,
            'sub_contents1' => $this->sub_contents1,
            'sub_image1'    => $this->sub_image1,
            'sub_title2'    => $this->sub_title2,
            'sub_contents2' => $this->sub_contents2,
            'sub_image2'    => $this->sub_image2,
            'sub_title3'    => $this->sub_title3,
            'sub_contents3' => $this->sub_contents3,
            'sub_image3'    => $this->sub_image3,
            
            "school" => [
                "id"          => $this->school->id,
                "school_name" => $this->school->school_name,
                "school_logo" => $this->school->school_logo,
                "url"         => $this->school->url,
            ]

        ];
    }
}
