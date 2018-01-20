<?php

namespace App\Http\Controllers\Api\V1;

use App\Acme\Traits\apiResponses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    use apiResponses;
//    protected $statusCode = 200;
//
//    /**
//     * @return mixed
//     */
//    public function getStatusCode()
//    {
//        return $this->statusCode;
//    }
//
//    /**
//     * @param mixed $statusCode
//     */
//    public function setStatusCode($statusCode)
//    {
//        $this->statusCode = $statusCode;
//
//        return $this;
//    }
//
//    /**
//     * @param string $message
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function respondNotFound($message = 'Not found!')
//    {
//        return $this->setStatusCode(404)->respondWithError($message);
//    }
//
//    /**
//     * @param string $message
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function respondInternalError($message = 'Internal error!')
//    {
//        return $this->setStatusCode(500)->respondWithError($message);
//
//    }
//
//    /**
//     * @param string $message
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function respondWithError($message = 'Oops! Something went wrong.', $headers = [])
//    {
//        return response()->json([
//            'status' => 'error',
//            'message' => $message
//        ], $this->getStatusCode(), $headers);
//    }
//
//    /**
//     * @param $data
//     * @param array $headers
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function respond($data = '', $headers = [])
//    {
//        return response()->json($data, $this->getStatusCode(), $headers);
//    }
}
