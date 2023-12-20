<?php
require_once __DIR__ . "/templates/header.php";
?>

<style>
    body {
        background-color: #be694b;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .wrapper {
        width: 1000px;
        max-width: 96%;
    }

    .wrapper img {
        width: 400px;
        max-width: 50%;
        margin-bottom: 80px;
    }

    .wrapper p {
        font-family: 'Brinnan-Bold';
        text-transform: uppercase;
        font-size: .9rem;
        max-width: 700px;
    }

    .wrapper button {
        margin-top: 32px;
        font-family: 'Brinnan-Bold';
        color: #000000;
        text-transform: uppercase;
        font-size: .7rem;
        background-color: #ffffff;
        padding: 24px 32px;
        line-height: .3;
        border: 0;
    }

    .register-wrapper {
        display: none;
    }
</style>

<div class="text-sec3 wrapper">
    <img src="./images/scale-black.png" />
    <h3 style="text-transform: uppercase;">
        Thank you for your interest in Scale by Scale Projects
    </h3>
    <p>
        One of our sales representatives will be in touch shortly to discuss how Scale can be your perfect home for everyday confort.
    </p>
    <button onclick="history.back()">
        Click here to complete your registration
    </button>
</div>


<?php
require_once __DIR__ . "/templates/footer.php";
?>