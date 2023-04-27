<?php

namespace App\Customers\Application\MessageHandler;

use App\Customers\Application\Message\VerifyUserEmail;
use App\Customers\Infrastructure\Symfony\Security\EmailVerifier;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class VerifyUserEmailHandler
{
    public function __construct(private Emailverifier $emailverifier) {

    }

    public function __invoke(VerifyUserEmail $verifyUserEmail): bool|VerifyEmailExceptionInterface
    {
        try {
            $this->emailverifier->handleEmailConfirmation($verifyUserEmail->request, $verifyUserEmail->user);
            return true;
        } catch (VerifyEmailExceptionInterface $exception) {
            return $exception;
        }
    }
}