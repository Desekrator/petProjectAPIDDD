<?php


namespace App\Videolibrary\Api\Infraestructure\Ui\Http\Controller\Videos;


use App\Videolibrary\Api\Aplication\Query\Video\GetVideoHandler;
use App\Videolibrary\Api\Aplication\Request\Videos\GetVideosRequest;
use App\Videolibrary\Api\Domain\Model\Videos\InvalidVideoStatusValueException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class GetVideosController
{

    private GetVideoHandler $videoHandler;

    public function __construct(GetVideoHandler $videoHandler)
    {
        $this->videoHandler = $videoHandler;
    }

    public function __invoke(Request $request)
    {
        try {
            $videos = ($this->videoHandler)(
                new GetVideosRequest('removed')
            );

            $response = new JsonResponse([
                'status' => 'ok',
                'videos' => [
                    $videos->toArray()
                ]
            ], 200);

        } catch (InvalidVideoStatusValueException $error) {
            $response = new JsonResponse(
                [
                    'status' => 'Error',
                    'error_message' => 'Invalid status value'
                ], 500
            );
        }

        return $response;

    }

}