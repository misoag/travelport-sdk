<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierLocator StructType
 * Meta information extracted from the WSDL
 * - documentation: Locator code on the host carrier system
 * @subpackage Structs
 */
class SupplierLocator extends AbstractStructBase
{
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Carrier Code | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $SupplierCode;
    /**
     * The SupplierLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Carrier reservation locator code
     * - use: required
     * @var string
     */
    protected string $SupplierLocatorCode;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Air/Passive Segment Reference
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeGeneralReference[]
     */
    protected ?array $SegmentRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider Reservation reference | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The CreateDateTime
     * Meta information extracted from the WSDL
     * - documentation: The Date and Time which the reservation is received from the Vendor as a SupplierLocator creation Date.
     * - use: optional
     * @var string|null
     */
    protected ?string $CreateDateTime = null;
    /**
     * Constructor method for SupplierLocator
     * @uses SupplierLocator::setSupplierCode()
     * @uses SupplierLocator::setSupplierLocatorCode()
     * @uses SupplierLocator::setSegmentRef()
     * @uses SupplierLocator::setProviderReservationInfoRef()
     * @uses SupplierLocator::setCreateDateTime()
     * @param string $supplierCode
     * @param string $supplierLocatorCode
     * @param \Travelport\Util\StructType\TypeGeneralReference[] $segmentRef
     * @param string $providerReservationInfoRef
     * @param string $createDateTime
     */
    public function __construct(string $supplierCode, string $supplierLocatorCode, ?array $segmentRef = null, ?string $providerReservationInfoRef = null, ?string $createDateTime = null)
    {
        $this
            ->setSupplierCode($supplierCode)
            ->setSupplierLocatorCode($supplierLocatorCode)
            ->setSegmentRef($segmentRef)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setCreateDateTime($createDateTime);
    }
    /**
     * Get SupplierCode value
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Util\StructType\SupplierLocator
     */
    public function setSupplierCode(string $supplierCode): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get SupplierLocatorCode value
     * @return string
     */
    public function getSupplierLocatorCode(): string
    {
        return $this->SupplierLocatorCode;
    }
    /**
     * Set SupplierLocatorCode value
     * @param string $supplierLocatorCode
     * @return \Travelport\Util\StructType\SupplierLocator
     */
    public function setSupplierLocatorCode(string $supplierLocatorCode): self
    {
        // validation for constraint: string
        if (!is_null($supplierLocatorCode) && !is_string($supplierLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierLocatorCode, true), gettype($supplierLocatorCode)), __LINE__);
        }
        $this->SupplierLocatorCode = $supplierLocatorCode;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return \Travelport\Util\StructType\TypeGeneralReference[]
     */
    public function getSegmentRef(): ?array
    {
        return $this->SegmentRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSegmentRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSegmentRefForArrayConstraintFromSetSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $supplierLocatorSegmentRefItem) {
            // validation for constraint: itemType
            if (!$supplierLocatorSegmentRefItem instanceof \Travelport\Util\StructType\TypeGeneralReference) {
                $invalidValues[] = is_object($supplierLocatorSegmentRefItem) ? get_class($supplierLocatorSegmentRefItem) : sprintf('%s(%s)', gettype($supplierLocatorSegmentRefItem), var_export($supplierLocatorSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SegmentRef property can only contain items of type \Travelport\Util\StructType\TypeGeneralReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeGeneralReference[] $segmentRef
     * @return \Travelport\Util\StructType\SupplierLocator
     */
    public function setSegmentRef(?array $segmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($segmentRefArrayErrorMessage = self::validateSegmentRefForArrayConstraintFromSetSegmentRef($segmentRef))) {
            throw new InvalidArgumentException($segmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($segmentRef) && count($segmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Add item to SegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeGeneralReference $item
     * @return \Travelport\Util\StructType\SupplierLocator
     */
    public function addToSegmentRef(\Travelport\Util\StructType\TypeGeneralReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeGeneralReference) {
            throw new InvalidArgumentException(sprintf('The SegmentRef property can only contain items of type \Travelport\Util\StructType\TypeGeneralReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SegmentRef) && count($this->SegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SegmentRef)), __LINE__);
        }
        $this->SegmentRef[] = $item;
        
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
     * @return \Travelport\Util\StructType\SupplierLocator
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
     * Get CreateDateTime value
     * @return string|null
     */
    public function getCreateDateTime(): ?string
    {
        return $this->CreateDateTime;
    }
    /**
     * Set CreateDateTime value
     * @param string $createDateTime
     * @return \Travelport\Util\StructType\SupplierLocator
     */
    public function setCreateDateTime(?string $createDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($createDateTime) && !is_string($createDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDateTime, true), gettype($createDateTime)), __LINE__);
        }
        $this->CreateDateTime = $createDateTime;
        
        return $this;
    }
}
