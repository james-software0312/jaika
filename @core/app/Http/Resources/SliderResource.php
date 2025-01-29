<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "title" => $this->title,
            'image_url' => get_attachment_image_by_id($this->image)["img_url"]// get_attachment_image_by_id($this->image)["img_url"] ?? ""
        ];
    }
}
