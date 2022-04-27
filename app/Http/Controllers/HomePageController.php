<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\SingleRowData;
use App\Models\Product;

class HomePageController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        return view('welcome');

    }

    public function services()

    {

        $logo = SingleRowData::where('field_name','logo_file')->first();
        $company_name = SingleRowData::where('field_name','company_name')->first();
        $company_address = SingleRowData::where('field_name','company_address')->first();
        $company_city = SingleRowData::where('field_name','company_city')->first();
        $company_state = SingleRowData::where('field_name','company_state')->first();
        $company_country = SingleRowData::where('field_name','company_country')->first();
        $company_zip = SingleRowData::where('field_name','company_zip')->first();
        $company_phone = SingleRowData::where('field_name','company_phone')->first();
        $company_email = SingleRowData::where('field_name','company_email')->first();
        $terms = SingleRowData::where('field_name','terms')->first();
        $products = Product::all();

        return view('home.service',compact('company_name','products'));

    }

    public function about()

    {

        $logo = SingleRowData::where('field_name','logo_file')->first();
        $company_name = SingleRowData::where('field_name','company_name')->first();
        $company_address = SingleRowData::where('field_name','company_address')->first();
        $company_city = SingleRowData::where('field_name','company_city')->first();
        $company_state = SingleRowData::where('field_name','company_state')->first();
        $company_country = SingleRowData::where('field_name','company_country')->first();
        $company_zip = SingleRowData::where('field_name','company_zip')->first();
        $company_phone = SingleRowData::where('field_name','company_phone')->first();
        $company_email = SingleRowData::where('field_name','company_email')->first();
        $terms = SingleRowData::where('field_name','terms')->first();
        


        return view('home.about',compact('company_name'));

    }

    public function rates()

    {

        return view('home.rates');

    }

    public function contact()

    {

        return view('home.contact');

    }





    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        //

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        //

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        //

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        //

    }

}

