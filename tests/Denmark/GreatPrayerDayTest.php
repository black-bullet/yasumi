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

namespace Yasumi\Tests\Spain\Denmark;

use DateTime;
use DateTimeZone;
use Yasumi\Tests\Denmark\DenmarkBaseTestCase;

/**
 * Class for testing Great Prayer Day in Denmark (Spain).
 */
class GreatPrayerDayTest extends DenmarkBaseTestCase
{
    /**
     * The name of the holiday to be tested
     */
    const HOLIDAY = 'greatPrayerDay';

    /**
     * The year in which the holiday was first established
     */
    const ESTABLISHMENT_YEAR = 1686;

    /**
     * Tests the holiday defined in this test on or after establishment.
     */
    public function testHolidayOnAfterEstablishment()
    {
        $year = 2022;
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year,
            new DateTime("$year-5-13", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests the holiday defined in this test before establishment.
     */
    public function testHolidayBeforeEstablishment()
    {
        $this->assertNotHoliday(self::REGION, self::HOLIDAY,
            $this->generateRandomYear(1000, self::ESTABLISHMENT_YEAR - 1));
    }

    /**
     * Tests the translated name of the holiday defined in this test.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::REGION, self::HOLIDAY,
            $this->generateRandomYear(self::ESTABLISHMENT_YEAR), ['da_DK' => 'Store Bededag']);
    }
}
