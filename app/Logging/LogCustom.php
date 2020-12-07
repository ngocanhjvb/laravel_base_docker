<?php

namespace App\Logging;

use Carbon\Carbon;
use Monolog\Handler\RotatingFileHandler;

class LogCustom
{
    /**
     * Customize the given logger instance.
     *
     * @param  \Illuminate\Log\Logger  $logger
     * @return void
     */
    public function __invoke($logger)
    {
        foreach ($logger->getHandlers() as $handler) {
            $handler->pushProcessor(function ($record) {
                $record['datetime'] = Carbon::now()->format(DATE_TIME_FORMAT);
                return $record;
            });
        }
    }
}
