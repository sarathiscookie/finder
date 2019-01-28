<?php

namespace App\Http\Traits;

trait CountryTrait {
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
