
<section class="contactdir">
    <h1 class="contactdir__head">Contact Directory</h1>

<?php 



    foreach($contact as $contact){

        ?>


    <div class="contactdir__contact">
        <div class="contactdir__contactitem contactdir__contactfirst">
            <img src="{{URL('images/product.jpg')}}" alt="" class="contactdir__contactimage">
        </div>    
        <div class="contactdir__contactitem contactdir__contactsecond">
            <div class="contactdir__contactinfoitem"><p class="contactdir__contactinfoname">Name: </p><p class="contactdir__contactinfoparagrapgh"><?php echo $contact[0]["name"]; ?></p></div>
            <div class="contactdir__contactinfoitem"><p class="contactdir__contactinfoname">Phone: </p><p class="contactdir__contactinfoparagrapgh"><?php echo $contact[0]["phone"]; ?></p></div>
            <div class="contactdir__contactinfoitem"><p class="contactdir__contactinfoname">Type: </p><p class="contactdir__contactinfoparagrapgh"><?php echo $contact[0]["type"]; ?></p></div>
        </div>       
    </div>


        <?php

    }

?>
</section>