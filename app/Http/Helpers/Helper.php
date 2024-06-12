<?php

namespace App\Http\Helpers;

trait Helper
{
    public function ShowMessage($message,$code)
    {
        return response()->json(['data'=>$message],$code);

    }
}
