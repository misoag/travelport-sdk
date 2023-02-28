<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HostTokenList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of Host Tokens
 * @subpackage Structs
 */
class HostTokenList extends AbstractStructBase
{
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: HostToken
     * @var \Travelport\Hotel\StructType\HostToken[]
     */
    protected array $HostToken;
    /**
     * Constructor method for HostTokenList
     * @uses HostTokenList::setHostToken()
     * @param \Travelport\Hotel\StructType\HostToken[] $hostToken
     */
    public function __construct(array $hostToken)
    {
        $this
            ->setHostToken($hostToken);
    }
    /**
     * Get HostToken value
     * @return \Travelport\Hotel\StructType\HostToken[]
     */
    public function getHostToken(): array
    {
        return $this->HostToken;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHostToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHostToken method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHostTokenForArrayConstraintFromSetHostToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hostTokenListHostTokenItem) {
            // validation for constraint: itemType
            if (!$hostTokenListHostTokenItem instanceof \Travelport\Hotel\StructType\HostToken) {
                $invalidValues[] = is_object($hostTokenListHostTokenItem) ? get_class($hostTokenListHostTokenItem) : sprintf('%s(%s)', gettype($hostTokenListHostTokenItem), var_export($hostTokenListHostTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HostToken property can only contain items of type \Travelport\Hotel\StructType\HostToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HostToken[] $hostToken
     * @return \Travelport\Hotel\StructType\HostTokenList
     */
    public function setHostToken(array $hostToken): self
    {
        // validation for constraint: array
        if ('' !== ($hostTokenArrayErrorMessage = self::validateHostTokenForArrayConstraintFromSetHostToken($hostToken))) {
            throw new InvalidArgumentException($hostTokenArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hostToken) && count($hostToken) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hostToken)), __LINE__);
        }
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HostToken $item
     * @return \Travelport\Hotel\StructType\HostTokenList
     */
    public function addToHostToken(\Travelport\Hotel\StructType\HostToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HostToken) {
            throw new InvalidArgumentException(sprintf('The HostToken property can only contain items of type \Travelport\Hotel\StructType\HostToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HostToken) && count($this->HostToken) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HostToken)), __LINE__);
        }
        $this->HostToken[] = $item;
        
        return $this;
    }
}
