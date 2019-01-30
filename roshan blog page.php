<div class="blog-post section-padding padding-70 text-center-xs">
	<div class="container">
		<div class="row">
			<?php query_posts('cat=3&posts_per_page=100'); ?>
			<?php   while (have_posts()) : the_post(); ?>
				<div class="col-md-8 col-sm-8 col-xs-12 padding-0">
					<div class="row blog-bg-color">
						<div class="col-md-4 col-sm-4 col-xs-12 padding-0">
							<div class="">
								<?php $thumb = get_the_post_thumbnail_url(); ?>
								<a class="learn-more-btn" href="<?php the_permalink(); ?>"><div class="blog-bg" style="background-image: url('<?php echo $thumb;?>')" ></div></a><!-- .blog-bg-->
							</div><!-- .blog-bg -->
						</div><!-- .col -->
						<div class="col-md-7 col-sm-7 col-xs-12">
							<a class="learn-more-btn" href="<?php the_permalink(); ?>"><?php the_title( '<h5 class="all-services-heading padding-20">', '</h5>' ); ?></a>
							<hr class="blog-hr">
							<?php the_excerpt(); ?>
							<a class="learn-more-btn" href="<?php the_permalink(); ?>">( read more… )</a>
						</div><!-- .col -->
					</div><!-- .row -->	
				</div><!-- .col -->
			<?php endwhile;  ?>
			
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .blog -->

