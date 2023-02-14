<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TCRRefundBundle StructType
 * Meta information extracted from the WSDL
 * - documentation: Itinerary level taxes | Used both in request and response | Bundle refund, pricing, and penalty information for a TCR reservation
 * @subpackage Structs
 */
class TCRRefundBundle extends AbstractStructBase
{
    /**
     * The TCRNumber
     * Meta information extracted from the WSDL
     * - documentation: The identifying number for a Ticketless Air Reservation. | The identifying number for a Ticketless Air Reservation
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $TCRNumber;
    /**
     * The RefundType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $RefundType;
    /**
     * The AirRefundInfo
     * Meta information extracted from the WSDL
     * - ref: AirRefundInfo
     * @var \Travelport\Util\StructType\AirRefundInfo|null
     */
    protected ?\Travelport\Util\StructType\AirRefundInfo $AirRefundInfo = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\Util\StructType\WaiverCode|null
     */
    protected ?\Travelport\Util\StructType\WaiverCode $WaiverCode = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegment
     * @var \Travelport\Util\StructType\TypeBaseAirSegment[]
     */
    protected ?array $AirSegment = null;
    /**
     * The FeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FeeInfo
     * @var \Travelport\Util\StructType\TypeFeeInfo[]
     */
    protected ?array $FeeInfo = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\Util\StructType\TypeTaxInfo[]
     */
    protected ?array $TaxInfo = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Util\StructType\HostToken[]
     */
    protected ?array $HostToken = null;
    /**
     * The RefundAccessCode
     * Meta information extracted from the WSDL
     * - ref: RefundAccessCode
     * - use: optional
     * @var string|null
     */
    protected ?string $RefundAccessCode = null;
    /**
     * Constructor method for TCRRefundBundle
     * @uses TCRRefundBundle::setTCRNumber()
     * @uses TCRRefundBundle::setRefundType()
     * @uses TCRRefundBundle::setAirRefundInfo()
     * @uses TCRRefundBundle::setWaiverCode()
     * @uses TCRRefundBundle::setAirSegment()
     * @uses TCRRefundBundle::setFeeInfo()
     * @uses TCRRefundBundle::setTaxInfo()
     * @uses TCRRefundBundle::setHostToken()
     * @uses TCRRefundBundle::setRefundAccessCode()
     * @param string $tCRNumber
     * @param string $refundType
     * @param \Travelport\Util\StructType\AirRefundInfo $airRefundInfo
     * @param \Travelport\Util\StructType\WaiverCode $waiverCode
     * @param \Travelport\Util\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\Util\StructType\TypeFeeInfo[] $feeInfo
     * @param \Travelport\Util\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\Util\StructType\HostToken[] $hostToken
     * @param string $refundAccessCode
     */
    public function __construct(string $tCRNumber, string $refundType, ?\Travelport\Util\StructType\AirRefundInfo $airRefundInfo = null, ?\Travelport\Util\StructType\WaiverCode $waiverCode = null, ?array $airSegment = null, ?array $feeInfo = null, ?array $taxInfo = null, ?array $hostToken = null, ?string $refundAccessCode = null)
    {
        $this
            ->setTCRNumber($tCRNumber)
            ->setRefundType($refundType)
            ->setAirRefundInfo($airRefundInfo)
            ->setWaiverCode($waiverCode)
            ->setAirSegment($airSegment)
            ->setFeeInfo($feeInfo)
            ->setTaxInfo($taxInfo)
            ->setHostToken($hostToken)
            ->setRefundAccessCode($refundAccessCode);
    }
    /**
     * Get TCRNumber value
     * @return string
     */
    public function getTCRNumber(): string
    {
        return $this->TCRNumber;
    }
    /**
     * Set TCRNumber value
     * @param string $tCRNumber
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function setTCRNumber(string $tCRNumber): self
    {
        // validation for constraint: string
        if (!is_null($tCRNumber) && !is_string($tCRNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tCRNumber, true), gettype($tCRNumber)), __LINE__);
        }
        $this->TCRNumber = $tCRNumber;
        
        return $this;
    }
    /**
     * Get RefundType value
     * @return string
     */
    public function getRefundType(): string
    {
        return $this->RefundType;
    }
    /**
     * Set RefundType value
     * @param string $refundType
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function setRefundType(string $refundType): self
    {
        // validation for constraint: string
        if (!is_null($refundType) && !is_string($refundType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundType, true), gettype($refundType)), __LINE__);
        }
        $this->RefundType = $refundType;
        
        return $this;
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
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function setAirRefundInfo(?\Travelport\Util\StructType\AirRefundInfo $airRefundInfo = null): self
    {
        $this->AirRefundInfo = $airRefundInfo;
        
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
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function setWaiverCode(?\Travelport\Util\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\Util\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentForArrayConstraintsFromSetAirSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRRefundBundleAirSegmentItem) {
            // validation for constraint: itemType
            if (!$tCRRefundBundleAirSegmentItem instanceof \Travelport\Util\StructType\TypeBaseAirSegment) {
                $invalidValues[] = is_object($tCRRefundBundleAirSegmentItem) ? get_class($tCRRefundBundleAirSegmentItem) : sprintf('%s(%s)', gettype($tCRRefundBundleAirSegmentItem), var_export($tCRRefundBundleAirSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegment property can only contain items of type \Travelport\Util\StructType\TypeBaseAirSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentArrayErrorMessage = self::validateAirSegmentForArrayConstraintsFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegment) && count($airSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegment)), __LINE__);
        }
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeBaseAirSegment $item
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function addToAirSegment(\Travelport\Util\StructType\TypeBaseAirSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeBaseAirSegment) {
            throw new InvalidArgumentException(sprintf('The AirSegment property can only contain items of type \Travelport\Util\StructType\TypeBaseAirSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegment) && count($this->AirSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegment)), __LINE__);
        }
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get FeeInfo value
     * @return \Travelport\Util\StructType\TypeFeeInfo[]
     */
    public function getFeeInfo(): ?array
    {
        return $this->FeeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeInfoForArrayConstraintsFromSetFeeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRRefundBundleFeeInfoItem) {
            // validation for constraint: itemType
            if (!$tCRRefundBundleFeeInfoItem instanceof \Travelport\Util\StructType\TypeFeeInfo) {
                $invalidValues[] = is_object($tCRRefundBundleFeeInfoItem) ? get_class($tCRRefundBundleFeeInfoItem) : sprintf('%s(%s)', gettype($tCRRefundBundleFeeInfoItem), var_export($tCRRefundBundleFeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeeInfo property can only contain items of type \Travelport\Util\StructType\TypeFeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFeeInfo[] $feeInfo
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function setFeeInfo(?array $feeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeInfoArrayErrorMessage = self::validateFeeInfoForArrayConstraintsFromSetFeeInfo($feeInfo))) {
            throw new InvalidArgumentException($feeInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($feeInfo) && count($feeInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($feeInfo)), __LINE__);
        }
        $this->FeeInfo = $feeInfo;
        
        return $this;
    }
    /**
     * Add item to FeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFeeInfo $item
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function addToFeeInfo(\Travelport\Util\StructType\TypeFeeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeFeeInfo) {
            throw new InvalidArgumentException(sprintf('The FeeInfo property can only contain items of type \Travelport\Util\StructType\TypeFeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FeeInfo) && count($this->FeeInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FeeInfo)), __LINE__);
        }
        $this->FeeInfo[] = $item;
        
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
     * This method is responsible for validating the values passed to the setTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoForArrayConstraintsFromSetTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRRefundBundleTaxInfoItem) {
            // validation for constraint: itemType
            if (!$tCRRefundBundleTaxInfoItem instanceof \Travelport\Util\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($tCRRefundBundleTaxInfoItem) ? get_class($tCRRefundBundleTaxInfoItem) : sprintf('%s(%s)', gettype($tCRRefundBundleTaxInfoItem), var_export($tCRRefundBundleTaxInfoItem, true));
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
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoArrayErrorMessage = self::validateTaxInfoForArrayConstraintsFromSetTaxInfo($taxInfo))) {
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
     * @return \Travelport\Util\StructType\TCRRefundBundle
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
     * Get HostToken value
     * @return \Travelport\Util\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * This method is responsible for validating the values passed to the setHostToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHostToken method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHostTokenForArrayConstraintsFromSetHostToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tCRRefundBundleHostTokenItem) {
            // validation for constraint: itemType
            if (!$tCRRefundBundleHostTokenItem instanceof \Travelport\Util\StructType\HostToken) {
                $invalidValues[] = is_object($tCRRefundBundleHostTokenItem) ? get_class($tCRRefundBundleHostTokenItem) : sprintf('%s(%s)', gettype($tCRRefundBundleHostTokenItem), var_export($tCRRefundBundleHostTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HostToken property can only contain items of type \Travelport\Util\StructType\HostToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HostToken[] $hostToken
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function setHostToken(?array $hostToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($hostTokenArrayErrorMessage = self::validateHostTokenForArrayConstraintsFromSetHostToken($hostToken))) {
            throw new InvalidArgumentException($hostTokenArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hostToken) && count($hostToken) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hostToken)), __LINE__);
        }
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HostToken $item
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function addToHostToken(\Travelport\Util\StructType\HostToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\HostToken) {
            throw new InvalidArgumentException(sprintf('The HostToken property can only contain items of type \Travelport\Util\StructType\HostToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HostToken) && count($this->HostToken) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HostToken)), __LINE__);
        }
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get RefundAccessCode value
     * @return string|null
     */
    public function getRefundAccessCode(): ?string
    {
        return $this->RefundAccessCode;
    }
    /**
     * Set RefundAccessCode value
     * @param string $refundAccessCode
     * @return \Travelport\Util\StructType\TCRRefundBundle
     */
    public function setRefundAccessCode(?string $refundAccessCode = null): self
    {
        // validation for constraint: string
        if (!is_null($refundAccessCode) && !is_string($refundAccessCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundAccessCode, true), gettype($refundAccessCode)), __LINE__);
        }
        $this->RefundAccessCode = $refundAccessCode;
        
        return $this;
    }
}
