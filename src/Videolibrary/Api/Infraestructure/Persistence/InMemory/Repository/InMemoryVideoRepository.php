<?php


namespace App\Videolibrary\Api\Infraestructure\Persistence\InMemory\Repository;


use App\Videolibrary\Api\Domain\Model\Videos\Video;
use App\Videolibrary\Api\Domain\Model\Videos\VideoId;
use App\Videolibrary\Api\Domain\Model\Videos\VideoRepository;
use App\Videolibrary\Api\Domain\Model\Videos\VideoStatus;
use App\Videolibrary\Api\Domain\Model\Videos\VideoTittle;
use App\Videolibrary\Api\Domain\VideoCollection;

class InMemoryVideoRepository implements VideoRepository
{

    private array $videos;

    public function __construct()
    {
        $this->videos[] = new Video(
            new VideoId('1'),
            new VideoTittle('Tittle'),
            22323,
            new VideoStatus('pending')
        );
        $this->videos[] = new Video(
            new VideoId('2'),
            new VideoTittle('Tittle2'),
            22323,
            new VideoStatus('removed')
        );
        $this->videos[] = new Video(
            new VideoId('3'),
            new VideoTittle('Tittle3'),
            22323,
            new VideoStatus('removed')
        );
    }

    public function findByStatus(VideoStatus $status): VideoCollection
    {
        $videoCollection = new VideoCollection();

        array_map(function ($video) use ($videoCollection, $status) {
            if ($video->getStatus()->equals($status)) {
                $videoCollection->add($video);
            }
        }, $this->videos);

        return $videoCollection;
    }
}