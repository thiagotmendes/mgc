<?php /* template name: Calculo IMC */ ?>
<?php get_header() ?>
  <main>
    <?php if (have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <section class="topo-titulo" style="background-image:url('<?php echo $url ?>')">
          <div class="container">
            <h1> <?php the_title() ?> </h1>
          </div>
        </section>
        <section>
          <div class="container">
            <?php the_content() ?>
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Peso (em KG)</label>
                      <input type="text" class="form-control" id="peso" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Altura (em Metros)</label>
                      <input type="text" class="form-control" id="altura" placeholder="">
                    </div>
                  </div>
                </div>
                <button type="button" name="button" class="btn  btn-home btn-block"> Calcular </button>
              </div>
              <div class="col-md-6">
                <strong>O valor do IMC é:</strong>
                <div class="valor"></div>
              </div>
            </div>

            <script type="text/javascript">
              jQuery(document).ready(function($) {
                $('#altura').change(function(event) {
                  /* PEGA OS VALORES DOS INPUTS */
                  var peso = $('#peso').val();
                  var altura = $('#altura').val().replace(',','.');
                  /* ELEVA A POTENCIA 2 */
                  var elevado = Math.pow(altura,2);
                  /* divide o valor da potencia pelo peso */
                  var imc = peso / elevado;
                  /* fixa as casas decimais em 2 e substitui o ponto pela virgula */
                  valorimc = imc.toFixed(2).replace('.',',');

                  $('.valor').text(valorimc);
                });
              });
            </script>

            <table class="table">
            	<thead>
            		<tr>
            			<th>Resultado</th>
            			<th>Situação</th>
            		</tr>
            	</thead>
            	<tbody>
            		<tr>
            			<td class="td-first-col">Abaixo de 17</td>
            			<td>Muito abaixo do <em>peso</em></td>
            		</tr>
            		<tr>
            			<td class="td-first-col">Entre 17 e 18,49</td>
            			<td>Abaixo do <em>peso</em></td>
            		</tr>
            		<tr>
            			<td class="td-first-col">Entre 18,5 e 24,99</td>
            			<td><em>Peso</em> normal</td>
            		</tr>
            		<tr>
            			<td class="td-first-col">Entre 25 e 29,99</td>
            			<td>Acima do <em>peso</em></td>
            		</tr>
            		<tr>
            			<td class="td-first-col">Entre 30 e 34,99</td>
            			<td><em>Obesidade</em> I</td>
            		</tr>
            		<tr>
            			<td class="td-first-col">Entre 35 e 39,99</td>
            			<td><em>Obesidade</em> II (severa)</td>
            		</tr>
            		<tr>
            			<td class="td-first-col">Acima de 40</td>
            			<td><em>Obesidade</em> III (mórbida)</td>
            		</tr>
            	</tbody>
            </table>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>
<?php get_footer() ?>
