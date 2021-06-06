<?php


namespace App\Videolibrary\Api\Aplication\Response;

use App\Videolibrary\Api\Domain\VideoCollection;

class VideoCollectionResponse
{
    private array $videos;

    public function __construct(VideoCollection $videoCollection)
    {
        $this->videos = [];

        foreach ($videoCollection->getCollection() as $video) {
            $this->videos[] = new VideoResponse($video);
        }

    }

    public function videos(): array
    {
        return $this->videos;
    }

    public function toArray(): array
    {
        return array_map(function ($video){
            return $video->toArray();
        }, $this->videos());
    }


}