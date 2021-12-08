<div class="adddestinationformContainer">
    <form class="adddestinationform">
        @csrf

        <h1 class="adddestinationform__heading">Videos</h1>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input videos" name="videos" type="text"
                placeholder="Enter URL of Videos"><br><br>
        </div>
        <button class="addvideo submit">Add video</button>



        <h1 class="adddestinationform__heading">Information</h1>

        <label class="adddestinationform__label item" for="name">Name</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="name adddestinationform__input" name="name" type="text" placeholder="Enter Full Name"><br><br>
        </div>

        <label class="adddestinationform__label item" for="coordx">Coordinate-X</label>
        <div class="item">
            <i class="fa fa-envelope icon adddestinationform__icon"></i>
            <input class="coordx adddestinationform__input" name="coordx" type="text"
                placeholder="Enter Coord-x"><br><br>
        </div>

        <label class="adddestinationform__label item" for="coordy">Coordinate-Y</label>
        <div class="item">
            <i class="fas fa-unlock-alt adddestinationform__icon"></i>
            <input class="coordy adddestinationform__input" type="text" name="coordy"
                placeholder="Enter Y coordinate"><br><br>
        </div>

        <label class="adddestinationform__label item" for="description">Description</label>
        <div class="item">
            <i class="fas fa-phone adddestinationform__icon"></i>
            <textarea class="description adddestinationform__input" type="text" name="description"
                placeholder="Enter description"></textarea><br><br>
        </div>

        <label class="adddestinationform__label item" for="price">Price</label>
        <div class="item">
            <i class="fas fa-unlock-alt adddestinationform__icon"></i>
            <input class="price adddestinationform__input" name="price" type="text" placeholder="Price"><br><br>
        </div>

        <label class="adddestinationform__label item" for="type">Type</label>
        <div class="item">
            <select class="type adddestinationform__select" name="type" id="cars">
                <option value="Religious">Religious</option>
                <option value="Adventourous">Adventourous</option>
                <option value="Historical">Historical</option>
            </select>
        </div>


        <label class="adddestinationform__label item" for="region">Region</label>
        <div class="item">
            <i class="fas fa-unlock-alt adddestinationform__icon"></i>
            <input class="region adddestinationform__input" name="region" type="text" placeholder="Region"><br><br>
        </div>


        <label class="adddestinationform__label item" for="weather">Weather</label>
        <div class="item">
            <i class="fas fa-unlock-alt adddestinationform__icon"></i>
            <input class="weather adddestinationform__input" name="weather" type="text" placeholder="Weather"><br><br>
        </div>

        <h1 class="adddestinationform__heading">Images</h1>

        <div class="item adddestinationform__fileupload">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input type="file" id="file" class="images adddestinationform__input"
                placeholder="Enter files to be uploaded" name="file" multiple>
        </div>


        <h1 class="adddestinationform__heading">Add Hotel</h1>

        <label class="adddestinationform__label item" for="hotelname">Hotel Name</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input hotelname" name="hotelname" type="text"
                placeholder="Enter Hotel Name"><br><br>
        </div>

        <label class="adddestinationform__label item" for="hoteldescription">Hotel Description</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <textarea class="adddestinationform__input hoteldescription" name="hoteldescription" type="text"
                placeholder="Enter Hotel Description"></textarea><br><br>
        </div>

        <label class="adddestinationform__label item" for="hotelprice">Hotel Price</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input hotelprice" name="hotelprice" type="text"
                placeholder="Enter Hotel Price"><br><br>
        </div>

        <label class="adddestinationform__label item" for="hotelphone">Hotel Phone</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input hotelphone" name="hotelphone" type="text"
                placeholder="Enter Hotel Phone"><br><br>
        </div>

        <label class="adddestinationform__label item" for="hotelcoordx">Hotel Coord-x</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input hotelcoordx" name="hotelcoordx" type="text"
                placeholder="Enter Hotel Coord-x"><br><br>
        </div>

        <label class="adddestinationform__label item" for="hotelcoordy">Hotel Coord-y</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input hotelcoordy" name="hotelcoordy" type="text"
                placeholder="Enter Hotel Coord-y"><br><br>
        </div>

        <label class="adddestinationform__label item" for="hotelimages">Hotel Images</label>
        <div class="item adddestinationform__fileupload2">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input type="file" class="adddestinationform__input hotelimages" placeholder="Enter files to be uploaded"
                name="name" multiple>
        </div>

        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input hotelvideos" name="hotelvideos" type="text"
                placeholder="Enter URL of Videos of hotel"><br><br>
        </div>
        <button class="addhotelvideo submit">Add video</button>

        <button class="adddestinationform__addhotel submit">Add Hotel</button>








        <h1 class="adddestinationform__heading">Add Freelancer</h1>

        <label class="adddestinationform__label item" for="freelancername">Freelancer Name</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input freelancername" name="freelancername" type="text"
                placeholder="Enter Hotel Name"><br><br>
        </div>

        <label class="adddestinationform__label item" for="freelancerdescription">Freelancer Description</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <textarea class="adddestinationform__input freelancerdescription" name="freelancerdescription" type="text"
                placeholder="Enter Hotel Description"></textarea><br><br>
        </div>

        <label class="adddestinationform__label item" for="freelancerprice">Freelancer Price</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input freelancerprice" name="freelancerprice" type="text"
                placeholder="Enter Hotel Price"><br><br>
        </div>

        <label class="adddestinationform__label item" for="freelancertype">Freelancer type</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input freelancertype" name="freelancertype" type="text"
                placeholder="Enter Hotel Phone"><br><br>
        </div>

        <label class="adddestinationform__label item" for="freelancerimages">Freelancer Images</label>
        <div class="item adddestinationform__fileupload2">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input type="file" class="adddestinationform__input freelancerimages"
                placeholder="Enter files to be uploaded" name="name" multiple>
        </div>

        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input freelancervideos" name="freelancervideos" type="text"
                placeholder="Enter URL of Videos of hotel"><br><br>
        </div>
        <button class="addfreelancervideo submit">Add video</button>

        <button class="adddestinationform__addfreelancer submit">Add Freelancer</button>










        <h1 class="adddestinationform__heading">Add Product</h1>

        <label class="adddestinationform__label item" for="productname">Product Name</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input productname" name="productname" type="text"
                placeholder="Enter Product Name"><br><br>
        </div>

        <label class="adddestinationform__label item" for="productdescription">Product Description</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <textarea class="adddestinationform__input productdescription" name="productdescription" type="text"
                placeholder="Enter product Description"></textarea><br><br>
        </div>

        <label class="adddestinationform__label item" for="productprice">Product Price</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input productprice" name="productprice" type="text"
                placeholder="Enter product Price"><br><br>
        </div>

        <label class="adddestinationform__label item" for="producttype">Product type</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input producttype" name="producttype" type="text"
                placeholder="Enter product Type"><br><br>
        </div>

        <label class="adddestinationform__label item" for="productimages">Product Images</label>
        <div class="item adddestinationform__fileupload2">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input type="file" class="adddestinationform__input productimages" placeholder="Enter files to be uploaded"
                name="name" multiple>
        </div>

        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input productvideos" name="productvideos" type="text"
                placeholder="Enter URL of Videos of hotel"><br><br>
        </div>
        <button class="addproductlvideo submit">Add video</button>

        <button class="adddestinationform__addproduct submit">Add Product</button>




        <h1 class="adddestinationform__heading">Add Laws</h1>


        <label class="adddestinationform__label item" for="laws">Laws</label>
        <div class="item ">



            <div id="form-container" class="container">
                <form id="discussionForm" class="qilljs" method="post" action="discussionsEditor.php" role="form">
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="form-group">
                                <input class="form-control" name="title" type="text" placeholder="Title">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <input name="discussionContent" type="hidden">
                        <div id="editor-container">
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn btn-primary addblog" type="submit">Add Blog</button>
                    </div>
                </form>
            </div>






            <script>
            var quill = new Quill('#editor-container', {
                modules: {
                    toolbar: [
                        ['bold', 'italic'],
                        ['link', 'blockquote', 'code-block', 'image'],
                        [{
                            list: 'ordered'
                        }, {
                            list: 'bullet'
                        }]
                    ]
                },
                placeholder: 'Compose an epic...',
                theme: 'snow'
            });


            var quilldata = [];

            var qilljs = document.querySelector(".qilljs");
            var addblog = document.querySelector(".addblog");
            addblog.addEventListener("click", function() {
                event.preventDefault()
                var discussionContent = document.querySelector('input[name=discussionContent]');
                discussionContent.value = JSON.stringify(quill.getContents());

                var data = JSON.stringify(quill.getContents());
                quilldata.push(data);
            });
            </script>



        </div>




        <h1 class="adddestinationform__heading">Add Laws</h1>


        <label class="adddestinationform__label item" for="laws">Laws</label>
        <div class="item adddestinationform__fileupload2">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input type="text" class="adddestinationform__input lawtype" placeholder="Enter law's typr" name="typr">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input type="text" class="adddestinationform__input law" placeholder="Enter law's text" name="law">
        </div>

        <button class="adddestinationform__addlaw submit">Add law</button>

        <button type="submit" class="finalsubmission submit">Register</button>

    </form>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>



<script>
// creating a list of videos
var videos = [];
var btn = document.querySelector(".addvideo");
btn.addEventListener("click", function() {
    event.preventDefault()
    var ele = document.querySelector(".item .videos").value;
    videos.push(ele)
    ele = "";
});


// creating a list of hotels
var hotels = [];
var btn = document.querySelector(".adddestinationform__addhotel");
btn.addEventListener("click", function() {
    event.preventDefault()
    var hotelname = document.querySelector(".hotelname").value;
    var hoteldescription = document.querySelector(".hoteldescription").value;
    var hotelprice = document.querySelector(".hotelprice").value;
    var hotelphone = document.querySelector(".hotelphone").value;
    var hotelcoordx = document.querySelector(".hotelcoordx").value;
    var hotelcoordy = document.querySelector(".hotelcoordy").value;
    var hotelimages = document.querySelector(".hotelimages").files;


    var hotel = [];

    hotel.push(hotelname);
    hotel.push(hoteldescription)
    hotel.push(hotelprice)
    hotel.push(hotelphone)
    hotel.push(hotelcoordx)
    hotel.push(hotelcoordy)
    hotels.push(hotel)



    hotelname = "";
    hoteldescription = "";
    hotelprice = "";
    hotelphone = "";
    hotelcoordx = "";
    hotelcoordy = "";
});



// creating a list of videos of hotels
var hotelvideos = [];
var btn2 = document.querySelector(".addhotelvideo");
btn2.addEventListener("click", function() {
    event.preventDefault()
    var ele = document.querySelector(".item .hotelvideos").value;
    hotelvideos.push([hotels.length, ele])
    ele = "";
});



// creating a list of freelancers
var freelancers = [];
var btn1 = document.querySelector(".adddestinationform__addfreelancer");
btn1.addEventListener("click", function() {
    event.preventDefault()
    var freelancername = document.querySelector(".freelancername").value;
    var freelancerdescription = document.querySelector(".freelancerdescription").value;
    var freelancerprice = document.querySelector(".freelancerprice").value;
    var freelancertype = document.querySelector(".freelancertype").value;
    var freelancerimages = document.querySelector(".freelancerimages").files;


    var freelancer = [];

    freelancer.push(["freelancer Name", freelancername]);
    freelancer.push(["freelancer description", freelancerdescription])
    freelancer.push(["freelancer price", freelancerprice])
    freelancer.push(["freelancer type", freelancertype])
    freelancer.push(["freelancer images", freelancerimages])


    freelancers.push(freelancer)



    freelancername = "";
    freelancerdescription = "";
    freelancerprice = "";
    freelancertype = "";
});



// creating a list of videos of freelancers
var freelancervideos = [];
var btn3 = document.querySelector(".addfreelancervideo");
btn3.addEventListener("click", function() {
    event.preventDefault()
    var ele = document.querySelector(".freelancervideos").value;
    freelancervideos.push([freelancers.length, ele])
    ele = "";
});





// creating a list of products
var products = [];
var btn1 = document.querySelector(".adddestinationform__addproduct");
btn1.addEventListener("click", function() {
    event.preventDefault()
    var productname = document.querySelector(".productname").value;
    var productdescription = document.querySelector(".productdescription").value;
    var productprice = document.querySelector(".productprice").value;
    var producttype = document.querySelector(".producttype").value;
    var productimages = document.querySelector(".productimages").files;


    var product = [];

    product.push(["product Name", productname]);
    product.push(["product description", productdescription])
    product.push(["product price", productprice])
    product.push(["product type", producttype])
    product.push(["product images", productimages])


    products.push(product)



    productname = "";
    productdescription = "";
    productprice = "";
    producttype = "";
});



// creating a list of videos of products
var productvideos = [];
var btn4 = document.querySelector(".addproductlvideo");
btn4.addEventListener("click", function() {
    event.preventDefault()
    var ele = document.querySelector(".productvideos").value;
    productvideos.push([freelancers.length, ele])
    ele = "";
});






// creating a list of laws
var laws = [];
var btn5 = document.querySelector(".adddestinationform__addlaw");
btn5.addEventListener("click", function() {
    event.preventDefault()
    var ele = document.querySelector(".lawtype").value;
    var ele2 = document.querySelector(".law").value;
    laws.push([ele, ele2])
    ele = "";
    ele2 = "";
});






var data = [];
var btn10 = document.querySelector(".finalsubmission");
btn10.addEventListener("click", function() {
    event.preventDefault()

    var name = document.querySelector(".name").value;
    var coordx = document.querySelector(".coordx").value;
    var coordy = document.querySelector(".coordy").value;
    var description = document.querySelector(".description").value;
    var price = document.querySelector(".price").value;
    var region = document.querySelector(".region").value;
    var weather = document.querySelector(".weather").value;
    var e = document.querySelector(".type");
    var tvalue = e.options[e.selectedIndex].value;
    var images = document.querySelector(".images").files;




    //calculating the id

    var id;

    $.ajax({
        url: "http://localhost:8001/calculateid",
        method: "POST",
        success: function(data) {
            id = data;
            createObject();
        }
    });



    function createObject() {

        var obj = new Object();
        obj.destination_id = id;
        obj.videos = videos;
        obj.name = name;
        obj.coordx = coordx;
        obj.coordy = coordy;
        obj.description = description;
        obj.price = price;
        obj.type = tvalue;
        obj.region = region;
        obj.weather = weather;
        obj.images = images;
        obj.hotels = hotels;
        obj.hotelvideos = hotelvideos;
        obj.freelancers = freelancers;
        obj.freelancervideos = freelancervideos;
        obj.products = products;
        obj.productvideos = productvideos;
        obj.laws = laws;
        obj.blogs = quilldata;
        var jsonString = JSON.stringify(obj);



        console.log(obj)






        $.ajax({
            url: "http://localhost:8001/adddestination",
            method: "POST",
            data: {
                _token: '{{csrf_token()}}',
                data: jsonString
            },
            success: function(data) {
                console.log(data)
            }
        });


        sendImages()


    }



    function sendImages() {



        var name = document.getElementById("file").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();

        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file").files[0]);



        var f = document.getElementById("file").files[0];

        var imgs = document.getElementById("file").files.length;

        console.log(imgs)


        var fsize = f.size || f.fileSize;
        if (fsize > 20000000) {
            alert("Image File Size is very big");
        } else {

            for (let i = 0; i < imgs; i++) {
                var form_data = new FormData();
                form_data.append("file", document.getElementById('file').files[i]);
                $.ajax({
                    url: "http://localhost:8001/insertimages",
                    method: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        console.log("sending")
                    },
                    success: function(data) {
                        console.log(data)
                    }
                });
            }
        }
    }

});
</script>