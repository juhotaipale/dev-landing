<html>
<head>
    <title><?php echo $_SERVER['SERVER_NAME']; ?></title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
          crossorigin="anonymous">
</head>

<body style="height: 100% !important;">
<div style="height: 100% !important;"
     class="container-fluid d-flex align-items-center">
    <div class="row text-center" style="width: 100%;">
        <div class="col-md-12">
            <h1 class="display-2"><?php echo $_SERVER['SERVER_NAME'].($_SERVER['REQUEST_URI'] !== '/' ? rtrim($_SERVER['REQUEST_URI'], '/') : ''); ?></h1>
        </div>
        <div class="col-md-12">
            <p class="lead" style="white-space: nowrap;">
                <?php
                $dirs = glob('./*', GLOB_ONLYDIR);

                $i   = 0;
                $len = count($dirs);

                foreach ($dirs as $dir) {
                    echo "<a href='/".basename($dir)."'>".basename($dir)."</a>";
                    if ($i < $len - 1) {
                        echo "&ensp;&sdot;&ensp;";
                    }

                    $i++;
                }
                ?>
            </p>
        </div>
    </div>
</div>
</body>
</html>