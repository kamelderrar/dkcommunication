
        </div><!-- end container-fluidcol-lg-6 col-lg-offset-3 -->
        </div><!-- end row -->
        </div><!-- end container-fluid -->

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
            <script src="js/plugins.js"></script>
            <script src="js/main.js"></script>

           <script type="text/javascript">  
              /*plan du sitel */
              $('#tree2').treed({openedClass : 'glyphicon-folder-open', closedClass : 'glyphicon-folder-close'});
              </script>

            <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- Google Analytics: -->
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-48466584-1', 'dkcommunication.fr');
                ga('send', 'pageview');

                $(document).ready(function(){


                $('.filterable .filters input').keyup(function(e){
                    /* Ignore tab key */
                    var code = e.keyCode || e.which;
                    if (code == '9') return;
                    /* Useful DOM data and selectors */
                    var $input = $(this),
                    inputContent = $input.val().toLowerCase(),
                    $panel = $input.parents('.filterable'),
                    column = $panel.find('.filters th').index($input.parents('th')),
                    $table = $panel.find('.table'),
                    $rows = $table.find('tbody tr');
                    /* Dirtiest filter function ever ;) */
                    var $filteredRows = $rows.filter(function(){
                        var value = $(this).find('td').eq(column).text().toLowerCase();
                        return value.indexOf(inputContent) === -1;
                    });
                    /* Clean previous no-result if exist */
                    $table.find('tbody .no-result').remove();
                    /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                    $rows.show();
                    $filteredRows.hide();
                    /* Prepend no-result row if all rows are filtered */
                    if ($filteredRows.length === $rows.length) {
                        $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                    }
                });
            });
            </script>


        </body>
        <footer>

        <!-- footer_mots_cles -->
        <div class="container">

          <div class="row">
            <div class="col-lg-12">
                          <hr />
              <div class="col-md-3">
                <ul>
                  <li><a href="index.php?page=conseil_en_communication"><span class="titre_footer">Communication</span></a></li>
                  <li><a href="index.php?page=conseil_en_communication">Stratégie de communication</a></li>
                  <li><a href="index.php?page=conseil_en_communication">Cible de communication</a></li>
                  <li><a href="index.php?page=conseil_en_communication">Budgetisation</a></li>
                  <li><a href="index.php?page=conseil_en_communication">Planification</a></li>
                  <li><a href="index.php?page=conseil_en_communication">Positionnement</a></li>
                  <li><a href="index.php?page=conseil_en_communication">Moyens</a></li>
                  <li><a href="index.php?page=conseil_en_communication">Image de marque</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul>
                  <li><a href="index.php?page=marketing"><span class="titre_footer">Marketing</span></a></li>
                  <li><a href="index.php?page=marketing">Etudes</a></li>
                  <li><a href="index.php?page=marketing">Analyses</a></li>
                  <li><a href="index.php?page=marketing">Prix</a></li>
                  <li><a href="index.php?page=marketing">Produits</a></li>
                  <li><a href="index.php?page=marketing">Distribution</a></li>
                  <li><a href="index.php?page=marketing">Communication</a></li>
                  <li><a href="index.php?page=marketing">Opportunités</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul>
                  <li><a href="index.php?page=print"><span class="titre_footer">Print</span></a></li>          
                  <li><a href="index.php?page=print">Carte de visite</a></li>          
                  <li><a href="index.php?page=print">Flyer</a></li>
                  <li><a href="index.php?page=print">Papeterie</a></li>
                  <li><a href="index.php?page=print">Catalogue</a></li>
                  <li><a href="index.php?page=print">Dépliant</a></li>
                  <li><a href="index.php?page=print">Objets publicitaires</a></li>
                  <li><a href="index.php?page=print">Création d'identité visuelle</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul>
                  <li><a href="index.php?page=web"><span class="titre_footer">Web</span></a></li>
                  <li><a href="index.php?page=web">Site e-commerce</a></li>
                  <li><a href="index.php?page=web">Catalogue en ligne</a></li>
                  <li><a href="index.php?page=web">Site vitrine</a></li>
                  <li><a href="index.php?page=web">Blog</a></li>
                  <li><a href="index.php?page=web">Application sur mesure</a></li>
                  <li><a href="index.php?page=web">Webmarketing</a></li>
                  <li><a href="index.php?page=web">Responsive</a></li>
                </ul>
              </div>  
            </div>
          </div>
          <hr>
            <div class="row">
                <div class="col-lg-12">                    
                  <p>© copyright 2014 - dk Communication & Marketing 
                    <a href="https://twitter.com/dk_Com_"target="_blank"><span class="label label-danger">Twitter</span></a> 
                    <a href="https://www.facebook.com/dkcommunication?ref=settings"target="_blank"><span class="label label-danger">Facebook</span></a> 
<!--                     | <i class="icon-user"></i> <a href="./index.php?page=blog/dk">Admin</a> 
                     -->                    
                     | <i class="icon-calendar"></i> <?php  date_default_timezone_set("Europe/Paris");echo date("d-m-Y H:i")?>
                  </p>

                </div>
            </div>
        <!-- end_footer_mots_cles -->  
      </div>
        </footer>
    </html>
