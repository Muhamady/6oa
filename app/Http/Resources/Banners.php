<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Banners extends JsonResource
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
            'id' => $this->id,
            'image' => url('banners/'. $this->image),
            'title' => $this->title,
            'descriptipn' => $this->description,
            'button_one_text' => $this->button_one_text,
            'button_one_link' => $this->button_one_link,
            'button_two_text' => $this->button_two_text,
            'button_two_link' => $this->button_two_link,
        ];
    }
}
