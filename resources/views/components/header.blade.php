<div class="header">
    <x-hamburger />
    <x-logo />
    <x-navbar />
    <div class="header__icons">
        <i class="fas fa-search header__serachicon"></i> 
        <div class="header__search ">
            <!-- <input type="text" class="header__searchfield header__searchfieldn"> -->
            <x-search />
        </div>
    </div>
</div>



<script src="{{URL::asset('js/searchbox.js')}}"></script>