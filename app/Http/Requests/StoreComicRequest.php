<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:2|max:255",
            "description" => "max:65535",
            "thumb" => "url|max:65535",
            "price" => "required|min:2|max:255",
            "series" => "required|min:3|max:255",
            "sale_date" => "required|date",
            "type" => "required|min:3|max:50",
            "artists" => "required|min:2|max:255",
            "writers" => "required|min:2|max:255",
        ];
    }
    public function messages()
    {
        return[
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",
            "title.max"=> "Il titolo deve avere meno di :max caratteri",
            "description.max"=>"La descrizione non pò contenere piu di :max caratteri",
            "thumb.url"=>"url non valido",
            "thumb.max"=>"La descrizione non pò contenere piu di :max caratteri",
            "price.required" => "Il price è obbligatorio",
            "price.min" => "Il price deve essere almeno di :min caratteri",
            "price.max"=> "Il price deve avere meno di :max caratteri",
            "series.required" => "La serie è obbligatorio",
            "series.min" => "La serie deve essere almeno di :min caratteri",
            "series.max"=> "La serie deve avere meno di :max caratteri",
            "sale_date.required"=>"La data è obbligatoria",
            "sale_date.date"=>"La data deve avere un formato data",
            "type.required" => "Il type è obbligatorio",
            "type.min" => "Il type deve essere almeno di :min caratteri",
            "type.max"=> "Il type deve avere meno di :max caratteri",
            "artists.required" => "Artists è obbligatorio",
            "artists.min" => "Artists deve essere almeno di :min caratteri",
            "artists.max" => "Artists deve essere meno di :max caratteri",
            "writers.required" => "Writers è obbligatorio",
            "writers.min" => "Writers deve essere almeno di :min caratteri",
            "writers.max" => "Writers deve essere meno di :max caratteri",

        ];
    }
}
