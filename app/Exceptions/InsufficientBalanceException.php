<?php

namespace App\Exceptions;

use App\Http\Helpers\PersianResponse;
use Exception;

class InsufficientBalanceException extends Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message ?:PersianResponse::InsufficientBalance, 406);
    }
}
