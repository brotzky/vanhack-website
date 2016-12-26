<?php /* Include the header meta */
include(TEMPLATEPATH.'/template-parts/header-meta.php');

/* Include the header main */
include(TEMPLATEPATH.'/template-parts/header-main.php');

$domain = "http://$_SERVER[HTTP_HOST]";
$domain_path = $_SERVER[REQUEST_URI];

?>

<div class="Conatiner">

<h2><?php echo $domain ?> <strong><?php echo $domain_path ?></strong>  </h2>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php the_content(); ?>
  </div>

<?php endwhile; ?>

<?php else : ?>

  <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h1>Not Found</h1>
  </div>

<?php endif; ?>
</div>
<?php /* Include the footer */
include(TEMPLATEPATH.'/template-parts/footer.php'); ?>
