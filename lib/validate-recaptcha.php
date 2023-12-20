<?php
require_once __DIR__ . '/env.php';

function validateRecaptcha(string $recaptchaResponse): void
{
    global $RECAPTCHA_SECRET;

    // Validação ReCAPTCHA
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify?secret=' . $RECAPTCHA_SECRET . '&response=' . $recaptchaResponse);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response);
    if (!$response->success) {
        error_log("Falha na validação do ReCAPTCHA. Resposta: " . json_encode($response));
        throw new UnexpectedValueException("ReCAPTCHA wasn't successfull. Please, try again");
    }
}
