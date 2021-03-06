<?php

namespace Shopware\Tests\Mink\Element\Emotion;

use Shopware\Tests\Mink\Helper;

/**
 * Element: ArticleBox
 * Location: Billing address box on account dashboard
 *
 * Available retrievable properties:
 * - address (Element[], please use Account::checkAddress())
 */
class ArticleBox extends CartPosition
{
    /** @var array $selector */
    protected $selector = array('css' => 'div.artbox');

    /**
     * Returns an array of all css selectors of the element/page
     * @return string[]
     */
    public function getCssSelectors()
    {
        return [
            'name' => 'div.inner > a:nth-of-type(2)',
            'price' => 'p.price'
        ];
    }

    /**
     * Returns an array of all named selectors of the element/page
     * @return array
     */
    public function getNamedSelectors()
    {
        return [
            'order'   => ['de' => 'Jetzt bestellen', 'en' => 'Order now'],
            'compare' => ['de' => 'Vergleichen',     'en' => 'Compare'],
            'details' => ['de' => 'Zum Produkt',     'en' => 'See details']
        ];
    }

    /**
     * Returns the price
     * @return float
     */
    public function getPriceProperty()
    {
        $price = $this->getProperty('price');
        return Helper::floatValue($price);
    }
}
