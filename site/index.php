<!DOCTYPE html>
<?php 
    require_once('my_url.php');
    $url = my_url();
    $png = 'qrcode.png';
    if (!file_exists($png))
    // if (true)
    {
        require_once('php-qrcode/qrcode.php');
        $options = [
            // 'sf' => 4,
            // 's' => 'qrl',
            // 'w' => 300,
            // 'h' => 300
        ];
        $generator = new QRCode($url, $options);

        // Create bitmap image.
        $image = $generator->render_image();
        imagepng($image, $png);
    }
?>
<html>
    <head>
    <style>
        img.qrcode {
            width: 400px;
            height: auto;
            margin: auto;
        }
        div.qrcode {
            background-color: green;
        }
    </style>    
    </head>
<body>
<div class=qrcode>
<img src=<?php echo $png;?> class=qrcode>
<p><?php echo $url;?></p>
</div>
</body>
</html>
