<?php


namespace App\Videolibrary\Api\Aplication\Response;


use App\Videolibrary\Api\Domain\Model\Videos\Video;

class VideoResponse
{

    private string $id;
    private string $tittle;
    private int $duration;
    private string $status;

    public function __construct(Video $video)
    {
        $this->id = $video->getId()->getValue();
        $this->tittle = $video->getTittle()->getValue();
        $this->duration = $video->getDuration();
        $this->status = $video->getStatus()->value();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTittle(): string
    {
        return $this->tittle;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function toArray() {
        return [
          'id' => $this->getId(),
          'tittle' => $this->getTittle(),
          'duration' => $this->getDuration(),
          'status' => $this->getStatus()
        ];
    }

}