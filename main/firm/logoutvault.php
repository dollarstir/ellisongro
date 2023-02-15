<?php

session_start();
unset($_SESSION['vaultuser']);
echo '<script>window.location.href="vaultauthenticator";</script>';
