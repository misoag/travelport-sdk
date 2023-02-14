<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardRestriction StructType
 * @subpackage Structs
 */
class CardRestriction extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: 2 letter Credit/Debit Card merchant type
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 2
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Card merchant description
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The RequiredField
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RequiredField
     * @var \StructType\RequiredField[]
     */
    protected ?array $RequiredField = null;
    /**
     * Constructor method for CardRestriction
     * @uses CardRestriction::setCode()
     * @uses CardRestriction::setName()
     * @uses CardRestriction::setRequiredField()
     * @param string $code
     * @param string $name
     * @param \StructType\RequiredField[] $requiredField
     */
    public function __construct(string $code, string $name, ?array $requiredField = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setRequiredField($requiredField);
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
     * @return \StructType\CardRestriction
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($code) && mb_strlen((string) $code) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $code)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($code) && mb_strlen((string) $code) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\CardRestriction
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get RequiredField value
     * @return \StructType\RequiredField[]
     */
    public function getRequiredField(): ?array
    {
        return $this->RequiredField;
    }
    /**
     * This method is responsible for validating the values passed to the setRequiredField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequiredField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequiredFieldForArrayConstraintsFromSetRequiredField(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cardRestrictionRequiredFieldItem) {
            // validation for constraint: itemType
            if (!$cardRestrictionRequiredFieldItem instanceof \StructType\RequiredField) {
                $invalidValues[] = is_object($cardRestrictionRequiredFieldItem) ? get_class($cardRestrictionRequiredFieldItem) : sprintf('%s(%s)', gettype($cardRestrictionRequiredFieldItem), var_export($cardRestrictionRequiredFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RequiredField property can only contain items of type \StructType\RequiredField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RequiredField value
     * @throws InvalidArgumentException
     * @param \StructType\RequiredField[] $requiredField
     * @return \StructType\CardRestriction
     */
    public function setRequiredField(?array $requiredField = null): self
    {
        // validation for constraint: array
        if ('' !== ($requiredFieldArrayErrorMessage = self::validateRequiredFieldForArrayConstraintsFromSetRequiredField($requiredField))) {
            throw new InvalidArgumentException($requiredFieldArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($requiredField) && count($requiredField) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($requiredField)), __LINE__);
        }
        $this->RequiredField = $requiredField;
        
        return $this;
    }
    /**
     * Add item to RequiredField value
     * @throws InvalidArgumentException
     * @param \StructType\RequiredField $item
     * @return \StructType\CardRestriction
     */
    public function addToRequiredField(\StructType\RequiredField $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RequiredField) {
            throw new InvalidArgumentException(sprintf('The RequiredField property can only contain items of type \StructType\RequiredField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RequiredField) && count($this->RequiredField) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RequiredField)), __LINE__);
        }
        $this->RequiredField[] = $item;
        
        return $this;
    }
}
