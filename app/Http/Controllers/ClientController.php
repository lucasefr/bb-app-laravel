<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Client;
use GuzzleHttp\Client as Guzzle;

class ClientController extends Controller
{
    public function save(Request $request)
    {
        // // $guz = new Guzzle();
        // $client = new Client();
        // $adress = new Client();
        // $client->name = $request->get('name');
        // $client->website = $request->get('website');
        // $client->email = $request->get('email');
        // $client->phone = $request->get('phone');
        // $client->description = $request->get('description');
        // $client->mcc = $request->get('mcc');
        // $client->metadata = $request->get('metadata');
        // $client->ein = $request->get('ein');
        // $client->owner_first_name = $request->get('owner_first_name');
        // $client->owner_last_name = $request->get('owner_last_name');
        // $client->owner_email = $request->get('owner_email');
        // $client->owner_phone = $request->get('owner_phone');
        // $client->owner_cpf = $request->get('owner_cpf');
        // // $client->street_address = $request->get('street_address');
        // // $client->complement = $request->get('complement');
        // // $client->additional_info = $request->get('additional_info');
        // // $client->neighborhood = $request->get('neighborhood');
        // // $client->city = $request->get('city');
        // // $client->state = $request->get('state');
        // // $client->postal_code = $request->get('postal_code');
        // // $client->country_code = $request->get('country_code');

        // $adress->street_address = $request->get('street_address');
        // $adress->complement = $request->get('complement');
        // $adress->additional_info = $request->get('additional_info');
        // $adress->neighborhood = $request->get('neighborhood');
        // $adress->city = $request->get('city');
        // $adress->state = $request->get('state');
        // $adress->postal_code = $request->get('postal_code');
        // $adress->country_code = $request->get('country_code');

        // $client->address_attributes = $adress;
        // $clientJson = (json_decode($client));

        // // dd($clientJson);
        // // $client->save();

        // $guz = new Guzzle(['headers' => ['Content-Type' => 'application/json']]);

        // $res = $guz->post('https://api.byebnk.com/clients/businesses', [
        //     \GuzzleHttp\RequestOptions::JSON => [
        //         'notification' => [
        //             'body' => $clientJson,
        //         ],
        //     ],
        // ]);
        // dd($res);

        // return $client;

        //Outra função

        $clientId = new Client();
        $authentication_token = new Client();

        // $client = new Client();
        // $adress = new Client();

        // $client->name = $request->get('name');
        // $client->website = $request->get('website');
        // $client->email = $request->get('email');
        // $client->phone = $request->get('phone');
        // $client->description = $request->get('description');
        // $client->mcc = $request->get('mcc');
        // $client->metadata = $request->get('metadata');
        // $client->ein = $request->get('ein');
        // $client->owner_first_name = $request->get('owner_first_name');
        // $client->owner_last_name = $request->get('owner_last_name');
        // $client->owner_email = $request->get('owner_email');
        // $client->owner_phone = $request->get('owner_phone');
        // $client->owner_cpf = $request->get('owner_cpf');

        // $adress->street_address = $request->get('street_address');
        // $adress->complement = $request->get('complement');
        // $adress->additional_info = $request->get('additional_info');
        // $adress->neighborhood = $request->get('neighborhood');
        // $adress->city = $request->get('city');
        // $adress->state = $request->get('state');
        // $adress->postal_code = $request->get('postal_code');
        // $adress->country_code = $request->get('country_code');
        // $client->address_attributes = $adress;
        // $clientJson = (json_decode($client));

        // dd($clientJson);

        // return $clientJson;
        $gus = new Guzzle();
        $response = $gus->request('POST', 'https://api.byebnk.com/clients/businesses', [
            'form_params' => [
                'name' => $request->get('name'),
                'website' => $request->get('website'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'description' => $request->get('description'),
                'mcc' => $request->get('mcc'),
                'metadata' => $request->get('metadata'),
                'ein' => $request->get('ein'),
                'owner_first_name' => $request->get('owner_first_name'),
                'owner_last_name' => $request->get('owner_last_name'),
                'owner_email' => $request->get('owner_email'),
                'owner_phone' => $request->get('owner_phone'),
                'owner_cpf' => $request->get('owner_cpf'),
                'address_attributes' => [
                    'street_address' => $request->get('street_address'),
                    'complement' => $request->get('complement'),
                    'additional_info' => $request->get('additional_info'),
                    'neighborhood' => $request->get('neighborhood'),
                    'city' => $request->get('city'),
                    'state' => $request->get('state'),
                    'postal_code' => $request->get('postal_code'),
                    'country_code' => $request->get('country_code'),
                ],
            ],
        ]);
        $response = $response->getBody()->getContents();
        $responseJson = json_decode($response);
        // dd(gettype($responseJson));
        // $settings = Settings::firstOrCreate(array(
        //     $settings->key = "byebnk_api_user",
        //     $settings->value = $responseJson->data->attributes->id,
        //     $settings->page = 1,
        //     $settings->category = 6,
        // ));

        // dd($responseJson);

        $clientId->name = 'byebnk_api_user';
        $clientId->website = $responseJson->data->attributes->id;
        $clientId->email = 1;
        $clientId->description = 6;
        $clientId->save();

        $authentication_token->name = 'byebnk_api_key';
        $authentication_token->website = $responseJson->data->attributes->authentication_token;
        $authentication_token->email = 1;
        $authentication_token->description = 6;
        $authentication_token->save();

        // dd($responseJson);

        // return $response;
        // echo '<pre>';
        // print_r($response);
        // dd($response);

        return Redirect::to('/one');
    }

    public function saveDocuments(Request $request)
    {
        $gus = new Guzzle();
        $header = ['authentication_token' => 'aceb4678-487b-4e64-b886-2d87c7920734'];
        // dd($header);
        $response = $gus->request('POST', 'https://api.byebnk.com/clients/'.$request->get('client_id').'/documents', $header, [
            'form_params' => [
                // 'token' => $request->get('token'),
                'file' => $request->get('file'),
                'category' => $request->get('category'),
                'description' => $request->get('description'),
                'metadata' => $request->get('metadata'),
            ],
        ]);

        $response = $response->getBody()->getContents();
        $responseJson = json_decode($response);
        dd($responseJson);

        return Redirect::to('/one');
    }
}
