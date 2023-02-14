<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRemark StructType
 * @subpackage Structs
 */
class FareRemark extends AbstractStructBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Text = null;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: URL
     * @var \Travelport\Util\StructType\URL[]
     */
    protected ?array $URL = null;
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
     * The Name
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for FareRemark
     * @uses FareRemark::setText()
     * @uses FareRemark::setURL()
     * @uses FareRemark::setKey()
     * @uses FareRemark::setName()
     * @param string[] $text
     * @param \Travelport\Util\StructType\URL[] $uRL
     * @param string $key
     * @param string $name
     */
    public function __construct(?array $text = null, ?array $uRL = null, ?string $key = null, ?string $name = null)
    {
        $this
            ->setText($text)
            ->setURL($uRL)
            ->setKey($key)
            ->setName($name);
    }
    /**
     * Get Text value
     * @return string[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * This method is responsible for validating the values passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForArrayConstraintsFromSetText(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRemarkTextItem) {
            // validation for constraint: itemType
            if (!is_string($fareRemarkTextItem)) {
                $invalidValues[] = is_object($fareRemarkTextItem) ? get_class($fareRemarkTextItem) : sprintf('%s(%s)', gettype($fareRemarkTextItem), var_export($fareRemarkTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Text value
     * @throws InvalidArgumentException
     * @param string[] $text
     * @return \Travelport\Util\StructType\FareRemark
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintsFromSetText($text))) {
            throw new InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($text) && count($text) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\FareRemark
     */
    public function addToText(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Text property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Text) && count($this->Text) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Text)), __LINE__);
        }
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get URL value
     * @return \Travelport\Util\StructType\URL[]
     */
    public function getURL(): ?array
    {
        return $this->URL;
    }
    /**
     * This method is responsible for validating the values passed to the setURL method
     * This method is willingly generated in order to preserve the one-line inline validation within the setURL method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateURLForArrayConstraintsFromSetURL(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRemarkURLItem) {
            // validation for constraint: itemType
            if (!$fareRemarkURLItem instanceof \Travelport\Util\StructType\URL) {
                $invalidValues[] = is_object($fareRemarkURLItem) ? get_class($fareRemarkURLItem) : sprintf('%s(%s)', gettype($fareRemarkURLItem), var_export($fareRemarkURLItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The URL property can only contain items of type \Travelport\Util\StructType\URL, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set URL value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\URL[] $uRL
     * @return \Travelport\Util\StructType\FareRemark
     */
    public function setURL(?array $uRL = null): self
    {
        // validation for constraint: array
        if ('' !== ($uRLArrayErrorMessage = self::validateURLForArrayConstraintsFromSetURL($uRL))) {
            throw new InvalidArgumentException($uRLArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($uRL) && count($uRL) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Add item to URL value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\URL $item
     * @return \Travelport\Util\StructType\FareRemark
     */
    public function addToURL(\Travelport\Util\StructType\URL $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\URL) {
            throw new InvalidArgumentException(sprintf('The URL property can only contain items of type \Travelport\Util\StructType\URL, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->URL) && count($this->URL) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->URL)), __LINE__);
        }
        $this->URL[] = $item;
        
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
     * @return \Travelport\Util\StructType\FareRemark
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
     * @return \Travelport\Util\StructType\FareRemark
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
}
