
<script src="<?php echo BASE_URL . '/assets/open/'?>js/jquery-2.2.3.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/gmaps.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/jquery.parallax-1.1.3.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/jquery.appear.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/jquery-countTo.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/bootsnav.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/jquery.cubeportfolio.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/owl.carousel.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/viedobox_video.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/revolution.extension.navigation.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/revolution.extension.parallax.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/revolution.extension.video.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/wow.min.js"></script>
<script src="<?php echo BASE_URL . '/assets/open/'?>js/functions.js"></script>
<script>
    //LOADER
        $(".loader").fadeOut(5000);
  </script>
<script>
     $("#news_slider, #news_slider1").owlCarousel({
          autoPlay: 4000,
          items: 3,
          pagination: true,
          stopOnHover: true,
          navigation: false,
          itemsDesktop: [1199, 2],
          itemsDesktopSmall: [979, 2]
      });
</script>
<?php /*<script src="//code.tidio.co/ocoiel1ecnrlrnm7zpwwfrumwfsjjanc.js" async></script> */ ?>
<style>
.fixedi {
  left: 20px !important;
    color: #25D366 !important;
    background: white !important;
  border-radius: 50%;
    bottom: 60px;
    display: none;
    height: 60px;
    line-height: 40px;
    position: fixed;
    text-align: center;
    width: 40px;
    z-index: 999;
}
.fixedi i {
    font-size: 40px;
  }
</style>
  <a class="fixedi" href="https://wa.me/qr/NBLWI4BOX4BUO1"><i class="fa fa-whatsapp"></i></a>

  <style>
    .alert-c{
                position: fixed;
                padding: 5px;
                z-index: 900;
                bottom: 30px;
                font-size: 11px;
                left: 5px;
                font-family: sans-serif;
                color: #110242;
                background-color: white;
            }
            .fadeOuth{
                animation: fader 3s
            }
            @keyframes fader {
                0%{
                    opacity: .9;
                }
                25%{
                    opacity: .7;
                }
                50%{
                    opacity: .5;
                }
                75%{
                    opacity: .3;
                }
                100%{
                    opacity: .1;
                }
            }
</style>
<script>
    const transactions = <?= transaction() ?>;
    let counter = 1;
    let counter2 = -1;
    var repater = setInterval(function(){
        var state = counter%2;
        if(counter2 == transactions.length){
            counter2 = -1;
        }
        if(state){
            counter2++;
            $('.keyban').remove()
            $('body').after('<div id="alert' + transactions[counter2][0] + '" class="keyban alert alert-c show darkblue alert-dismissible fadeIn" role="alert"><strong id="name">' + transactions[counter2][0] + '</strong> from <strong id="counrty">' + transactions[counter2][1] + '</strong> just ' + transactions[counter2][3] + ' $<strong id="amount">' + transactions[counter2][2] + '</strong>.</div>');
            counter--;
        }else{
            $('.keyban').addClass('fadeOuth');
            counter++;
        }
    }, 3000);
    
</script>