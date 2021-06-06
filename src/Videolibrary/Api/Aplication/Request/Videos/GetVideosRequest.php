<?php


namespace App\Videolibrary\Api\Aplication\Request\Videos;


class GetVideosRequest
{
    private string $status;

    public function __construct(string $status)
    {
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }


}