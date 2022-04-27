
   <div class="form-row">

   <div class="col-6 mb-3">
                        
                        <label for="staff">Estado</label>
                        <select id="status" class="form-control form-control-sm select2" name="status_id" >

                        <option disabled selected value></option>
                        @foreach ($statuses as $status)
                                    <option value="{{@$status->id}}">{{@$status->name}}</option>
                                @endforeach

                        </select>
                        <div class="invalid-feedback">
                            Please select a valid staff.
                        </div>
                    </div>

                    <div class="col-6 mb-3">
<label for="size">Tamaño</label>

<select id="size" class="form-control form-control-sm select2"  name="size_id" required >

<option disabled selected ></option>
    @foreach($sizes as $size)
    <option value="{{$size->id}}"> {{$size->name}}</option>
    @endforeach

</select>
<div class="invalid-feedback">
    Please select a valid staff.
</div>


</div>


<div class="col-12 col-md-6 mb-3">
    <label for="stock">Unidades en inventario</label>
    <input type="number" class="form-control form-control-sm" name="stock"  value="0" required autocomplete="off">
    <div class="valid-feedback">
        Stock cannot be empty.
    </div>


</div>
<div class="col-12 col-md-6 mb-3">
    <label for="stock">Unidades disponibles</label>
    <input type="number" class="form-control form-control-sm" name="available"  value="0" required autocomplete="off">
    <div class="valid-feedback">
        Stock cannot be empty.
    </div>


</div>





</div>
