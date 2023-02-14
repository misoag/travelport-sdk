<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SessionContext StructType
 * Meta information extracted from the WSDL
 * - documentation: A XML payload that contains either the Session Context Token or the Session Properties
 * @subpackage Structs
 */
class SessionContext extends AbstractStructBase
{
    /**
     * The SessTok
     * Meta information extracted from the WSDL
     * - choice: SessTok | SessProp
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\UniversalRecord\StructType\SessTok|null
     */
    protected ?\Travelport\UniversalRecord\StructType\SessTok $SessTok = null;
    /**
     * The SessProp
     * Meta information extracted from the WSDL
     * - choice: SessTok | SessProp
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\SessProp[]
     */
    protected ?array $SessProp = null;
    /**
     * Constructor method for SessionContext
     * @uses SessionContext::setSessTok()
     * @uses SessionContext::setSessProp()
     * @param \Travelport\UniversalRecord\StructType\SessTok $sessTok
     * @param \Travelport\UniversalRecord\StructType\SessProp[] $sessProp
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\SessTok $sessTok = null, ?array $sessProp = null)
    {
        $this
            ->setSessTok($sessTok)
            ->setSessProp($sessProp);
    }
    /**
     * Get SessTok value
     * @return \Travelport\UniversalRecord\StructType\SessTok|null
     */
    public function getSessTok(): ?\Travelport\UniversalRecord\StructType\SessTok
    {
        return isset($this->SessTok) ? $this->SessTok : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSessTok method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSessTok method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSessTokForChoiceConstraintsFromSetSessTok($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SessProp',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SessTok can\'t be set as the property %s is already set. Only one property must be set among these properties: SessTok, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SessTok value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SessTok $sessTok
     * @return \Travelport\UniversalRecord\StructType\SessionContext
     */
    public function setSessTok(?\Travelport\UniversalRecord\StructType\SessTok $sessTok = null): self
    {
        // validation for constraint: choice(SessTok, SessProp)
        if ('' !== ($sessTokChoiceErrorMessage = self::validateSessTokForChoiceConstraintsFromSetSessTok($sessTok))) {
            throw new InvalidArgumentException($sessTokChoiceErrorMessage, __LINE__);
        }
        if (is_null($sessTok) || (is_array($sessTok) && empty($sessTok))) {
            unset($this->SessTok);
        } else {
            $this->SessTok = $sessTok;
        }
        
        return $this;
    }
    /**
     * Get SessProp value
     * @return \Travelport\UniversalRecord\StructType\SessProp[]
     */
    public function getSessProp(): ?array
    {
        return isset($this->SessProp) ? $this->SessProp : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSessProp method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSessProp method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSessPropForArrayConstraintsFromSetSessProp(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sessionContextSessPropItem) {
            // validation for constraint: itemType
            if (!$sessionContextSessPropItem instanceof \Travelport\UniversalRecord\StructType\SessProp) {
                $invalidValues[] = is_object($sessionContextSessPropItem) ? get_class($sessionContextSessPropItem) : sprintf('%s(%s)', gettype($sessionContextSessPropItem), var_export($sessionContextSessPropItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SessProp property can only contain items of type \Travelport\UniversalRecord\StructType\SessProp, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setSessProp method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSessProp method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSessPropForChoiceConstraintsFromSetSessProp($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SessTok',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SessProp can\'t be set as the property %s is already set. Only one property must be set among these properties: SessProp, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SessProp value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SessProp[] $sessProp
     * @return \Travelport\UniversalRecord\StructType\SessionContext
     */
    public function setSessProp(?array $sessProp = null): self
    {
        // validation for constraint: array
        if ('' !== ($sessPropArrayErrorMessage = self::validateSessPropForArrayConstraintsFromSetSessProp($sessProp))) {
            throw new InvalidArgumentException($sessPropArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(SessTok, SessProp)
        if ('' !== ($sessPropChoiceErrorMessage = self::validateSessPropForChoiceConstraintsFromSetSessProp($sessProp))) {
            throw new InvalidArgumentException($sessPropChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($sessProp) && count($sessProp) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($sessProp)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($sessProp) && count($sessProp) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($sessProp)), __LINE__);
        }
        if (is_null($sessProp) || (is_array($sessProp) && empty($sessProp))) {
            unset($this->SessProp);
        } else {
            $this->SessProp = $sessProp;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToSessProp method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSessProp method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToSessProp($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SessTok',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SessProp can\'t be set as the property %s is already set. Only one property must be set among these properties: SessProp, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to SessProp value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SessProp $item
     * @return \Travelport\UniversalRecord\StructType\SessionContext
     */
    public function addToSessProp(\Travelport\UniversalRecord\StructType\SessProp $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SessProp) {
            throw new InvalidArgumentException(sprintf('The SessProp property can only contain items of type \Travelport\UniversalRecord\StructType\SessProp, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(SessTok, SessProp)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToSessProp($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->SessProp) && count($this->SessProp) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->SessProp)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SessProp) && count($this->SessProp) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SessProp)), __LINE__);
        }
        $this->SessProp[] = $item;
        
        return $this;
    }
}
