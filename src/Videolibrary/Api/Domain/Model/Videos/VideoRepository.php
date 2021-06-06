<?php


namespace App\Videolibrary\Api\Domain\Model\Videos;


use App\Videolibrary\Api\Domain\VideoCollection;

interface VideoRepository
{

    public function findByStatus(VideoStatus $status): VideoCollection;


}