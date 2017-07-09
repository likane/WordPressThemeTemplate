
<?php get_header(); ?>
<!--***** start content ****** -->
    <div id="intro">

	<div class="width">
      
		<div class="intro-content">
	
                    <h2>Tristique sem vitae metus ornare </h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                  	
			<p><a href="#" class="button button-slider"><i class="fa fa-gbp"></i> Lorem ipsum dolor</a>
							<a href="#" class="button button-reversed button-slider"><i class="fa fa-info"></i> Consectetuer adipiscing</a></p>
                    

            	</div>
                
            </div>
            

	</div>

    <div id="body" class="width">



		<section id="content" class="two-column with-right-sidebar">

	    <article>
				
			
			<!-- <h2>Introduction to hallux</h2>
			<div class="article-info">Posted on <time datetime="2013-05-14">14 May</time> by <a href="#" rel="author">Joe Bloggs</a></div>

            <p>Welcome to hallux, a free valid CSS3 &amp; HTML5 responsive web template from <a href="http://zypopwebtemplates.com/" title="ZyPOP">ZyPOP</a>. This template is completely <strong>free</strong> to use permitting a link remains back to  <a href="http://zypopwebtemplates.com/" title="ZyPOP">http://zypopwebtemplates.com/</a>.</p>

<p> Should you wish to use this template unbranded you can buy a template license from our website for 8.00 GBP, this will allow you remove all branding related to our site, for more information about this see below.</p>	

		<p>The image in the header is in the public domain, downloaded from <a href="http://unsplash.com/">UnSplash</a></p>
            
            <p>This template has been tested in:</p>


            <ul class="styledlist">
                <li>Firefox</li>
                <li>IE</li>
 		<li>Safari</li>
                <li>Chrome</li>
            </ul>

		<a href="#" class="button">Read more</a>
		<a href="#" class="button button-reversed">Comments</a>


 -->
		<?php if ( have_posts() ) ; ? >
		<?php while ( have_posts() ): the_post() ; ?>

			<article>

			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"<?php the_title(); ?></a></h2>

			<?php the_excerpt() : ?>
			</article>
			<p><a> href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"class="button">Read More</a></p>
		
        </section>
<!--***** end content ****** -->

<?php get_sidebar(); ?>

<div class="clear"></div>
    </div><!-- END BODY / CONTENT DIV-->


    <?php get_footer(); ?>

  </div><!--End #container-->

  <?php wp_footer();?>
</body>
</html><!-- incase additional scripts-->