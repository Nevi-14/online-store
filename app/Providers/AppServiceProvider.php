<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\SingleRowData;
use App\Models\globalSettings;


class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        date_default_timezone_set('Asia/Calcutta');
        Schema::defaultStringLength(191);

        try {
        
            $settings =  new  globalSettings(
                SingleRowData::where('field_name', 'logo_file')->first(),
                SingleRowData::where('field_name', 'company_name')->first(),
                SingleRowData::where('field_name', 'company_email')->first(),
                SingleRowData::where('field_name', 'company_phone')->first(),
                SingleRowData::where('field_name', 'company_country')->first(),
                SingleRowData::where('field_name', 'company_address')->first(),
                SingleRowData::where('field_name', 'company_city')->first(),
                SingleRowData::where('field_name', 'company_about')->first(),
                SingleRowData::where('field_name', 'terms')->first(),
            );
            view()->share([
                'logo' => $settings->logo ?  $settings->logo['field_value'] : 'img_not_available.png',
                'company_name' => $settings->company_name ?  $settings->company_name['field_value'] :  'company name',
                'company_email' => $settings->company_email ? $settings->company_email['field_value'] : 'company email',
                'company_phone' =>  $settings->company_phone ? $settings->company_phone['field_value'] : 'company phone',
                'company_country' => $settings->company_country ? $settings->company_country['field_value'] : 'company country',
                'company_address' => $settings->company_address ? $settings->company_address['field_value'] : 'company address',
                'company_city' => $settings->company_city ? $settings->company_city['field_value'] : 'company city',
                'company_about' => $settings->company_about ? $settings->company_about['field_value'] : 'about company',
                'company_terms' => $settings->company_terms ? $settings->company_terms['field_value'] : 'company terms',
            ]);


        } catch (\Exception $e) {

            view()->share([
                'logo' =>  'img_not_available.png',
                'company_name' =>  'company name',
                'company_email' => 'company email',
                'company_phone' =>   'company phone',
                'company_country' => 'company country',
                'company_address' =>'company address',
                'company_city' => 'company city',
                'company_about' =>'about company',
                'company_terms' =>  'company terms',
            ]);
        }



      
    }
}
