<?php
error_reporting(0);
highlight_file(__FILE__);

if (isset($_POST['ctf_show'])) {
    $ctfshow = $_POST['ctf_show'];
    if (is_string($ctfshow)) {
        if (!preg_match("/[a-zA-Z0-9@#%^&*:{}\-<\?>\"|`~\\\\]/",$ctfshow)){
            eval($ctfshow);
        }else{
            echo("Are you hacking me AGAIN?");
        }
    }else{
        phpinfo();
    }
}
?>