<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\Refundability|null
     */
    protected ?\Travelport\Util\StructType\Refundability $Refundability = null;
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
     * @var \Travelport\Util\StructType\CHGType|null
     */
    protected ?\Travelport\Util\StructType\CHGType $CHG = null;
    /**
     * The MIN
     * Meta information extracted from the WSDL
     * - documentation: For Minimum Stay
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\MINType|null
     */
    protected ?\Travelport\Util\StructType\MINType $MIN = null;
    /**
     * The MAX
     * Meta information extracted from the WSDL
     * - documentation: For Maximum Stay
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\MAXType|null
     */
    protected ?\Travelport\Util\StructType\MAXType $MAX = null;
    /**
     * The ADV
     * Meta information extracted from the WSDL
     * - documentation: For Advance Res/Tkt
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\ADVType|null
     */
    protected ?\Travelport\Util\StructType\ADVType $ADV = null;
    /**
     * The OTH
     * Meta information extracted from the WSDL
     * - documentation: Other
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\OTHType|null
     */
    protected ?\Travelport\Util\StructType\OTHType $OTH = null;
    /**
     * Constructor method for FareRulesFilter
     * @uses FareRulesFilter::setRefundability()
     * @uses FareRulesFilter::setLatestTicketingTime()
     * @uses FareRulesFilter::setCHG()
     * @uses FareRulesFilter::setMIN()
     * @uses FareRulesFilter::setMAX()
     * @uses FareRulesFilter::setADV()
     * @uses FareRulesFilter::setOTH()
     * @param \Travelport\Util\StructType\Refundability $refundability
     * @param string $latestTicketingTime
     * @param \Travelport\Util\StructType\CHGType $cHG
     * @param \Travelport\Util\StructType\MINType $mIN
     * @param \Travelport\Util\StructType\MAXType $mAX
     * @param \Travelport\Util\StructType\ADVType $aDV
     * @param \Travelport\Util\StructType\OTHType $oTH
     */
    public function __construct(?\Travelport\Util\StructType\Refundability $refundability = null, ?string $latestTicketingTime = null, ?\Travelport\Util\StructType\CHGType $cHG = null, ?\Travelport\Util\StructType\MINType $mIN = null, ?\Travelport\Util\StructType\MAXType $mAX = null, ?\Travelport\Util\StructType\ADVType $aDV = null, ?\Travelport\Util\StructType\OTHType $oTH = null)
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
     * @return \Travelport\Util\StructType\Refundability|null
     */
    public function getRefundability(): ?\Travelport\Util\StructType\Refundability
    {
        return $this->Refundability;
    }
    /**
     * Set Refundability value
     * @param \Travelport\Util\StructType\Refundability $refundability
     * @return \Travelport\Util\StructType\FareRulesFilter
     */
    public function setRefundability(?\Travelport\Util\StructType\Refundability $refundability = null): self
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
     * @return \Travelport\Util\StructType\FareRulesFilter
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
     * @return \Travelport\Util\StructType\CHGType|null
     */
    public function getCHG(): ?\Travelport\Util\StructType\CHGType
    {
        return $this->CHG;
    }
    /**
     * Set CHG value
     * @param \Travelport\Util\StructType\CHGType $cHG
     * @return \Travelport\Util\StructType\FareRulesFilter
     */
    public function setCHG(?\Travelport\Util\StructType\CHGType $cHG = null): self
    {
        $this->CHG = $cHG;
        
        return $this;
    }
    /**
     * Get MIN value
     * @return \Travelport\Util\StructType\MINType|null
     */
    public function getMIN(): ?\Travelport\Util\StructType\MINType
    {
        return $this->MIN;
    }
    /**
     * Set MIN value
     * @param \Travelport\Util\StructType\MINType $mIN
     * @return \Travelport\Util\StructType\FareRulesFilter
     */
    public function setMIN(?\Travelport\Util\StructType\MINType $mIN = null): self
    {
        $this->MIN = $mIN;
        
        return $this;
    }
    /**
     * Get MAX value
     * @return \Travelport\Util\StructType\MAXType|null
     */
    public function getMAX(): ?\Travelport\Util\StructType\MAXType
    {
        return $this->MAX;
    }
    /**
     * Set MAX value
     * @param \Travelport\Util\StructType\MAXType $mAX
     * @return \Travelport\Util\StructType\FareRulesFilter
     */
    public function setMAX(?\Travelport\Util\StructType\MAXType $mAX = null): self
    {
        $this->MAX = $mAX;
        
        return $this;
    }
    /**
     * Get ADV value
     * @return \Travelport\Util\StructType\ADVType|null
     */
    public function getADV(): ?\Travelport\Util\StructType\ADVType
    {
        return $this->ADV;
    }
    /**
     * Set ADV value
     * @param \Travelport\Util\StructType\ADVType $aDV
     * @return \Travelport\Util\StructType\FareRulesFilter
     */
    public function setADV(?\Travelport\Util\StructType\ADVType $aDV = null): self
    {
        $this->ADV = $aDV;
        
        return $this;
    }
    /**
     * Get OTH value
     * @return \Travelport\Util\StructType\OTHType|null
     */
    public function getOTH(): ?\Travelport\Util\StructType\OTHType
    {
        return $this->OTH;
    }
    /**
     * Set OTH value
     * @param \Travelport\Util\StructType\OTHType $oTH
     * @return \Travelport\Util\StructType\FareRulesFilter
     */
    public function setOTH(?\Travelport\Util\StructType\OTHType $oTH = null): self
    {
        $this->OTH = $oTH;
        
        return $this;
    }
}
