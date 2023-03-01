<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\ServiceSubGroup[]
     */
    public ?array $ServiceSubGroup = null;
    /**
     * Constructor method for ServiceGroup
     * @uses ServiceGroup::setCode()
     * @uses ServiceGroup::setServiceSubGroup()
     * @param string $code
     * @param \Travelport\Air\StructType\ServiceSubGroup[] $serviceSubGroup
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
     * @return \Travelport\Air\StructType\ServiceGroup
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get ServiceSubGroup value
     * @return \Travelport\Air\StructType\ServiceSubGroup[]
     */
    public function getServiceSubGroup(): ?array
    {
        return $this->ServiceSubGroup;
    }
    /**
     * Set ServiceSubGroup value
     * @param \Travelport\Air\StructType\ServiceSubGroup[] $serviceSubGroup
     * @return \Travelport\Air\StructType\ServiceGroup
     */
    public function setServiceSubGroup(?array $serviceSubGroup = null): self
    {
        $this->ServiceSubGroup = $serviceSubGroup;
        
        return $this;
    }
    /**
     * Add item to ServiceSubGroup value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ServiceSubGroup $item
     * @return \Travelport\Air\StructType\ServiceGroup
     */
    public function addToServiceSubGroup(\Travelport\Air\StructType\ServiceSubGroup $item): self
    {
        $this->ServiceSubGroup[] = $item;
        
        return $this;
    }
}
