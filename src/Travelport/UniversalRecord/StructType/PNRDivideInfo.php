<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRDivideInfo StructType
 * @subpackage Structs
 */
class PNRDivideInfo extends AbstractStructBase
{
    /**
     * The BookingTravelerName
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: common:BookingTravelerName
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerName[]
     */
    protected array $BookingTravelerName;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * Constructor method for PNRDivideInfo
     * @uses PNRDivideInfo::setBookingTravelerName()
     * @uses PNRDivideInfo::setProviderCode()
     * @uses PNRDivideInfo::setProviderLocatorCode()
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerName[] $bookingTravelerName
     * @param string $providerCode
     * @param string $providerLocatorCode
     */
    public function __construct(array $bookingTravelerName, ?string $providerCode = null, ?string $providerLocatorCode = null)
    {
        $this
            ->setBookingTravelerName($bookingTravelerName)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode);
    }
    /**
     * Get BookingTravelerName value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerName[]
     */
    public function getBookingTravelerName(): array
    {
        return $this->BookingTravelerName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingTravelerName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerNameForArrayConstraintFromSetBookingTravelerName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pNRDivideInfoBookingTravelerNameItem) {
            // validation for constraint: itemType
            if (!$pNRDivideInfoBookingTravelerNameItem instanceof \Travelport\UniversalRecord\StructType\BookingTravelerName) {
                $invalidValues[] = is_object($pNRDivideInfoBookingTravelerNameItem) ? get_class($pNRDivideInfoBookingTravelerNameItem) : sprintf('%s(%s)', gettype($pNRDivideInfoBookingTravelerNameItem), var_export($pNRDivideInfoBookingTravelerNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerName property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerName value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerName[] $bookingTravelerName
     * @return \Travelport\UniversalRecord\StructType\PNRDivideInfo
     */
    public function setBookingTravelerName(array $bookingTravelerName): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerNameArrayErrorMessage = self::validateBookingTravelerNameForArrayConstraintFromSetBookingTravelerName($bookingTravelerName))) {
            throw new InvalidArgumentException($bookingTravelerNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTravelerName) && count($bookingTravelerName) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTravelerName)), __LINE__);
        }
        $this->BookingTravelerName = $bookingTravelerName;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerName value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerName $item
     * @return \Travelport\UniversalRecord\StructType\PNRDivideInfo
     */
    public function addToBookingTravelerName(\Travelport\UniversalRecord\StructType\BookingTravelerName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingTravelerName) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerName property can only contain items of type \Travelport\UniversalRecord\StructType\BookingTravelerName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerName) && count($this->BookingTravelerName) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerName)), __LINE__);
        }
        $this->BookingTravelerName[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\PNRDivideInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\PNRDivideInfo
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
