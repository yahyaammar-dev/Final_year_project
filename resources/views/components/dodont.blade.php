<?php

    if(!empty($laws)){


?>
        <section class="dodontContainer">
    <div class="dodont">
        <div class="dodont__info">
            <h1 class="dodont__head">Laws</h1>
            <p class="dodont__para">Keep the following things in mind while visiting this place.</p>
        </div>
        <div class="dodont__lists">
            <ul class="dodont__listlist">
                <?php 
            foreach($laws as $law){
                if($law[0]["type"]=="dos"){                      
            ?>
                <li class="dodont__listitem">
                    <div class="dodont__listitemiconcont">
                        <i class="dodont__listitemiconcheck fas fa-check"></i>
                    </div>
                    <div class="dodont__law">
                        <p>
                            <?php 
                                echo $law[0]["content"];
                            ?>
                        </p>
                    </div>
                </li>
                <?php
                }
            }
            ?>
            </ul>
            <ul class="dodont__listlist">
                <?php 
                foreach($laws as $law){
                    if($law[0]["type"]=="donts"){
?>
                <li class="dodont__listitem">
                    <div class="dodont__listitemiconcontcont">
                        <i class="dodont__listitemiconcross fas fa-skull-crossbones"></i>
                    </div>
                    <div class="dodont__law">
                        <p><?php echo $law[0]["content"] ?></p>
                    </div>
                </li>
                <?php   
}
                }
            ?>
            </ul>
        </div>
    </div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</section>
<?php

    }

?>

