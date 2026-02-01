<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

trait Contact
{
    function getHomeContactEmailTemplate($name, $email, $question)
    {
        return "<table width='100%' cellpadding='0' cellspacing='0' style='font-family: Arial, sans-serif; background-color: #f6f4f1; padding: 30px;'>
                    <tr>
                        <td align='center'>
                            <table width='600' cellpadding='0' cellspacing='0' style='background-color: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #eee;'>

                                <!-- Header -->
                                <tr>
                                    <td style='text-align: center; padding: 28px 20px; background: #daa520;'>
                                        <h1 style='margin: 0; font-size: 22px; letter-spacing: 1px; color: #ffffff;'>
                                            WRITE NAKED IN ITALY
                                        </h1>
                                        <p style='margin: 6px 0 0; font-size: 14px; color: #fff;'>
                                            New Inquiry Received
                                        </p>
                                    </td>
                                </tr>

                                <!-- Body -->
                                <tr>
                                    <td style='padding: 30px 30px 20px; color: #333333; font-size: 15px; line-height: 1.7;'>
                                        <p style='margin-top: 0;'>
                                            A new message has arrived from the website ✨
                                        </p>

                                        <table width='100%' cellpadding='0' cellspacing='0' style='margin-top: 15px;'>
                                            <tr>
                                                <td style='padding: 10px 0;'>
                                                    <strong style='color:#daa520;'>Name : </strong> {$name}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style='padding: 10px 0;'>
                                                    <strong style='color:#daa520;'>Email : </strong>{$email}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style='padding: 10px 0;'>
                                                    <strong style='color:#daa520;'>Message: </strong>
                                                    <br>
                                                    <br>
                                                    {$question}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Divider -->
                                <tr>
                                    <td style='padding: 0 30px;'>
                                        <hr style='border: none; border-top: 1px solid #eee;' />
                                    </td>
                                </tr>

                                <!-- Footer -->
                                <tr>
                                    <td style='background-color: #fafafa; color: #777; font-size: 12px; text-align: center; padding: 18px 30px;'>
                                        This message was sent via the <strong>Write Naked in Italy</strong> question form.<br>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>";
    }


    function getActivationDownloadTemplate($email)
    {

        return "<table width='100%' cellpadding='0' cellspacing='0' style='font-family: Arial, sans-serif; background-color: #f6f4f1; padding: 30px;'>
                    <tr>
                        <td align='center'>
                            <table width='600' cellpadding='0' cellspacing='0' style='background-color: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #eee;'>

                                <!-- Header -->
                                <tr>
                                    <td style='text-align: center; padding: 28px 20px; background: #daa520;'>
                                        <h1 style='margin: 0; font-size: 22px; letter-spacing: 1px; color: #ffffff;'>
                                            WRITE NAKED IN ITALY
                                        </h1>
                                        <p style='margin: 6px 0 0; font-size: 14px; color: #fff;'>
                                            Activation Files Downloaded
                                        </p>
                                    </td>
                                </tr>

                                <!-- Body -->
                                <tr>
                                    <td style='padding: 30px 30px 20px; color: #333333; font-size: 15px; line-height: 1.7;'>
                                        <p style='margin-top: 0;'>
                                            Someone Just Downloaded The Activation Files ✨
                                        </p>

                                        <table width='100%' cellpadding='0' cellspacing='0' style='margin-top: 15px;'>

                                            <tr>
                                                <td style='padding: 10px 0;'>
                                                    <strong style='color:#daa520;'>Email : </strong>{$email}
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>

                                <!-- Divider -->
                                <tr>
                                    <td style='padding: 0 30px;'>
                                        <hr style='border: none; border-top: 1px solid #eee;' />
                                    </td>
                                </tr>

                                <!-- Footer -->
                                <tr>
                                    <td style='background-color: #fafafa; color: #777; font-size: 12px; text-align: center; padding: 18px 30px;'>
                                        This message was sent via the <strong>Write Naked in Italy</strong>  website.<br>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>";
    }



    function verfiyCaptcha(Request $request)
    {
        $token = $request->input('g-recaptcha-response');

        $result = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => config('services.recaptcha.secret_key'),
                'response' => $token,
                'remoteip' => $request->ip(),
            ]
        );

        $result = $result->json();

        if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
            return false;
        }


        return true;
    }
}
