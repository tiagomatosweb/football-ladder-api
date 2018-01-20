<?php
namespace App\Acme\Traits;

trait apiResponses {
    protected $statusCode = 200;

    /**
     * @return mixed
     */
    protected function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    protected function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondNotFound($message = 'Not found!')
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondInternalError($message = 'Internal Server Error!', $apiErrorCode = 'internalServerError')
    {
        return $this->setStatusCode(500)->respondWithError($message, $apiErrorCode);
    }

    /**
     * @param array $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithValidationError($message = [], $apiErrorCode = '')
    {
        $msg = json_decode($message);
        if (!empty($msg)) {
            $message = $msg;
        }
        return $this->setStatusCode(400)->respondWithError($message, $apiErrorCode);
    }

    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithError($message = 'Oops! Something went wrong.', $apiErrorCode = 'unknownError', $headers = [])
    {
        return response()->json([
            'status' => 'error',
            'error_code' => $apiErrorCode,
            'message' => $message
        ], $this->getStatusCode(), $headers);
    }

    /**
     * @param $data
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respond($data = '', $headers = [])
    {
        return response()->json([
            'status' => 'ok',
            'data' => $data
        ], $this->getStatusCode(), $headers);
    }
}