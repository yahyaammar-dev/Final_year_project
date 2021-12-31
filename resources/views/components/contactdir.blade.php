
<section class="contactdir">
    <h1 class="contactdir__head">Contact Directory</h1>

<?php 



    foreach($contact as $contact){


        ?>


    <div class="contactdir__contact">
        <div class="contactdir__contactitem contactdir__contactsecond">
            <div class="contactdir__contactinfoitem"><p class="contactdir__contactinfoname"><b>Name: </b></p><p class="contactdir__contactinfoparagrapgh"><?php echo $contact[0]["name"]; ?></p></div>
            <div class="contactdir__contactinfoitem"><p class="contactdir__contactinfoname"><b>Phone: </b></p><p class="contactdir__contactinfoparagrapgh"><?php echo $contact[0]["contact_no"]; ?></p></div>
            <div class="contactdir__contactinfoitem"><p class="contactdir__contactinfoname"><b>Type: </b></p><p class="contactdir__contactinfoparagrapgh"><?php echo $contact[0]["type"]; ?></p></div>
            <div class="contactdir__contactinfoitem"><p class="contactdir__contactinfoname"><b>City: </b></p><p class="contactdir__contactinfoparagrapgh"><?php echo $contact[0]["city"]; ?></p></div>
            <div class="contactdir__contactinfoitem"><p class="contactdir__contactinfoname"><b>Description: </b></p><p class="contactdir__contactinfoparagrapgh"><?php echo $contact[0]["description"]; ?></p></div>
        </div>       
    </div>


        <?php

    }

?>
</section>