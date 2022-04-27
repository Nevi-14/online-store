<script type="text/javascript">
let searchable = [
  'Elastic',
  'PHP',
  'Something about CSS',
  'How to code',
  'JavaScript',
  'Coding',
  'Some other item',
];

const searchInput = document.getElementById('search1');
const searchWrapper = document.querySelector('.wrapper1');
const resultsWrapper = document.querySelector('.results');

searchInput.addEventListener('keyup', () => {
  let results = [];
  let input = searchInput.value;
  if (input.length) {
    results = searchable.filter((item) => {
      return item.toLowerCase().includes(input.toLowerCase());
    });
  }
  renderResults(results);
});

function renderResults(results) {
    console.log(results.length)
  if (!results.length) {
    return searchWrapper.classList.remove('show');
    return searchWrapper.classList.add('hide');
  }

  const content = results
    .map((item) => {
      return `<li>${item}</li>`;
    })
    .join('');

  searchWrapper.classList.add('show');
  resultsWrapper.innerHTML = `<ul>${content}</ul>`;
}


    const optionsContainer = document.querySelectorAll(".search_box_pop_up");
    const searchBox = document.querySelector(".search_box");
    var elementSelected = '';
    let containerBox = document.getElementById('elements');
    for (var i = 0; i < optionsContainer.length; i++) {
        optionsContainer[i].addEventListener("click", (event) => {
            elementSelected = event.target;
             selectAppend = document.createElement('select');

            selectAppend.setAttribute('class', 'form-control select2')
           
            containerBox.innerHTML = "";
            containerBox.appendChild(selectAppend)


            for (var i = 0; i < elementSelected.length; i++) {
                var optionSelect = document.createElement('option');
                optionSelect.setAttribute('value', elementSelected[i].id)
                var valueShow = document.createTextNode(elementSelected[i].text)
                selectAppend.appendChild(optionSelect)
                optionSelect.appendChild(valueShow)
                console.log(elementSelected[i].id);
                console.log(elementSelected[i].text);

            }
            selectAppend.select2();
        });



    }


    focusMethod = function getFocus() {
        document.getElementById("search_box").focus();
    }


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
    $('#target2').on('change', function() {
        $('#target1').val(this.value);
    })
    /**
     * 
     * 
        function myFunction() {
            alert("hello")
        }
     */
</script>

<script>
    function handleFileSelect(event) {
        //Check File API support
        if (window.File && window.FileList && window.FileReader) {
            let pictureArray = [];
            var testArray = [];
            var files = event.target.files; //FileList object
            // var output = document.getElementById("file-upload-content");
            var output = document.getElementById("carouselpics");
            //Display File Div
            //  $('.file-upload-content').show();
            //  $('.carousel-inner').show();
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var name = file.name;
                var picFile;
                //Only pics
                if (!file.type.match('image')) continue;
                /* CREATING A NEW OBJECT */
                var picReader = new FileReader();
                /* OBJECT PROPERTIES */

                picReader.fileName = file.name
                picReader.fileId = i

                picReader.addEventListener("load", function(event) {
                    var obj = {}
                    obj['data'] = event.target;
                    obj['label'] = event.target.fileName;

                    picFile = event.target;
                    fileName = event.target.fileName;

                    var carouselItems = document.querySelectorAll('.carousel-item');


                    var lastcarouselItem = 0;
                    if (carouselItems.length > 0) {
                        lastcarouselItem = carouselItems[carouselItems.length - 1].dataset.id;
                        console.log(carouselItems[carouselItems.length - 1].dataset.id)
                        console.log(lastcarouselItem)
                    }


                    //     console.log(event.target.fileId++)
                    appendHtml(picFile.result, lastcarouselItem);
                    /* Get carousel elements in list after append*/

                });
                //Read the image
                picReader.readAsDataURL(file);


            }


            //  console.log(files)



            function appendHtml(picFile, lastcarouselItem) {


                var div = document.createElement("div");
                div.setAttribute("class", "carousel-item");
                div.setAttribute("id", `productRow${lastcarouselItem}`);
                div.setAttribute("data-id", `${lastcarouselItem}`);
                div.innerHTML = `
                <img src="${picFile}"  class="d-block w-100" alt="picture" height="180">
                <div class="carousel-caption  d-md-block">
      

<button class="btn btn-danger"  
 ><i class="fas fa-trash"></i></button>


</div>
                `;
                if (lastcarouselItem === 0) {
                    div.setAttribute("class", "carousel-item active");
                }
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
        console.log(id)
        $('#productRow' + id).remove();
    }

    $('#new').on('hidden.bs.modal', function() {
        document.getElementById("file-upload-content").innerHTML = "";
    })
</script>