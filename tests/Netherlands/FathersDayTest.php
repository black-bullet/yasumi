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
 * Class for testing Father's Day in the Netherlands.
 */
class FathersDayTest extends NetherlandsBaseTestCase
{

    /**
     * Tests Father's Day.
     */
    public function testFathersDay()
    {
        $year = $this->generateRandomYear();
        $this->assertHoliday(self::REGION, 'fathersDay', $year,
            new DateTime("third sunday of june $year", new DateTimeZone(self::TIMEZONE)));
    }
}
