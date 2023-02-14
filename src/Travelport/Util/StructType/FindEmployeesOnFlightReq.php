<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindEmployeesOnFlightReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to retrieve the number of employees in a flight
 * @subpackage Structs
 */
class FindEmployeesOnFlightReq extends BaseReq
{
    /**
     * The AccountID
     * Meta information extracted from the WSDL
     * - documentation: Identifier of the account owner of the employees | Applied profile account profile ID | Account Identifier
     * - base: xs:long
     * - use: required
     * @var int
     */
    protected int $AccountID;
    /**
     * The FlightCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FlightCriteria
     * @var \Travelport\Util\StructType\FlightCriteria[]
     */
    protected ?array $FlightCriteria = null;
    /**
     * Constructor method for FindEmployeesOnFlightReq
     * @uses FindEmployeesOnFlightReq::setAccountID()
     * @uses FindEmployeesOnFlightReq::setFlightCriteria()
     * @param int $accountID
     * @param \Travelport\Util\StructType\FlightCriteria[] $flightCriteria
     */
    public function __construct(int $accountID, ?array $flightCriteria = null)
    {
        $this
            ->setAccountID($accountID)
            ->setFlightCriteria($flightCriteria);
    }
    /**
     * Get AccountID value
     * @return int
     */
    public function getAccountID(): int
    {
        return $this->AccountID;
    }
    /**
     * Set AccountID value
     * @param int $accountID
     * @return \Travelport\Util\StructType\FindEmployeesOnFlightReq
     */
    public function setAccountID(int $accountID): self
    {
        // validation for constraint: int
        if (!is_null($accountID) && !(is_int($accountID) || ctype_digit($accountID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountID, true), gettype($accountID)), __LINE__);
        }
        $this->AccountID = $accountID;
        
        return $this;
    }
    /**
     * Get FlightCriteria value
     * @return \Travelport\Util\StructType\FlightCriteria[]
     */
    public function getFlightCriteria(): ?array
    {
        return $this->FlightCriteria;
    }
    /**
     * This method is responsible for validating the values passed to the setFlightCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightCriteriaForArrayConstraintsFromSetFlightCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $findEmployeesOnFlightReqFlightCriteriaItem) {
            // validation for constraint: itemType
            if (!$findEmployeesOnFlightReqFlightCriteriaItem instanceof \Travelport\Util\StructType\FlightCriteria) {
                $invalidValues[] = is_object($findEmployeesOnFlightReqFlightCriteriaItem) ? get_class($findEmployeesOnFlightReqFlightCriteriaItem) : sprintf('%s(%s)', gettype($findEmployeesOnFlightReqFlightCriteriaItem), var_export($findEmployeesOnFlightReqFlightCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightCriteria property can only contain items of type \Travelport\Util\StructType\FlightCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightCriteria value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FlightCriteria[] $flightCriteria
     * @return \Travelport\Util\StructType\FindEmployeesOnFlightReq
     */
    public function setFlightCriteria(?array $flightCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightCriteriaArrayErrorMessage = self::validateFlightCriteriaForArrayConstraintsFromSetFlightCriteria($flightCriteria))) {
            throw new InvalidArgumentException($flightCriteriaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($flightCriteria) && count($flightCriteria) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($flightCriteria)), __LINE__);
        }
        $this->FlightCriteria = $flightCriteria;
        
        return $this;
    }
    /**
     * Add item to FlightCriteria value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FlightCriteria $item
     * @return \Travelport\Util\StructType\FindEmployeesOnFlightReq
     */
    public function addToFlightCriteria(\Travelport\Util\StructType\FlightCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FlightCriteria) {
            throw new InvalidArgumentException(sprintf('The FlightCriteria property can only contain items of type \Travelport\Util\StructType\FlightCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FlightCriteria) && count($this->FlightCriteria) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FlightCriteria)), __LINE__);
        }
        $this->FlightCriteria[] = $item;
        
        return $this;
    }
}
