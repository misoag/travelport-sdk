<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Leg StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about the journey Leg
 * @subpackage Structs
 */
class Leg extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - documentation: Returns the Group Number for the leg.
     * - use: required
     * @var int
     */
    protected int $Group;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Returns the origin airport or city code for the leg. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Returns the destination airport or city code for the leg. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Destination;
    /**
     * The LegDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: LegDetail
     * @var \Travelport\Util\StructType\LegDetail[]
     */
    protected ?array $LegDetail = null;
    /**
     * Constructor method for Leg
     * @uses Leg::setKey()
     * @uses Leg::setGroup()
     * @uses Leg::setOrigin()
     * @uses Leg::setDestination()
     * @uses Leg::setLegDetail()
     * @param string $key
     * @param int $group
     * @param string $origin
     * @param string $destination
     * @param \Travelport\Util\StructType\LegDetail[] $legDetail
     */
    public function __construct(string $key, int $group, string $origin, string $destination, ?array $legDetail = null)
    {
        $this
            ->setKey($key)
            ->setGroup($group)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setLegDetail($legDetail);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Util\StructType\Leg
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Group value
     * @return int
     */
    public function getGroup(): int
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param int $group
     * @return \Travelport\Util\StructType\Leg
     */
    public function setGroup(int $group): self
    {
        // validation for constraint: int
        if (!is_null($group) && !(is_int($group) || ctype_digit($group))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->Group = $group;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Util\StructType\Leg
     */
    public function setOrigin(string $origin): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($origin) && mb_strlen((string) $origin) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $origin)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($origin) && mb_strlen((string) $origin) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Util\StructType\Leg
     */
    public function setDestination(string $destination): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($destination) && mb_strlen((string) $destination) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $destination)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($destination) && mb_strlen((string) $destination) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get LegDetail value
     * @return \Travelport\Util\StructType\LegDetail[]
     */
    public function getLegDetail(): ?array
    {
        return $this->LegDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLegDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLegDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLegDetailForArrayConstraintFromSetLegDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $legLegDetailItem) {
            // validation for constraint: itemType
            if (!$legLegDetailItem instanceof \Travelport\Util\StructType\LegDetail) {
                $invalidValues[] = is_object($legLegDetailItem) ? get_class($legLegDetailItem) : sprintf('%s(%s)', gettype($legLegDetailItem), var_export($legLegDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LegDetail property can only contain items of type \Travelport\Util\StructType\LegDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LegDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LegDetail[] $legDetail
     * @return \Travelport\Util\StructType\Leg
     */
    public function setLegDetail(?array $legDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($legDetailArrayErrorMessage = self::validateLegDetailForArrayConstraintFromSetLegDetail($legDetail))) {
            throw new InvalidArgumentException($legDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($legDetail) && count($legDetail) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($legDetail)), __LINE__);
        }
        $this->LegDetail = $legDetail;
        
        return $this;
    }
    /**
     * Add item to LegDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LegDetail $item
     * @return \Travelport\Util\StructType\Leg
     */
    public function addToLegDetail(\Travelport\Util\StructType\LegDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\LegDetail) {
            throw new InvalidArgumentException(sprintf('The LegDetail property can only contain items of type \Travelport\Util\StructType\LegDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LegDetail) && count($this->LegDetail) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LegDetail)), __LINE__);
        }
        $this->LegDetail[] = $item;
        
        return $this;
    }
}
