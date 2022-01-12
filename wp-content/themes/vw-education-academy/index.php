<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VW Education Academy
 */

get_header(); ?>

<?php masterslider(6); ?>

<link rel="stylesheet" type="text/css" href="style.css">
<style>
.leftbox{
  float:left;
  width:25%;
  
}
.rightbox{
  float:right;
  width:75%;
}
#more {display: none;
</style>
<body>
  <div id="header">   
  </div>
<!-- <div id="nav">
    </div> -->
  
  <div class="container">
    <h2>About us</h2>
<div class="leftbox">

  <img src="http://localhost/my-files/library/wp-content/uploads/2021/08/c-6.jpg" height="250px" width="250px">
</div>
<div class="righttbox">
  <h1>c</h1>
  <h2>History of c</h2>
  <p><h4>C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions.</h4></p>
  <span id="dots">...</span><span id="more"><h4>The origin of C is closely tied to the development of the Unix operating system, originally implemented in assembly language on a PDP-7 by Dennis Ritchie and Ken Thompson, incorporating several ideas from colleagues. Eventually, they decided to port the operating system to a PDP-11. The original PDP-11 version of Unix was also developed in assembly language.</h4></span>
  <center>
<button onclick="myFunction()" id="myBtn">Read more</button></center>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
  </div>
  <hr>

  
  <div class="row">
    <div class="col-lg-push-4 col-md-4 col-md-push-4">
      <!-- <div class="searchForm type2"> -->
        <!-- <form action="" class="searchForm">Add The Appropriate Action for Your Site's Search Form/Page -->
          <!-- <label class="sr-only" for="searchNewsEvents">Search News and Events</label> -->
           <!-- <input id="searchNewsEvents" name="q" placeholder="What are you looking for?" type="search"> <input type="submit" value="Search"> -->
        </form>
      </div>
    </div>
    <div class="clearfix visible-sm visible-xs">
      &nbsp;
    </div>
    <div class="col-lg-push-4 col-md-4 col-md-push-4">
      <div class="dropdownCategories">
     <label class="sr-only" for="dropdownNewsEvents"><center>EVENTS & NEWS</center></label>
     <!-- <select>
        <option value="">
          Select Category
        </option>
        <option value="">--><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
        
        </option>
      </select>
      </div>
    </div>  
    <div class="clearfix visible-sm visible-xs">
      &nbsp;
    </div>
    <div class="col-lg-4 col-lg-pull-8 col-md-4 col-md-pull-8">
      <ul class="nav nav-pills" role="tablist">
  
        <li class="active">
          <a data-toggle="tab" href="#tab1" role="tab">Events</a>
        </li>
        <li>
          <a data-toggle="tab" href="#tab2" role="tab">News</a>
        </li>
      </ul>
    </div>
  </div><!-- / row -->
  <hr>
  <div class="tab-content">
    <div class="tab-pane fade in active" id="tab1">
      <div class="row">
        <div class="col-md-6">
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>30</em>Nov</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Venture Tech</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Nov 30, 2016</span> <span class="timeEl">12:00pm - 02:00pm</span>
              </div>
              <p>
                See the latest inspirations in the local tech scene.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>11</em>Dec</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Tech Conference</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Dec 11, 2016</span> <span class="timeEl">06:00pm - 07:30pm</span>
              </div>
              <p>
                Local tech entrepreneurs gather to share their knowledge.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>15</em>Dec</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Marketing for Large Businesses</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Dec 15, 2016</span> <span class="timeEl">05:30pm - 07:30pm</span>
              </div>
              <p>
                Learn how larger organizations can effectively manager their marketing projects.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
        </div><!-- / .col-md-6 -->
        <div class="col-md-6">
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>18</em>Dec</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Programming 101</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Dec 18, 2016</span> <span class="timeEl">06:00pm - 08:00pm</span>
              </div>
              <p>
                Take the basic CMS training class to see where things are and how to build custom modules.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>21</em>Dec</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Desiging for Mobile</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Dec 21, 2016</span> <span class="timeEl">10:00am - 12:00pm</span>
              </div>
              <p>
                Get tips and information regarding how to design websites for mobile devices.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>21</em>Dec</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Modern Support</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Dec 22, 2016</span> <span class="timeEl">10:00am - 12:00pm</span>
              </div>
              <p>
                Learn from industry leaders about providing the best support possible.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
        </div><!-- / .col-md-6 -->
      </div><!-- / row -->
     <!--  <div class="text-center">
        <br>
        <a class="btn btn-default" href="#">SEE ALL EVENTS</a>
      </div> -->
    </div>
    <div class="tab-pane fade" id="tab2">
      <div class="row">
        <div class="col-md-6">
          <div class="blogPost--small">
            <div class="media">
              <span class="pull-left"><a href="#"><span class="date"><span>29</span> <small>Nov</small></span></a></span>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="#">Building In WebCorpCo CMS 8</a>
                </h4>
                <p>
                  Learn about all of the possibilities of web design in our latest CMS release.
                </p>
              </div>
            </div>
          </div><!-- / blogPost -->
          <div class="blogPost--small">
            <div class="media">
              <span class="pull-left"><a href="#"><span class="date"><span>22</span> <small>Nov</small></span></a></span>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="#">WebCorpCo Named To Inc. 5000</a>
                </h4>
                <p>
                  Inc. magazine today ranked WebCorpCo as the 1,870th fastest growing company on the 34th annual Inc. 5000.
                </p>
              </div>
            </div>
          </div><!-- / blogPost -->
        </div><!-- / .col-md-6 -->
        <div class="col-md-6">
          <div class="blogPost--small">
            <div class="media">
              <span class="pull-left"><a href="#"><span class="date"><span>12</span> <small>Nov</small></span></a></span>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="#">7 Critical Factors When Choosing A CMS</a>
                </h4>
                <p>
                  Finding a solution that can be tailored to support the needs of your business is more important than ever.
                </p>
              </div>
            </div>
          </div><!-- / blogPost -->
          <div class="blogPost--small">
            <div class="media">
              <span class="pull-left"><a href="#"><span class="date"><span>10</span> <small>Nov</small></span></a></span>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="#">What Is A Content Management System</a>
                </h4>
                <p>
                  So many acronyms that most of us know a brief amount about, if at all, let alone the meaning of those three little letters we hear so often.
                </p>
              </div>
            </div>
          </div><!-- / blogPost -->
        </div><!-- / row -->
        <div class="text-center">
          <br>
          <a class="btn btn-default" href="#">SEE ALL NEWS</a>
        </div>
      </div>
    </div>
  </div>
</div>
</center>


<main id="maincontent" role="main">
  <div class="middle-align container">
    <?php
      $vw_education_academy_theme_lay = get_theme_mod( 'vw_education_academy_theme_options','Right Sidebar');
      if($vw_education_academy_theme_lay == 'Left Sidebar'){ ?>
      <div class="row m-0">
        <div class="col-lg-4 col-md-4 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'vw_education_academy_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_education_academy_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="clearfix"></div>
    <?php }else if($vw_education_academy_theme_lay == 'Right Sidebar'){ ?>
      <div class="row m-0">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'vw_education_academy_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_education_academy_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-4 col-md-4 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php }else if($vw_education_academy_theme_lay == 'One Column'){ ?>
      <div id="our-services" class="services">
        <?php if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content',get_post_format()); 
          endwhile;

          else :
            get_template_part( 'no-results' ); 
          endif; 
        ?>
        <?php if( get_theme_mod( 'vw_education_academy_blog_pagination_hide_show',true) != '') { ?>
          <div class="navigation">
            <?php vw_education_academy_blog_posts_pagination(); ?>
            <div class="clearfix"></div>
          </div>
        <?php } ?>
      </div>
    <?php }else if($vw_education_academy_theme_lay == 'Three Columns'){ ?>
      <div class="row m-0">
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-6 col-md-6">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'vw_education_academy_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_education_academy_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
      </div>
    <?php }else if($vw_education_academy_theme_lay == 'Four Columns'){ ?> 
      <div class="row m-0">
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-3 col-md-3">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'vw_education_academy_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_education_academy_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
      </div>
    <?php }else if($vw_education_academy_theme_lay == 'Grid Layout'){ ?>
      <div class="row m-0">
        <div id="our-services" class="services col-lg-9 col-md-9">
          <div class="row">
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/grid-layout' ); 
              endwhile;

              else :
                get_template_part( 'no-results' ); 
              endif; 
            ?>
          </div>
          <?php if( get_theme_mod( 'vw_education_academy_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_education_academy_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php }else{ ?>
      <div class="row m-0">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format()); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <?php if( get_theme_mod( 'vw_education_academy_blog_pagination_hide_show',true) != '') { ?>
            <div class="navigation">
              <?php vw_education_academy_blog_posts_pagination(); ?>
              <div class="clearfix"></div>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-4 col-md-4 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php } ?>
    <div class="clearfix"></div>
  </div>
</main>

<?php get_footer(); ?>