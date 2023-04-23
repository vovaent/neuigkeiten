<?php
/**
 * Block "Socials" Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Get ACF fields
$fields = get_fields();
?>
<section class="socials">
    <div class="socials__caption">
        <?php echo $fields['caption']; ?>
    </div>

    <?php if ( $fields['socials'] ) : ?>

    <ul class="socials__items">

        <?php foreach ( $fields['socials'] as $social ) : ?>

        <li class="socials__item">
            <a href="<?php $social['link']; ?>" class="socials__link">
                <?php
					echo wp_get_attachment_image( $social['icon'], '20x20', ['class' => 'socials__icon'] );
				?>
            </a>
            <!-- /.socials__link -->
        </li>
        <!-- /.socials__item -->

        <?php endforeach; ?>

    </ul>
    <!-- /.socials__items -->

    <?php endif; ?>

</section>
<!-- /.masthead -->