<?php
/**
 * Block "Custom Categories List" Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get ACF fields
$fields = get_fields();

// WP
$categories_list = get_categories(
	array(
		'hide_empty' => ! $fields['show_empty'],
		'number'     => $fields['number_categories'],
		'count'      => $fields['show_post_count'],
		'parent'     => $fields['show_only_top_cat'] ? 0 : '',
	)
);
?>
<section class="categories">

    <?php if ( $categories_list ) : ?>

    <ul class="categories__list">

        <?php foreach ( $categories_list as $cat ) : ?>

        <li class="categories__item cat-item cat-item--<?php echo $cat->term_id; ?>">
            <a href="<?php echo get_category_link( $cat->term_id ); ?>" class="cat-item__name">
                <?php echo $cat->name; ?>

                <?php if ( $fields['count'] ) : ?>

                <span class="cat-item__count">
                    <?php echo "&nbsp;({$cat->count})"; ?>
                </span>

                <?php endif; ?>
            </a>
        </li>
        <!-- /.categories__item cat-item cat-item--<?php echo $cat->term_id; ?> -->

        <?php endforeach; ?>

    </ul>
    <!-- /.categories-list -->

    <?php endif; ?>

</section>
<!-- /.categories -->