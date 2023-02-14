<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUpsellDelete StructType
 * Meta information extracted from the WSDL
 * - documentation: Delete command for deleting HotelUpsellQualify,HotelUpsellOffer using there persisted keys.
 * @subpackage Structs
 */
class HotelUpsellDelete extends AbstractStructBase
{
    /**
     * The QualifyRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $QualifyRef = null;
    /**
     * The OfferRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $OfferRef = null;
    /**
     * Constructor method for HotelUpsellDelete
     * @uses HotelUpsellDelete::setQualifyRef()
     * @uses HotelUpsellDelete::setOfferRef()
     * @param string $qualifyRef
     * @param string $offerRef
     */
    public function __construct(?string $qualifyRef = null, ?string $offerRef = null)
    {
        $this
            ->setQualifyRef($qualifyRef)
            ->setOfferRef($offerRef);
    }
    /**
     * Get QualifyRef value
     * @return string|null
     */
    public function getQualifyRef(): ?string
    {
        return $this->QualifyRef;
    }
    /**
     * Set QualifyRef value
     * @param string $qualifyRef
     * @return \Travelport\Util\StructType\HotelUpsellDelete
     */
    public function setQualifyRef(?string $qualifyRef = null): self
    {
        // validation for constraint: string
        if (!is_null($qualifyRef) && !is_string($qualifyRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qualifyRef, true), gettype($qualifyRef)), __LINE__);
        }
        $this->QualifyRef = $qualifyRef;
        
        return $this;
    }
    /**
     * Get OfferRef value
     * @return string|null
     */
    public function getOfferRef(): ?string
    {
        return $this->OfferRef;
    }
    /**
     * Set OfferRef value
     * @param string $offerRef
     * @return \Travelport\Util\StructType\HotelUpsellDelete
     */
    public function setOfferRef(?string $offerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($offerRef) && !is_string($offerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerRef, true), gettype($offerRef)), __LINE__);
        }
        $this->OfferRef = $offerRef;
        
        return $this;
    }
}
