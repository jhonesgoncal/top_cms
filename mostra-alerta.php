<?php
session_start();
function mostraAlerta($tipo) {
    if(isset($_SESSION[$tipo])) {
        ?>
        <div style="margin-top: 5px;" class="alert alert-<?= $tipo ?> mostraAlerta"  id="minhaDiv"><?= $_SESSION[$tipo]?>
            
        </div>
        <?php
        unset($_SESSION[$tipo]);
    }
}
?>
<script>
	$('.close').click(function () {
	    $('#minhaDiv').css('display','none');
	});
</script>