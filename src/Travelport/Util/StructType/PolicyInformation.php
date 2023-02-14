<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Type;
    /**
     * The ReasonCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\ReasonCode|null
     */
    protected ?\Travelport\Util\StructType\ReasonCode $ReasonCode = null;
    /**
     * The Name
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The OutOfPolicy
     * Meta information extracted from the WSDL
     * - documentation: In Policy / Out of Policy Indicator
     * @var bool|null
     */
    protected ?bool $OutOfPolicy = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentRef = null;
    /**
     * Constructor method for PolicyInformation
     * @uses PolicyInformation::setType()
     * @uses PolicyInformation::setReasonCode()
     * @uses PolicyInformation::setName()
     * @uses PolicyInformation::setOutOfPolicy()
     * @uses PolicyInformation::setSegmentRef()
     * @param string $type
     * @param \Travelport\Util\StructType\ReasonCode $reasonCode
     * @param string $name
     * @param bool $outOfPolicy
     * @param string $segmentRef
     */
    public function __construct(string $type, ?\Travelport\Util\StructType\ReasonCode $reasonCode = null, ?string $name = null, ?bool $outOfPolicy = null, ?string $segmentRef = null)
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
     * @uses \Travelport\Util\EnumType\TypePolicy::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypePolicy::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\Util\StructType\PolicyInformation
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypePolicy::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypePolicy', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\Util\EnumType\TypePolicy::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get ReasonCode value
     * @return \Travelport\Util\StructType\ReasonCode|null
     */
    public function getReasonCode(): ?\Travelport\Util\StructType\ReasonCode
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param \Travelport\Util\StructType\ReasonCode $reasonCode
     * @return \Travelport\Util\StructType\PolicyInformation
     */
    public function setReasonCode(?\Travelport\Util\StructType\ReasonCode $reasonCode = null): self
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
     * @return \Travelport\Util\StructType\PolicyInformation
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PolicyInformation
     */
    public function setOutOfPolicy(?bool $outOfPolicy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($outOfPolicy) && !is_bool($outOfPolicy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($outOfPolicy, true), gettype($outOfPolicy)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PolicyInformation
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
}
