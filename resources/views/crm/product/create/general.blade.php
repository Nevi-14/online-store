<div class="row">

    <div class="col-6 mb-3">
        <label for="name">Nombre del producto <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="Nombre del producto"></i></label>
        <input type="text" class="form-control form-control-sm" name="name" placeholder="Nombre del producto" required autocomplete="off">

        <div class="invalid-feedback">
            Enter a valid name
        </div>
    </div>



    <div class="col-6 mb-3">

        <label for="staff">Asociado</label>

        <select id="product_owner" class="form-control form-control-sm " data-toggle="modal" data-target="#" name="product_owner" inputmode="search" required>

            @foreach ($users as $user)
            <option value="{{@$user->id}}">{{@$user->name}}</option>
            @endforeach

        </select>
        <div class="invalid-feedback">
            Selecciona una opción
        </div>
    </div>


    <div class="col-6 mb-3">

        <label for="offer">Categoria</label>

        <select class="form-control form-control-sm " name="category_id" required data-toggle="modal" data-target="#">
            @foreach ($categories as $category)
            <option value="{{@$category->id}}">{{@$category->name}}</option>
            @endforeach

        </select>
        <div class="invalid-feedback">
            Please select a valid staff.
        </div>


    </div>


    <div class="col-6 mb-3">

        <label for="offer">Subcategoria</label>
        <select id="subcategories" class="form-control form-control-sm " name="subcategory_id" inputmode="none" data-toggle="modal" data-target="#" required>on>
            @foreach ($subcategories as $subcategory)
            <option value="{{@$subcategory->id}}">{{@$subcategory->name}}</option>
            @endforeach


        </select>
        <div class="invalid-feedback">
            Please select a valid staff.
        </div>
    </div>

    <div class="col-6 mb-3">

        <label for="staff">Estado</label>
        <select id="status" class="form-control form-control-sm " inputmode="none" name="status_id" data-toggle="modal" data-target="#">

            @foreach ($statuses as $status)
            <option value=" {{@$status->id}}">{{@$status->name}}</option>
            @endforeach

        </select>
        <div class="invalid-feedback">
            Please select a valid staff.
        </div>
    </div>

    <div class="col-6 mb-3">
        <label for="size">Tamaño</label>

        <select id="size" class="form-control form-control-sm " inputmode="none" name="size_id" required data-toggle="modal" data-target="#">
            >
            @foreach($sizes as $size)
            <option value=" {{$size->id}}"> {{$size->name}}</option>
            @endforeach

        </select>

        <div class="invalid-feedback">
            Please select a valid staff.
        </div>


    </div>



    <div class="col-6 mb-3">
        <label for="stock">U. Inventario</label>
        <input type="number" class="form-control form-control-sm" name="stock" value="0" required autocomplete="off">
        <div class="valid-feedback">
            Stock cannot be empty.
        </div>


    </div>
    <div class="col-6 mb-3">
        <label for="stock">U. Disponibles</label>
        <input type="number" class="form-control form-control-sm" name="available" value="0" required autocomplete="off">
        <div class="valid-feedback">
            Stock cannot be empty.
        </div>


    </div>


    <div class="col-12 mb-3">
        <label for="description">Descripcion larga</label>
        <textarea class="form-control" name="long_description" rows="4" autocomplete="off" placeholder="Descripción" required></textarea>
        <div class="valid-feedback">
            Description cannot be empty.

        </div>
    </div>

</div>