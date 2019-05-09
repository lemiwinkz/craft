<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace modules\tests;

use Codeception\Test\Unit;
use Craft;
use modules\Module;
use UnitTester;


/**
 * Unit tests for UnitTest
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @author Global Network Group | Giel Tettelaar <giel@yellowflash.net>
 * @since 3.1
 */
class UnitTest extends Unit
{
    /**
     * @var UnitTester
     */
    public $tester;

    public function testStuff()
    {
        $this->assertNotNull(Module::getInstance());
        $this->assertSame('2', '2');
    }
}
