<?php
if (basename($_SERVER["REQUEST_URI"]) === basename(__FILE__))
{
  header('Location: index.php?e=404');exit;
}
?>
<iframe id="iFrameVideos" src="/painel.php" height="700px" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="yes" allowfullscreen="allowfullscreen" > Por favor, use um navegador que suporte iframes!</iframe>
<script>iFrameResize({log: false, inPageLinks: true}, '#iFrameVideos')</script>

</div>
