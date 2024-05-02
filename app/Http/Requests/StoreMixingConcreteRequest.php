<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMixingConcreteRequest extends FormRequest
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
            // 'delete' => 'required|boolean',
            'maisikles_id' => 'required|integer',
            // 'maisikles_recepto_id' => 'required|integer',
            // 'user_maise_id' => 'required|integer',
            // 'user_edit_id' => 'required|integer',
            'marke' => 'required|in:C8/10,C12/15,C16/20,C20/25,C25/30,C30/37,C35/45,C40/50,C45/55,C50/60,C55/67,C60/75,C70/85,C80/95,C90/105,C100/115,SMELIS,LC8/9,LC12/13,LC16/18,LC20/22,LC25/28,LC30/33,LC35/38,LC40/44,LC45/50,LC50/55,LC55/60,LC60/66,LC70/77,LC80/88,',
            'slankumo_klase' => 'required|in:S1,S2,S3,S4,S5',
            'slankumas_mm' => 'required|numeric',
            'itraukto_oro_kiekis' => 'nullable|numeric',
            'tipas' => 'nullable|in:sm',
            'salcio_priedai' => 'nullable|in:F50,F100,F150,F200,F250,F300,XF1,XF2,XF3,XF4',
            'pagaminti_kubeliai_g' => 'nullable|integer|max:2',
            'pagaminti_kubeliai_p' => 'nullable|integer|max:2',
            'maisykle' => 'required|numeric|max:1',
            'kiekis_m3' => 'required|numeric',
            'uzsakymo_nr' => 'required|string|min:1|max:10',
            'uzsakymo_raide' => 'required|string|min:1|max:3',
            'uzsakovas' => 'required|string|min:3|max:250',
            'komentaras' => 'nullable|string|max:500',
            // 'user_id' => 'nullable|integer|exists:users,id',
        ];
    }

    public function messages(): array
    {
        return [
            // 'delete.required' => 'Trūksta delete lauko',
            // 'delete.boolean' => 'Delete laukas turi būti boolean tipo',
            'maisikles_id.required' => 'Trūksta (Maišiklės ID) lauko',
            'maisikles_id.integer' => '(Maišiklės ID) turi būti sveikasis skaičius',
            // 'maisikles_recepto_id.required' => 'Trūksta maisikles_recepto_id lauko',
            // 'maisikles_recepto_id.integer' => 'Maisikles_recepto_id turi būti sveikasis skaičius',
            // 'user_maise_id.required' => 'Trūksta user_maise_id lauko',
            // 'user_maise_id.integer' => 'User_maise_id turi būti sveikasis skaičius',
            // 'user_edit_id.required' => 'Trūksta user_edit_id lauko',
            // 'user_edit_id.integer' => 'User_edit_id turi būti sveikasis skaičius',
            'marke.required' => 'Trūksta (Marke) lauko',
            'marke.in' => 'Netinkama (Marke) reikšmė',
            'slankumo_klase.required' => 'Trūksta (Slankumas) lauko',
            'slankumo_klase.in' => 'Netinkama (Slankumas) reikšmė',
            'slankumas_mm.required' => 'Trūksta (Slankumas mm) lauko',
            'slankumas_mm.numeric' => '(Slankumas mm) turi būti skaičius',
            'itraukto_oro_kiekis.numeric' => '(Itraukto oro kiekis) turi būti skaičius',
            'tipas.in' => 'Netinkama (Typas) reikšmė',
            'salcio_priedai.in' => 'Netinkama (Šalcio priedai) reikšmė',
            'pagaminti_kubeliai_g.integer' => '(Pagaminti kubeliai G) turi būti sveikasis skaičius',
            'pagaminti_kubeliai_g.max' => '(Pagaminti kubeliai G) negali būti ilgesnis nei 2 simbolių',
            'pagaminti_kubeliai_p.integer' => '(Pagaminti kubeliai P) turi būti sveikasis skaičius',
            'pagaminti_kubeliai_p.max' => '(Pagaminti kubeliai P) negali būti ilgesnis nei 2 simbolių',
            'maisykle.required' => 'Trūksta (Misykle) lauko',
            'maisykle.numeric' => '(Maisykle) turi būti skaičius',
            'maisykle.max' => '(Maisykle) negali būti ilgesnis nei 1 skaičius',
            'kiekis_m3.required' => 'Trūksta (Kiekis m3) lauko',
            'kiekis_m3.numeric' => '(Kiekis m3) turi būti skaičius',
            'uzsakymo_nr.required' => 'Trūksta (Užsakymo nr) lauko',
            'uzsakymo_nr.string' => '(Užsakymo nr) turi būti tekstinis',
            'uzsakymo_nr.max' => '(Užsakymo nr) negali būti ilgesnis nei 10 simbolių',
            'uzsakymo_raide.required' => 'Trūksta (Būklė) lauko',
            'uzsakymo_raide.string' => '(Būklė) turi būti tekstinis',
            'uzsakymo_raide.max' => '(Būklė) negali būti ilgesnis nei 3 simboliai',
            'uzsakovas.required' => 'Trūksta (Užsakovas) lauko',
            'uzsakovas.string' => '(Užsakovas) turi būti tekstinis',
            'uzsakovas.max' => '(Užsakovas) negali būti ilgesnis nei 250 simbolių',
            'komentaras.string' => '(Komentaras) turi būti tekstinis',
            'komentaras.max' => '(Komentaras) negali būti ilgesnis nei 500 simbolių',
            // 'user_id.integer' => 'User_id turi būti sveikasis skaičius',
            // 'user_id.exists' => 'Pasirinktas user_id neegzistuoja',
        ];
 
    }
}
