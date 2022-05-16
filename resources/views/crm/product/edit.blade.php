@extends('crm.layouts.app')

@section('styles')
<style>
   .modal.left .modal-dialog {
	position:fixed;
	right: 0;
	margin: auto;
	width: 100vw;
	height: 100vh;
	-webkit-transform: translate3d(0%, 0, 0);
	-ms-transform: translate3d(0%, 0, 0);
	-o-transform: translate3d(0%, 0, 0);
	transform: translate3d(0%, 0, 0);
}

.modal-body {
  overflow-y: scroll;
}



.modal.left .modal-content {
	height: 100%;
	overflow:hidden;
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


</style
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="container-fluid">

    {{-- NOTE Show All Errors Here --}}
    @include('crm.layouts.error')

    <form method="POST" action={{url('product/update', $product)}}>
      @csrf
      @method('PUT')
      <div class="card  card-tabs">
        <div class="card-header  bg-gray p-0 pt-1 border-bottom-0">
          <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
            <li class="px-3">
              <h3 class="card-title ">{{@$product->name}}</h3>
            </li>

            <li class="ml-auto px-3 float-right btn">
              <h3 class="card-title"> <span class="badge badge-info pl-1 pr-1">{{__('Created')}} - {{@$product->first()->created_at->toDayDateTimeString()}} </span></h3>
            </li>
            <li class="px-3 float-right btn">
              <h3 class="card-title"><span class="badge badge-primary pl-1 pr-1">{{__('Last')}} {{__('updated')}} - {{@$product->first()->updated_at->toDayDateTimeString()}}</span></h3>
            </li>

            <li class="px-3 float-right btn" data-toggle="modal" data-target="#exampleModal">
              <h3 class="card-title"><span class="badge badge-primary pl-1 pr-1">New Size</span></h3>
            </li>


          </ul>

        </div>

        <div class="card-body">




          <div class="tab-content" id="custom-tabs-three-tabContent">
            <div class="tab-pane fade show active" id="lead-details-id" role="tabpanel" aria-labelledby="lead-details">
              <div class="form-row">

<div class="col-12 col-md-6">

<div class="row">

<div class="col-12 col-md-12  mb-3">
                  <label for="name">Nombre del producto <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Nombre del producto"></i></label>
                  <input type="text" class="form-control form-control-sm" name="name" placeholder="Nombre del producto" value="{{@$product->name}}" required autocomplete="off">

                  <div class="invalid-feedback">
                    Enter a valid name
                  </div>
                </div>

                


                <div class="col-12 col-md-4 mb-3">

                  <label for="offer">Categoria</label>
                  <select class="form-control form-control-sm select2" name="category_id" required>

                    <option disabled selected value></option>
                    @foreach ($categories as $category)

                    @if(@$product->category_id == $category->id)
                    <option value="{{@$category->id}}" selected>{{@$category->name}}</option>

                    @else
                    <option value="{{@$category->id}}">{{@$category->name}}</option>
                    @endif
                    @endforeach

                  </select>
                  <div class="invalid-feedback">
                    Please select a valid staff.
                  </div>
                </div>



                <div class="col-12 col-md-4 mb-3">

                  <label for="offer">Subcategoria</label>
                  <select id="subcategories" class="form-control form-control-sm select2" name="subcategory_id" required>
                    <option disabled selected value></option>
                    @foreach ($subcategories as $subcategory)

                    @if(@$product->subcategory_id == $subcategory->id)
                    <option value="{{@$subcategory->id}}" selected>{{@$subcategory->name}}</option>

                    @else
                    <option value="{{@$subcategory->id}}">{{@$subcategory->name}}</option>
                    @endif
                    @endforeach


                  </select>
                  <div class="invalid-feedback">
                    Please select a valid staff.
                  </div>
                </div>


                <div class="col-12 col-md-4 mb-3">

                  <label for="staff">Asociado</label>

                  <select id="product_owner" class="form-control form-control-sm select2" name="product_owner" required>

                    <option disabled selected value></option>
                    @foreach ($users as $user)
                    @if(@$product->product_owner == $user->id)
                    <option value="{{@$user->id}}" selected>{{@$user->name}}</option>

                    @else
                    <option value="{{@$user->id}}">{{@$user->name}}</option>
                    @endif
                    @endforeach

                  </select>
                  <div class="invalid-feedback">
                    Selecciona una opción
                  </div>
                </div>







</div>

</div>
<div class="col-12 col-md-6">
<div class="row">
<div class="col-12 col-md-12 mb-3">
                  <label for="description">Descripcion</label>
                  <textarea class="form-control" name="long_description" rows="5" autocomplete="off" placeholder="Descripción" required>{{@$product->long_description}}</textarea>
                  <div class="valid-feedback">
                    Description cannot be empty.

                  </div>
                </div>
</div>
</div>


          
      






                <div class="col-12 col-mb-3 d-flex justify-content-center">

                  <button type="submit" class="btn btn-primary rounded-pill ml-2">Guardar</button>
                </div>

              </div>


            </div>
          </div>
        </div>
      </div>


    </form>
<div class="row">

@foreach ($product->product_details->sortBy('product_size') as $productDetail)
 
 <div class="col-md-6">
 
 <div class="card">
    <div class="card-header">
    <h6 class="d-inline">{{$product->name}}</h6> - 
    <span class="badge badge-dark rounded-pill">{{$productDetail->product_size->name}}</span>
    <form action="{{route('product.details.destroy',$productDetail->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-tool" >
                                                <i class="fas fa-trash text-danger"></i>

                                            </button>

                                        </form>


        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>


        </div>
      </div>


      <card class="card-body">
  



        <div class="row">

          <div class="col-12 col-md-6 mb-3">

            <div id="carouselExampleControls-{{$productDetail->id}}" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">

              @if(count($productDetail->images)>0)
              @foreach($productDetail->images as $img)
              @if($img->default == 1)
              <div class="carousel-item active">
              <img  src= "/show_images/?file={{$product->product_details->first()->images->first()->image}}" alt="Card image cap" height="200" >
     
              
      
                  <div class="carousel-caption  d-md-block">
      
                  <form action="#" method="POST">
                                            @csrf
                                            @method('DELETE')  
<a class="btn btn-info m-1" href="#" ><i class="far fa-eye"></i></a>

<a class="btn btn-danger m-1" type="submit"><i class="fas fa-trash"></i></a>

</form>
      </div>
                </div>
              @else
              <div class="carousel-item ">
                  <img src="/show_images/?file={{$img->image}}" class="d-block w-100" alt="..." height="200">
                  <div class="carousel-caption  d-md-block">
      
<form action="#" method="POST">
                                            @csrf
                                            @method('DELETE')  
<a class="btn btn-info m-1" href="#" ><i class="far fa-eye"></i></a>

<a class="btn btn-danger m-1" type="submit"><i class="fas fa-trash"></i></a>

</form>
      </div>
     
                </div>
              @endif
              @endforeach
              @else
              <div class="carousel-item active">
                  <img src="/show_images/?file=img_not_available.png" class="d-block w-100" alt="..." height="200">
</div>
              @endif

              </div>



              <a class="carousel-control-prev" href="#carouselExampleControls-{{$productDetail->id}}" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls-{{$productDetail->id}}" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
   
          <div class="col-12 col-md-6 mb-3">

          <form method="POST" action="{{route('product.details.update',[$productDetail->id, 'product_id' => @$product->id] )}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <ul class="nav nav-pills mb-3" id="pills-tab-{{$productDetail->id}}" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link rounded-pill active" id="pills-home-tab-{{$productDetail->id}}" data-toggle="pill" href="#pills-home-{{$productDetail->id}}" role="tab" aria-controls="pills-home" aria-selected="true">General</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link rounded-pill" id="pills-profile-tab-{{$productDetail->id}}" data-toggle="pill" href="#pills-profile-{{$productDetail->id}}" role="tab" aria-controls="pills-profile" aria-selected="false">Precio</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link rounded-pill" id="pills-contact-tab-{{$productDetail->id}}" data-toggle="pill" href="#pills-contact-{{$productDetail->id}}" role="tab" aria-controls="pills-contact" aria-selected="false">Fotos</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home-{{$productDetail->id}}" role="tabpanel" aria-labelledby="pills-home-tab">

                <!-- GENERAL PRODUCT INFO -->
                @include('crm.product.edit.general')
                <!-- GENERAL PRODUCT INFO -->

              </div>

              <div class="tab-pane fade" id="pills-profile-{{$productDetail->id}}" role="tabpanel" aria-labelledby="pills-profile-tab">

                <!-- GENERAL PRODUCT INFO -->
                @include('crm.product.edit.pricing')
                <!-- GENERAL PRODUCT INFO -->

              </div>

              <div class="tab-pane fade" id="pills-contact-{{$productDetail->id}}" role="tabpanel" aria-labelledby="pills-contact-tab">


                <!-- GENERAL PRODUCT INFO -->
                @include('crm.product.edit.files')
                <!-- GENERAL PRODUCT INFO -->
              </div>

              <div class="form-row">
                <div class="col-12 col-mb-3 d-flex justify-content-center">

                  <button type="submit" class="btn btn-primary rounded-pill ml-2">Guardar</button>
                </div>
              </div>


            </div>
            </form>
          </div>

          

        </div>







      </card>
    </div>
 </div>
    @endforeach
</div>
    @include('crm.product.edit.create')


  </div>
  <!-- /.content -->
</div>
@endsection



@section('scripts')
<script type="text/javascript">

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {

    $('body').on('click', '.delete', function() {

        var id = $(this).data("id");
        $("#delete-item ").attr('action', '/products/' + id);

    });

});

    $('#categories').on('change', function(e) {
        var category_id = e.target.value;
        $.ajax({
            url: "{{ url('product/create') }}",
            type: "GET",
            data: {
                category_id: category_id
            },
            success: function(data) {
                var subcategories = data.subcategories;
                $('#subcategories').empty();
                subcategories.forEach((item) => {
                    $('#subcategories').append('<option value="' + item.id + '">' +
                        item.name + '</option>');
                })
            }
        })
    });



</script>

<script>
    function handleFileSelect(event) {
    
        //Check File API support
        if (window.File && window.FileList && window.FileReader) {
            var files = event.target.files; //FileList object
            var output = document.getElementsByClassName("file-upload");

            //Display File Div
            $('.file-upload-content').show();
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var name = file.name;
                var picFile;

                //Only pics

                if (!file.type.match('image')) continue;
                var picReader = new FileReader();
                picReader.fileName = file.name
                picReader.addEventListener("load", function(event) {
                    picFile = event.target;
                    fileName = event.target.fileName;
                    appendHtml(picFile, Math.floor(Math.random() * 10))
                });
                //Read the image
                picReader.readAsDataURL(file);
            }

            function appendHtml(picFile, id) {

      
                var div = document.createElement("div");
                div.setAttribute("class", "col-12 col-md-4");
                div.setAttribute("id", `productRow${id}`);
                div.innerHTML = `
    <div  class="col-12 col-md-4">  
    <img class="m-4" src="${picFile.result}" width="200" height="200"  alt="your image" />
    <div class="image-title-wrap">

    <button type="button" id="remove_product${id}" onclick="remove_product(${id})" class="btn btn-danger">
          <i class="fas fa-trash"></i>
        </button>
    
    </div>
    </div> `;

  //  for (var i = 0; i < output.length; i++) {
    // output[i] is a node with the desired class name

    //closest
//console.log(    output[i].closest('.file-upload-content'));
  //  console.log(output[i])
   // output[i].insertBefore(div, null);
//}
var section = document.getElementById(`file-upload-content-${event.target.id}`);
console.log(section)
section.insertBefore(div, null);

              
            }

        } else {
            alert("Your browser does not support File API");
        }
    }
   var inputsFiles = document.getElementsByClassName('file-upload-input');

 function DataTransfer(element){

    element.addEventListener('change', handleFileSelect, false);
//console.log(`file-upload-content-${element.id}`)
//var section = document.getElementById(`file-upload-content-${element.id}`);



  }

 //  for (var i = 0; i < inputsFiles.length; i++) {
    // list[i] is a node with the desired class name
    //inputsFiles[i].addEventListener('change', handleFileSelect, false);
//}


    //.addEventListener('change', handleFileSelect, false);

    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });

    function remove_product(id) {
        $('#productRow' + id).remove();
    }

    $('#new').on('hidden.bs.modal', function() {
        document.getElementById("file-upload-content").innerHTML = "";
    })
</script>
@endsection