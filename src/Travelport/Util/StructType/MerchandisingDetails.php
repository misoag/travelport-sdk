<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchandisingDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Rich Content and Branding for a fare brand.
 * @subpackage Structs
 */
class MerchandisingDetails extends AbstractStructBase
{
    /**
     * The AirItineraryDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - ref: AirItineraryDetails
     * @var \Travelport\Util\StructType\AirItineraryDetails[]
     */
    protected ?array $AirItineraryDetails = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Util\StructType\AccountCode[]
     */
    protected ?array $AccountCode = null;
    /**
     * Constructor method for MerchandisingDetails
     * @uses MerchandisingDetails::setAirItineraryDetails()
     * @uses MerchandisingDetails::setAccountCode()
     * @param \Travelport\Util\StructType\AirItineraryDetails[] $airItineraryDetails
     * @param \Travelport\Util\StructType\AccountCode[] $accountCode
     */
    public function __construct(?array $airItineraryDetails = null, ?array $accountCode = null)
    {
        $this
            ->setAirItineraryDetails($airItineraryDetails)
            ->setAccountCode($accountCode);
    }
    /**
     * Get AirItineraryDetails value
     * @return \Travelport\Util\StructType\AirItineraryDetails[]
     */
    public function getAirItineraryDetails(): ?array
    {
        return $this->AirItineraryDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setAirItineraryDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirItineraryDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirItineraryDetailsForArrayConstraintsFromSetAirItineraryDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $merchandisingDetailsAirItineraryDetailsItem) {
            // validation for constraint: itemType
            if (!$merchandisingDetailsAirItineraryDetailsItem instanceof \Travelport\Util\StructType\AirItineraryDetails) {
                $invalidValues[] = is_object($merchandisingDetailsAirItineraryDetailsItem) ? get_class($merchandisingDetailsAirItineraryDetailsItem) : sprintf('%s(%s)', gettype($merchandisingDetailsAirItineraryDetailsItem), var_export($merchandisingDetailsAirItineraryDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirItineraryDetails property can only contain items of type \Travelport\Util\StructType\AirItineraryDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirItineraryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirItineraryDetails[] $airItineraryDetails
     * @return \Travelport\Util\StructType\MerchandisingDetails
     */
    public function setAirItineraryDetails(?array $airItineraryDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($airItineraryDetailsArrayErrorMessage = self::validateAirItineraryDetailsForArrayConstraintsFromSetAirItineraryDetails($airItineraryDetails))) {
            throw new InvalidArgumentException($airItineraryDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($airItineraryDetails) && count($airItineraryDetails) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($airItineraryDetails)), __LINE__);
        }
        $this->AirItineraryDetails = $airItineraryDetails;
        
        return $this;
    }
    /**
     * Add item to AirItineraryDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirItineraryDetails $item
     * @return \Travelport\Util\StructType\MerchandisingDetails
     */
    public function addToAirItineraryDetails(\Travelport\Util\StructType\AirItineraryDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirItineraryDetails) {
            throw new InvalidArgumentException(sprintf('The AirItineraryDetails property can only contain items of type \Travelport\Util\StructType\AirItineraryDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AirItineraryDetails) && count($this->AirItineraryDetails) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AirItineraryDetails)), __LINE__);
        }
        $this->AirItineraryDetails[] = $item;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\Util\StructType\AccountCode[]
     */
    public function getAccountCode(): ?array
    {
        return $this->AccountCode;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountCodeForArrayConstraintsFromSetAccountCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $merchandisingDetailsAccountCodeItem) {
            // validation for constraint: itemType
            if (!$merchandisingDetailsAccountCodeItem instanceof \Travelport\Util\StructType\AccountCode) {
                $invalidValues[] = is_object($merchandisingDetailsAccountCodeItem) ? get_class($merchandisingDetailsAccountCodeItem) : sprintf('%s(%s)', gettype($merchandisingDetailsAccountCodeItem), var_export($merchandisingDetailsAccountCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountCode property can only contain items of type \Travelport\Util\StructType\AccountCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AccountCode[] $accountCode
     * @return \Travelport\Util\StructType\MerchandisingDetails
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountCodeArrayErrorMessage = self::validateAccountCodeForArrayConstraintsFromSetAccountCode($accountCode))) {
            throw new InvalidArgumentException($accountCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($accountCode) && count($accountCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AccountCode $item
     * @return \Travelport\Util\StructType\MerchandisingDetails
     */
    public function addToAccountCode(\Travelport\Util\StructType\AccountCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AccountCode) {
            throw new InvalidArgumentException(sprintf('The AccountCode property can only contain items of type \Travelport\Util\StructType\AccountCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->AccountCode) && count($this->AccountCode) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->AccountCode)), __LINE__);
        }
        $this->AccountCode[] = $item;
        
        return $this;
    }
}
