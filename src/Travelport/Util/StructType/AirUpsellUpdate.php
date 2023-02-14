<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirUpsellUpdate StructType
 * @subpackage Structs
 */
class AirUpsellUpdate extends AbstractStructBase
{
    /**
     * The AirUpsellQualify
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirUpsellQualify
     * @var \Travelport\Util\StructType\AirUpsellQualify|null
     */
    protected ?\Travelport\Util\StructType\AirUpsellQualify $AirUpsellQualify = null;
    /**
     * The AirUpsellOffer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirUpsellOffer
     * @var \Travelport\Util\StructType\AirUpsellOffer|null
     */
    protected ?\Travelport\Util\StructType\AirUpsellOffer $AirUpsellOffer = null;
    /**
     * Constructor method for AirUpsellUpdate
     * @uses AirUpsellUpdate::setAirUpsellQualify()
     * @uses AirUpsellUpdate::setAirUpsellOffer()
     * @param \Travelport\Util\StructType\AirUpsellQualify $airUpsellQualify
     * @param \Travelport\Util\StructType\AirUpsellOffer $airUpsellOffer
     */
    public function __construct(?\Travelport\Util\StructType\AirUpsellQualify $airUpsellQualify = null, ?\Travelport\Util\StructType\AirUpsellOffer $airUpsellOffer = null)
    {
        $this
            ->setAirUpsellQualify($airUpsellQualify)
            ->setAirUpsellOffer($airUpsellOffer);
    }
    /**
     * Get AirUpsellQualify value
     * @return \Travelport\Util\StructType\AirUpsellQualify|null
     */
    public function getAirUpsellQualify(): ?\Travelport\Util\StructType\AirUpsellQualify
    {
        return $this->AirUpsellQualify;
    }
    /**
     * Set AirUpsellQualify value
     * @param \Travelport\Util\StructType\AirUpsellQualify $airUpsellQualify
     * @return \Travelport\Util\StructType\AirUpsellUpdate
     */
    public function setAirUpsellQualify(?\Travelport\Util\StructType\AirUpsellQualify $airUpsellQualify = null): self
    {
        $this->AirUpsellQualify = $airUpsellQualify;
        
        return $this;
    }
    /**
     * Get AirUpsellOffer value
     * @return \Travelport\Util\StructType\AirUpsellOffer|null
     */
    public function getAirUpsellOffer(): ?\Travelport\Util\StructType\AirUpsellOffer
    {
        return $this->AirUpsellOffer;
    }
    /**
     * Set AirUpsellOffer value
     * @param \Travelport\Util\StructType\AirUpsellOffer $airUpsellOffer
     * @return \Travelport\Util\StructType\AirUpsellUpdate
     */
    public function setAirUpsellOffer(?\Travelport\Util\StructType\AirUpsellOffer $airUpsellOffer = null): self
    {
        $this->AirUpsellOffer = $airUpsellOffer;
        
        return $this;
    }
}
