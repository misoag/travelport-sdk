<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirAvailInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Matches class of service information with availability counts. Only provided on search results.
 * @subpackage Structs
 */
class AirAvailInfo extends AbstractStructBase
{
    /**
     * The BookingCodeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingCodeInfo
     * @var \Travelport\UniversalRecord\StructType\BookingCodeInfo[]
     */
    protected ?array $BookingCodeInfo = null;
    /**
     * The FareTokenInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\FareTokenInfo[]
     */
    protected ?array $FareTokenInfo = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $HostTokenRef = null;
    /**
     * Constructor method for AirAvailInfo
     * @uses AirAvailInfo::setBookingCodeInfo()
     * @uses AirAvailInfo::setFareTokenInfo()
     * @uses AirAvailInfo::setProviderCode()
     * @uses AirAvailInfo::setHostTokenRef()
     * @param \Travelport\UniversalRecord\StructType\BookingCodeInfo[] $bookingCodeInfo
     * @param \Travelport\UniversalRecord\StructType\FareTokenInfo[] $fareTokenInfo
     * @param string $providerCode
     * @param string $hostTokenRef
     */
    public function __construct(?array $bookingCodeInfo = null, ?array $fareTokenInfo = null, ?string $providerCode = null, ?string $hostTokenRef = null)
    {
        $this
            ->setBookingCodeInfo($bookingCodeInfo)
            ->setFareTokenInfo($fareTokenInfo)
            ->setProviderCode($providerCode)
            ->setHostTokenRef($hostTokenRef);
    }
    /**
     * Get BookingCodeInfo value
     * @return \Travelport\UniversalRecord\StructType\BookingCodeInfo[]
     */
    public function getBookingCodeInfo(): ?array
    {
        return $this->BookingCodeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingCodeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingCodeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingCodeInfoForArrayConstraintsFromSetBookingCodeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAvailInfoBookingCodeInfoItem) {
            // validation for constraint: itemType
            if (!$airAvailInfoBookingCodeInfoItem instanceof \Travelport\UniversalRecord\StructType\BookingCodeInfo) {
                $invalidValues[] = is_object($airAvailInfoBookingCodeInfoItem) ? get_class($airAvailInfoBookingCodeInfoItem) : sprintf('%s(%s)', gettype($airAvailInfoBookingCodeInfoItem), var_export($airAvailInfoBookingCodeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingCodeInfo property can only contain items of type \Travelport\UniversalRecord\StructType\BookingCodeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingCodeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingCodeInfo[] $bookingCodeInfo
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function setBookingCodeInfo(?array $bookingCodeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingCodeInfoArrayErrorMessage = self::validateBookingCodeInfoForArrayConstraintsFromSetBookingCodeInfo($bookingCodeInfo))) {
            throw new InvalidArgumentException($bookingCodeInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingCodeInfo) && count($bookingCodeInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingCodeInfo)), __LINE__);
        }
        $this->BookingCodeInfo = $bookingCodeInfo;
        
        return $this;
    }
    /**
     * Add item to BookingCodeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingCodeInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function addToBookingCodeInfo(\Travelport\UniversalRecord\StructType\BookingCodeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingCodeInfo) {
            throw new InvalidArgumentException(sprintf('The BookingCodeInfo property can only contain items of type \Travelport\UniversalRecord\StructType\BookingCodeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingCodeInfo) && count($this->BookingCodeInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingCodeInfo)), __LINE__);
        }
        $this->BookingCodeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FareTokenInfo value
     * @return \Travelport\UniversalRecord\StructType\FareTokenInfo[]
     */
    public function getFareTokenInfo(): ?array
    {
        return $this->FareTokenInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setFareTokenInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareTokenInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareTokenInfoForArrayConstraintsFromSetFareTokenInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airAvailInfoFareTokenInfoItem) {
            // validation for constraint: itemType
            if (!$airAvailInfoFareTokenInfoItem instanceof \Travelport\UniversalRecord\StructType\FareTokenInfo) {
                $invalidValues[] = is_object($airAvailInfoFareTokenInfoItem) ? get_class($airAvailInfoFareTokenInfoItem) : sprintf('%s(%s)', gettype($airAvailInfoFareTokenInfoItem), var_export($airAvailInfoFareTokenInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareTokenInfo property can only contain items of type \Travelport\UniversalRecord\StructType\FareTokenInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareTokenInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareTokenInfo[] $fareTokenInfo
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function setFareTokenInfo(?array $fareTokenInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareTokenInfoArrayErrorMessage = self::validateFareTokenInfoForArrayConstraintsFromSetFareTokenInfo($fareTokenInfo))) {
            throw new InvalidArgumentException($fareTokenInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareTokenInfo) && count($fareTokenInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareTokenInfo)), __LINE__);
        }
        $this->FareTokenInfo = $fareTokenInfo;
        
        return $this;
    }
    /**
     * Add item to FareTokenInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareTokenInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function addToFareTokenInfo(\Travelport\UniversalRecord\StructType\FareTokenInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FareTokenInfo) {
            throw new InvalidArgumentException(sprintf('The FareTokenInfo property can only contain items of type \Travelport\UniversalRecord\StructType\FareTokenInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareTokenInfo) && count($this->FareTokenInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareTokenInfo)), __LINE__);
        }
        $this->FareTokenInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
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
     * Get HostTokenRef value
     * @return string|null
     */
    public function getHostTokenRef(): ?string
    {
        return $this->HostTokenRef;
    }
    /**
     * Set HostTokenRef value
     * @param string $hostTokenRef
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function setHostTokenRef(?string $hostTokenRef = null): self
    {
        // validation for constraint: string
        if (!is_null($hostTokenRef) && !is_string($hostTokenRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostTokenRef, true), gettype($hostTokenRef)), __LINE__);
        }
        $this->HostTokenRef = $hostTokenRef;
        
        return $this;
    }
}
