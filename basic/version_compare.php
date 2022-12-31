<?php

if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
  echo 'I am at least PHP version 7.0.0, my version: ' . PHP_VERSION . "\n";
} else {
  echo 'I am not at least PHP version, my version: ' . PHP_VERSION . "\n";
}
