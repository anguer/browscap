<?php
declare(strict_types = 1);
namespace BrowscapTest\Data\Validator;

use Browscap\Data\Validator\DeviceDataPropertyValidator;
use LogicException;

/**
 * Class DataCollectionTestTest
 */
class DeviceDataPropertyValidatorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var DeviceDataPropertyValidator
     */
    private $object;

    public function setUp() : void
    {
        self::markTestSkipped();
        $this->object = new DeviceDataPropertyValidator();
    }

    /**
     * @group data
     * @group sourcetest
     */
    public function testCheckPropertyWithDeviceProperties() : void
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('error message');

        $properties = ['Device_Name' => 'test'];
        $this->object->check($properties, 'error message');
    }

    /**
     * @group data
     * @group sourcetest
     */
    public function testCheckPropertyWithoutDeviceProperties() : void
    {
        $properties = [];
        $this->object->check($properties, 'error message');
        self::assertTrue(true);
    }
}
