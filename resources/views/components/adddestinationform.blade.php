<div class="adddestinationformContainer">
    <form action="" method="POST" class="adddestinationform">
        @csrf
       
        <label class="adddestinationform__label item" for="name">Name</label>
        <div class="item">
            <i class="fa fa-user adddestinationform__icon"></i>
            <input class="adddestinationform__input" name="name" type="text" placeholder="Enter Full Name"><br><br>
        </div>

        <label class="adddestinationform__label item" for="coordx">Coordinate-X</label>
        <div class="item">
            <i class="fa fa-envelope icon adddestinationform__icon"></i>
            <input class="adddestinationform__input" name="coordx" type="text" placeholder="Enter Coord-x"><br><br>
        </div>

        <label class="adddestinationform__label item" for="coordy">Coordinate-Y</label>
        <div class="item">
            <i class="fas fa-unlock-alt adddestinationform__icon"></i>
            <input class="adddestinationform__input" type="text" name="coordy" placeholder="Enter Y coordinate"><br><br>
        </div>  

        <label class="adddestinationform__label item" for="description">Description</label>
        <div class="item">
            <i class="fas fa-phone adddestinationform__icon"></i>
            <textarea class="adddestinationform__input" type="text" name="description" placeholder="Enter description"></textarea><br><br>
        </div>

        <label class="adddestinationform__label item" for="price">Price</label>
        <div class="item">
            <i class="fas fa-unlock-alt adddestinationform__icon"></i>
            <input class="adddestinationform__input" name="price" type="text" placeholder="Price"><br><br>
        </div>

        <label class="adddestinationform__label item" for="type">Type</label>
        <div class="item">
            <select class="adddestinationform__select" name="type" id="cars">
                <option value="Religious">Religious</option>
                <option value="Adventourous">Adventourous</option>
                <option value="Historical">Historical</option>
            </select>
        </div> 

                   
        <button type="submit" class="submit">Register</button>

    </form>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>