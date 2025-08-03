<?php
    // Step 1: Require the library from your Composer vendor folder
    require_once 'vendor/autoload.php';

    use MercadoPago\Client\Common\RequestOptions;
    use MercadoPago\Client\Payment\PaymentClient;
    use MercadoPago\Exceptions\MPApiException;
    use MercadoPago\MercadoPagoConfig;

    // Step 2: Set production or sandbox access token
    MercadoPagoConfig::setAccessToken("<ACCESS_TOKEN>");
    // Step 2.1 (optional - default is SERVER): Set your runtime enviroment from MercadoPagoConfig::RUNTIME_ENVIROMENTS
    // In case you want to test in your local machine first, set runtime enviroment to LOCAL
    MercadoPagoConfig::setRuntimeEnviroment(MercadoPagoConfig::LOCAL);

 // Step 5: Create the request options, setting X-Idempotency-Key
 $request_options = new RequestOptions();
 $request_options->setCustomHeaders(["X-Idempotency-Key: <SOME_UNIQUE_VALUE>"]);
    // Step 3: Initialize the API client
    $client = new PaymentClient();

    try {

        $payment = $client->create(// Step 4: Create the request array
        $request = [
            "transaction_amount" => 100,
            "description" => "Teste de pagamento",
            "payment_method_id" => "bolbradesco",
            "payer" => [
                "first_name" => "Teste",
                "last_name" => "Teste",
                "email" => "teste@teste.com",
                "identification" => [
                    "type" => "CPF",
                    "number" => "1234567890"
                ]
            ]
    ], $request_options);

    $link_boleto = $payment->point_of_interaction->transaction_data->external_resource_url;
    $codigo_barras = $payment->transaction_details->digitable_line;

    echo "<a href='{$link_boleto}' target='_blank'>Link do Boleto</a>";
    echo "<p>{$codigo_barras}</p>";
}
    catch(MPApiException $e){
        echo "Status code: " . $e->getApiResponse()->getStatusCode() . "\n";
        echo "Content: ";
        var_dump($e->getApiResponse()->getContent());
        echo "\n";
    }
    catch(\Exception $e){
        echo $e->getMessage();
    }