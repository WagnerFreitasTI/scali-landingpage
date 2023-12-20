<?php
require_once __DIR__ . '/lib/validate-recaptcha.php';
require_once __DIR__ . '/lib/send-to-lasso.php';

function respond(int $statusCode, string $message) {
    http_response_code($statusCode);
    
    echo json_encode(array(
        "message" => $message
    ));
}

try {
    $request = $_POST;
    $recaptchaResponse = $request["g-recaptcha-response"];
    validateRecaptcha($recaptchaResponse);

    sendToLasso($request);

    respond(200, "Success");
} catch (UnexpectedValueException $exception) {
    respond(400, $exception->getMessage());
} catch (Exception $exception) {
    error_log($exception);
    respond(500, "An unexpected error ocurred");
}
