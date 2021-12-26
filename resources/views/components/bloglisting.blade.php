

<div class="listing__main">
    <x-sidebar />
    <div class="listing__content">

    <?php


    for($i=0; $i<count($abc["blog"]); $i++){


    
?>

<div class="block">
        <?php $url = "images/" . $abc["images"][$i][0]["url"];  ?>
    <img src="<?php echo $url; ?>" alt="" class="blocks__image">
    <div class="block__info">
        <p class="blocks__id"><?php echo $abc["blog"][$i]["blog_id"]; ?></p>
        <p class="blocks__title"><?php echo $abc["blog"][$i]["author"];   ?></p>
        <p class="blocks__price"> <?php  echo $abc["blog"][$i]["category"];   ?></p>
        <p class="blocks__category"> <?php echo $abc["blog"][$i]["content"];   ?></p>
        <p class="blocks__region"> <?php echo $abc["blog"][$i]["name"];   ?></p>
    </div>
</div>
<?php 
}
    ?>
    </div>
</div>