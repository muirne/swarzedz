<?php get_header(); ?>
<div class="wrapper">


<div class="container-fluid main">
  <div class="container four">
      <div class="row offer">
          <div class="col-md-8">
              <div class="col-md-12 offer__colone">
                  <p class="offer__col--products">Nasze produkty:</p>
              </div>
          </div>
              <div class="col-md-4">
                  <div class="col-md-12 offer__coltwo">
                     <p class="offer__col--find">Znajdź nas na FB >></p>
                  </div>
              </div>
      </div>
</div>
<div class="container-fluid ghost">
        <div class="row">
            <div class="col-md-6 ghost__grey">
            </div>
            <div class="col-md-6">
            </div>
        </div>
</div>
</div>

  <div class="container five">
               <?php
                 $q1 = new WP_Query([
                                   'post_type' => 'post',
                                   'posts_per_page' => 3,
                                   'category_name' => 'kabiny'
                           ]);
               ?>
     <div class="row">
         <?php if ( $q1->have_posts() ) : while ( $q1->have_posts() ) :    $q1->the_post(); ?>
                              <!-- post -->

            <div class="col-md-4 col-sm-6 col-xs-12">
               <div id="bod" class="card card-body flex-fill">
                <div class="card-img-top img-responsive"><?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?></div>


                     <div class="card-block">
                        <h2 id="title" class="card-title"><?php the_title(); ?></h2>
                        <div class="card-text"><?php the_excerpt(); ?></div>

                    </div>
                </div>
            </div>

                            <?php endwhile; ?>
                <!-- post navigation -->
                           <?php else: ?>
                <!-- no posts found -->
                          <?php endif; ?>

          </div>

    </div>
    </div>
<?php get_footer(); ?>
