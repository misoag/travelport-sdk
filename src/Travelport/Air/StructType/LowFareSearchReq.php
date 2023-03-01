<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LowFareSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: 1G,1V,1P,ACH. | Low Fare Search request.
 * @subpackage Structs
 */
class LowFareSearchReq extends BaseLowFareSearchReq
{
    /**
     * The PolicyReference
     * Meta information extracted from the WSDL
     * - documentation: This attribute will be used to pass in a value on the request which would be used to link to a ‘Policy Group’ in a policy engine external to UAPI. | Type for PolicyReference attribute.
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PolicyReference = null;
    /**
     * Constructor method for LowFareSearchReq
     * @uses LowFareSearchReq::setPolicyReference()
     * @param string $policyReference
     */
    public function __construct(?string $policyReference = null)
    {
        $this
            ->setPolicyReference($policyReference);
    }
    /**
     * Get PolicyReference value
     * @return string|null
     */
    public function getPolicyReference(): ?string
    {
        return $this->PolicyReference;
    }
    /**
     * Set PolicyReference value
     * @param string $policyReference
     * @return \Travelport\Air\StructType\LowFareSearchReq
     */
    public function setPolicyReference(?string $policyReference = null): self
    {
        $this->PolicyReference = $policyReference;
        
        return $this;
    }
}
