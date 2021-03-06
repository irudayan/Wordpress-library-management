<?php
/**
 * The template part for displaying video post
 *
 * @package VW Education Lite
 * @subpackage vw-education-lite
 * @since VW Education Lite 1.0
 */
?>
<?php 
  $vw_education_lite_archive_year  = get_the_time('Y'); 
  $vw_education_lite_archive_month = get_the_time('m'); 
  $vw_education_lite_archive_day   = get_the_time('d'); 
?>
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="services-box">
    <div class="row m-0">
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the video file.
          if ( ! empty( $video ) ) {
            foreach ( $video as $video_html ) {
              echo '<div class="entry-video">';
                echo $video_html;
              echo '</div>';
            }
          };
        };
      ?>
      <div class="service-text">
         <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
         <?php if( get_theme_mod( 'vw_education_lite_toggle_postdate',true) != '' || get_theme_mod( 'vw_education_lite_toggle_author',true) != '' || get_theme_mod( 'vw_education_lite_toggle_comments',true) != '' || get_theme_mod( 'vw_education_lite_toggle_time',true) != '') { ?>
          <div class="post-info">
            <?php if(get_theme_mod('vw_education_lite_toggle_postdate',true)==1){ ?>
              <span class="entry-date"><i class="fas fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $vw_education_lite_archive_year, $vw_education_lite_archive_month, $vw_education_lite_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>
            <?php if(get_theme_mod('vw_education_lite_toggle_author',true)==1){ ?>
              <span class="entry-author"><i class="far fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>
            <?php if(get_theme_mod('vw_education_lite_toggle_comments',true)==1){ ?>
            <span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','vw-education-lite'), __('0 Comments','vw-education-lite'), __('% Comments','vw-education-lite')); ?></span>
            <?php } ?>
            <?php if(get_theme_mod('vw_education_lite_toggle_time',true)==1){ ?>
              <span class="entry-time"><i class="fas fa-clock"></i><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <div class="entry-content">
          <p>
            <?php $vw_education_lite_theme_lay = get_theme_mod( 'vw_education_lite_excerpt_settings','Excerpt');
            if($vw_education_lite_theme_lay == 'Content'){ ?>
              <?php the_content(); ?>
            <?php }
            if($vw_education_lite_theme_lay == 'Excerpt'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <?php $excerpt = get_the_excerpt(); echo esc_html( vw_education_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_education_lite_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_education_lite_excerpt_suffix',''));?>
              <?php }?>
            <?php }?>
          </p>
        </div>
        <?php if( get_theme_mod('vw_education_lite_button_text','Read More') != ''){ ?>
          <div class="read-btn">
            <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('vw_education_lite_button_text',__('Read More','vw-education-lite')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_education_lite_button_text',__('Read More','vw-education-lite')));?></span></a>  
          </div> 
        <?php } ?> 
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</article>