<section class="container">
	<h1 class="my-4 text-center text-lg-left">Image Gallery</h1>
	<div class="row gallery">
        <?php
         $dirname = "./gallery/";
         $images = glob($dirname."*.jpg");
         $images = glob($dirname."*.jpeg");
         $images = glob($dirname."*.png");
         $images = glob($dirname."*.JPG");
        foreach($images as $image) {
            ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="<?php echo $image;?>">
				<figure><img class="img-fluid img-thumbnail" src="<?php echo $image;?>" alt="<?php echo $image;?>"></figure>
			</a>
		</div>
            <?php
        
          }
        ?>
		

		
	</div>
</section>
