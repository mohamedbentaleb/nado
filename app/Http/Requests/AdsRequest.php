<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'phone' => ['required', 'numeric'],
            'titre' => ['required', 'string'],
            'prix' => ['required', 'numeric'],
            'mark' => ['required', 'string'],
            'modele' => ['required', 'string'],
            'city' => ['required', 'string'],
            'year' => ['required', 'numeric'],
            'km' => ['required', 'numeric'],
            'cv' => ['required', 'numeric'],
            'carburant' => ['required', 'string'],
            'box' => ['required', 'string'],
            'etat' => ['required', 'string'],
            'origine' => ['required', 'string'],
            'nb_Door' => ['required', 'numeric'],
            'premiere_main' => ['required', 'string'],
            'video' => ['required', 'string'],
            'reel' => ['required', 'string'],
            'bodywork' => ['required', 'string'],
            'status' => ['required', 'string'],
            'co2' => ['required', 'string'],
            'certifie' => ['nullable'],
            'showroom' => ['nullable'],
            'finance' => ['nullable'],
            'jantesA' => ['nullable'],
            'airbags' => ['nullable'],
            'climatisation' => ['nullable'],
            'gps' => ['nullable'],
            'toit_ouvrant' => ['nullable'],
            'double_toit_ouvrant' => ['nullable'],
            'siege_cuir' => ['nullable'],
            'radar_recul' => ['nullable'],
            'camera_recul' => ['nullable'],
            'vitreselec' => ['nullable'],
            'abs' => ['nullable'],
            'eps' => ['nullable'],
            'rv' => ['nullable'],
            'lv' => ['nullable'],
            'cd' => ['nullable'],
            'ordinateur' => ['nullable'],
            'verrouillage' => ['nullable'],
            'active' => ['nullable'],
            'image' => [($this->method() == "POST") ? 'required' : 'nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
            'imgrapport' => [($this->method() == "POST") ? 'required' : 'nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
            'rapport' => [($this->method() == "POST") ? 'required' : 'nullable', 'mimes:pdf', 'max:5120'],
        ];
    }
}
