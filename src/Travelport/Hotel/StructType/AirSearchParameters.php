<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSearchParameters StructType
 * Meta information extracted from the WSDL
 * - documentation: Search Parameters
 * @subpackage Structs
 */
class AirSearchParameters extends AbstractStructBase
{
    /**
     * The NoAdvancePurchase
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $NoAdvancePurchase = null;
    /**
     * The RefundableFares
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $RefundableFares = null;
    /**
     * The NonPenaltyFares
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $NonPenaltyFares = null;
    /**
     * The UnRestrictedFares
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $UnRestrictedFares = null;
    /**
     * Constructor method for AirSearchParameters
     * @uses AirSearchParameters::setNoAdvancePurchase()
     * @uses AirSearchParameters::setRefundableFares()
     * @uses AirSearchParameters::setNonPenaltyFares()
     * @uses AirSearchParameters::setUnRestrictedFares()
     * @param bool $noAdvancePurchase
     * @param bool $refundableFares
     * @param bool $nonPenaltyFares
     * @param bool $unRestrictedFares
     */
    public function __construct(?bool $noAdvancePurchase = null, ?bool $refundableFares = null, ?bool $nonPenaltyFares = null, ?bool $unRestrictedFares = null)
    {
        $this
            ->setNoAdvancePurchase($noAdvancePurchase)
            ->setRefundableFares($refundableFares)
            ->setNonPenaltyFares($nonPenaltyFares)
            ->setUnRestrictedFares($unRestrictedFares);
    }
    /**
     * Get NoAdvancePurchase value
     * @return bool|null
     */
    public function getNoAdvancePurchase(): ?bool
    {
        return $this->NoAdvancePurchase;
    }
    /**
     * Set NoAdvancePurchase value
     * @param bool $noAdvancePurchase
     * @return \Travelport\Hotel\StructType\AirSearchParameters
     */
    public function setNoAdvancePurchase(?bool $noAdvancePurchase = null): self
    {
        $this->NoAdvancePurchase = $noAdvancePurchase;
        
        return $this;
    }
    /**
     * Get RefundableFares value
     * @return bool|null
     */
    public function getRefundableFares(): ?bool
    {
        return $this->RefundableFares;
    }
    /**
     * Set RefundableFares value
     * @param bool $refundableFares
     * @return \Travelport\Hotel\StructType\AirSearchParameters
     */
    public function setRefundableFares(?bool $refundableFares = null): self
    {
        $this->RefundableFares = $refundableFares;
        
        return $this;
    }
    /**
     * Get NonPenaltyFares value
     * @return bool|null
     */
    public function getNonPenaltyFares(): ?bool
    {
        return $this->NonPenaltyFares;
    }
    /**
     * Set NonPenaltyFares value
     * @param bool $nonPenaltyFares
     * @return \Travelport\Hotel\StructType\AirSearchParameters
     */
    public function setNonPenaltyFares(?bool $nonPenaltyFares = null): self
    {
        $this->NonPenaltyFares = $nonPenaltyFares;
        
        return $this;
    }
    /**
     * Get UnRestrictedFares value
     * @return bool|null
     */
    public function getUnRestrictedFares(): ?bool
    {
        return $this->UnRestrictedFares;
    }
    /**
     * Set UnRestrictedFares value
     * @param bool $unRestrictedFares
     * @return \Travelport\Hotel\StructType\AirSearchParameters
     */
    public function setUnRestrictedFares(?bool $unRestrictedFares = null): self
    {
        $this->UnRestrictedFares = $unRestrictedFares;
        
        return $this;
    }
}
