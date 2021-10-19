<!-- This section is imported from unboxing pakistan blog and does not use BEM model -->

<div class="container list">
    <div class="row">
        <div class="col-sm-12">

            <div class="title">
                <h1 class="sectionHeading-title metaFont">PICK A DESTINATION</h1>
            </div>

          
            <div class="map-slider">
                <div class="owl-carousel owl-carousel-map">
                    <a href="#">
                        <div class="area   carousel-item slider-img">
                            <img src="{{URL('images/afgh.png')}}">
                            <p class="text">Afghanistan</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="area  carousel-item slider-img">
                            <img src="{{URL('images/pak.png')}}">
                            <p class="text">Pakistan</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="area carousel-item slider-img">
                            <img src="{{URL('images/bosnia.png')}}">
                            <p class="text">Bosnia</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="area carousel-item slider-img">
                            <img src="{{URL('images/afgh.png')}}">
                            <p class="text">Afghanistan</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="area carousel-item slider-img">
                            <img src="{{URL('images/bosnia.png')}}">
                            <p class="text">Bosnia</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="area carousel-item slider-img">
                            <img src="{{URL('images/nigeria.png')}}">
                            <p class="text">Nigeria</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="area  carousel-item slider-img">
                            <img src="{{URL('images/arrow.png')}}"
                                class="arrow">
                            <p class="text">Explore<br>More</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>

<script>
$('.owl-carousel-map').owlCarousel({
    margin: 30,
    responsive: {
        0: {
            items: 2
        },
        400: {
            items: 2.5
        },
        600: {
            items: 4
        },
        1000: {
            items: 7
        }
    }
})
</script>