<section  class="mapa inner-map">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-7">
        <div class="formulario-rodape">
          <h3>Entre em contato</h3>
          <?php echo do_shortcode('[contact-form-7 id="22" title="Formulário de contato 1"]') ?>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php echo get_template_directory_uri() ?>/images/logo-baixo.png" alt="" />
      </div>
      <div class="col-md-3 dados-footer">
        <img src="<?php echo get_template_directory_uri() ?>/images/icon1.png" alt="" /> <label> (31) 3333.3333 </label>
      </div>
      <div class="col-md-3 dados-footer">
        <img src="<?php echo get_template_directory_uri() ?>/images/icon2.png" alt="" /> <label> contato@site.com.br </label>
      </div>
    </div>
     <div class="pull-right">
       <a href="http://4media.com.br/" class="ass" target="_blank"> 4media </a>
     </div>
  </div>
</footer>

<?php wp_footer() ?>

</body>
</html>
