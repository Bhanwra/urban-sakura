<?php 
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sakura_Theme
 */

get_header();

$args = array(
    'taxonomy'   => "product_cat",
    'number'     => $number,
    'orderby'    => $orderby,
    'order'      => $order,
    'hide_empty' => true,
    'include'    => $ids
);

$ProductCategories = get_terms($args);

?>
<div class="row justify-content-center">
    <?php
    foreach ($ProductCategories as $Category) { 
    $Thumbnail = ( get_term_meta( $Category->term_id, "thumbnail_id", true ) ) ? wp_get_attachment_url( get_term_meta( $Category->term_id, "thumbnail_id", true ) ) : '';
    ?>
    <div class="col-6 col-sm-4 col-md-3 mb-3">
        <?php if ( $Thumbnail ) {
            ?>
            <img src="<?php echo $Thumbnail; ?>" alt="">
            <?php
        } else {
            ?>
            <img src="https://via.placeholder.com/480" alt="">
            <?php
        }
        ?>
        <a href="<?php echo get_category_link( $Category ) ?>" class="text-center d-block text-decoration-none text-uppercase"><?php echo $Category->name; ?></a>
    </div>
    <?php
    }
    ?>
</div>

<?php
get_footer();

?>