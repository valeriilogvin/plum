<?php
/**
 * The template for displaying the footer
 *
 * @package plum
 */

?>


    <?php wp_footer(); ?>
    </div>

    <script>
        $('.777').mask('+380 (99) 999-99-99');

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

    <script type="text/javascript">
        ! function(o, c) { var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);
    </script>

    <script type="text/javascript">
        WebFont.load({ google: { families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"] } });
    </script>
</body>
</html>
