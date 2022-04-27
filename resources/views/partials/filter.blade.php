<div class="modal left fade" id="exampleModal" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header ">
            <h5 class="modal-title">Filtrar productos</h5>
             
                    <button type="button" class="btn btn-sm btn-danger rounded-pill ml-auto" data-dismiss="modal">Cerrar</button>
                </div>
                <div class="modal-body">
 
                    <div class="container card-body scroll-div">
      <div class="row">
        <?php $counter=0; ?>
        @if(!empty($categories))
        @foreach ($categories as $category)

<div class="col-12">
<div class="custom-control custom-switch">
  <input type="checkbox" {{($counter==0 ? '' : '' )}} attr-name="{{$category->name}}"  class="custom-control-input switch" id="{{$category->id}}">
  <label class="custom-control-label" for="{{$category->id}}">{{ucfirst($category->name)}}</label>
</div>
</div>




        <?php $counter++; ?>
        @endforeach
        @endif
        </div>
    </div>
                </div>
         
            </div>
        </div>
    </div>
</div>
<!-- container -->


