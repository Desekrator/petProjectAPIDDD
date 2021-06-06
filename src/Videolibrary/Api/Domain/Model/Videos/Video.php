<?php


namespace App\Videolibrary\Api\Domain\Model\Videos;


class Video
{
    private VideoId $id;
    private VideoTittle $tittle;
    private int $duration;
    private VideoStatus $status;

    public function __construct(VideoId $id, VideoTittle $tittle, int $duration, VideoStatus $status)
    {
        $this->id = $id;
        $this->tittle = $tittle;
        $this->duration = $duration;
        $this->status = $status;
    }

    public function getStatus(): VideoStatus
    {
        return $this->status;
    }

    public function setStatus(VideoStatus $status): void
    {
        $this->status = $status;
    }

    public function getId(): VideoId
    {
        return $this->id;
    }

    public function getTittle(): VideoTittle
    {
        return $this->tittle;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }


}