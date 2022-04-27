<div class="form-row">

    <div class="col-6 mb-3">

        <label for="staff">Estado</label>
        <select class="form-control form-control-sm select2" name="status_id">

            <option disabled selected value></option>
            @foreach ($statuses as $status)

            @if($productDetail->status_id == $status->id)
            <option value="{{@$status->id}}" selected>{{@$status->name}}</option>
            @else
            <option value="{{@$status->id}}">{{@$status->name}}</option>
            @endif

            @endforeach

        </select>
        <div class="invalid-feedback">
            Please select a valid staff.
        </div>
    </div>

    <div class="col-6 mb-3">
        <label for="size">Tamaño</label>

        <select class="form-control form-control-sm select2" name="size_id" required>

            <option disabled selected></option>
            @foreach($sizes as $size)
            @if($productDetail->size_id == $size->id)
            <option value="{{$size->id}}" selected> {{$size->name}}</option>
            @else
            <option value="{{$size->id}}"> {{$size->name}}</option>
            @endif

            @endforeach

        </select>
        <div class="invalid-feedback">
            Please select a valid staff.
        </div>
        <div class="form-group my-2 float-right">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="change_size" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Change size
                </label>
            </div>
        </div>

    </div>



    <div class="col-6 mb-3">
        <label for="stock">Unidades en inventario</label>
        <input type="number" class="form-control form-control-sm" name="stock" value="{{$productDetail->stock}}" required autocomplete="off">
        <div class="valid-feedback">
            Stock cannot be empty.
        </div>


    </div>
    <div class="col-6 mb-3">
        <label for="stock">Unidades disponibles</label>
        <input type="number" class="form-control form-control-sm" name="available" value="{{$productDetail->available}}" required autocomplete="off">
        <div class="valid-feedback">
            Stock cannot be empty.
        </div>


    </div>




</div>