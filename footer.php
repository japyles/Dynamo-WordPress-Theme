<footer>
  <p>Copyright &copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
</footer>

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/unslider.min.js"></script>

<script>
  $(document).ready(function($) {
    $('.my-slider').unslider({
      arrows: {
        prev: '<a class="unslider-arrow prev"><i class="fa fa-3 fa-arrow-alt-circle-left"></i></a>',
        next: '<a class="unslider-arrow next"><i class="fa fa-3 fa-arrow-alt-circle-right"></i></a>',
      }
    })
  });
</script>
<script>
  $(function(){
    $('#tabs').tabs();
  });
</script>
</body>
</html>
