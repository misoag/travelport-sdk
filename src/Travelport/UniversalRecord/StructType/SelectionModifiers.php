<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectionModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: References to airsegments for which EMDs will be generated on all the associated services. | Modifiers supported for selection of services during EMD Issuance. Supported providers are 1V/1G/1P
 * @subpackage Structs
 */
class SelectionModifiers extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    protected ?array $AirSegmentRef = null;
    /**
     * The SvcSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: SVC segment reference to which the EMD is being issued | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $SvcSegmentRef = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Supplier/Vendor code for which EMDs will be generated on all the associated services. Required if PNR contains more than one supplier. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * The RFIC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $RFIC = null;
    /**
     * Constructor method for SelectionModifiers
     * @uses SelectionModifiers::setAirSegmentRef()
     * @uses SelectionModifiers::setSvcSegmentRef()
     * @uses SelectionModifiers::setSupplierCode()
     * @uses SelectionModifiers::setRFIC()
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @param string[] $svcSegmentRef
     * @param string $supplierCode
     * @param string $rFIC
     */
    public function __construct(?array $airSegmentRef = null, ?array $svcSegmentRef = null, ?string $supplierCode = null, ?string $rFIC = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setSvcSegmentRef($svcSegmentRef)
            ->setSupplierCode($supplierCode)
            ->setRFIC($rFIC);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\UniversalRecord\StructType\AirSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $selectionModifiersAirSegmentRefItem) {
            // validation for constraint: itemType
            if (!$selectionModifiersAirSegmentRefItem instanceof \Travelport\UniversalRecord\StructType\AirSegmentRef) {
                $invalidValues[] = is_object($selectionModifiersAirSegmentRefItem) ? get_class($selectionModifiersAirSegmentRefItem) : sprintf('%s(%s)', gettype($selectionModifiersAirSegmentRefItem), var_export($selectionModifiersAirSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\SelectionModifiers
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentRefArrayErrorMessage = self::validateAirSegmentRefForArrayConstraintsFromSetAirSegmentRef($airSegmentRef))) {
            throw new InvalidArgumentException($airSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegmentRef) && count($airSegmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSegmentRef $item
     * @return \Travelport\UniversalRecord\StructType\SelectionModifiers
     */
    public function addToAirSegmentRef(\Travelport\UniversalRecord\StructType\AirSegmentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirSegmentRef) {
            throw new InvalidArgumentException(sprintf('The AirSegmentRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirSegmentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentRef) && count($this->AirSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get SvcSegmentRef value
     * @return string[]
     */
    public function getSvcSegmentRef(): ?array
    {
        return $this->SvcSegmentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setSvcSegmentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSvcSegmentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSvcSegmentRefForArrayConstraintsFromSetSvcSegmentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $selectionModifiersSvcSegmentRefItem) {
            // validation for constraint: itemType
            if (!is_string($selectionModifiersSvcSegmentRefItem)) {
                $invalidValues[] = is_object($selectionModifiersSvcSegmentRefItem) ? get_class($selectionModifiersSvcSegmentRefItem) : sprintf('%s(%s)', gettype($selectionModifiersSvcSegmentRefItem), var_export($selectionModifiersSvcSegmentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SvcSegmentRef property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SvcSegmentRef value
     * @throws InvalidArgumentException
     * @param string[] $svcSegmentRef
     * @return \Travelport\UniversalRecord\StructType\SelectionModifiers
     */
    public function setSvcSegmentRef(?array $svcSegmentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($svcSegmentRefArrayErrorMessage = self::validateSvcSegmentRefForArrayConstraintsFromSetSvcSegmentRef($svcSegmentRef))) {
            throw new InvalidArgumentException($svcSegmentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($svcSegmentRef) && count($svcSegmentRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($svcSegmentRef)), __LINE__);
        }
        $this->SvcSegmentRef = $svcSegmentRef;
        
        return $this;
    }
    /**
     * Add item to SvcSegmentRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\SelectionModifiers
     */
    public function addToSvcSegmentRef(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The SvcSegmentRef property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SvcSegmentRef) && count($this->SvcSegmentRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SvcSegmentRef)), __LINE__);
        }
        $this->SvcSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\SelectionModifiers
     */
    public function setSupplierCode(?string $supplierCode = null): self
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
     * Get RFIC value
     * @return string|null
     */
    public function getRFIC(): ?string
    {
        return $this->RFIC;
    }
    /**
     * Set RFIC value
     * @param string $rFIC
     * @return \Travelport\UniversalRecord\StructType\SelectionModifiers
     */
    public function setRFIC(?string $rFIC = null): self
    {
        // validation for constraint: string
        if (!is_null($rFIC) && !is_string($rFIC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFIC, true), gettype($rFIC)), __LINE__);
        }
        // validation for constraint: length(1)
        if (!is_null($rFIC) && mb_strlen((string) $rFIC) !== 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 1', mb_strlen((string) $rFIC)), __LINE__);
        }
        $this->RFIC = $rFIC;
        
        return $this;
    }
}
