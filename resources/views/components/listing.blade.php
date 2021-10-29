<div class="listing__main">
    <x-sidebar />
    <div class="listing__content">

        @foreach($dest as $item)
        <x-block :dest="$item"/>
        @endforeach

    </div>
</div>
<button type="submit" class="submit submit--center">Register</button>


