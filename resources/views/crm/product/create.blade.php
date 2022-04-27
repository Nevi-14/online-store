@extends('crm.layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

      <div class="container-fluid">
         
        {{-- NOTE Show All Errors Here --}}
        @include('crm.layouts.error')
        
        <form method="POST" action="{{url('product/store')}}"   enctype="multipart/form-data">
          @csrf

            <div class="modal-body">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link rounded-pill active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">General</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link rounded-pill" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Precio</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link rounded-pill" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Fotos</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    
  <!-- GENERAL PRODUCT INFO -->
 @include('crm.product.create.general')
  <!-- GENERAL PRODUCT INFO -->

  </div>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

  <!-- GENERAL PRODUCT INFO -->
 @include('crm.product.create.pricing')
  <!-- GENERAL PRODUCT INFO -->                

  </div>

  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">


  <!-- GENERAL PRODUCT INFO -->
  @include('crm.product.create.files')
  <!-- GENERAL PRODUCT INFO -->
  </div>

  <div class="form-row">
                        <div class="col-12 col-mb-3 d-flex justify-content-center">
              
                    <button type="submit" class="btn btn-dark rounded-pill ml-2">Guardar</button>
                        </div>
                    </div>


</div>

 
                  
         
  
   


              
            </div>

  
      </form>
  </div>
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
            var output = document.getElementById("file-upload-content");
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
                output.insertBefore(div, null);
            }

        } else {
            alert("Your browser does not support File API");
        }
    }
    document.getElementById('files').addEventListener('change', handleFileSelect, false);

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
