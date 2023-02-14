<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected ?bool $NoAdvancePurchase = null;
    /**
     * The RefundableFares
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RefundableFares = null;
    /**
     * The NonPenaltyFares
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NonPenaltyFares = null;
    /**
     * The UnRestrictedFares
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $UnRestrictedFares = null;
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
     * @return \StructType\AirSearchParameters
     */
    public function setNoAdvancePurchase(?bool $noAdvancePurchase = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noAdvancePurchase) && !is_bool($noAdvancePurchase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noAdvancePurchase, true), gettype($noAdvancePurchase)), __LINE__);
        }
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
     * @return \StructType\AirSearchParameters
     */
    public function setRefundableFares(?bool $refundableFares = null): self
    {
        // validation for constraint: boolean
        if (!is_null($refundableFares) && !is_bool($refundableFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refundableFares, true), gettype($refundableFares)), __LINE__);
        }
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
     * @return \StructType\AirSearchParameters
     */
    public function setNonPenaltyFares(?bool $nonPenaltyFares = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nonPenaltyFares) && !is_bool($nonPenaltyFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nonPenaltyFares, true), gettype($nonPenaltyFares)), __LINE__);
        }
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
     * @return \StructType\AirSearchParameters
     */
    public function setUnRestrictedFares(?bool $unRestrictedFares = null): self
    {
        // validation for constraint: boolean
        if (!is_null($unRestrictedFares) && !is_bool($unRestrictedFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unRestrictedFares, true), gettype($unRestrictedFares)), __LINE__);
        }
        $this->UnRestrictedFares = $unRestrictedFares;
        
        return $this;
    }
}
