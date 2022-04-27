<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul class="nav nav-pills mb-3" id="pills-tab-{{$image->id}}" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link rounded-pill active" id="pills-home-tab-{{$image->id}}" data-toggle="pill" href="#pills-home-{{$image->id}}" role="tab" aria-controls="pills-home" aria-selected="true">General</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link rounded-pill" id="pills-profile-tab-{{$image->id}}" data-toggle="pill" href="#pills-profile-{{$image->id}}" role="tab" aria-controls="pills-profile" aria-selected="false">Precio</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link rounded-pill" id="pills-contact-tab-{{$image->id}}" data-toggle="pill" href="#pills-contact-{{$image->id}}" role="tab" aria-controls="pills-contact" aria-selected="false">Fotos</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home-{{$image->id}}" role="tabpanel" aria-labelledby="pills-home-tab">

                <!-- GENERAL PRODUCT INFO -->
                @include('crm.product.edit.general')
                <!-- GENERAL PRODUCT INFO -->

              </div>

              <div class="tab-pane fade" id="pills-profile-{{$image->id}}" role="tabpanel" aria-labelledby="pills-profile-tab">

                <!-- GENERAL PRODUCT INFO -->
                @include('crm.product.edit.pricing')
                <!-- GENERAL PRODUCT INFO -->

              </div>

              <div class="tab-pane fade" id="pills-contact-{{$image->id}}" role="tabpanel" aria-labelledby="pills-contact-tab">


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

      </div>

    </div>
  </div>
</div>
