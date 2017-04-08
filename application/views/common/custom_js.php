<script src="<?php echo base_url(); ?>public/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url(); ?>public/js/inspinia.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/pace/pace.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/plugins/wow/wow.min.js"></script>

<script>
 $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
        });
    });

 $(document).ready(function(){

        $("#button-dl-resume").click(function(){
            location.href="<?php base_url(); ?>public/FARRAH-MAE-GREGORIO.pdf";
        });
    });
</script>