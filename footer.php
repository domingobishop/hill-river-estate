</main>
</div>
<footer id="footer" class="bc-footer">
  <div class="container">
    <div class="row virtual-tour">
      <div class="col-lg-12 text-center">
        <a href="https://youtu.be/W9e1HeRNmII" data-toggle="lightbox" data-gallery="youtubevideos" class="btn btn-default">
          Virtual Tour
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php dynamic_sidebar( 'bc_footer' ); ?>
    </div>
    <div class="row bc-info">
      <div class="col-lg-12 text-center">
        <h3>Jaeschkes Hill River Clare Estate</h3>
        <p><a href="https://www.facebook.com/Hill-River-Clare-Estate-878664695484930/ " target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png"></a>
          <!--<a href="#" target="_blank"><img src="<?php /*bloginfo('stylesheet_directory'); */?>/img/twitter.png"></a>--></p>
        <p>
          PO Box 623, Clare SA 5453<br>
          406 Quarry Road, Clare<br>
          (08) 8843 9086<br>
          <a href="mailto:cellardoor@hrhay.com.au">Email us</a><br>
          Copyright © <?php echo date("Y"); ?> <br>
          <small>Website by <a href="http://creatistic.com.au/" target="_blank">Creatistic</a></small>
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- #foot -->

<?php wp_footer(); ?>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bc.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>

</body>
</html>