<?php
// ===========================================================================================
//
// Filename: common.php
//
// Description: useful functions while building a website.
//
// Author: Mikael Roos, mos@bth.se
//
// Change history:
// 
// 2011-02-04: 
// First try. Used as example code in htmlphp-kmom03.
//


// -------------------------------------------------------------------------------------------
//
// Get current url
//
function getCurrentUrl() {
  $url = "http";
  $url .= (@$_SERVER["HTTPS"] == "on") ? 's' : '';
  $url .= "://";
  $serverPort = ($_SERVER["SERVER_PORT"] == "80") ? '' :
    (($_SERVER["SERVER_PORT"] == 443 && @$_SERVER["HTTPS"] == "on") ? '' : ":{$_SERVER['SERVER_PORT']}");
  $url .= $_SERVER["SERVER_NAME"] . $serverPort . htmlspecialchars($_SERVER["REQUEST_URI"]);
  return $url;
}

// -------------------------------------------------------------------------------------------
//
// Destroy a session
//
function destroySession() {
  // Unset all of the session variables.
  $_SESSION = array();
  
  // If it's desired to kill the session, also delete the session cookie.
  // Note: This will destroy the session, and not just the session data!
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]);
  }  
  // Finally, destroy the session.
  session_destroy();
}

