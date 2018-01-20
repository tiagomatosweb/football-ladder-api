<?php
namespace App\Acme\Exceptions;
use Exception;

class ApiException extends Exception {
    protected $code = 500;
    protected $message = 'Error exists';
    protected $apiErrorCode = 'apiError';

    public function getApiErrorCode()
    {
        return $this->apiErrorCode;
    }
}