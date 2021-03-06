<?php

/**
 * @file
 * Contains \Drupal\Tests\rules\Functional\RulesBrowserTestBase.
 */

namespace Drupal\Tests\rules\Functional;

use Drupal\simpletest\BrowserTestBase;

/**
 * Has some additional helper methods to make test code more readable.
 */
abstract class RulesBrowserTestBase extends BrowserTestBase {

  /**
   * Finds link with specified locator.
   *
   * @param string $locator
   *   Link id, title, text or image alt.
   *
   * @return \Behat\Mink\Element\NodeElement|null
   */
  public function findLink($locator) {
    return $this->getSession()->getPage()->findLink($locator);
  }

  /**
   * Finds field (input, textarea, select) with specified locator.
   *
   * @param string $locator
   *   Input id, name or label.
   *
   * @return \Behat\Mink\Element\NodeElement|null
   */
  public function findField($locator) {
    return $this->getSession()->getPage()->findField($locator);
  }

  /**
   * Finds button with specified locator.
   *
   * @param string $locator
   *   Button id, value or alt.
   *
   * @return \Behat\Mink\Element\NodeElement|null
   */
  public function findButton($locator) {
    return $this->getSession()->getPage()->findButton($locator);
  }

  /**
   * Clicks link with specified locator.
   *
   * @param string $locator
   *   Link id, title, text or image alt.
   *
   * @throws \Behat\Mink\Exception\ElementNotFoundException
   */
  public function clickLink($locator) {
    $this->getSession()->getPage()->clickLink($locator);
  }

  /**
   * Presses button with specified locator.
   *
   * @param string $locator
   *   Button id, value or alt.
   *
   * @throws \Behat\Mink\Exception\ElementNotFoundException
   */
  public function pressButton($locator) {
    $this->getSession()->getPage()->pressButton($locator);
  }

  /**
   * Fills in field (input, textarea, select) with specified locator.
   *
   * @param string $locator
   *   Input id, name or label.
   * @param string $value
   *   Value.
   *
   * @throws \Behat\Mink\Exception\ElementNotFoundException
   *
   * @see \Behat\Mink\Element\NodeElement::setValue
   */
  public function fillField($locator, $value) {
    $this->getSession()->getPage()->fillField($locator, $value);
  }

}
