<?php /* template name: home */ ?>
<?php get_header() ?>

    <section>
      <?php echo do_shortcode('[rev_slider alias="home"]') ?>
      <!--<img src="<?php echo get_template_directory_uri() ?>/images/banner.jpg" alt="" class="img-responsive" />-->
    </section>

    <section class="apresentacao inner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/6Ia-VMGwKJ8" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-2">
            <a href="http://www.calculoimc.com.br/ " target="_blank">
              <img src="<?php echo get_template_directory_uri() ?>/images/imc.jpg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="noticia-contato inner">
      <div class="container">
        <h3 class="titulo-noticia"> Últimas Notícias </h3>
        <div class="row">
          <?php
          $argPost = array(
            'post_type'       => "post",
            'posts_per_page'  => 3
          );
          $postsHome = new wp_query($argPost);
          if ($postsHome->have_posts()):
            while($postsHome->have_posts()): $postsHome->the_post();
          ?>
          <div class="col-md-4">
            <div class="bloco-noticias">
              <?php if (has_post_thumbnail()): ?>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                  </a>
              <?php endif; ?>
              <div class="conteudo-noticia-home">
                <h4> <a href="#"> <?php the_title() ?> </a> </h4>
                <p class="data-home">
                  <?php the_time('F j, Y') ?>
                </p>
                <?php the_excerpt_limit(20) ?>
              </div>
            </div>
          </div>

          <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </section>

<?php get_footer() ?>
