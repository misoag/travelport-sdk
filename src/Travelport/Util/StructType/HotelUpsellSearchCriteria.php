<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUpsellSearchCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Search criteria for HotelUpsell.
 * @subpackage Structs
 */
class HotelUpsellSearchCriteria extends AbstractStructBase
{
    /**
     * The HotelUpsellQualifySearchCriteria
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: HotelUpsellQualifySearchCriteria
     * @var \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria
     */
    protected \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria $HotelUpsellQualifySearchCriteria;
    /**
     * The HotelUpsellOfferSearchCriteria
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelUpsellOfferSearchCriteria
     * @var \Travelport\Util\StructType\HotelUpsellOfferSearchCriteria|null
     */
    protected ?\Travelport\Util\StructType\HotelUpsellOfferSearchCriteria $HotelUpsellOfferSearchCriteria = null;
    /**
     * Constructor method for HotelUpsellSearchCriteria
     * @uses HotelUpsellSearchCriteria::setHotelUpsellQualifySearchCriteria()
     * @uses HotelUpsellSearchCriteria::setHotelUpsellOfferSearchCriteria()
     * @param \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria $hotelUpsellQualifySearchCriteria
     * @param \Travelport\Util\StructType\HotelUpsellOfferSearchCriteria $hotelUpsellOfferSearchCriteria
     */
    public function __construct(\Travelport\Util\StructType\HotelUpsellQualifySearchCriteria $hotelUpsellQualifySearchCriteria, ?\Travelport\Util\StructType\HotelUpsellOfferSearchCriteria $hotelUpsellOfferSearchCriteria = null)
    {
        $this
            ->setHotelUpsellQualifySearchCriteria($hotelUpsellQualifySearchCriteria)
            ->setHotelUpsellOfferSearchCriteria($hotelUpsellOfferSearchCriteria);
    }
    /**
     * Get HotelUpsellQualifySearchCriteria value
     * @return \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria
     */
    public function getHotelUpsellQualifySearchCriteria(): \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria
    {
        return $this->HotelUpsellQualifySearchCriteria;
    }
    /**
     * Set HotelUpsellQualifySearchCriteria value
     * @param \Travelport\Util\StructType\HotelUpsellQualifySearchCriteria $hotelUpsellQualifySearchCriteria
     * @return \Travelport\Util\StructType\HotelUpsellSearchCriteria
     */
    public function setHotelUpsellQualifySearchCriteria(\Travelport\Util\StructType\HotelUpsellQualifySearchCriteria $hotelUpsellQualifySearchCriteria): self
    {
        $this->HotelUpsellQualifySearchCriteria = $hotelUpsellQualifySearchCriteria;
        
        return $this;
    }
    /**
     * Get HotelUpsellOfferSearchCriteria value
     * @return \Travelport\Util\StructType\HotelUpsellOfferSearchCriteria|null
     */
    public function getHotelUpsellOfferSearchCriteria(): ?\Travelport\Util\StructType\HotelUpsellOfferSearchCriteria
    {
        return $this->HotelUpsellOfferSearchCriteria;
    }
    /**
     * Set HotelUpsellOfferSearchCriteria value
     * @param \Travelport\Util\StructType\HotelUpsellOfferSearchCriteria $hotelUpsellOfferSearchCriteria
     * @return \Travelport\Util\StructType\HotelUpsellSearchCriteria
     */
    public function setHotelUpsellOfferSearchCriteria(?\Travelport\Util\StructType\HotelUpsellOfferSearchCriteria $hotelUpsellOfferSearchCriteria = null): self
    {
        $this->HotelUpsellOfferSearchCriteria = $hotelUpsellOfferSearchCriteria;
        
        return $this;
    }
}
