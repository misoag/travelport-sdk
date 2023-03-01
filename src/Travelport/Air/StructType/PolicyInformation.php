<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Policy Information required for File Finishing
 * @subpackage Structs
 */
class PolicyInformation extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Policy Type - Air, Hotel, Car, Rail, Ticketing
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The ReasonCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ReasonCode|null
     */
    public ?\Travelport\Air\StructType\ReasonCode $ReasonCode = null;
    /**
     * The Name
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The OutOfPolicy
     * Meta information extracted from the WSDL
     * - documentation: In Policy / Out of Policy Indicator
     * @var bool|null
     */
    public ?bool $OutOfPolicy = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SegmentRef = null;
    /**
     * Constructor method for PolicyInformation
     * @uses PolicyInformation::setType()
     * @uses PolicyInformation::setReasonCode()
     * @uses PolicyInformation::setName()
     * @uses PolicyInformation::setOutOfPolicy()
     * @uses PolicyInformation::setSegmentRef()
     * @param string $type
     * @param \Travelport\Air\StructType\ReasonCode $reasonCode
     * @param string $name
     * @param bool $outOfPolicy
     * @param string $segmentRef
     */
    public function __construct(string $type, ?\Travelport\Air\StructType\ReasonCode $reasonCode = null, ?string $name = null, ?bool $outOfPolicy = null, ?string $segmentRef = null)
    {
        $this
            ->setType($type)
            ->setReasonCode($reasonCode)
            ->setName($name)
            ->setOutOfPolicy($outOfPolicy)
            ->setSegmentRef($segmentRef);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Air\StructType\PolicyInformation
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get ReasonCode value
     * @return \Travelport\Air\StructType\ReasonCode|null
     */
    public function getReasonCode(): ?\Travelport\Air\StructType\ReasonCode
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param \Travelport\Air\StructType\ReasonCode $reasonCode
     * @return \Travelport\Air\StructType\PolicyInformation
     */
    public function setReasonCode(?\Travelport\Air\StructType\ReasonCode $reasonCode = null): self
    {
        $this->ReasonCode = $reasonCode;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Air\StructType\PolicyInformation
     */
    public function setName(?string $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get OutOfPolicy value
     * @return bool|null
     */
    public function getOutOfPolicy(): ?bool
    {
        return $this->OutOfPolicy;
    }
    /**
     * Set OutOfPolicy value
     * @param bool $outOfPolicy
     * @return \Travelport\Air\StructType\PolicyInformation
     */
    public function setOutOfPolicy(?bool $outOfPolicy = null): self
    {
        $this->OutOfPolicy = $outOfPolicy;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\Air\StructType\PolicyInformation
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
}
