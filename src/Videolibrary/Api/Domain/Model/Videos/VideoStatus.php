<?php


namespace App\Videolibrary\Api\Domain\Model\Videos;


class VideoStatus
{
    private string $value;

    const ALLOWED_VALUES = [
        'pending',
        'published',
        'removed'
    ];

    public function __construct(string $value)
    {
        if (!in_array($value, self::ALLOWED_VALUES)) {
            throw new InvalidVideoStatusValueException();
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(VideoStatus $status)
    {
        return $this->value() === $status->value();
    }



}