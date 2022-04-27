    <div class="modal fade" id="new" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
        <h6 class="modal-title text-info text-uppercase text-bold" >New Product</h6>

        <button type="button" class="btn btn-danger btn-sm p-1" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times"></i>
        </button>
      </div>
      
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
                   
                     <button type="submit" class="btn btn-dark rounded-pill mr-2">Save</button>
                     <button type="button" class="btn btn-info rounded-pill" data-dismiss="modal">Close</button>
                   
                         </div>
                     </div>
 
 
 </div>
 
  
                   
          
   
    
 
 
               
             </div>
 
   
       </form>
   </div>
        </div>
    </div>


</div>

