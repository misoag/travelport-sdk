<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpsellSearchCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Search Element for Effective and Expiration dates
 * @subpackage Structs
 */
class UpsellSearchCriteria extends AbstractStructBase
{
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - ref: EffectiveDate
     * @var \Travelport\Util\StructType\EffectiveDate|null
     */
    protected ?\Travelport\Util\StructType\EffectiveDate $EffectiveDate = null;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - ref: ExpirationDate
     * @var \Travelport\Util\StructType\ExpirationDate|null
     */
    protected ?\Travelport\Util\StructType\ExpirationDate $ExpirationDate = null;
    /**
     * Constructor method for UpsellSearchCriteria
     * @uses UpsellSearchCriteria::setEffectiveDate()
     * @uses UpsellSearchCriteria::setExpirationDate()
     * @param \Travelport\Util\StructType\EffectiveDate $effectiveDate
     * @param \Travelport\Util\StructType\ExpirationDate $expirationDate
     */
    public function __construct(?\Travelport\Util\StructType\EffectiveDate $effectiveDate = null, ?\Travelport\Util\StructType\ExpirationDate $expirationDate = null)
    {
        $this
            ->setEffectiveDate($effectiveDate)
            ->setExpirationDate($expirationDate);
    }
    /**
     * Get EffectiveDate value
     * @return \Travelport\Util\StructType\EffectiveDate|null
     */
    public function getEffectiveDate(): ?\Travelport\Util\StructType\EffectiveDate
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param \Travelport\Util\StructType\EffectiveDate $effectiveDate
     * @return \Travelport\Util\StructType\UpsellSearchCriteria
     */
    public function setEffectiveDate(?\Travelport\Util\StructType\EffectiveDate $effectiveDate = null): self
    {
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return \Travelport\Util\StructType\ExpirationDate|null
     */
    public function getExpirationDate(): ?\Travelport\Util\StructType\ExpirationDate
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param \Travelport\Util\StructType\ExpirationDate $expirationDate
     * @return \Travelport\Util\StructType\UpsellSearchCriteria
     */
    public function setExpirationDate(?\Travelport\Util\StructType\ExpirationDate $expirationDate = null): self
    {
        $this->ExpirationDate = $expirationDate;
        
        return $this;
    }
}
