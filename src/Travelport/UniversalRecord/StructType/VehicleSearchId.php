<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $MediaLinksSearchId;
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
        // validation for constraint: string
        if (!is_null($mediaLinksSearchId) && !is_string($mediaLinksSearchId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaLinksSearchId, true), gettype($mediaLinksSearchId)), __LINE__);
        }
        $this->MediaLinksSearchId = $mediaLinksSearchId;
        
        return $this;
    }
}
