<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Email StructType
 * Meta information extracted from the WSDL
 * - documentation: Tagging provider reservation info with Email. | Container for an email address with a type specifier (max 128 chars)
 * @subpackage Structs
 */
class Email extends AbstractStructBase
{
    /**
     * The EmailID
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $EmailID;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[]
     */
    protected ?array $ProviderReservationInfoRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: An identifier that labels this email address (Personal, Business, Agency, etc)
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: Mail comment is used to include one line of freeform information.
     * - base: xs:string
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for Email
     * @uses Email::setEmailID()
     * @uses Email::setProviderReservationInfoRef()
     * @uses Email::setKey()
     * @uses Email::setType()
     * @uses Email::setComment()
     * @uses Email::setElStat()
     * @uses Email::setKeyOverride()
     * @param string $emailID
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param string $key
     * @param string $type
     * @param string $comment
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $emailID, ?array $providerReservationInfoRef = null, ?string $key = null, ?string $type = null, ?string $comment = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setEmailID($emailID)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setKey($key)
            ->setType($type)
            ->setComment($comment)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get EmailID value
     * @return string
     */
    public function getEmailID(): string
    {
        return $this->EmailID;
    }
    /**
     * Set EmailID value
     * @param string $emailID
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setEmailID(string $emailID): self
    {
        // validation for constraint: string
        if (!is_null($emailID) && !is_string($emailID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailID, true), gettype($emailID)), __LINE__);
        }
        $this->EmailID = $emailID;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setProviderReservationInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderReservationInfoRefForArrayConstraintsFromSetProviderReservationInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $emailProviderReservationInfoRefItem) {
            // validation for constraint: itemType
            if (!$emailProviderReservationInfoRefItem instanceof \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef) {
                $invalidValues[] = is_object($emailProviderReservationInfoRefItem) ? get_class($emailProviderReservationInfoRefItem) : sprintf('%s(%s)', gettype($emailProviderReservationInfoRefItem), var_export($emailProviderReservationInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerReservationInfoRefArrayErrorMessage = self::validateProviderReservationInfoRefForArrayConstraintsFromSetProviderReservationInfoRef($providerReservationInfoRef))) {
            throw new InvalidArgumentException($providerReservationInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($providerReservationInfoRef) && count($providerReservationInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function addToProviderReservationInfoRef(\Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef) {
            throw new InvalidArgumentException(sprintf('The ProviderReservationInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProviderReservationInfoRef) && count($this->ProviderReservationInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProviderReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\Email
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
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($type) && mb_strlen((string) $type) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $type)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($type) && mb_strlen((string) $type) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($comment) && mb_strlen((string) $comment) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $comment)), __LINE__);
        }
        $this->Comment = $comment;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\UniversalRecord\StructType\Email
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
