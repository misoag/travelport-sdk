<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceDataSearchItem StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for a Reference Data search item that includes its type and how to search / identify the item either via code or value.
 * @subpackage Structs
 */
class ReferenceDataSearchItem extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Code uniquely identifying the reference data item (e.g. ORD for Airport item). | Alternate booking source code or number. | To be used to specify Promotional Code. | The 1-64 character string which uniquely identifies a Contract. |
     * The code associated to the fee application. The choices are: 1, 2, 3, 4, 5, K, F
     * - base: xs:string
     * - choice: Code | Name
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * - type: common:StringLength1to128 | StringLength1to8
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Code;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - choice: Code | Name
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for ReferenceDataSearchItem
     * @uses ReferenceDataSearchItem::setCode()
     * @uses ReferenceDataSearchItem::setType()
     * @uses ReferenceDataSearchItem::setName()
     * @param string $code
     * @param string $type
     * @param string $name
     */
    public function __construct(string $code, string $type, ?string $name = null)
    {
        $this
            ->setCode($code)
            ->setType($type)
            ->setName($name);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCode method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCodeForChoiceConstraintsFromSetCode($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Name',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Code can\'t be set as the property %s is already set. Only one property must be set among these properties: Code, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Code value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $code
     * @return \Travelport\Util\StructType\ReferenceDataSearchItem
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: choice(Code, Name)
        if ('' !== ($codeChoiceErrorMessage = self::validateCodeForChoiceConstraintsFromSetCode($code))) {
            throw new InvalidArgumentException($codeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($code) && mb_strlen((string) $code) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        
        return $this;
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
     * @return \Travelport\Util\StructType\ReferenceDataSearchItem
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * This method is responsible for validating the value passed to the setName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNameForChoiceConstraintsFromSetName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Code',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Name can\'t be set as the property %s is already set. Only one property must be set among these properties: Name, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Name value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @uses \Travelport\Util\EnumType\Name::valueIsValid()
     * @uses \Travelport\Util\EnumType\Name::getValidValues()
     * @throws InvalidArgumentException
     * @param string $name
     * @return \Travelport\Util\StructType\ReferenceDataSearchItem
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\Name::valueIsValid($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\Name', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \Travelport\Util\EnumType\Name::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(Code, Name)
        if ('' !== ($nameChoiceErrorMessage = self::validateNameForChoiceConstraintsFromSetName($name))) {
            throw new InvalidArgumentException($nameChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($name) && mb_strlen((string) $name) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
}
