<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use GuzzleHttp\Client as Guzzle;

class ClientController extends Controller
{
    public function save(Request $request)
    {
        // $guz = new Guzzle();
        $client = new Client();
        $adress = new Client();
        $client->name = $request->get('name');
        $client->website = $request->get('website');
        $client->email = $request->get('email');
        $client->phone = $request->get('phone');
        $client->description = $request->get('description');
        $client->mcc = $request->get('mcc');
        $client->metadata = $request->get('metadata');
        $client->ein = $request->get('ein');
        $client->owner_first_name = $request->get('owner_first_name');
        $client->owner_last_name = $request->get('owner_last_name');
        $client->owner_email = $request->get('owner_email');
        $client->owner_phone = $request->get('owner_phone');
        $client->owner_cpf = $request->get('owner_cpf');
        // $client->street_address = $request->get('street_address');
        // $client->complement = $request->get('complement');
        // $client->additional_info = $request->get('additional_info');
        // $client->neighborhood = $request->get('neighborhood');
        // $client->city = $request->get('city');
        // $client->state = $request->get('state');
        // $client->postal_code = $request->get('postal_code');
        // $client->country_code = $request->get('country_code');

        $adress->street_address = $request->get('street_address');
        $adress->complement = $request->get('complement');
        $adress->additional_info = $request->get('additional_info');
        $adress->neighborhood = $request->get('neighborhood');
        $adress->city = $request->get('city');
        $adress->state = $request->get('state');
        $adress->postal_code = $request->get('postal_code');
        $adress->country_code = $request->get('country_code');

        $client->address_attributes = $adress;
        $clientJson = (json_decode($client));

        // dd($clientJson);
        // $client->save();

        $guz = new Guzzle(['headers' => ['Content-Type' => 'application/json']]);

        $res = $guz->post('https://api.byebnk.com/clients/businesses', [
            \GuzzleHttp\RequestOptions::JSON => [
                'notification' => [
                    'body' => $clientJson,
                ],
            ],
        ]);
        dd($res);

        return $client;
    }
}
