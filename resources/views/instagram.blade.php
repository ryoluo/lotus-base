<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Open Instagram</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142986852-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-142986852-1');
    </script>

</head>

<body>
    <div style="width: 0; height: 0; overflow: hidden;">
        <iframe id="launch_frame" name="launch_frame" style="display:none;"></iframe>
    </div>
    <script>
    window.onload = function() {
        launchApp();
    }

    function launchApp() {
        var id = 'ryoluo';
        var normal_url = 'https://www.instagram.com/' + id;
        var userAgent = navigator.userAgent.toLowerCase();
        if (userAgent.search(/iphone|ipad|ipod|android/) > -1) {
            launch_frame.location.href = 'instagram://user?username=' + id;
            setTimeout(function() {
                location.href = normal_url;
            }, 500);
        } else {
            document.location = normal_url;
        }
    }
    </script>
</body>

</html>