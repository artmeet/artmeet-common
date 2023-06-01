<?php

namespace Artmeet\Common;

use Crunz\Application\Service\ConfigurationInterface;
use Crunz\Application\Service\LoggerFactoryInterface;
use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

final class MyCrunzLoggerFactory implements LoggerFactoryInterface
{
  public function create(ConfigurationInterface $configuration): LoggerInterface
  {
    return new class extends AbstractLogger
    {
      /** @inheritDoc */
      public function log(
        $level,
        $message,
        array $context = array()
      ) {
        echo "crunz.{$level}: {$message}";
      }
    };
  }
}
