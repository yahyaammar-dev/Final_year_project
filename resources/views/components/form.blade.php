<div class="formContainer">
    <form action="" method="POST" class="form">
        @csrf
        <label class="form__label item" for="name">Name</label>
        <div class="item">
            <i class="fa fa-user form__icon"></i>
            <input class="form__input" name="name" type="text" placeholder="Enter Full Name"><br><br>
        </div>
        <label class="form__label item" for="name">Email</label>
        <div class="item">
            <i class="fa fa-envelope icon form__icon"></i>
            <input class="form__input" type="email" name="email" placeholder="Enter Your Email"><br><br>
        </div>
        <label class="form__label item" for="name">Password</label>
        <div class="item">
            <i class="fas fa-unlock-alt form__icon"></i>
            <input class="form__input" type="password" name="password" placeholder="Enter Your Password"><br><br>
        </div>   
        <label class="form__label item" for="name">Phone</label>
        <div class="item">
            <i class="fas fa-phone form__icon"></i>
            <input class="form__input" name="phone" type="number" placeholder="Enter Your Phone Number"><br><br>
        </div>
        <button type="submit" class="submit">Register</button>
    </form>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>