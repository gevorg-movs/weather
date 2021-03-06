<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class WeatherController extends Controller
{
    public function getWeatherInCity(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $api_key = config('app.weather_key');
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$request->city&appid=$api_key";

        $response = Http::get($url);

        if ($response->successful()) {
            $response = $response->json();
            $data = [
                'name' => $response['name'],
                'country' => $response['sys']['country'],
                'temperature' => intval($response['main']['temp'] - 273),
                'sunrise' => $response['sys']['sunrise'],
                'sunset' => $response['sys']['sunset'],
                'description' => $response['weather'][0]['description'],
                'wind' => $response['wind']['speed']
            ];

            Weather::create($data);

            return response()->json($data);
        } else {
            return response()->json($response->json(), 403);
        }
    }

    public function getWeathers()
    {
        $weathers = Weather::all()->sortBy([['id', 'desc']]);
        return response()->json($weathers);
    }

}


