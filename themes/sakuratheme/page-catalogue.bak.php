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
<main class="container">
    <div class="row justify-content-center catalogue p-0">
        <?php
        foreach ($ProductCategories as $Category) { 
        $Thumbnail = ( get_term_meta( $Category->term_id, "thumbnail_id", true ) ) ? wp_get_attachment_url( get_term_meta( $Category->term_id, "thumbnail_id", true ) ) : '';
        ?>
        <div class="col-6 col-sm-4 catalogue-product p-0">
            <?php if ( $Thumbnail ) {
                ?>
                <img class="catalogue-product-image" src="<?php echo $Thumbnail; ?>" alt="">
                <?php
            } else {
                ?>
                <img class="catalogue-product-image" src="https://via.placeholder.com/480" alt="">
                <?php
            }
            ?>
            <a href="<?php echo get_category_link( $Category ) ?>" class="catalogue-product-title"><?php echo $Category->name; ?></a>
        </div>
        <?php
        }
        ?>
    </div>
</main>

<?php
get_footer();

?>