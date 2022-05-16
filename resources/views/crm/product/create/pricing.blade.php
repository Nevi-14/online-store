


<div class="form-row">

<div class="col-12 col-md-6 mb-3">
                        
                        <label for="staff">Tax type1</label>
                        
                        <select  class="form-control form-control-sm select2" name="tax_type_1"  >

                        <option disabled selected ></option>
                        @if (count($taxrates) > 0)
                                @foreach ($taxrates as $taxrate)
                                    <option value="{{@$taxrate->id}}">{{@$taxrate->name}}</option>
                                @endforeach
                              @endif

                        </select>
                        <div class="invalid-feedback">
                            Selecciona una opción
                        </div>
                    </div>


                    
<div class="col-md-6 mb-3">

<label for="offer">Oferta</label>
<select  class="form-control form-control-sm select2" name="discount_id"  >

<option disabled selected ></option>
@foreach ($discounts as $discount)
                                    <option value="{{@$discount->id}}">{{@$discount->name}}</option>
                                @endforeach

</select>
<div class="invalid-feedback">
    Please select a valid staff.
</div>
</div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="price">Precio de compra</label>
                            <input type="number" class="form-control form-control-sm" value="0"  name="purchased_price" aria-describedby="price" 
                                autocomplete="off">
                            <div id="price" class="invalid-feedback">
                                Please provide a valid price.
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mb-3">
                            <label for="stock">Precio Sugerido</label>
                            <input type="number" class="form-control form-control-sm" value="0"  name="suggested_price"  autocomplete="off">
                            <div class="valid-feedback">
                                Stock cannot be empty.
                            </div>


                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <label for="stock">Precio de venta</label>
                            <input type="number" class="form-control form-control-sm" name="selling_price" value="0"   autocomplete="off">
                            <div class="valid-feedback">
                                Stock cannot be empty.
                            </div>


                        </div>
                 


                    </div>