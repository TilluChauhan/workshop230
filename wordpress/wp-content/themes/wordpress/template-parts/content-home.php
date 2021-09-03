<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    //print_r($post);

    $attachment_id1 = get_field('image1');
    $attachment_id2 = get_field('image2');


?>
    <section class="tyus" style="border:1px solid #000">
      <div class="container tyus" style="text-align:center" ,>
        <div>

          <img src="<?php echo $attachment_id1['url']; ?>" alt="" />

          <?php
				echo do_shortcode('[smartslider3 slider="1"]');
?>

          <img src="<?php echo $attachment_id2['url']; ?>" alt="" />




        </div>
      </div>
    </section>
    <section class="rh">

      <div class="container">

        <div class="row">


          <div class="ankit">

            <p><?php the_content(); ?></p>

          </div>
        </div>

      </div>





    </section>

<?php
  }
}
?>