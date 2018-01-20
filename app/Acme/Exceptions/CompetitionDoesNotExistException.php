<?php
namespace App\Acme\Exceptions;

class CompetitionDoesNotExistException extends ApiException {
    protected $code = 400;
    protected $message = 'Competition does not exist.';
    protected $apiErrorCode = 'CompetitionDoesNotExistException';
}