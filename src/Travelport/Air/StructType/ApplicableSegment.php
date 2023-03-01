<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplicableSegment StructType
 * Meta information extracted from the WSDL
 * - documentation: Applicable air segment. | Applicable air segment associated with this brand.
 * - type: typeApplicableSegment
 * @subpackage Structs
 */
class ApplicableSegment extends AbstractStructBase
{
    /**
     * The ResponseMessage
     * Meta information extracted from the WSDL
     * - choice: ResponseMessage | OptionalServiceRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: common:ResponseMessage
     * @var \Travelport\Air\StructType\ResponseMessage|null
     */
    public ?\Travelport\Air\StructType\ResponseMessage $ResponseMessage = null;
    /**
     * The OptionalServiceRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - choice: ResponseMessage | OptionalServiceRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: OptionalServiceRef
     * @var string|null
     */
    public ?string $OptionalServiceRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Applicable air segment key | Reference type
     * - base: xs:string
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for ApplicableSegment
     * @uses ApplicableSegment::setResponseMessage()
     * @uses ApplicableSegment::setOptionalServiceRef()
     * @uses ApplicableSegment::setKey()
     * @param \Travelport\Air\StructType\ResponseMessage $responseMessage
     * @param string $optionalServiceRef
     * @param string $key
     */
    public function __construct(?\Travelport\Air\StructType\ResponseMessage $responseMessage = null, ?string $optionalServiceRef = null, ?string $key = null)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setOptionalServiceRef($optionalServiceRef)
            ->setKey($key);
    }
    /**
     * Get ResponseMessage value
     * @return \Travelport\Air\StructType\ResponseMessage|null
     */
    public function getResponseMessage(): ?\Travelport\Air\StructType\ResponseMessage
    {
        return $this->ResponseMessage ?? null;
    }
    /**
     * Set ResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\ResponseMessage $responseMessage
     * @return \Travelport\Air\StructType\ApplicableSegment
     */
    public function setResponseMessage(?\Travelport\Air\StructType\ResponseMessage $responseMessage = null): self
    {
        if (is_null($responseMessage) || (is_array($responseMessage) && empty($responseMessage))) {
            unset($this->ResponseMessage);
        } else {
            $this->ResponseMessage = $responseMessage;
        }
        
        return $this;
    }
    /**
     * Get OptionalServiceRef value
     * @return string|null
     */
    public function getOptionalServiceRef(): ?string
    {
        return $this->OptionalServiceRef ?? null;
    }
    /**
     * Set OptionalServiceRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $optionalServiceRef
     * @return \Travelport\Air\StructType\ApplicableSegment
     */
    public function setOptionalServiceRef(?string $optionalServiceRef = null): self
    {
        if (is_null($optionalServiceRef) || (is_array($optionalServiceRef) && empty($optionalServiceRef))) {
            unset($this->OptionalServiceRef);
        } else {
            $this->OptionalServiceRef = $optionalServiceRef;
        }
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\ApplicableSegment
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
