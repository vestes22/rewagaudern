<?php
/**
 * The template part for displaying grid layout
 * @package LearnPress Coaching
 * @subpackage learnpress_coaching
 * @since 1.0
 */
?>

<div class="col-lg-4 col-md-4 gridbox">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>   
    <div class="box-image">
      <?php if( get_theme_mod( 'learnpress_coaching_post_featured_image',true) != '') { ?>
        <div class="box-image mb-3">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php }?>
    </div>
    <h2 class="p-0 my-2"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>   
    <div class="new-text">
    <?php $learnpress_coaching_excerpt = get_the_excerpt(); echo esc_html( learnpress_coaching_string_limit_words( $learnpress_coaching_excerpt, esc_attr(get_theme_mod('learnpress_coaching_post_excerpt_number','30')))); ?>  <?php echo esc_html( get_theme_mod('learnpress_coaching_post_discription_suffix','[...]') ); ?>
    </div> 
    <?php if( get_theme_mod('learnpress_coaching_button_text','View More') != ''){ ?>
      <div class="postbtn mt-4 text-start">
        <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('learnpress_coaching_button_text','View More'));?><i class="<?php echo esc_attr(get_theme_mod('learnpress_coaching_button_icon','fas fa-long-arrow-alt-right')); ?> me-0 py-0 px-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('learnpress_coaching_button_text','View More'));?></span></a>
      </div>
    <?php }?>
  </article>
</div>