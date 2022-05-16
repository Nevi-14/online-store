


<div class="form-row">



                    
<div class="col-md-6 mb-3">

<label for="offer">Oferta</label>
<select  class="form-control form-control-sm select2" name="discount_id"  >

<option disabled selected ></option>
@foreach ($discounts as $discount)

@if($productDetail->discount_id == $discount->id)
<option value="{{@$discount->id}}" selected>{{@$discount->name}}</option>
                              @else
                              <option value="{{@$discount->id}}">{{@$discount->name}}</option>
                              @endif


                               
                                @endforeach

</select>
<div class="invalid-feedback">
    Please select a valid staff.
</div>
</div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="price">Precio de compra</label>
                            <input type="number" class="form-control form-control-sm" value="{{@$productDetail->purchased_price}}"  name="purchased_price" aria-describedby="price" 
                                autocomplete="off">
                            <div id="price" class="invalid-feedback">
                                Please provide a valid price.
                            </div>
                        </div>

                        <div class="col-12 col-md-6 mb-3">
                            <label for="stock">Precio Sugerido</label>
                            <input type="number" class="form-control form-control-sm" value="{{@$productDetail->suggested_price}}"  name="suggested_price"  autocomplete="off">
                            <div class="valid-feedback">
                                Stock cannot be empty.
                            </div>


                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="stock">Precio de venta</label>
                            <input type="number" class="form-control form-control-sm" name="selling_price" value="{{@$productDetail->selling_price}}"   autocomplete="off">
                            <div class="valid-feedback">
                                Stock cannot be empty.
                            </div>


                        </div>
                 


                    </div>