<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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

        //modification
        return [
            'title' => $this->title,
            'published' => $this->created_at->format("d F y"),
            'subject' => $this->subject->name,
            'user' => $this->user,
        ];
    }

    public function with($request)
    {
        return ['status' => 'success'];
    }
}
