<?php


namespace App\Videolibrary\Api\Domain\Model\Videos;


class VideoTittle
{

    private string $value;

    public function __construct(string $tittle)
    {
        $this->value = $tittle;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }


}