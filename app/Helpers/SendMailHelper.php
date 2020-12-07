<?php

namespace App\Helpers;

use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendMailHelper
{

    /**
     * Send mail with catch exception
     * @param Mailable $mail
     * @param string $to
     * @param string &$errMsg
     * @param array $ccUsers
     * @param array $bccUsers
     * @return bool
     *
     * @throws \Throwable
     */
    public static function sentMail(Mailable $mail, $to)
    {
        if (!empty($to)) {
            $myListAdminMail  = explode(',', $to);
            try {
                Mail::to($myListAdminMail)
                    ->send($mail);
                return self::isSent();
            } catch (\Throwable $exception) {
                report($exception);
                Log::error($exception->getMessage());
                return false;
            }
        }
    }

    /**
     * Check mail is sent
     * @param string &$errMsg
     * @return bool
     *
     * @throws \Throwable
     */
    private static function isSent()
    {
        try {
            $errors = Mail::failures();

            if (count($errors) > 0) {
                $errMsg = 'Sending mail was one or more failures. They were: <br />';
                foreach ($errors as $email_address) {
                    $errMsg .= " - $email_address <br />";
                }
                Log::error($errMsg);
                return false;
            }
        } catch (\Throwable $exception) {
            report($exception);
            $errMsg = $exception->getMessage();
            Log::error($errMsg);
            return false;
        }
        return true;
    }
}
