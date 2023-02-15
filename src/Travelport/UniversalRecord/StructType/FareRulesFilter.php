<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRulesFilter StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Rules Filter about this fare component. Applicable Providers are 1P,1G,1V.
 * @subpackage Structs
 */
class FareRulesFilter extends AbstractStructBase
{
    /**
     * The Refundability
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\Refundability|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Refundability $Refundability = null;
    /**
     * The LatestTicketingTime
     * Meta information extracted from the WSDL
     * - documentation: For Future Use
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LatestTicketingTime = null;
    /**
     * The CHG
     * Meta information extracted from the WSDL
     * - documentation: For Penalties
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\CHGType|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CHGType $CHG = null;
    /**
     * The MIN
     * Meta information extracted from the WSDL
     * - documentation: For Minimum Stay
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\MINType|null
     */
    protected ?\Travelport\UniversalRecord\StructType\MINType $MIN = null;
    /**
     * The MAX
     * Meta information extracted from the WSDL
     * - documentation: For Maximum Stay
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\MAXType|null
     */
    protected ?\Travelport\UniversalRecord\StructType\MAXType $MAX = null;
    /**
     * The ADV
     * Meta information extracted from the WSDL
     * - documentation: For Advance Res/Tkt
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ADVType|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ADVType $ADV = null;
    /**
     * The OTH
     * Meta information extracted from the WSDL
     * - documentation: Other
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\OTHType|null
     */
    protected ?\Travelport\UniversalRecord\StructType\OTHType $OTH = null;
    /**
     * Constructor method for FareRulesFilter
     * @uses FareRulesFilter::setRefundability()
     * @uses FareRulesFilter::setLatestTicketingTime()
     * @uses FareRulesFilter::setCHG()
     * @uses FareRulesFilter::setMIN()
     * @uses FareRulesFilter::setMAX()
     * @uses FareRulesFilter::setADV()
     * @uses FareRulesFilter::setOTH()
     * @param \Travelport\UniversalRecord\StructType\Refundability $refundability
     * @param string $latestTicketingTime
     * @param \Travelport\UniversalRecord\StructType\CHGType $cHG
     * @param \Travelport\UniversalRecord\StructType\MINType $mIN
     * @param \Travelport\UniversalRecord\StructType\MAXType $mAX
     * @param \Travelport\UniversalRecord\StructType\ADVType $aDV
     * @param \Travelport\UniversalRecord\StructType\OTHType $oTH
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Refundability $refundability = null, ?string $latestTicketingTime = null, ?\Travelport\UniversalRecord\StructType\CHGType $cHG = null, ?\Travelport\UniversalRecord\StructType\MINType $mIN = null, ?\Travelport\UniversalRecord\StructType\MAXType $mAX = null, ?\Travelport\UniversalRecord\StructType\ADVType $aDV = null, ?\Travelport\UniversalRecord\StructType\OTHType $oTH = null)
    {
        $this
            ->setRefundability($refundability)
            ->setLatestTicketingTime($latestTicketingTime)
            ->setCHG($cHG)
            ->setMIN($mIN)
            ->setMAX($mAX)
            ->setADV($aDV)
            ->setOTH($oTH);
    }
    /**
     * Get Refundability value
     * @return \Travelport\UniversalRecord\StructType\Refundability|null
     */
    public function getRefundability(): ?\Travelport\UniversalRecord\StructType\Refundability
    {
        return $this->Refundability;
    }
    /**
     * Set Refundability value
     * @param \Travelport\UniversalRecord\StructType\Refundability $refundability
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilter
     */
    public function setRefundability(?\Travelport\UniversalRecord\StructType\Refundability $refundability = null): self
    {
        $this->Refundability = $refundability;
        
        return $this;
    }
    /**
     * Get LatestTicketingTime value
     * @return string|null
     */
    public function getLatestTicketingTime(): ?string
    {
        return $this->LatestTicketingTime;
    }
    /**
     * Set LatestTicketingTime value
     * @param string $latestTicketingTime
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilter
     */
    public function setLatestTicketingTime(?string $latestTicketingTime = null): self
    {
        // validation for constraint: string
        if (!is_null($latestTicketingTime) && !is_string($latestTicketingTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latestTicketingTime, true), gettype($latestTicketingTime)), __LINE__);
        }
        $this->LatestTicketingTime = $latestTicketingTime;
        
        return $this;
    }
    /**
     * Get CHG value
     * @return \Travelport\UniversalRecord\StructType\CHGType|null
     */
    public function getCHG(): ?\Travelport\UniversalRecord\StructType\CHGType
    {
        return $this->CHG;
    }
    /**
     * Set CHG value
     * @param \Travelport\UniversalRecord\StructType\CHGType $cHG
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilter
     */
    public function setCHG(?\Travelport\UniversalRecord\StructType\CHGType $cHG = null): self
    {
        $this->CHG = $cHG;
        
        return $this;
    }
    /**
     * Get MIN value
     * @return \Travelport\UniversalRecord\StructType\MINType|null
     */
    public function getMIN(): ?\Travelport\UniversalRecord\StructType\MINType
    {
        return $this->MIN;
    }
    /**
     * Set MIN value
     * @param \Travelport\UniversalRecord\StructType\MINType $mIN
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilter
     */
    public function setMIN(?\Travelport\UniversalRecord\StructType\MINType $mIN = null): self
    {
        $this->MIN = $mIN;
        
        return $this;
    }
    /**
     * Get MAX value
     * @return \Travelport\UniversalRecord\StructType\MAXType|null
     */
    public function getMAX(): ?\Travelport\UniversalRecord\StructType\MAXType
    {
        return $this->MAX;
    }
    /**
     * Set MAX value
     * @param \Travelport\UniversalRecord\StructType\MAXType $mAX
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilter
     */
    public function setMAX(?\Travelport\UniversalRecord\StructType\MAXType $mAX = null): self
    {
        $this->MAX = $mAX;
        
        return $this;
    }
    /**
     * Get ADV value
     * @return \Travelport\UniversalRecord\StructType\ADVType|null
     */
    public function getADV(): ?\Travelport\UniversalRecord\StructType\ADVType
    {
        return $this->ADV;
    }
    /**
     * Set ADV value
     * @param \Travelport\UniversalRecord\StructType\ADVType $aDV
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilter
     */
    public function setADV(?\Travelport\UniversalRecord\StructType\ADVType $aDV = null): self
    {
        $this->ADV = $aDV;
        
        return $this;
    }
    /**
     * Get OTH value
     * @return \Travelport\UniversalRecord\StructType\OTHType|null
     */
    public function getOTH(): ?\Travelport\UniversalRecord\StructType\OTHType
    {
        return $this->OTH;
    }
    /**
     * Set OTH value
     * @param \Travelport\UniversalRecord\StructType\OTHType $oTH
     * @return \Travelport\UniversalRecord\StructType\FareRulesFilter
     */
    public function setOTH(?\Travelport\UniversalRecord\StructType\OTHType $oTH = null): self
    {
        $this->OTH = $oTH;
        
        return $this;
    }
}
