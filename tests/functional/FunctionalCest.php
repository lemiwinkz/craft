<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace tests\functional;

use AcceptanceTester;
use craft\elements\User;
use craft\web\View;
use FunctionalTester;
use Craft;

/**
 * Class LoginCest
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @author Global Network Group | Giel Tettelaar <giel@yellowflash.net>
 * @since 3.1
 */
class FunctionalCest
{
    // Public Methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     * @param FunctionalTester $I
     */
    public function seeSections(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->see('Thanks for installing Craft CMS!');
    }
}
