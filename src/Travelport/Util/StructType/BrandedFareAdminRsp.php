<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandedFareAdminRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to BrandedFareAdminReq containing the FareFamily being added, deleted or updated.
 * @subpackage Structs
 */
class BrandedFareAdminRsp extends BaseRsp
{
    /**
     * The FareFamily
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FareFamily
     * @var \Travelport\Util\StructType\FareFamily[]
     */
    protected ?array $FareFamily = null;
    /**
     * Constructor method for BrandedFareAdminRsp
     * @uses BrandedFareAdminRsp::setFareFamily()
     * @param \Travelport\Util\StructType\FareFamily[] $fareFamily
     */
    public function __construct(?array $fareFamily = null)
    {
        $this
            ->setFareFamily($fareFamily);
    }
    /**
     * Get FareFamily value
     * @return \Travelport\Util\StructType\FareFamily[]
     */
    public function getFareFamily(): ?array
    {
        return $this->FareFamily;
    }
    /**
     * This method is responsible for validating the values passed to the setFareFamily method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareFamily method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareFamilyForArrayConstraintsFromSetFareFamily(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $brandedFareAdminRspFareFamilyItem) {
            // validation for constraint: itemType
            if (!$brandedFareAdminRspFareFamilyItem instanceof \Travelport\Util\StructType\FareFamily) {
                $invalidValues[] = is_object($brandedFareAdminRspFareFamilyItem) ? get_class($brandedFareAdminRspFareFamilyItem) : sprintf('%s(%s)', gettype($brandedFareAdminRspFareFamilyItem), var_export($brandedFareAdminRspFareFamilyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareFamily property can only contain items of type \Travelport\Util\StructType\FareFamily, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareFamily value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareFamily[] $fareFamily
     * @return \Travelport\Util\StructType\BrandedFareAdminRsp
     */
    public function setFareFamily(?array $fareFamily = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareFamilyArrayErrorMessage = self::validateFareFamilyForArrayConstraintsFromSetFareFamily($fareFamily))) {
            throw new InvalidArgumentException($fareFamilyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareFamily) && count($fareFamily) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareFamily)), __LINE__);
        }
        $this->FareFamily = $fareFamily;
        
        return $this;
    }
    /**
     * Add item to FareFamily value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareFamily $item
     * @return \Travelport\Util\StructType\BrandedFareAdminRsp
     */
    public function addToFareFamily(\Travelport\Util\StructType\FareFamily $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareFamily) {
            throw new InvalidArgumentException(sprintf('The FareFamily property can only contain items of type \Travelport\Util\StructType\FareFamily, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareFamily) && count($this->FareFamily) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareFamily)), __LINE__);
        }
        $this->FareFamily[] = $item;
        
        return $this;
    }
}
