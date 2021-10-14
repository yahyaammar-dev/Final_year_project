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
                <li class="sidebar__listitem">Punjab</li>
                <li class="sidebar__listitem">Sindh</li>
                <li class="sidebar__listitem">Blouchistan</li>
                <li class="sidebar__listitem">KPK</li>
            </ul>
        </div>
        <div class="sidebar__listcont">
            <div class="sidebar__title">
                <h4 class="sidebar__listhead">Weather</h4>
                <i class="fas fa-chevron-down sidebar__weatherdrop"></i>
            </div>
            <ul class="sidebar__list sidebar__weathercontent">
                <li class="sidebar__listitem">Cool</li>
                <li class="sidebar__listitem">Hot</li>
                <li class="sidebar__listitem">Normal</li>
            </ul>
        </div>
        <div class="sidebar__listcont">
            <div class="sidebar__title">
                <h4 class="sidebar__listhead">Type</h4>
                <i class="fas fa-chevron-down sidebar__typedrop"></i>
            </div>
            <ul class="sidebar__list sidebar__typecontent">
                <li class="sidebar__listitem">Religious</li>
                <li class="sidebar__listitem">Adventourous</li>
                <li class="sidebar__listitem">Health</li>
            </ul>
        </div>
    </div>
</section>