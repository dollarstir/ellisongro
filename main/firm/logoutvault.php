<?php

session_start();
unset($_SESSION['vaultuser']);
echo '<script></script>window.location.href="vaultauthenticator";</script>';
