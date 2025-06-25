<!DOCTYPE html>
<html>
<head>
    <title>Logging Out</title>
</head>
<body>
    <h2>Logging you out from all systems. Please wait...</h2>

    <script>
        // Open logout page in a hidden window 
        const win = window.open('http://foodpanda.local:8001/sso-logout','_blank', 'width=1,height=1,left=-1000,top=-1000');
        setTimeout(() => {
            win && win.close();
            window.location.href = '/';
        }, 100);
    </script>
</body>
</html>
