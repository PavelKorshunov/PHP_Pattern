<?php
declare(strict_types=1);

namespace Pattern\Behavioral\Observer;

use SplObserver;
use SplSubject;

class MailNotifyObserver implements SplObserver
{
    /**
     * @var string
     */
    private $mailNotify = "";

    /**
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject)
    {
        $this->mailNotify = "Уведомление отправлено на почту!";
    }

    /**
     * @return string
     */
    public function getMailNotify(): string
    {
        return $this->mailNotify;
    }
}