<?php


namespace App\Videolibrary\Api\Aplication\Query\Video;


use App\Videolibrary\Api\Aplication\Request\Videos\GetVideosRequest;
use App\Videolibrary\Api\Aplication\Response\VideoCollectionResponse;
use App\Videolibrary\Api\Domain\Model\Videos\VideoRepository;
use App\Videolibrary\Api\Domain\Model\Videos\VideoStatus;

class GetVideoHandler
{

    private VideoRepository $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    public function __invoke(GetVideosRequest $videosRequest): VideoCollectionResponse
    {

        $videos = $this->videoRepository->findByStatus(
            new VideoStatus($videosRequest->getStatus())
        );


        return new VideoCollectionResponse($videos);
    }

}