<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirUpsellSearchCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Search criteria for AirUpsell.
 * @subpackage Structs
 */
class AirUpsellSearchCriteria extends AbstractStructBase
{
    /**
     * The AirUpsellQualifySearchCriteria
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: AirUpsellQualifySearchCriteria
     * @var \Travelport\Util\StructType\AirUpsellQualifySearchCriteria
     */
    protected \Travelport\Util\StructType\AirUpsellQualifySearchCriteria $AirUpsellQualifySearchCriteria;
    /**
     * The AirUpsellOfferSearchCriteria
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirUpsellOfferSearchCriteria
     * @var \Travelport\Util\StructType\AirUpsellOfferSearchCriteria|null
     */
    protected ?\Travelport\Util\StructType\AirUpsellOfferSearchCriteria $AirUpsellOfferSearchCriteria = null;
    /**
     * Constructor method for AirUpsellSearchCriteria
     * @uses AirUpsellSearchCriteria::setAirUpsellQualifySearchCriteria()
     * @uses AirUpsellSearchCriteria::setAirUpsellOfferSearchCriteria()
     * @param \Travelport\Util\StructType\AirUpsellQualifySearchCriteria $airUpsellQualifySearchCriteria
     * @param \Travelport\Util\StructType\AirUpsellOfferSearchCriteria $airUpsellOfferSearchCriteria
     */
    public function __construct(\Travelport\Util\StructType\AirUpsellQualifySearchCriteria $airUpsellQualifySearchCriteria, ?\Travelport\Util\StructType\AirUpsellOfferSearchCriteria $airUpsellOfferSearchCriteria = null)
    {
        $this
            ->setAirUpsellQualifySearchCriteria($airUpsellQualifySearchCriteria)
            ->setAirUpsellOfferSearchCriteria($airUpsellOfferSearchCriteria);
    }
    /**
     * Get AirUpsellQualifySearchCriteria value
     * @return \Travelport\Util\StructType\AirUpsellQualifySearchCriteria
     */
    public function getAirUpsellQualifySearchCriteria(): \Travelport\Util\StructType\AirUpsellQualifySearchCriteria
    {
        return $this->AirUpsellQualifySearchCriteria;
    }
    /**
     * Set AirUpsellQualifySearchCriteria value
     * @param \Travelport\Util\StructType\AirUpsellQualifySearchCriteria $airUpsellQualifySearchCriteria
     * @return \Travelport\Util\StructType\AirUpsellSearchCriteria
     */
    public function setAirUpsellQualifySearchCriteria(\Travelport\Util\StructType\AirUpsellQualifySearchCriteria $airUpsellQualifySearchCriteria): self
    {
        $this->AirUpsellQualifySearchCriteria = $airUpsellQualifySearchCriteria;
        
        return $this;
    }
    /**
     * Get AirUpsellOfferSearchCriteria value
     * @return \Travelport\Util\StructType\AirUpsellOfferSearchCriteria|null
     */
    public function getAirUpsellOfferSearchCriteria(): ?\Travelport\Util\StructType\AirUpsellOfferSearchCriteria
    {
        return $this->AirUpsellOfferSearchCriteria;
    }
    /**
     * Set AirUpsellOfferSearchCriteria value
     * @param \Travelport\Util\StructType\AirUpsellOfferSearchCriteria $airUpsellOfferSearchCriteria
     * @return \Travelport\Util\StructType\AirUpsellSearchCriteria
     */
    public function setAirUpsellOfferSearchCriteria(?\Travelport\Util\StructType\AirUpsellOfferSearchCriteria $airUpsellOfferSearchCriteria = null): self
    {
        $this->AirUpsellOfferSearchCriteria = $airUpsellOfferSearchCriteria;
        
        return $this;
    }
}
