<?php
    function protocol()
    {
        $isSecure =
            (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ||
            (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') ||
            (isset($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on');
        return $isSecure ? 'https' : 'http';
    }
    
    function my_url()
    {
        $req = $_SERVER['HTTP_HOST'];
        $prt = protocol();

        //  the link
        return "$prt://$req";
    }
?>