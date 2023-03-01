<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleSearchId StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for Vehicle Media Links Search Id.
 * @subpackage Structs
 */
class VehicleSearchId extends AbstractStructBase
{
    /**
     * The MediaLinksSearchId
     * Meta information extracted from the WSDL
     * - documentation: The search id from VehicleSearchAvailabilityRsp to be used to retrieve the media links.
     * - use: required
     * @var string
     */
    public string $MediaLinksSearchId;
    /**
     * Constructor method for VehicleSearchId
     * @uses VehicleSearchId::setMediaLinksSearchId()
     * @param string $mediaLinksSearchId
     */
    public function __construct(string $mediaLinksSearchId)
    {
        $this
            ->setMediaLinksSearchId($mediaLinksSearchId);
    }
    /**
     * Get MediaLinksSearchId value
     * @return string
     */
    public function getMediaLinksSearchId(): string
    {
        return $this->MediaLinksSearchId;
    }
    /**
     * Set MediaLinksSearchId value
     * @param string $mediaLinksSearchId
     * @return \Travelport\UniversalRecord\StructType\VehicleSearchId
     */
    public function setMediaLinksSearchId(string $mediaLinksSearchId): self
    {
        $this->MediaLinksSearchId = $mediaLinksSearchId;
        
        return $this;
    }
}
