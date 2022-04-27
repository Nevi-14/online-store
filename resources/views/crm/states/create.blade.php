
<!-- Modal -->
<div class="modal fade" id="state" tabindex="-1" aria-labelledby="state" aria-hidden="true">
<div class="modal-dialog">
<form method="POST" action={{url('/state')}}>
    @csrf
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title text-info text-uppercase text-bold" id="exampleModalLabel">Add new state</h5>

        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-row">
<div class="col-12">

<div class="mb-2">{{__('State name')}}</div>
<input type="text" name="name" class="form-control"  autocomplete="off" placeholder="state name" required>
</div>
      </div>


          
      <div class="form-row">
                        <div class="col-12 d-flex justify-content-center mt-2">
                            <button type="submit" class="btn btn-dark  rounded-pill ">Save record </button>
                        </div>
                    </div>

                 
                    </div>
                   

      </div>
</form>
 
    </div>
  </div>
</div>


