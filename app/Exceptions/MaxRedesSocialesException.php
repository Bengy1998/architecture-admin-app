<?php
namespace App\Exceptions;

use Exception;

class MaxRedesSocialesException extends Exception
{
    public function __construct()
    {
        parent::__construct('El número máximo de redes sociales es 5.');
    }
}