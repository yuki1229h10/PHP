<?php
$_COOKIE["my_first_cookie"];

if (count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
