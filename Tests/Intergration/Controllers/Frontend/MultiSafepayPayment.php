<?php

class Shopware_Controllers_Frontend_MultiSafepayPaymentTest extends \Shopware\Tests\Functional\Components\CheckoutTest
{
    /**
     *
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     *
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     *
     */
    public function testCheckBasket()
    {
        Shopware()->Modules()->Basket()->sAddArticle($this->createArticle(5, 19.00), 1);
        $basket = Shopware()->Modules()->Basket();

        var_dump($basket);
    }
}
