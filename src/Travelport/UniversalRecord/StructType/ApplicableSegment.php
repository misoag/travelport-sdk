<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\ResponseMessage|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ResponseMessage $ResponseMessage = null;
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
    protected ?string $OptionalServiceRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Applicable air segment key | Reference type
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * Constructor method for ApplicableSegment
     * @uses ApplicableSegment::setResponseMessage()
     * @uses ApplicableSegment::setOptionalServiceRef()
     * @uses ApplicableSegment::setKey()
     * @param \Travelport\UniversalRecord\StructType\ResponseMessage $responseMessage
     * @param string $optionalServiceRef
     * @param string $key
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\ResponseMessage $responseMessage = null, ?string $optionalServiceRef = null, ?string $key = null)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setOptionalServiceRef($optionalServiceRef)
            ->setKey($key);
    }
    /**
     * Get ResponseMessage value
     * @return \Travelport\UniversalRecord\StructType\ResponseMessage|null
     */
    public function getResponseMessage(): ?\Travelport\UniversalRecord\StructType\ResponseMessage
    {
        return isset($this->ResponseMessage) ? $this->ResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateResponseMessageForChoiceConstraintsFromSetResponseMessage($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'OptionalServiceRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: ResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ResponseMessage $responseMessage
     * @return \Travelport\UniversalRecord\StructType\ApplicableSegment
     */
    public function setResponseMessage(?\Travelport\UniversalRecord\StructType\ResponseMessage $responseMessage = null): self
    {
        // validation for constraint: choice(ResponseMessage, OptionalServiceRef)
        if ('' !== ($responseMessageChoiceErrorMessage = self::validateResponseMessageForChoiceConstraintsFromSetResponseMessage($responseMessage))) {
            throw new InvalidArgumentException($responseMessageChoiceErrorMessage, __LINE__);
        }
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
        return isset($this->OptionalServiceRef) ? $this->OptionalServiceRef : null;
    }
    /**
     * This method is responsible for validating the value passed to the setOptionalServiceRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionalServiceRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOptionalServiceRefForChoiceConstraintsFromSetOptionalServiceRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property OptionalServiceRef can\'t be set as the property %s is already set. Only one property must be set among these properties: OptionalServiceRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set OptionalServiceRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $optionalServiceRef
     * @return \Travelport\UniversalRecord\StructType\ApplicableSegment
     */
    public function setOptionalServiceRef(?string $optionalServiceRef = null): self
    {
        // validation for constraint: string
        if (!is_null($optionalServiceRef) && !is_string($optionalServiceRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionalServiceRef, true), gettype($optionalServiceRef)), __LINE__);
        }
        // validation for constraint: choice(ResponseMessage, OptionalServiceRef)
        if ('' !== ($optionalServiceRefChoiceErrorMessage = self::validateOptionalServiceRefForChoiceConstraintsFromSetOptionalServiceRef($optionalServiceRef))) {
            throw new InvalidArgumentException($optionalServiceRefChoiceErrorMessage, __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\ApplicableSegment
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
}
