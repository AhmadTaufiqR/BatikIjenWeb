<?php
    session_start();
    //logout
    session_destroy();
    // arahkan ke halaman index.php 
    header("location: LogAndReg.php");

    echo "<script>
    $('logout_sc').click(function(){
        swal({
            title: 'Confirmation',
            text: 'Are You Sure?'',
            buttons: {
                cancel: true,
                confirm: 'Submit'
                
            }
        });
    });
</script>";
?>