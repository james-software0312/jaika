<?php

namespace App\Http\Controllers\Tax;

use App\Tax\CountryTax;
use App\Country\Country;
use App\Helpers\FlashMsg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryTaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:country-tax-list|country-tax-create|country-tax-edit|country-tax-delete', ['only', ['index']]);
        $this->middleware('permission:country-tax-create', ['only', ['store']]);
        $this->middleware('permission:country-tax-edit', ['only', ['update']]);
        $this->middleware('permission:country-tax-delete', ['only', ['destroy', 'bulk_action']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_countries = Country::all();
        $all_country_tax = CountryTax::with('country')->get();
        return view('backend.tax.country-tax', compact('all_country_tax', 'all_countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'country_id' => 'required|unique:country_taxes',
            'tax_percentage' => 'required|string|max:191',
        ]);

        $country_tax = CountryTax::create([
            'country_id' => $request->country_id,
            'tax_percentage' => $request->tax_percentage,
        ]);

        return $country_tax->id
            ? back()->with(FlashMsg::create_succeed('Country Tax'))
            : back()->with(FlashMsg::create_failed('Country Tax'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tax\CountryTax  $countryTax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'country_id' => 'required',
            'tax_percentage' => 'required|string|max:191',
        ]);

        $updated = CountryTax::findOrFail($request->id)->update([
            'country_id' => $request->country_id,
            'tax_percentage' => $request->tax_percentage,
        ]);

        return $updated
            ? back()->with(FlashMsg::update_succeed('Country Tax'))
            : back()->with(FlashMsg::update_failed('Country Tax'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tax\CountryTax  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountryTax $item)
    {
        return $item->delete()
            ? back()->with(FlashMsg::delete_succeed('Country Tax'))
            : back()->with(FlashMsg::delete_failed('Country Tax'));
    }

    public function bulk_action(Request $request)
    {
        $deleted = CountryTax::where('id', $request->ids)->delete();
        if ($deleted) {
            return 'ok';
        }
    }
}
