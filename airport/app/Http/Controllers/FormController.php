<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $req)
    {
        $airports = [
                [
                    'id' => 0,
                    'nome' => 'Catania',
                    'code' => 'aaa'
                ],
                [
                    'id' => 1,
                    'nome' => 'Londra',
                    'code' => 'bbb'
                ],
                [
                    'id' => 2,
                    'nome' => 'Berlino',
                    'code' => 'ccc'
                ],
                [
                    'id' => 3,
                    'nome' => 'Milano',
                    'code' => 'ddd'
                ]
        ];
        $flights = [
            [
                'code_departure' => 'aaa',
                'code_arrival' => 'bbb',
                'price' => 20
            ],
            [
                'code_departure' => 'bbb',
                'code_arrival' => 'ccc',
                'price'=> 40
            ],
            [
                'code_departure' => 'ccc',
                'code_arrival' => 'ddd',
                'price' => 70
            ],
            [
                'code_departure' => 'ddd',
                'code_arrival' => 'aaa',
                'price' => 65
            ]
        ];

        foreach ($flights as $flight) {
            $price = $flight['price'];
            break;
        };
        for ($i=0; $i <2 ; $i++) {
            $var_departure = $_POST['departure'];
            $var_arrival = $_POST['arrival'];
            echo $var_departure . '-'. $var_arrival;
            if ($var_departure == "Catania" && $var_arrival =="Londra") {
                echo ' scalo '. ' : '. '' . '<option value="Berlino">Berlino</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            } elseif ($var_departure == "Catania" && $var_arrival =="Milano") {
                echo '<br>';
                echo ' scalo '. ' : '. '' . '<option value="Londra">Londra</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            } elseif($var_departure == "Catania" && $var_arrival =="Berlino"){
                echo ' scalo '. ' : '. '' . '<option value="Londra">Londra</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            }elseif ($var_departure == "Londra" && $var_arrival =="Catania") {
                echo '<br>';
                echo ' scalo '. ' : '. '' . '<option value="Milano">Milano</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            } elseif ($var_departure == "Londra" && $var_arrival =="Berlino") {
                echo '<br>';
                echo ' scalo '. ' : '. '' . '<option value="Milano">Milano</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            }elseif ($var_departure == "Londra" && $var_arrival =="Milano") {
                echo '<br>';
                echo ' scalo '. ' : '. '' . '<option value="Berlino">Berlino</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            }elseif ($var_departure == "Berlino" && $var_arrival =="Catania") {
                echo '<br>';
                echo ' scalo '. ' : '. '' . '<option value="Milano">Milano</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            }elseif ($var_departure == "Berlino" && $var_arrival =="Londra") {
                echo '<br>';
                echo ' scalo '. ' : '. '' . '<option value="Milano">Milano</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            }elseif ($var_departure == "Berlino" && $var_arrival =="Milano") {
                echo '<br>';
                echo ' scalo '. ' : '. '' . '<option value="Londra">Londra</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            }elseif ($var_departure == "Milano" && $var_arrival =="Catania") {
                echo '<br>';
                echo ' scalo '. ' : '. '' . '<option value="Londra">Londra</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            }elseif ($var_departure == "Milano" && $var_arrival =="Londra") {
                echo '<br>';
                echo ' scalo '. ' : '. '' . '<option value="Berlino">Berlino</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            }elseif ($var_departure == "Milano" && $var_arrival =="Berlino") {
                echo '<br>';
                echo ' scalo '. ' : '. '' . '<option value="Londra">Londra</option>';
                echo 'prezzo del volo è '. $price .'<br>';
            }
        }
    }
}
