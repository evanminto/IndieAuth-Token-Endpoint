<?php
class Config {
  public static $hostname = $_ENV['INDIEAUTH_HOSTNAME'];
  public static $gaid = $_ENV['INDIEAUTH_GAID'];
  public static $jwtKey = $_ENV['INDIEAUTH_JWTKEY'];
}
