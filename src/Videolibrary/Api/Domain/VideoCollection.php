<?php


namespace App\Videolibrary\Api\Domain;


use App\Videolibrary\Api\Domain\Collection\ObjectCollection;
use App\Videolibrary\Api\Domain\Model\Videos\Video;

class VideoCollection extends ObjectCollection
{
    protected function className(): string
    {
        return Video::class;
    }

}