@extends('crm.layouts.app')

@section('styles')
<link rel="stylesheet" href="{{asset('theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">


<style>

.wrapper1 {
  margin: 0 auto;
  background: #ffffff;
  border-radius: 5px;
  box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.15);
  position: relative;
  width: 450px;
}


.results {
  padding: 0px;
}

.results ul {margin: 0; padding: 0; }
.results ul li {
  list-style: none;
  border-radius: 3px;
  opacity: 0;
  display: none;
  padding: 8px 12px;
  transition: all .5s linear;
}

.show .results ul li {
  opacity: 1;
  display: block;
}

.show .results {
  padding: 10px;
}

.results ul li:hover {
  background: #ececec
}


  tbody {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  tbody tr {

    float: left;
    width: 18rem;

    border: none;
    border-radius: .25rem;
    box-shadow: none;

  }

  tbody td {
    display: block;

  }

  thead {
    display: none;
  }

  td:before {
    content: attr(data-label);
    position: relative;
    float: left;
    color: #808080;
    min-width: 4rem;
    margin-left: 0;
    margin-right: 1rem;
    text-align: left;
  }

  tr.selected td:before {
    color: #CCC;
  }

  .avatar {
    height: 140px;
    width: 100%;

  }

  #productsTable_length {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  ul .paginate_button {
    margin: 2px;
    border-radius: 50%;
  }

  .main-datatable {
    background: #FFF;
    border-radius: 10px 10px 10px 10px;
    padding: 10px;
  }

  .main-datatable .dataTable.no-footer {
    border-bottom: 1px solid #eee;
  }

  .main-datatable .cust-datatable thead {
    background-color: #343a40;


  }

  .main-datatable .cust-datatable>thead>tr>th {
    border-bottom-width: 0;
    color: #FFF;
    font-weight: normal;
    text-align: left;
  }

  .main-datatable .cust-datatable>tbody td {
    padding: 10px 15px 5px 10px;
    color: #333232;
    font-size: 500;
    word-break: break-word;
    border-color: #eee;
    text-align: left;
    vertical-align: middle;
  }

  .main-datatable .cust-datatable>tbody tr {
    border-top: none;
  }

  .dataTables_wrapper .dataTables_paginate {
    margin-top: 0;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button {
    color: #999999 !important;
    background-color: #f6f6f6 !important;
    border-color: #d4d4d4 !important;
    border-radius: 100px;


  }

  .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: #fff !important;
    border: 1px solid #3d96f5 !important;
    background: #4da3ff !important;
    box-shadow: none;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button.current,

  .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    color: #fff !important;
    border-color: transparent !important;
    background: #007bff !important;
  }

  .dataTables_paginate {
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    margin-bottom: 15px;
    width: 100%;
    font-size: 12px;
  }


  #buttons {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    color: #FFF;

  }

  button {

    outline: none;
  }

  .btn-main,
  .btn-hot,
  .btn-second {
    padding: 5px;
    display: inline-block;
    text-align: center;
    border-radius: 100px;
    width: 50px;
    color: #FFF;
    text-decoration: none;
    font-size: 12px;
    outline: none;
    border: none;
  }

  .btn-main {
    background-color: #636B6F;


  }

  .btn-main:hover {
    background-color: #343a40;
    color: #FFF;
  }

  .top {
    display: flex !important;
    justify-content: space-between;
    align-items: center;
    margin-left: 10px;
  }

  #DataTables_Table_0_filter label input[type=search] {
    width: 300px !important;
    border-radius: 50px;
    height: 30px !important;

  }


  #DataTables_Table_0_filter label input[type=search]:focus {
    color: #999999 !important;
    background-color: #f6f6f6 !important;
    border-color: #d4d4d4 !important;
    border-radius: 100px;
  }

  .dt-buttons {

    margin-right: 30px;
    margin-bottom: 20px;


  }

  .dt-button {
    border-radius: 100px !important;
    height: 30px;
    width: 30px;
    background: cornflowerblue !important;



  }

  .dt-button span {
    display: flex !important;
    justify-content: center;
    align-items: center;

  }


  .card-notification {
    width: 100%;
    display: flex;
    justify-content: center;
  }

  .card-notification .badge {
    height: 40px;
    width: 40px;
    display: flex !important;
    justify-content: center;
    align-items: center;
    font-size: 20px !important;
    border-radius: 50% !important;
  }

  .zoom {
    transition: transform .2s;
  }

  .zoom:hover {
    transform: scale(1.05);
  }

  .stage {
    border-left: .5rem solid darkcyan !important;
  }

  blockquote {
    border-left: .5rem solid darkcyan !important;
  }


  .disabled {
    pointer-events: none;
  }

  .card-table tbody {
    width: 100%;
    display: flex;
    justify-content: center;
    flex-flow: wrap;
  }

  .card-table tbody tr {
    float: left;
    width: 14rem;
    border: 0.0625rem solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
    margin: 4px;
    box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);


  }

  .card-table tbody td {
    position: relative;
    display: block;

  }

  tr td:first-child {
    text-align: center !important;

  }


  .card-table tbody td img {
    height: 160px;
    width: 100%;
    margin: 0 auto !important;

  }


  .card-table thead {
    display: none;
  }

  .card-table td:before {
    content: attr(data-label);
    position: relative;
    float: left;
    color: #808080;
    min-width: 2rem;
    margin-left: 0;
    text-align: left;

  }

  .card-table tr.selected td:before {
    color: #CCC;
  }

  .card-table table {
    table-layout: fixed;
    min-width: 100%;
    width: 100% !important;
  }

  .card-table .number {
    font-size: 14px;
  }
</style>


<style>
  .modal.left .modal-dialog {
    position: fixed;
    right: 0;
    margin: auto;
    width: 100vw;
    height: 100vh;
    -webkit-transform: translate3d(0%, 0, 0);
    -ms-transform: translate3d(0%, 0, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0);

  }

  #segundomodal .modal-dialog {
    position: absolute;
    top: 0;
    right: 0;
    margin: auto;
    width: 100vw;
    height: 100vh;


  }

  .modal-body {
    overflow-y: scroll;
  }



  .modal.left .modal-content {
    height: 100%;
    overflow: hidden;
  }

  .modal.right .modal-body {
    padding: 15px 15px 80px;
  }

  .modal.right.fade .modal-dialog {
    left: -260px;
    -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
    -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
    -o-transition: opacity 0.3s linear, left 0.3s ease-out;
    transition: opacity 0.3s linear, left 0.3s ease-out;
  }

  .modal.right.fade.show .modal-dialog {
    right: 0;
  }

  /* ----- MODAL STYLE ----- */
  .modal-content {
    border-radius: 0;
    border: none;
  }

  .modal-header {
    border-bottom-color: #eeeeee;
    background-color: #fafafa;
  }


  #exampleModal2 {
    position: fixed !important;
    left: 0;
    margin: auto;
    width: 100vw;
    height: 100vh;
    -webkit-transform: translate3d(0%, 0, 0);
    -ms-transform: translate3d(0%, 0, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0);
  }
</style>


@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">


        <div class="col-md-12">
          <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title ">{{__('Manage Products')}}</h3>

              <span class="">
                <a type="button" class="btn btn-sm btn-primary float-right mb-2" data-toggle="modal" data-target="#exampleModalPreview">{{__('New Product')}} </a>
                <a type="button" class="btn btn-sm btn-info float-right mr-2" href="{{url('product/import')}}">
                  <i class="fas fa-cloud-upload-alt mr-1"></i>
                  {{__('Import Bulk Products')}}
                </a>
              </span>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <div class="row">
                <div class="col-12 col-md-3 mb-3 ml-auto">

                  <input type="text" id="myCustomSearchBox" class="form-control  form-control-sm rounded-pill" placeholder="Buscar producto">
                </div>
              </div>

              <div class="table-responsive">
                <table id="productsTable" class="table table-borderless">
                  <thead>
                    <tr>
                      <th>{{__('Image')}}</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach (@$products as $product)
                    <tr>
                      <td>
                        <div class="card collapsed-card">
                          <div class="card-header">
                            <h6 class="d-inline">{{@$product->name}}</h6>


                            <div class="card-tools">
                              <button type="button" class="btn text-dark btn-tool" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                              </button>
                              <button type="button" class="btn btn-tool text-dark" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>


                            </div>
                          </div>


                          @if(count($product->product_details) > 0 )

                          @if(count($product->product_details->first()->images) > 0)

                          
                          <img class=" avatar"  src="{{asset('storage/images/products/' . $product->product_details->first()->images->first()->image)}}"  alt="Card image cap">
                          @else
                          <img src="/show_images/?file=img_not_available.png" class="avatar" alt="Card image cap">
                          @endif

                          @else
                          <img src="/show_images/?file=img_not_available.png" class="avatar" alt="Card image cap">
                          @endif


                          <div class="card-body text-center">
                            <h5 class="card-title w-100 my-2"><i class="fas fa-user-tag mr-1 text-dark"></i>{{@$product->owner->name}}</h5>
                            <a href="#" data-toggle="tooltip" data-title="{{$product->created_at->toDayDateTimeString()}}" class="mr-3">
                              <i class="fas fa-clock text-info"></i>
                            </a>
                            <a href="#" data-toggle="tooltip" data-title="{{$product->updated_at->toDayDateTimeString()}}" class="mr-3">
                              <i class="fas fa-history text-primary"></i>
                            </a>
                            <span>
                              @can('update-product', User::class)
                              <a class="text-primary mr-3" href="{{url('/product/edit', $product)}}">
                                <i class="fas fa-edit"></i>
                              </a>
                              @endcan

                              @can('delete-product', User::class)

                              <span id="delbtn{{@$product->id}}"></span>

                              <form id="delete-product-{{$product->id}}" action="{{ url('product/destroy', $product) }}" method="POST">
                                @method('DELETE')
                                @csrf
                              </form>
                              @endcan
                            </span>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>
              </div>



            </div>
            <!-- /.card-body -->
          </div>


        </div>
      </div>
      @include('crm.product.fullscreenmodal')

      <!-- Modal -->
      <div class="modal" id="segundomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="container">
    <div class="wrapper1">
    <input type="text" name="search" id="search1" placeholder="Type to search" autocomplete="chrome-off" class="form-control form-control-sm rounded-pill my-4">
  
      <div class="results">
        <ul>
        </ul>
      </div>
    </div>
  </div>
              <div id="elements">
              </div>

            </div>
          </div>


        </div>
      </div>
    </div>

    <!---->

</div><!-- /.container-fluid -->
</section>
</div>

@endsection
@section('scripts')

@include('crm.product.index_js')
@endsection