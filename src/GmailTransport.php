<?php

declare(strict_types=1);

namespace Vectorial1024\LaravelGmail;

use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\AbstractTransport;

class GmailTransport extends AbstractTransport
{
    public function __toString(): string
    {
        return 'gmail';
    }

    protected function doSend(SentMessage $message): void
    {
        // TODO: Implement doSend() method.
    }
}
