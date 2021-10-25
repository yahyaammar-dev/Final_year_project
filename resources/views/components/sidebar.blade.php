<script>
    $(document).ready(function(){
        $(".sidebar__regiondrop").click(function(){
          $(".sidebar__regioncontent").slideToggle();
        });
        $(".sidebar__weatherdrop").click(function(){
          $(".sidebar__weathercontent").slideToggle();
        });
        $(".sidebar__typedrop").click(function(){
          $(".sidebar__typecontent").slideToggle();
        });
    });
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        }

        function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        }
</script>



<section class="sidebarcontainer" id="mySidebar">
    <div class="sidebar">
        <a href="javascript:void(0)" class="sidebar__closebtn" onclick="closeNav()">×</a>
        <h2 class="sidebar__main">All Products</h2>
        <div class="sidebar__listcont">
            <div class="sidebar__title">
                <h4 class="sidebar__listhead">Region</h4>
                <i class="fas fa-chevron-down sidebar__regiondrop"></i>
            </div>
            <ul class="sidebar__list sidebar__regioncontent">
                <li class="sidebar__listitem">
                    <p class="sidebar__listtext">Punjab</p>
                    <input type="checkbox" class="sidebar__listradio" name="pujab" value="punjab">
                </li>
                <li class="sidebar__listitem">
                    <p class="sidebar__listtext">Sindh</p>
                    <input type="checkbox" class="sidebar__listradio" name="sindh" value="sindh">
                </li>
                <li class="sidebar__listitem">
                    <p class="sidebar__listtext">Kpk</p>
                    <input type="checkbox" class="sidebar__listradio" name="kpk" value="kpk">
                </li>
                <li class="sidebar__listitem">
                    <p class="sidebar__listtext">Blouchistan</p>
                    <input type="checkbox" class="sidebar__listradio" name="Blouchistan" value="Blouchistan">
                </li>
            </ul>
        </div>
        <div class="sidebar__listcont">
            <div class="sidebar__title">
                <h4 class="sidebar__listhead">Weather</h4>
                <i class="fas fa-chevron-down sidebar__weatherdrop"></i>
            </div>
            <ul class="sidebar__list sidebar__weathercontent">
                <li class="sidebar__listitem">
                    <p class="sidebar__listtext">Cool</p>
                    <input type="checkbox" class="sidebar__listradio" name="cool" value="cool">
                </li>
                <li class="sidebar__listitem">
                    <p class="sidebar__listtext">Hot</p>
                    <input type="checkbox" class="sidebar__listradio" name="hot" value="hot">
                </li>
                <li class="sidebar__listitem">
                    <p class="sidebar__listtext">Normal</p>
                    <input type="checkbox" class="sidebar__listradio" name="normal" value="normal">
                </li>
            </ul>
        </div>
        <div class="sidebar__listcont">
            <div class="sidebar__title">
                <h4 class="sidebar__listhead">Type</h4>
                <i class="fas fa-chevron-down sidebar__typedrop"></i>
            </div>
            <ul class="sidebar__list sidebar__typecontent">
                <li class="sidebar__listitem">
                    <p class="sidebar__listtext">Religious</p>
                    <input type="checkbox" class="sidebar__listradio" name="religious" value="religious">
                </li>
                <li class="sidebar__listitem">
                    <p class="sidebar__listtext">Adventourous</p>
                    <input type="checkbox" class="sidebar__listradio" name="adventourous" value="adventourous">
                </li>
                <li class="sidebar__listitem">
                    <p class="sidebar__listtext">Historical</p>
                    <input type="checkbox" class="sidebar__listradio" name="historical" value="historical">
                </li>
            </ul>
        </div>
        <div class="sidebar__listcont">
            <button class="submit submit--filter" >Apply Filter</button>
        </div>
    </div>
</section>