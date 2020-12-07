<?php

namespace App\Libs;

class HandleRequest
{
    /**
     * @return \Illuminate\Support\Carbon
     */
    public function getCurrentTime()
    {
        return now();
    }

}
