<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangeEligibilityInfo StructType
 * @subpackage Structs
 */
class ExchangeEligibilityInfo extends AbstractStructBase
{
    /**
     * The ExchangePenaltyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ExchangePenaltyInfo
     * @var \Travelport\Util\StructType\ExchangePenaltyInfo[]
     */
    protected ?array $ExchangePenaltyInfo = null;
    /**
     * The EligibleFares
     * Meta information extracted from the WSDL
     * - documentation: Identifies which fares are eligible for Exchange
     * - use: optional
     * @var string|null
     */
    protected ?string $EligibleFares = null;
    /**
     * The RefundableFares
     * Meta information extracted from the WSDL
     * - documentation: Fares eligible for refund: All, Some, None
     * - use: optional
     * @var string|null
     */
    protected ?string $RefundableFares = null;
    /**
     * The PassedAutomationChecks
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the itinerary passed initial validation for automated exchange
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PassedAutomationChecks = null;
    /**
     * Constructor method for ExchangeEligibilityInfo
     * @uses ExchangeEligibilityInfo::setExchangePenaltyInfo()
     * @uses ExchangeEligibilityInfo::setEligibleFares()
     * @uses ExchangeEligibilityInfo::setRefundableFares()
     * @uses ExchangeEligibilityInfo::setPassedAutomationChecks()
     * @param \Travelport\Util\StructType\ExchangePenaltyInfo[] $exchangePenaltyInfo
     * @param string $eligibleFares
     * @param string $refundableFares
     * @param bool $passedAutomationChecks
     */
    public function __construct(?array $exchangePenaltyInfo = null, ?string $eligibleFares = null, ?string $refundableFares = null, ?bool $passedAutomationChecks = null)
    {
        $this
            ->setExchangePenaltyInfo($exchangePenaltyInfo)
            ->setEligibleFares($eligibleFares)
            ->setRefundableFares($refundableFares)
            ->setPassedAutomationChecks($passedAutomationChecks);
    }
    /**
     * Get ExchangePenaltyInfo value
     * @return \Travelport\Util\StructType\ExchangePenaltyInfo[]
     */
    public function getExchangePenaltyInfo(): ?array
    {
        return $this->ExchangePenaltyInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExchangePenaltyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExchangePenaltyInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExchangePenaltyInfoForArrayConstraintFromSetExchangePenaltyInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $exchangeEligibilityInfoExchangePenaltyInfoItem) {
            // validation for constraint: itemType
            if (!$exchangeEligibilityInfoExchangePenaltyInfoItem instanceof \Travelport\Util\StructType\ExchangePenaltyInfo) {
                $invalidValues[] = is_object($exchangeEligibilityInfoExchangePenaltyInfoItem) ? get_class($exchangeEligibilityInfoExchangePenaltyInfoItem) : sprintf('%s(%s)', gettype($exchangeEligibilityInfoExchangePenaltyInfoItem), var_export($exchangeEligibilityInfoExchangePenaltyInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExchangePenaltyInfo property can only contain items of type \Travelport\Util\StructType\ExchangePenaltyInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExchangePenaltyInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ExchangePenaltyInfo[] $exchangePenaltyInfo
     * @return \Travelport\Util\StructType\ExchangeEligibilityInfo
     */
    public function setExchangePenaltyInfo(?array $exchangePenaltyInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($exchangePenaltyInfoArrayErrorMessage = self::validateExchangePenaltyInfoForArrayConstraintFromSetExchangePenaltyInfo($exchangePenaltyInfo))) {
            throw new InvalidArgumentException($exchangePenaltyInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($exchangePenaltyInfo) && count($exchangePenaltyInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($exchangePenaltyInfo)), __LINE__);
        }
        $this->ExchangePenaltyInfo = $exchangePenaltyInfo;
        
        return $this;
    }
    /**
     * Add item to ExchangePenaltyInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ExchangePenaltyInfo $item
     * @return \Travelport\Util\StructType\ExchangeEligibilityInfo
     */
    public function addToExchangePenaltyInfo(\Travelport\Util\StructType\ExchangePenaltyInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ExchangePenaltyInfo) {
            throw new InvalidArgumentException(sprintf('The ExchangePenaltyInfo property can only contain items of type \Travelport\Util\StructType\ExchangePenaltyInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ExchangePenaltyInfo) && count($this->ExchangePenaltyInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ExchangePenaltyInfo)), __LINE__);
        }
        $this->ExchangePenaltyInfo[] = $item;
        
        return $this;
    }
    /**
     * Get EligibleFares value
     * @return string|null
     */
    public function getEligibleFares(): ?string
    {
        return $this->EligibleFares;
    }
    /**
     * Set EligibleFares value
     * @param string $eligibleFares
     * @return \Travelport\Util\StructType\ExchangeEligibilityInfo
     */
    public function setEligibleFares(?string $eligibleFares = null): self
    {
        // validation for constraint: string
        if (!is_null($eligibleFares) && !is_string($eligibleFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eligibleFares, true), gettype($eligibleFares)), __LINE__);
        }
        $this->EligibleFares = $eligibleFares;
        
        return $this;
    }
    /**
     * Get RefundableFares value
     * @return string|null
     */
    public function getRefundableFares(): ?string
    {
        return $this->RefundableFares;
    }
    /**
     * Set RefundableFares value
     * @param string $refundableFares
     * @return \Travelport\Util\StructType\ExchangeEligibilityInfo
     */
    public function setRefundableFares(?string $refundableFares = null): self
    {
        // validation for constraint: string
        if (!is_null($refundableFares) && !is_string($refundableFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundableFares, true), gettype($refundableFares)), __LINE__);
        }
        $this->RefundableFares = $refundableFares;
        
        return $this;
    }
    /**
     * Get PassedAutomationChecks value
     * @return bool|null
     */
    public function getPassedAutomationChecks(): ?bool
    {
        return $this->PassedAutomationChecks;
    }
    /**
     * Set PassedAutomationChecks value
     * @param bool $passedAutomationChecks
     * @return \Travelport\Util\StructType\ExchangeEligibilityInfo
     */
    public function setPassedAutomationChecks(?bool $passedAutomationChecks = null): self
    {
        // validation for constraint: boolean
        if (!is_null($passedAutomationChecks) && !is_bool($passedAutomationChecks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passedAutomationChecks, true), gettype($passedAutomationChecks)), __LINE__);
        }
        $this->PassedAutomationChecks = $passedAutomationChecks;
        
        return $this;
    }
}
