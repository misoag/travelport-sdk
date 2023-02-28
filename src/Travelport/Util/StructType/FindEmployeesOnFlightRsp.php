<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindEmployeesOnFlightRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to retrieve the number of employees in a flight
 * @subpackage Structs
 */
class FindEmployeesOnFlightRsp extends BaseRsp
{
    /**
     * The EmployeesOnFlight
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\EmployeesOnFlight[]
     */
    protected ?array $EmployeesOnFlight = null;
    /**
     * Constructor method for FindEmployeesOnFlightRsp
     * @uses FindEmployeesOnFlightRsp::setEmployeesOnFlight()
     * @param \Travelport\Util\StructType\EmployeesOnFlight[] $employeesOnFlight
     */
    public function __construct(?array $employeesOnFlight = null)
    {
        $this
            ->setEmployeesOnFlight($employeesOnFlight);
    }
    /**
     * Get EmployeesOnFlight value
     * @return \Travelport\Util\StructType\EmployeesOnFlight[]
     */
    public function getEmployeesOnFlight(): ?array
    {
        return $this->EmployeesOnFlight;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEmployeesOnFlight method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployeesOnFlight method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployeesOnFlightForArrayConstraintFromSetEmployeesOnFlight(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $findEmployeesOnFlightRspEmployeesOnFlightItem) {
            // validation for constraint: itemType
            if (!$findEmployeesOnFlightRspEmployeesOnFlightItem instanceof \Travelport\Util\StructType\EmployeesOnFlight) {
                $invalidValues[] = is_object($findEmployeesOnFlightRspEmployeesOnFlightItem) ? get_class($findEmployeesOnFlightRspEmployeesOnFlightItem) : sprintf('%s(%s)', gettype($findEmployeesOnFlightRspEmployeesOnFlightItem), var_export($findEmployeesOnFlightRspEmployeesOnFlightItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmployeesOnFlight property can only contain items of type \Travelport\Util\StructType\EmployeesOnFlight, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmployeesOnFlight value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\EmployeesOnFlight[] $employeesOnFlight
     * @return \Travelport\Util\StructType\FindEmployeesOnFlightRsp
     */
    public function setEmployeesOnFlight(?array $employeesOnFlight = null): self
    {
        // validation for constraint: array
        if ('' !== ($employeesOnFlightArrayErrorMessage = self::validateEmployeesOnFlightForArrayConstraintFromSetEmployeesOnFlight($employeesOnFlight))) {
            throw new InvalidArgumentException($employeesOnFlightArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($employeesOnFlight) && count($employeesOnFlight) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($employeesOnFlight)), __LINE__);
        }
        $this->EmployeesOnFlight = $employeesOnFlight;
        
        return $this;
    }
    /**
     * Add item to EmployeesOnFlight value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\EmployeesOnFlight $item
     * @return \Travelport\Util\StructType\FindEmployeesOnFlightRsp
     */
    public function addToEmployeesOnFlight(\Travelport\Util\StructType\EmployeesOnFlight $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\EmployeesOnFlight) {
            throw new InvalidArgumentException(sprintf('The EmployeesOnFlight property can only contain items of type \Travelport\Util\StructType\EmployeesOnFlight, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->EmployeesOnFlight) && count($this->EmployeesOnFlight) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->EmployeesOnFlight)), __LINE__);
        }
        $this->EmployeesOnFlight[] = $item;
        
        return $this;
    }
}
