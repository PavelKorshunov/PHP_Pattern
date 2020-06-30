<?php
declare(strict_types=1);

namespace Pattern\Behavioral\Observer;

use SplObserver;
use SplSubject;

class PushNotifyObserver implements SplObserver
{
    /**
     * @var string
     */
    private $pushNotify = "";

    /**
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject)
    {
        $this->pushNotify = "Push уведомление отправлено!";
    }

    /**
     * @return string
     */
    public function getPushNotify(): string
    {
        return $this->pushNotify;
    }
}