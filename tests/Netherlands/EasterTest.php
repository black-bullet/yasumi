<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\tests\Netherlands;

use DateTime;
use DateTimeZone;

/**
 * Class for testing Easter in the Netherlands.
 */
class EasterTest extends NetherlandsBaseTestCase
{
    /**
     * Tests Easter.
     */
    public function testEaster()
    {
        $year = 2010;
        $this->assertHoliday(self::REGION, 'easter', $year,
            new DateTime("$year-4-4", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests Easter.
     */
    public function testEasterMonday()
    {
        $year = 2010;
        $this->assertHoliday(self::REGION, 'easterMonday', $year,
            new DateTime("$year-4-5", new DateTimeZone(self::TIMEZONE)));
    }
}
