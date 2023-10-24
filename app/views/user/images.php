<!DOCTYPE html>
<html lang="en">
<body>

<div class="left_background">
    <div class="left_add"><span>Absolute greatest place for ads!</span></div>
</div>

<div class="centering_grid">

    <div class="grid"> <!-- style="vertical-align:top"> File name: =$image['name']  -->

        <?php
        foreach($viewbag['images'] as $image) {
        ?>
        <div class="mydivouter">
            <img src="<?=$image['image']?>"
                title="<?=$image['name'] ?>"
                width='200' height='200'>
            <figcaption> Filename: <?=$image['name'] ?> </figcaption>
            <form id="delete_img" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return confirm('Are you sure you want to delete this image?');" id="delete_img">
                <input type="hidden" name="_METHOD" value="DELETE">
                <input type="text" name="id" value="<?=$image['image']?>">
                <button form="delete_img" type="submit" class="mybuttonoverlap"><i class="fa-solid fa-xmark"></i></button>
            </form>
	        
        </div>
        <?php
        }
        ?>

    </div>
</div>

<div class="right_background">
    <div class="right_add"><span>Absolute greatest place for ads!</span></div>
</div>

</body>
</html>