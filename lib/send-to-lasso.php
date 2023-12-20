<?php
require_once __DIR__ . '/env.php';

function sendToLasso($request): void
{
    global $LASSOCRM_TOKEN;

    $payload = [
        "person" => [
            "firstName" => $request['fname'],
            "lastName" => $request['lname'],
            "contactPreference" => array_map('htmlspecialchars', $request['contact-method'])
        ],
        "sourceType" => [
            "sourceType" => "Online Registration"
        ],
        "emails" => [
            [
                "email" => $request['email'],
                "type" => "Personal",
                "primary" => true
            ]
        ],
        "phones" => [
            [
                "phone" => $request['phone'],
                "type" => ""
            ]
        ],
        "addresses" => [
            [
                "city" => $request['city'],
                "primary" => true
            ]
        ],
        "questions" => [
            [
                "questionId" => 1,
                "type" => "text",
                "name" => "How did you hear about us?",
                "answers" => [
                    [
                        "answerId" => 1,
                        "answer" => $request['hearAbout']
                    ]
                ]
            ],
            [
                "questionId" => 2,
                "type" => "text",
                "name" => "ARE YOU A REALTOR?",
                "answers" => [
                    [
                        "answerId" => 2,
                        "answer" => $request['areYouRealtor']
                    ]
                ]
            ],
            [
                "questionId" => 3,
                "type" => "text",
                "name" => "Agree To Consent",
                "answers" => [
                    [
                        "answerId" => 3,
                        "answer" => $request['agreeToConsent'] === 'true' // Assuming 'true' is a string
                    ]
                ]
            ]
        ],
        "sendSalesRepAssignmentNotification" => true,
        "sendOptInEmail" => true,
        "ReCAPTCHA" => $request['g-recaptcha-response']
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Authorization: Bearer  ' . $LASSOCRM_TOKEN]);
    curl_setopt($ch, CURLOPT_URL, 'https://api.lassocrm.com/v1/registrants');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    $rawResponse = curl_exec($ch);
    $responseStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    $response = json_decode($rawResponse);

    $isSuccess = $responseStatus >= 200 && $responseStatus < 300;
    if (!$isSuccess) {
        error_log("Erro na requisição para o Lasso. Status: " . $responseStatus . " | Resposta: " . $rawResponse);
        throw new UnexpectedValueException("Error while saving data");
    }
}
