<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUpsellRule StructType
 * Meta information extracted from the WSDL
 * - documentation: Binds an HotelUpsellQualify and HotelUpsellOffer
 * @subpackage Structs
 */
class HotelUpsellRule extends AbstractStructBase
{
    /**
     * The HotelUpsellQualify
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelUpsellQualify
     * @var \Travelport\Util\StructType\HotelUpsellQualify|null
     */
    protected ?\Travelport\Util\StructType\HotelUpsellQualify $HotelUpsellQualify = null;
    /**
     * The HotelUpsellOffer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelUpsellOffer
     * @var \Travelport\Util\StructType\HotelUpsellOffer|null
     */
    protected ?\Travelport\Util\StructType\HotelUpsellOffer $HotelUpsellOffer = null;
    /**
     * Constructor method for HotelUpsellRule
     * @uses HotelUpsellRule::setHotelUpsellQualify()
     * @uses HotelUpsellRule::setHotelUpsellOffer()
     * @param \Travelport\Util\StructType\HotelUpsellQualify $hotelUpsellQualify
     * @param \Travelport\Util\StructType\HotelUpsellOffer $hotelUpsellOffer
     */
    public function __construct(?\Travelport\Util\StructType\HotelUpsellQualify $hotelUpsellQualify = null, ?\Travelport\Util\StructType\HotelUpsellOffer $hotelUpsellOffer = null)
    {
        $this
            ->setHotelUpsellQualify($hotelUpsellQualify)
            ->setHotelUpsellOffer($hotelUpsellOffer);
    }
    /**
     * Get HotelUpsellQualify value
     * @return \Travelport\Util\StructType\HotelUpsellQualify|null
     */
    public function getHotelUpsellQualify(): ?\Travelport\Util\StructType\HotelUpsellQualify
    {
        return $this->HotelUpsellQualify;
    }
    /**
     * Set HotelUpsellQualify value
     * @param \Travelport\Util\StructType\HotelUpsellQualify $hotelUpsellQualify
     * @return \Travelport\Util\StructType\HotelUpsellRule
     */
    public function setHotelUpsellQualify(?\Travelport\Util\StructType\HotelUpsellQualify $hotelUpsellQualify = null): self
    {
        $this->HotelUpsellQualify = $hotelUpsellQualify;
        
        return $this;
    }
    /**
     * Get HotelUpsellOffer value
     * @return \Travelport\Util\StructType\HotelUpsellOffer|null
     */
    public function getHotelUpsellOffer(): ?\Travelport\Util\StructType\HotelUpsellOffer
    {
        return $this->HotelUpsellOffer;
    }
    /**
     * Set HotelUpsellOffer value
     * @param \Travelport\Util\StructType\HotelUpsellOffer $hotelUpsellOffer
     * @return \Travelport\Util\StructType\HotelUpsellRule
     */
    public function setHotelUpsellOffer(?\Travelport\Util\StructType\HotelUpsellOffer $hotelUpsellOffer = null): self
    {
        $this->HotelUpsellOffer = $hotelUpsellOffer;
        
        return $this;
    }
}
