<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeywordSearchController extends Controller
{
    public function getCountry() {
        $countryName = [];
        $str         = file_get_contents(storage_path('app/public/json/country.json'));
        $json        = json_decode($str, true);

        foreach ($json['Results'] as $field => $value) {
            $countryName[] = $value['Name'];
        }

        return $countryName;
    }
}
