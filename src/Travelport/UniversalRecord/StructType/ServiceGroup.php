<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceGroup StructType
 * Meta information extracted from the WSDL
 * - documentation: The Service Group of the Ancillary Service. Providers: 1G, 1V, 1P, ACH
 * @subpackage Structs
 */
class ServiceGroup extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The Service Group Code of the Ancillary Service. Providers: 1G, 1V, 1P, ACH
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * The ServiceSubGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 15
     * - minOccurs: 0
     * - ref: ServiceSubGroup
     * @var \Travelport\UniversalRecord\StructType\ServiceSubGroup[]
     */
    public ?array $ServiceSubGroup = null;
    /**
     * Constructor method for ServiceGroup
     * @uses ServiceGroup::setCode()
     * @uses ServiceGroup::setServiceSubGroup()
     * @param string $code
     * @param \Travelport\UniversalRecord\StructType\ServiceSubGroup[] $serviceSubGroup
     */
    public function __construct(string $code, ?array $serviceSubGroup = null)
    {
        $this
            ->setCode($code)
            ->setServiceSubGroup($serviceSubGroup);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\UniversalRecord\StructType\ServiceGroup
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get ServiceSubGroup value
     * @return \Travelport\UniversalRecord\StructType\ServiceSubGroup[]
     */
    public function getServiceSubGroup(): ?array
    {
        return $this->ServiceSubGroup;
    }
    /**
     * Set ServiceSubGroup value
     * @param \Travelport\UniversalRecord\StructType\ServiceSubGroup[] $serviceSubGroup
     * @return \Travelport\UniversalRecord\StructType\ServiceGroup
     */
    public function setServiceSubGroup(?array $serviceSubGroup = null): self
    {
        $this->ServiceSubGroup = $serviceSubGroup;
        
        return $this;
    }
    /**
     * Add item to ServiceSubGroup value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceSubGroup $item
     * @return \Travelport\UniversalRecord\StructType\ServiceGroup
     */
    public function addToServiceSubGroup(\Travelport\UniversalRecord\StructType\ServiceSubGroup $item): self
    {
        $this->ServiceSubGroup[] = $item;
        
        return $this;
    }
}
