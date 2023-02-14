<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRemarkWithTravelerRef StructType
 * @subpackage Structs
 */
class TypeRemarkWithTravelerRef extends AbstractStructBase
{
    /**
     * The RemarkData
     * Meta information extracted from the WSDL
     * - documentation: Actual remarks data.
     * @var string|null
     */
    protected ?string $RemarkData = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to Booking Traveler. | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the provider for which this element is used | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * Constructor method for typeRemarkWithTravelerRef
     * @uses TypeRemarkWithTravelerRef::setRemarkData()
     * @uses TypeRemarkWithTravelerRef::setBookingTravelerRef()
     * @uses TypeRemarkWithTravelerRef::setProviderReservationInfoRef()
     * @uses TypeRemarkWithTravelerRef::setProviderCode()
     * @param string $remarkData
     * @param string[] $bookingTravelerRef
     * @param string $providerReservationInfoRef
     * @param string $providerCode
     */
    public function __construct(?string $remarkData = null, ?array $bookingTravelerRef = null, ?string $providerReservationInfoRef = null, ?string $providerCode = null)
    {
        $this
            ->setRemarkData($remarkData)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setProviderCode($providerCode);
    }
    /**
     * Get RemarkData value
     * @return string|null
     */
    public function getRemarkData(): ?string
    {
        return $this->RemarkData;
    }
    /**
     * Set RemarkData value
     * @param string $remarkData
     * @return \Travelport\UniversalRecord\StructType\TypeRemarkWithTravelerRef
     */
    public function setRemarkData(?string $remarkData = null): self
    {
        // validation for constraint: string
        if (!is_null($remarkData) && !is_string($remarkData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarkData, true), gettype($remarkData)), __LINE__);
        }
        $this->RemarkData = $remarkData;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeRemarkWithTravelerRefBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!is_string($typeRemarkWithTravelerRefBookingTravelerRefItem)) {
                $invalidValues[] = is_object($typeRemarkWithTravelerRefBookingTravelerRefItem) ? get_class($typeRemarkWithTravelerRefBookingTravelerRefItem) : sprintf('%s(%s)', gettype($typeRemarkWithTravelerRefBookingTravelerRefItem), var_export($typeRemarkWithTravelerRefBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\TypeRemarkWithTravelerRef
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\TypeRemarkWithTravelerRef
     */
    public function addToBookingTravelerRef(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\TypeRemarkWithTravelerRef
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeRemarkWithTravelerRef
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
}
