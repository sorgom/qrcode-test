<?php 
    require_once('my_url.php');
    $url = my_url();
    $png = 'qrcode.png';
    // if (!file_exists($png))
    if (true)
    {
        require_once('php-qrcode/qrcode.php');
        $options = [
            'sf' => 4,
            // 's' => 'qrl',
            // 'w' => 300,
            // 'h' => 300
        ];
        $generator = new QRCode($url, $options);

        /* Output directly to standard output. */
        // $generator->output_image();

        /* Create bitmap image. */
        $image = $generator->render_image();
        imagepng($image, $png);
    }
?>
<img src=<?php echo $png;?>>
<p><?php echo $url;?></p>
