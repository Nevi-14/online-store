<script type="text/javascript">
    $(function() {
        "use strict";

        var products = <?php echo (($product_ids->content())) ?>;
        for (const id of products) {
            var btn = `
            <a href="#" onclick="confirmDelete('${id}')">
                <i class="fas fa-trash text-danger"></i>
            </a>
        `;
            $(`#delbtn${id}`).append(btn);
        }


        var dTable = $("#productsTable").DataTable({
            "order": [
                [0, "desc"]
            ],
            pagingType: "full",
            dom: 't<"bottom"lp>', //to hide default searchbox but search feature is not disabled hence customised searchbox can be made.
            lengthMenu: [
                [10, 25, 50, 100, -1],
                ['10 rows', '25 rows', '50 rows', '100 rows', 'Show all']
            ],
            buttons: [{
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    }
                },
            ]
        });
        $('#myCustomSearchBox').keyup(function() {
            dTable.search($(this).val()).draw(); // this  is for customized searchbox with datatable search feature.
        })

    });





    function confirmDelete(id) {
        let choice = confirm("{{__('Are you sure, you want to delete this product and related data?')}}")
        if (choice) {
            document.getElementById('delete-product-' + id).submit();
        }
    }
</script>


<script>
    function handleFileSelect(event) {
        //Check File API support
        if (window.File && window.FileList && window.FileReader) {
            var files = event.target.files; //FileList object
            // var output = document.getElementById("file-upload-content");
            var output = document.getElementById("carouselpics");

            //Display File Div
            //  $('.file-upload-content').show();

            $('.carousel-inner').show();

            var picturesArr = [];



            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var name = file.name;
                var picFile;
                console.log(i)
                var last_element = [];

                //Only pics

                if (!file.type.match('image')) continue;
                var picReader = new FileReader();
                picReader.fileName = file.name
                picReader.addEventListener("load", function(event) {
                    picFile = event.target;
                    fileName = event.target.fileName;
                    let text = "";
                    picturesArr.unshift(picFile);
                    picturesArr.forEach(myFunction);


                    function myFunction(item, index) {
                        appendHtml(item.result, index);



                    }



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
    <img class="m-4" src="${picFile}" width="200" height="200"  alt="your image" />
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