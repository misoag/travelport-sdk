<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\Refundability|null
     */
    public ?\Travelport\Air\StructType\Refundability $Refundability = null;
    /**
     * The LatestTicketingTime
     * Meta information extracted from the WSDL
     * - documentation: For Future Use
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $LatestTicketingTime = null;
    /**
     * The CHG
     * Meta information extracted from the WSDL
     * - documentation: For Penalties
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\CHGType|null
     */
    public ?\Travelport\Air\StructType\CHGType $CHG = null;
    /**
     * The MIN
     * Meta information extracted from the WSDL
     * - documentation: For Minimum Stay
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\MINType|null
     */
    public ?\Travelport\Air\StructType\MINType $MIN = null;
    /**
     * The MAX
     * Meta information extracted from the WSDL
     * - documentation: For Maximum Stay
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\MAXType|null
     */
    public ?\Travelport\Air\StructType\MAXType $MAX = null;
    /**
     * The ADV
     * Meta information extracted from the WSDL
     * - documentation: For Advance Res/Tkt
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ADVType|null
     */
    public ?\Travelport\Air\StructType\ADVType $ADV = null;
    /**
     * The OTH
     * Meta information extracted from the WSDL
     * - documentation: Other
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\OTHType|null
     */
    public ?\Travelport\Air\StructType\OTHType $OTH = null;
    /**
     * Constructor method for FareRulesFilter
     * @uses FareRulesFilter::setRefundability()
     * @uses FareRulesFilter::setLatestTicketingTime()
     * @uses FareRulesFilter::setCHG()
     * @uses FareRulesFilter::setMIN()
     * @uses FareRulesFilter::setMAX()
     * @uses FareRulesFilter::setADV()
     * @uses FareRulesFilter::setOTH()
     * @param \Travelport\Air\StructType\Refundability $refundability
     * @param string $latestTicketingTime
     * @param \Travelport\Air\StructType\CHGType $cHG
     * @param \Travelport\Air\StructType\MINType $mIN
     * @param \Travelport\Air\StructType\MAXType $mAX
     * @param \Travelport\Air\StructType\ADVType $aDV
     * @param \Travelport\Air\StructType\OTHType $oTH
     */
    public function __construct(?\Travelport\Air\StructType\Refundability $refundability = null, ?string $latestTicketingTime = null, ?\Travelport\Air\StructType\CHGType $cHG = null, ?\Travelport\Air\StructType\MINType $mIN = null, ?\Travelport\Air\StructType\MAXType $mAX = null, ?\Travelport\Air\StructType\ADVType $aDV = null, ?\Travelport\Air\StructType\OTHType $oTH = null)
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
     * @return \Travelport\Air\StructType\Refundability|null
     */
    public function getRefundability(): ?\Travelport\Air\StructType\Refundability
    {
        return $this->Refundability;
    }
    /**
     * Set Refundability value
     * @param \Travelport\Air\StructType\Refundability $refundability
     * @return \Travelport\Air\StructType\FareRulesFilter
     */
    public function setRefundability(?\Travelport\Air\StructType\Refundability $refundability = null): self
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
     * @return \Travelport\Air\StructType\FareRulesFilter
     */
    public function setLatestTicketingTime(?string $latestTicketingTime = null): self
    {
        $this->LatestTicketingTime = $latestTicketingTime;
        
        return $this;
    }
    /**
     * Get CHG value
     * @return \Travelport\Air\StructType\CHGType|null
     */
    public function getCHG(): ?\Travelport\Air\StructType\CHGType
    {
        return $this->CHG;
    }
    /**
     * Set CHG value
     * @param \Travelport\Air\StructType\CHGType $cHG
     * @return \Travelport\Air\StructType\FareRulesFilter
     */
    public function setCHG(?\Travelport\Air\StructType\CHGType $cHG = null): self
    {
        $this->CHG = $cHG;
        
        return $this;
    }
    /**
     * Get MIN value
     * @return \Travelport\Air\StructType\MINType|null
     */
    public function getMIN(): ?\Travelport\Air\StructType\MINType
    {
        return $this->MIN;
    }
    /**
     * Set MIN value
     * @param \Travelport\Air\StructType\MINType $mIN
     * @return \Travelport\Air\StructType\FareRulesFilter
     */
    public function setMIN(?\Travelport\Air\StructType\MINType $mIN = null): self
    {
        $this->MIN = $mIN;
        
        return $this;
    }
    /**
     * Get MAX value
     * @return \Travelport\Air\StructType\MAXType|null
     */
    public function getMAX(): ?\Travelport\Air\StructType\MAXType
    {
        return $this->MAX;
    }
    /**
     * Set MAX value
     * @param \Travelport\Air\StructType\MAXType $mAX
     * @return \Travelport\Air\StructType\FareRulesFilter
     */
    public function setMAX(?\Travelport\Air\StructType\MAXType $mAX = null): self
    {
        $this->MAX = $mAX;
        
        return $this;
    }
    /**
     * Get ADV value
     * @return \Travelport\Air\StructType\ADVType|null
     */
    public function getADV(): ?\Travelport\Air\StructType\ADVType
    {
        return $this->ADV;
    }
    /**
     * Set ADV value
     * @param \Travelport\Air\StructType\ADVType $aDV
     * @return \Travelport\Air\StructType\FareRulesFilter
     */
    public function setADV(?\Travelport\Air\StructType\ADVType $aDV = null): self
    {
        $this->ADV = $aDV;
        
        return $this;
    }
    /**
     * Get OTH value
     * @return \Travelport\Air\StructType\OTHType|null
     */
    public function getOTH(): ?\Travelport\Air\StructType\OTHType
    {
        return $this->OTH;
    }
    /**
     * Set OTH value
     * @param \Travelport\Air\StructType\OTHType $oTH
     * @return \Travelport\Air\StructType\FareRulesFilter
     */
    public function setOTH(?\Travelport\Air\StructType\OTHType $oTH = null): self
    {
        $this->OTH = $oTH;
        
        return $this;
    }
}
