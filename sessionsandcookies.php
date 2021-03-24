<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies and Sessions</title>
</head>
<body>
    <?php
        //Making a Cookie
        setcookie("test_cookie", "test", time() + 3600, '/');
        function checkforcookies(){
            if(count($_COOKIE) > 0) {
                echo "Cookies are enabled.";
            } else {
                echo "Cookies are disabled.";
            }
        };

        checkforcookies();
        setcookie("test_cookie", "test", time() - 3600, '/');
        checkforcookies();
    ?>
</body>
</html>