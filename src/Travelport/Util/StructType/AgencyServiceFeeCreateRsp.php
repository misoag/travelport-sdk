<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyServiceFeeCreateRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Agency Service Fee issued through BSP or Airline Reporting Corporation (ARC)..
 * @subpackage Structs
 */
class AgencyServiceFeeCreateRsp extends BaseRsp
{
    /**
     * The ServiceFeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:ServiceFeeInfo
     * @var \Travelport\Util\StructType\ServiceFeeInfo[]
     */
    protected ?array $ServiceFeeInfo = null;
    /**
     * Constructor method for AgencyServiceFeeCreateRsp
     * @uses AgencyServiceFeeCreateRsp::setServiceFeeInfo()
     * @param \Travelport\Util\StructType\ServiceFeeInfo[] $serviceFeeInfo
     */
    public function __construct(?array $serviceFeeInfo = null)
    {
        $this
            ->setServiceFeeInfo($serviceFeeInfo);
    }
    /**
     * Get ServiceFeeInfo value
     * @return \Travelport\Util\StructType\ServiceFeeInfo[]
     */
    public function getServiceFeeInfo(): ?array
    {
        return $this->ServiceFeeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceFeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceFeeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceFeeInfoForArrayConstraintsFromSetServiceFeeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $agencyServiceFeeCreateRspServiceFeeInfoItem) {
            // validation for constraint: itemType
            if (!$agencyServiceFeeCreateRspServiceFeeInfoItem instanceof \Travelport\Util\StructType\ServiceFeeInfo) {
                $invalidValues[] = is_object($agencyServiceFeeCreateRspServiceFeeInfoItem) ? get_class($agencyServiceFeeCreateRspServiceFeeInfoItem) : sprintf('%s(%s)', gettype($agencyServiceFeeCreateRspServiceFeeInfoItem), var_export($agencyServiceFeeCreateRspServiceFeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceFeeInfo property can only contain items of type \Travelport\Util\StructType\ServiceFeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ServiceFeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ServiceFeeInfo[] $serviceFeeInfo
     * @return \Travelport\Util\StructType\AgencyServiceFeeCreateRsp
     */
    public function setServiceFeeInfo(?array $serviceFeeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceFeeInfoArrayErrorMessage = self::validateServiceFeeInfoForArrayConstraintsFromSetServiceFeeInfo($serviceFeeInfo))) {
            throw new InvalidArgumentException($serviceFeeInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($serviceFeeInfo) && count($serviceFeeInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($serviceFeeInfo)), __LINE__);
        }
        $this->ServiceFeeInfo = $serviceFeeInfo;
        
        return $this;
    }
    /**
     * Add item to ServiceFeeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ServiceFeeInfo $item
     * @return \Travelport\Util\StructType\AgencyServiceFeeCreateRsp
     */
    public function addToServiceFeeInfo(\Travelport\Util\StructType\ServiceFeeInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ServiceFeeInfo) {
            throw new InvalidArgumentException(sprintf('The ServiceFeeInfo property can only contain items of type \Travelport\Util\StructType\ServiceFeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ServiceFeeInfo) && count($this->ServiceFeeInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ServiceFeeInfo)), __LINE__);
        }
        $this->ServiceFeeInfo[] = $item;
        
        return $this;
    }
}
