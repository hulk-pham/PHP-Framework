<?php

namespace App\Interfaces;

interface IDatabaseFactory
{
  public static function getConnection($type);
}
