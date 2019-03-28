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
            'school_logo' => $this->school_logo,
            'top_contents' => $this->top_contents,
            
            'sub_title1'=>$this->sub_title1,
            'sub_contents1'=>$this->sub_contents1,
            'sub_image1'=>$this->sub_image1,
            'sub_title2'=>$this->sub_title2,
            'sub_contents2'=>$this->sub_contents2,
            'sub_image2'=>$this->sub_image2,
            'sub_title3'=>$this->sub_title3,
            'sub_contents3'=>$this->sub_contents3,
            'sub_image3'=>$this->sub_image3,

        ];
    }


}
