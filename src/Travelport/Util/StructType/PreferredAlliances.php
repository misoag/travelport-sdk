<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredAlliances StructType
 * @subpackage Structs
 */
class PreferredAlliances extends AbstractStructBase
{
    /**
     * The Alliance
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: Alliance
     * @var \Travelport\Util\StructType\Alliance[]
     */
    protected ?array $Alliance = null;
    /**
     * Constructor method for PreferredAlliances
     * @uses PreferredAlliances::setAlliance()
     * @param \Travelport\Util\StructType\Alliance[] $alliance
     */
    public function __construct(?array $alliance = null)
    {
        $this
            ->setAlliance($alliance);
    }
    /**
     * Get Alliance value
     * @return \Travelport\Util\StructType\Alliance[]
     */
    public function getAlliance(): ?array
    {
        return $this->Alliance;
    }
    /**
     * This method is responsible for validating the values passed to the setAlliance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlliance method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAllianceForArrayConstraintsFromSetAlliance(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $preferredAlliancesAllianceItem) {
            // validation for constraint: itemType
            if (!$preferredAlliancesAllianceItem instanceof \Travelport\Util\StructType\Alliance) {
                $invalidValues[] = is_object($preferredAlliancesAllianceItem) ? get_class($preferredAlliancesAllianceItem) : sprintf('%s(%s)', gettype($preferredAlliancesAllianceItem), var_export($preferredAlliancesAllianceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Alliance property can only contain items of type \Travelport\Util\StructType\Alliance, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Alliance value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Alliance[] $alliance
     * @return \Travelport\Util\StructType\PreferredAlliances
     */
    public function setAlliance(?array $alliance = null): self
    {
        // validation for constraint: array
        if ('' !== ($allianceArrayErrorMessage = self::validateAllianceForArrayConstraintsFromSetAlliance($alliance))) {
            throw new InvalidArgumentException($allianceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($alliance) && count($alliance) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($alliance)), __LINE__);
        }
        $this->Alliance = $alliance;
        
        return $this;
    }
    /**
     * Add item to Alliance value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Alliance $item
     * @return \Travelport\Util\StructType\PreferredAlliances
     */
    public function addToAlliance(\Travelport\Util\StructType\Alliance $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Alliance) {
            throw new InvalidArgumentException(sprintf('The Alliance property can only contain items of type \Travelport\Util\StructType\Alliance, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Alliance) && count($this->Alliance) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Alliance)), __LINE__);
        }
        $this->Alliance[] = $item;
        
        return $this;
    }
}