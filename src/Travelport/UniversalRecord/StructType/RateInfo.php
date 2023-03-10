<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Attributes related to maximum and minimum policy codes and 'in policy' indicators.
 * @subpackage Structs
 */
class RateInfo extends AbstractStructBase
{
    /**
     * The PolicyCodesList
     * Meta information extracted from the WSDL
     * - documentation: A list of codes that indicate why an item was determined to be ‘out of policy’.
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypePolicyCodesList|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypePolicyCodesList $PolicyCodesList = null;
    /**
     * The MinimumAmount
     * Meta information extracted from the WSDL
     * - documentation: The low end of the nightly price range | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $MinimumAmount = null;
    /**
     * The ApproximateMinimumAmount
     * Meta information extracted from the WSDL
     * - documentation: The low end of the nightly price range in another currency | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateMinimumAmount = null;
    /**
     * The MinAmountRateChanged
     * Meta information extracted from the WSDL
     * - documentation: Indicates the low end price range changes over the requested stay
     * - use: optional
     * @var bool|null
     */
    public ?bool $MinAmountRateChanged = null;
    /**
     * The MaximumAmount
     * Meta information extracted from the WSDL
     * - documentation: The high end of the nightly price range | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $MaximumAmount = null;
    /**
     * The ApproximateMaximumAmount
     * Meta information extracted from the WSDL
     * - documentation: The high end of the nightly price range in another currency | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateMaximumAmount = null;
    /**
     * The MaxAmountRateChanged
     * Meta information extracted from the WSDL
     * - documentation: Indicates the high end price range changes over the requested stay
     * - use: optional
     * @var bool|null
     */
    public ?bool $MaxAmountRateChanged = null;
    /**
     * The MinimumStayAmount
     * Meta information extracted from the WSDL
     * - documentation: The low end of the price range for the entire stay | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $MinimumStayAmount = null;
    /**
     * The ApproximateMinimumStayAmount
     * Meta information extracted from the WSDL
     * - documentation: The low end of the price range for the entire stay in another currency | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateMinimumStayAmount = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - documentation: Commission information for this rate supplier
     * @var string|null
     */
    public ?string $Commission = null;
    /**
     * The RateSupplier
     * Meta information extracted from the WSDL
     * - documentation: Indicates the supplier of the rate. | Third Party Content Provider name.
     * - base: xs:string
     * - maxLength: 64
     * - use: optional
     * @var string|null
     */
    public ?string $RateSupplier = null;
    /**
     * The RateSupplierLogo
     * Meta information extracted from the WSDL
     * - documentation: Url of the supplier's logo
     * - use: optional
     * @var string|null
     */
    public ?string $RateSupplierLogo = null;
    /**
     * The MinInPolicy
     * Meta information extracted from the WSDL
     * - documentation: This attribute will be used to indicate if the minimum fare or rate has been determined to be ‘in policy’ based on the associated policy settings.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $MinInPolicy = null;
    /**
     * The MaxInPolicy
     * Meta information extracted from the WSDL
     * - documentation: This attribute will be used to indicate if the maximum fare or rate has been determined to be ‘in policy’ based on the associated policy settings.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $MaxInPolicy = null;
    /**
     * Constructor method for RateInfo
     * @uses RateInfo::setPolicyCodesList()
     * @uses RateInfo::setMinimumAmount()
     * @uses RateInfo::setApproximateMinimumAmount()
     * @uses RateInfo::setMinAmountRateChanged()
     * @uses RateInfo::setMaximumAmount()
     * @uses RateInfo::setApproximateMaximumAmount()
     * @uses RateInfo::setMaxAmountRateChanged()
     * @uses RateInfo::setMinimumStayAmount()
     * @uses RateInfo::setApproximateMinimumStayAmount()
     * @uses RateInfo::setCommission()
     * @uses RateInfo::setRateSupplier()
     * @uses RateInfo::setRateSupplierLogo()
     * @uses RateInfo::setMinInPolicy()
     * @uses RateInfo::setMaxInPolicy()
     * @param \Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList
     * @param string $minimumAmount
     * @param string $approximateMinimumAmount
     * @param bool $minAmountRateChanged
     * @param string $maximumAmount
     * @param string $approximateMaximumAmount
     * @param bool $maxAmountRateChanged
     * @param string $minimumStayAmount
     * @param string $approximateMinimumStayAmount
     * @param string $commission
     * @param string $rateSupplier
     * @param string $rateSupplierLogo
     * @param bool $minInPolicy
     * @param bool $maxInPolicy
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList = null, ?string $minimumAmount = null, ?string $approximateMinimumAmount = null, ?bool $minAmountRateChanged = null, ?string $maximumAmount = null, ?string $approximateMaximumAmount = null, ?bool $maxAmountRateChanged = null, ?string $minimumStayAmount = null, ?string $approximateMinimumStayAmount = null, ?string $commission = null, ?string $rateSupplier = null, ?string $rateSupplierLogo = null, ?bool $minInPolicy = null, ?bool $maxInPolicy = null)
    {
        $this
            ->setPolicyCodesList($policyCodesList)
            ->setMinimumAmount($minimumAmount)
            ->setApproximateMinimumAmount($approximateMinimumAmount)
            ->setMinAmountRateChanged($minAmountRateChanged)
            ->setMaximumAmount($maximumAmount)
            ->setApproximateMaximumAmount($approximateMaximumAmount)
            ->setMaxAmountRateChanged($maxAmountRateChanged)
            ->setMinimumStayAmount($minimumStayAmount)
            ->setApproximateMinimumStayAmount($approximateMinimumStayAmount)
            ->setCommission($commission)
            ->setRateSupplier($rateSupplier)
            ->setRateSupplierLogo($rateSupplierLogo)
            ->setMinInPolicy($minInPolicy)
            ->setMaxInPolicy($maxInPolicy);
    }
    /**
     * Get PolicyCodesList value
     * @return \Travelport\UniversalRecord\StructType\TypePolicyCodesList|null
     */
    public function getPolicyCodesList(): ?\Travelport\UniversalRecord\StructType\TypePolicyCodesList
    {
        return $this->PolicyCodesList;
    }
    /**
     * Set PolicyCodesList value
     * @param \Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setPolicyCodesList(?\Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList = null): self
    {
        $this->PolicyCodesList = $policyCodesList;
        
        return $this;
    }
    /**
     * Get MinimumAmount value
     * @return string|null
     */
    public function getMinimumAmount(): ?string
    {
        return $this->MinimumAmount;
    }
    /**
     * Set MinimumAmount value
     * @param string $minimumAmount
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setMinimumAmount(?string $minimumAmount = null): self
    {
        $this->MinimumAmount = $minimumAmount;
        
        return $this;
    }
    /**
     * Get ApproximateMinimumAmount value
     * @return string|null
     */
    public function getApproximateMinimumAmount(): ?string
    {
        return $this->ApproximateMinimumAmount;
    }
    /**
     * Set ApproximateMinimumAmount value
     * @param string $approximateMinimumAmount
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setApproximateMinimumAmount(?string $approximateMinimumAmount = null): self
    {
        $this->ApproximateMinimumAmount = $approximateMinimumAmount;
        
        return $this;
    }
    /**
     * Get MinAmountRateChanged value
     * @return bool|null
     */
    public function getMinAmountRateChanged(): ?bool
    {
        return $this->MinAmountRateChanged;
    }
    /**
     * Set MinAmountRateChanged value
     * @param bool $minAmountRateChanged
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setMinAmountRateChanged(?bool $minAmountRateChanged = null): self
    {
        $this->MinAmountRateChanged = $minAmountRateChanged;
        
        return $this;
    }
    /**
     * Get MaximumAmount value
     * @return string|null
     */
    public function getMaximumAmount(): ?string
    {
        return $this->MaximumAmount;
    }
    /**
     * Set MaximumAmount value
     * @param string $maximumAmount
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setMaximumAmount(?string $maximumAmount = null): self
    {
        $this->MaximumAmount = $maximumAmount;
        
        return $this;
    }
    /**
     * Get ApproximateMaximumAmount value
     * @return string|null
     */
    public function getApproximateMaximumAmount(): ?string
    {
        return $this->ApproximateMaximumAmount;
    }
    /**
     * Set ApproximateMaximumAmount value
     * @param string $approximateMaximumAmount
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setApproximateMaximumAmount(?string $approximateMaximumAmount = null): self
    {
        $this->ApproximateMaximumAmount = $approximateMaximumAmount;
        
        return $this;
    }
    /**
     * Get MaxAmountRateChanged value
     * @return bool|null
     */
    public function getMaxAmountRateChanged(): ?bool
    {
        return $this->MaxAmountRateChanged;
    }
    /**
     * Set MaxAmountRateChanged value
     * @param bool $maxAmountRateChanged
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setMaxAmountRateChanged(?bool $maxAmountRateChanged = null): self
    {
        $this->MaxAmountRateChanged = $maxAmountRateChanged;
        
        return $this;
    }
    /**
     * Get MinimumStayAmount value
     * @return string|null
     */
    public function getMinimumStayAmount(): ?string
    {
        return $this->MinimumStayAmount;
    }
    /**
     * Set MinimumStayAmount value
     * @param string $minimumStayAmount
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setMinimumStayAmount(?string $minimumStayAmount = null): self
    {
        $this->MinimumStayAmount = $minimumStayAmount;
        
        return $this;
    }
    /**
     * Get ApproximateMinimumStayAmount value
     * @return string|null
     */
    public function getApproximateMinimumStayAmount(): ?string
    {
        return $this->ApproximateMinimumStayAmount;
    }
    /**
     * Set ApproximateMinimumStayAmount value
     * @param string $approximateMinimumStayAmount
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setApproximateMinimumStayAmount(?string $approximateMinimumStayAmount = null): self
    {
        $this->ApproximateMinimumStayAmount = $approximateMinimumStayAmount;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return string|null
     */
    public function getCommission(): ?string
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param string $commission
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setCommission(?string $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get RateSupplier value
     * @return string|null
     */
    public function getRateSupplier(): ?string
    {
        return $this->RateSupplier;
    }
    /**
     * Set RateSupplier value
     * @param string $rateSupplier
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setRateSupplier(?string $rateSupplier = null): self
    {
        $this->RateSupplier = $rateSupplier;
        
        return $this;
    }
    /**
     * Get RateSupplierLogo value
     * @return string|null
     */
    public function getRateSupplierLogo(): ?string
    {
        return $this->RateSupplierLogo;
    }
    /**
     * Set RateSupplierLogo value
     * @param string $rateSupplierLogo
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setRateSupplierLogo(?string $rateSupplierLogo = null): self
    {
        $this->RateSupplierLogo = $rateSupplierLogo;
        
        return $this;
    }
    /**
     * Get MinInPolicy value
     * @return bool|null
     */
    public function getMinInPolicy(): ?bool
    {
        return $this->MinInPolicy;
    }
    /**
     * Set MinInPolicy value
     * @param bool $minInPolicy
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setMinInPolicy(?bool $minInPolicy = null): self
    {
        $this->MinInPolicy = $minInPolicy;
        
        return $this;
    }
    /**
     * Get MaxInPolicy value
     * @return bool|null
     */
    public function getMaxInPolicy(): ?bool
    {
        return $this->MaxInPolicy;
    }
    /**
     * Set MaxInPolicy value
     * @param bool $maxInPolicy
     * @return \Travelport\UniversalRecord\StructType\RateInfo
     */
    public function setMaxInPolicy(?bool $maxInPolicy = null): self
    {
        $this->MaxInPolicy = $maxInPolicy;
        
        return $this;
    }
}
