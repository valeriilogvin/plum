<?php
/*
Template Name: ok
*/
?>
<!DOCTYPE html>

<html data-wf-page="6177b63eafa95129b16ffc8a" >

<head>
    <meta charset="utf-8" />
    <title>Заявка успішно відправлена</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/styles.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
    WebFont.load({ google: { families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic", "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic:cyrillic,latin", "Rubik:300,regular,500,600,700,800,900,300italic,italic,500italic,600italic,700italic,800italic,900italic:cyrillic,latin"] } });
    </script>

    <script type="text/javascript">
    ! function(o, c) { var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);
    </script>
    <link href="<?php echo get_stylesheet_directory_uri() ?>/img/11.png" rel="shortcut icon" type="image/x-icon" />
    <link href="<?php echo get_stylesheet_directory_uri() ?>/img/3.png" rel="apple-touch-icon" />

</head>

<body class="body">
    <footer class="privacy-section-yes-2 wf-section">
        <div class="_90-2">
            <div class="yes-copy-2"><a href="<?php echo home_url(); ?>" data-w-id="6b903315-e88b-b676-f558-642467a10838" style="-webkit-transform:translate3d(0, 0, 0) scale3d(5, 5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(5, 5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(5, 5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(5, 5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0.07" class="vnutr-copy w-inline-block">
                    <div style="-webkit-transform:translate3d(-55PX, 55PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-45DEG) skew(0, 0);-moz-transform:translate3d(-55PX, 55PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-45DEG) skew(0, 0);-ms-transform:translate3d(-55PX, 55PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-45DEG) skew(0, 0);transform:translate3d(-55PX, 55PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-45DEG) skew(0, 0);opacity:0" class="line-o2-2"></div>
                    <div style="width:0PX" class="line-01"></div>
                </a></div>
            <div class="form-box">
                <h3 class="box-zagolovok-2">Ваша заявка<br /><span class="text-span-14">успішно відправлена!</span></h3>
                <div class="name-copy">У найближчий час ми з вами зв'яжемося</div>
                <div class="line-10"></div><a href="<?php echo home_url(); ?>" class="l pri">Повернутися на головну</a>
            </div>
        </div>
    </footer>

    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery-3.4.1.min.js" type="text/javascript" ></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/scripts.js" type="text/javascript"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/maska-nomera.js" type="text/javascript" ></script>

<script>
$('.w-input').mask('+380 (99) 999-99-99');

$.fn.setCursorPosition = function(pos) {
  if ($(this).get(0).setSelectionRange) {
    $(this).get(0).setSelectionRange(pos, pos);
  } else if ($(this).get(0).createTextRange) {
    var range = $(this).get(0).createTextRange();
    range.collapse(true);
    range.moveEnd('character', pos);
    range.moveStart('character', pos);
    range.select();
  }
};


$('input[type="tel"]').click(function(){
    $(this).setCursorPosition(4);  // set position number
  });
</script>
</body>

</html>
