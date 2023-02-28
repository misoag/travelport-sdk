<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRefundBundle StructType
 * Meta information extracted from the WSDL
 * - documentation: Used both in request and response | Bundle refund, pricing, and penalty information for one ticket number
 * @subpackage Structs
 */
class AirRefundBundle extends AbstractStructBase
{
    /**
     * The AirRefundInfo
     * Meta information extracted from the WSDL
     * - ref: AirRefundInfo
     * @var \Travelport\Util\StructType\AirRefundInfo|null
     */
    protected ?\Travelport\Util\StructType\AirRefundInfo $AirRefundInfo = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Name
     * @var \Travelport\Util\StructType\Name[]
     */
    protected ?array $Name = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: TaxInfo
     * @var \Travelport\Util\StructType\TypeTaxInfo[]
     */
    protected ?array $TaxInfo = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\Util\StructType\WaiverCode|null
     */
    protected ?\Travelport\Util\StructType\WaiverCode $WaiverCode = null;
    /**
     * The TicketNumber
     * @var string|null
     */
    protected ?string $TicketNumber = null;
    /**
     * The PTC
     * @var string|null
     */
    protected ?string $PTC = null;
    /**
     * The RefundType
     * @var string|null
     */
    protected ?string $RefundType = null;
    /**
     * Constructor method for AirRefundBundle
     * @uses AirRefundBundle::setAirRefundInfo()
     * @uses AirRefundBundle::setName()
     * @uses AirRefundBundle::setTaxInfo()
     * @uses AirRefundBundle::setWaiverCode()
     * @uses AirRefundBundle::setTicketNumber()
     * @uses AirRefundBundle::setPTC()
     * @uses AirRefundBundle::setRefundType()
     * @param \Travelport\Util\StructType\AirRefundInfo $airRefundInfo
     * @param \Travelport\Util\StructType\Name[] $name
     * @param \Travelport\Util\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\Util\StructType\WaiverCode $waiverCode
     * @param string $ticketNumber
     * @param string $pTC
     * @param string $refundType
     */
    public function __construct(?\Travelport\Util\StructType\AirRefundInfo $airRefundInfo = null, ?array $name = null, ?array $taxInfo = null, ?\Travelport\Util\StructType\WaiverCode $waiverCode = null, ?string $ticketNumber = null, ?string $pTC = null, ?string $refundType = null)
    {
        $this
            ->setAirRefundInfo($airRefundInfo)
            ->setName($name)
            ->setTaxInfo($taxInfo)
            ->setWaiverCode($waiverCode)
            ->setTicketNumber($ticketNumber)
            ->setPTC($pTC)
            ->setRefundType($refundType);
    }
    /**
     * Get AirRefundInfo value
     * @return \Travelport\Util\StructType\AirRefundInfo|null
     */
    public function getAirRefundInfo(): ?\Travelport\Util\StructType\AirRefundInfo
    {
        return $this->AirRefundInfo;
    }
    /**
     * Set AirRefundInfo value
     * @param \Travelport\Util\StructType\AirRefundInfo $airRefundInfo
     * @return \Travelport\Util\StructType\AirRefundBundle
     */
    public function setAirRefundInfo(?\Travelport\Util\StructType\AirRefundInfo $airRefundInfo = null): self
    {
        $this->AirRefundInfo = $airRefundInfo;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\Util\StructType\Name[]
     */
    public function getName(): ?array
    {
        return $this->Name;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameForArrayConstraintFromSetName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airRefundBundleNameItem) {
            // validation for constraint: itemType
            if (!$airRefundBundleNameItem instanceof \Travelport\Util\StructType\Name) {
                $invalidValues[] = is_object($airRefundBundleNameItem) ? get_class($airRefundBundleNameItem) : sprintf('%s(%s)', gettype($airRefundBundleNameItem), var_export($airRefundBundleNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Name property can only contain items of type \Travelport\Util\StructType\Name, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Name value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Name[] $name
     * @return \Travelport\Util\StructType\AirRefundBundle
     */
    public function setName(?array $name = null): self
    {
        // validation for constraint: array
        if ('' !== ($nameArrayErrorMessage = self::validateNameForArrayConstraintFromSetName($name))) {
            throw new InvalidArgumentException($nameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($name) && count($name) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Add item to Name value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Name $item
     * @return \Travelport\Util\StructType\AirRefundBundle
     */
    public function addToName(\Travelport\Util\StructType\Name $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Name) {
            throw new InvalidArgumentException(sprintf('The Name property can only contain items of type \Travelport\Util\StructType\Name, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Name) && count($this->Name) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Name)), __LINE__);
        }
        $this->Name[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\Util\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoForArrayConstraintFromSetTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airRefundBundleTaxInfoItem) {
            // validation for constraint: itemType
            if (!$airRefundBundleTaxInfoItem instanceof \Travelport\Util\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($airRefundBundleTaxInfoItem) ? get_class($airRefundBundleTaxInfoItem) : sprintf('%s(%s)', gettype($airRefundBundleTaxInfoItem), var_export($airRefundBundleTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxInfo property can only contain items of type \Travelport\Util\StructType\TypeTaxInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\Util\StructType\AirRefundBundle
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoArrayErrorMessage = self::validateTaxInfoForArrayConstraintFromSetTaxInfo($taxInfo))) {
            throw new InvalidArgumentException($taxInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxInfo) && count($taxInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxInfo)), __LINE__);
        }
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeTaxInfo $item
     * @return \Travelport\Util\StructType\AirRefundBundle
     */
    public function addToTaxInfo(\Travelport\Util\StructType\TypeTaxInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeTaxInfo) {
            throw new InvalidArgumentException(sprintf('The TaxInfo property can only contain items of type \Travelport\Util\StructType\TypeTaxInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxInfo) && count($this->TaxInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxInfo)), __LINE__);
        }
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return \Travelport\Util\StructType\WaiverCode|null
     */
    public function getWaiverCode(): ?\Travelport\Util\StructType\WaiverCode
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param \Travelport\Util\StructType\WaiverCode $waiverCode
     * @return \Travelport\Util\StructType\AirRefundBundle
     */
    public function setWaiverCode(?\Travelport\Util\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\Util\StructType\AirRefundBundle
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get PTC value
     * @return string|null
     */
    public function getPTC(): ?string
    {
        return $this->PTC;
    }
    /**
     * Set PTC value
     * @param string $pTC
     * @return \Travelport\Util\StructType\AirRefundBundle
     */
    public function setPTC(?string $pTC = null): self
    {
        // validation for constraint: string
        if (!is_null($pTC) && !is_string($pTC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pTC, true), gettype($pTC)), __LINE__);
        }
        $this->PTC = $pTC;
        
        return $this;
    }
    /**
     * Get RefundType value
     * @return string|null
     */
    public function getRefundType(): ?string
    {
        return $this->RefundType;
    }
    /**
     * Set RefundType value
     * @param string $refundType
     * @return \Travelport\Util\StructType\AirRefundBundle
     */
    public function setRefundType(?string $refundType = null): self
    {
        // validation for constraint: string
        if (!is_null($refundType) && !is_string($refundType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundType, true), gettype($refundType)), __LINE__);
        }
        $this->RefundType = $refundType;
        
        return $this;
    }
}
