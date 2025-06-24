<!DOCTYPE html>
<html>
<head>
    <title>Logging Out</title>
</head>
<body>
    <h2>Logging you out from all systems. Please wait...</h2>

   <form id="ssoLogoutForm" action="http://foodpanda.local:8001/sso-logout" method="GET" target="logoutTarget">
</form>

<iframe name="logoutTarget" style="display:none;"></iframe>

<script>
    document.getElementById('ssoLogoutForm').submit();

    setTimeout(function () {
        window.location.href = '/';
    }, 2000);
</script>

</body>
</html>
