<?php
use Illuminate\Support\Facades\Http;

class CaptchaController extends Controller
{
    public function verifyCaptcha(Request $request)
    {
        $captchaResponse = $request->input('captchaResponse');
        $recaptchaSecretKey = config('6LeJV6YnAAAAAE4vqqFnZ-bpwqTDAgx18gp95mdA');

        $response = Http::post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecretKey,
            'response' => $captchaResponse,
        ]);

        $data = $response->json();

        if ($data['success']) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'error' => 'Captcha verification failed']);
        }
    }
}
