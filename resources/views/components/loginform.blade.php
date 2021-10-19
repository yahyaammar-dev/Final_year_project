<div class="formContainer">
    <form action="" method="post" class="form">
        @csrf
        <label class="form__label item" for="name">Email</label>
        <div class="item">
            <i class="fa fa-envelope icon form__icon"></i>
            <input class="form__input" name="email" type="text" placeholder="Enter Your Email"><br><br>
        </div>
        <label class="form__label item" for="name">Password</label>
        <div class="item">
            <i class="fas fa-unlock-alt form__icon"></i>
            <input class="form__input" name="pass" type="text" placeholder="Enter Your Password"><br><br>
        </div>   
        <button type="submit" class="submit">Register</button>
    </form>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>