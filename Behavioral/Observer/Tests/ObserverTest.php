<?php
declare(strict_types=1);

namespace Pattern\Behavioral\Observer\Tests;

use Pattern\Behavioral\Observer\{
    Order,
    PushNotifyObserver,
    MailNotifyObserver
};
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testMailObserverNotify()
    {
        $observerMail = new MailNotifyObserver();

        $order = new Order();
        $order->attach($observerMail);

        $order->createOrder(1);

        $this->assertEquals("Уведомление отправлено на почту!", $observerMail->getMailNotify());
    }

    public function testPushObserverNotify()
    {
        $observerPush = new PushNotifyObserver();

        $order = new Order();
        $order->attach($observerPush);

        $order->createOrder(2);

        $this->assertEquals("Push уведомление отправлено!", $observerPush->getPushNotify());
    }
}
