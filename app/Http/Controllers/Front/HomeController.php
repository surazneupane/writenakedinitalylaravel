<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ActivationDownloader;
use App\Models\ContactForm;
use App\Traits\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //

    use Contact;

    public function index($page = null)
    {

        $activation = $page == 'activation';

        $page = empty($page) || $activation ? 'index' : $page;

        return view('front.' . $page, compact('activation'));
    }

    public function downloadActivation(Request $request)
    {

        try {
            $request->validate([
                'email' => 'required|string|email'
            ]);

            ActivationDownloader::create([
                'email' => $request->email
            ]);

            $mailContent = $this->getActivationDownloadTemplate($request->email);

            Mail::html($mailContent, function ($message) use ($request) {
                $message->to(config('mail.adminemail'))
                    ->replyTo($request->email)
                    ->subject('Write Naked in Italy - Activation Download');
            });

            $files = [
                asset('audios/Author_Active_Meditation.mpeg'),
                // asset('audios/Activation_II.mpeg')
            ];

            echo json_encode(["status" => "success", "message" => "Your file is downloading. please wait....", "files" => $files]);
        } catch (Exception $e) {
            echo json_encode([
                "status" => "error",
                "message" => "Download Error. Please Try Again!",
                "error" => $e->getMessage()
            ]);
        }
    }


    public function contact(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|email',
                'question' => 'required|string',
            ]);

            ContactForm::create([
                'name' => $request->name,
                'email' => $request->email,
                'question' => $request->question,
            ]);

            $mailContent = $this->getHomeContactEmailTemplate($request->name, $request->email, $request->question);

            Mail::html($mailContent, function ($message) use ($request) {
                $message->to(config('mail.adminemail'))
                    ->replyTo($request->email, $request->name)
                    ->subject('Write Naked in Italy - Enquiry');
            });
            echo json_encode(["status" => "success", "message" => "Your Enquiry Has Been Received."]);
        } catch (Exception $e) {
            echo json_encode([
                "status" => "error",
                "message" => "Email could not be sent. make sure all the fields are filled.",
                "error" => $e->getMessage()
            ]);
        }
    }
}
