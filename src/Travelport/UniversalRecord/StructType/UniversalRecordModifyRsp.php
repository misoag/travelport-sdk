<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordModifyRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Return a Universal Record
 * @subpackage Structs
 */
class UniversalRecordModifyRsp extends BaseRsp
{
    /**
     * The UniversalRecord
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UniversalRecord
     * @var \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    protected ?\Travelport\UniversalRecord\StructType\UniversalRecord $UniversalRecord = null;
    /**
     * The AirSolutionChangedInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:AirSolutionChangedInfo
     * @var \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo[]
     */
    protected ?array $AirSolutionChangedInfo = null;
    /**
     * The UniversalModifyFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UniversalModifyFailureInfo
     * @var \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo $UniversalModifyFailureInfo = null;
    /**
     * The QueueSessionToken
     * Meta information extracted from the WSDL
     * - documentation: Queue Session Token to hold session token for multiple queue
     * - use: optional
     * @var string|null
     */
    protected ?string $QueueSessionToken = null;
    /**
     * Constructor method for UniversalRecordModifyRsp
     * @uses UniversalRecordModifyRsp::setUniversalRecord()
     * @uses UniversalRecordModifyRsp::setAirSolutionChangedInfo()
     * @uses UniversalRecordModifyRsp::setUniversalModifyFailureInfo()
     * @uses UniversalRecordModifyRsp::setQueueSessionToken()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @param \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo[] $airSolutionChangedInfo
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo $universalModifyFailureInfo
     * @param string $queueSessionToken
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null, ?array $airSolutionChangedInfo = null, ?\Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo $universalModifyFailureInfo = null, ?string $queueSessionToken = null)
    {
        $this
            ->setUniversalRecord($universalRecord)
            ->setAirSolutionChangedInfo($airSolutionChangedInfo)
            ->setUniversalModifyFailureInfo($universalModifyFailureInfo)
            ->setQueueSessionToken($queueSessionToken);
    }
    /**
     * Get UniversalRecord value
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    public function getUniversalRecord(): ?\Travelport\UniversalRecord\StructType\UniversalRecord
    {
        return $this->UniversalRecord;
    }
    /**
     * Set UniversalRecord value
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp
     */
    public function setUniversalRecord(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null): self
    {
        $this->UniversalRecord = $universalRecord;
        
        return $this;
    }
    /**
     * Get AirSolutionChangedInfo value
     * @return \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo[]
     */
    public function getAirSolutionChangedInfo(): ?array
    {
        return $this->AirSolutionChangedInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSolutionChangedInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSolutionChangedInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSolutionChangedInfoForArrayConstraintsFromSetAirSolutionChangedInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordModifyRspAirSolutionChangedInfoItem) {
            // validation for constraint: itemType
            if (!$universalRecordModifyRspAirSolutionChangedInfoItem instanceof \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo) {
                $invalidValues[] = is_object($universalRecordModifyRspAirSolutionChangedInfoItem) ? get_class($universalRecordModifyRspAirSolutionChangedInfoItem) : sprintf('%s(%s)', gettype($universalRecordModifyRspAirSolutionChangedInfoItem), var_export($universalRecordModifyRspAirSolutionChangedInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSolutionChangedInfo property can only contain items of type \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSolutionChangedInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo[] $airSolutionChangedInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp
     */
    public function setAirSolutionChangedInfo(?array $airSolutionChangedInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSolutionChangedInfoArrayErrorMessage = self::validateAirSolutionChangedInfoForArrayConstraintsFromSetAirSolutionChangedInfo($airSolutionChangedInfo))) {
            throw new InvalidArgumentException($airSolutionChangedInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSolutionChangedInfo) && count($airSolutionChangedInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSolutionChangedInfo)), __LINE__);
        }
        $this->AirSolutionChangedInfo = $airSolutionChangedInfo;
        
        return $this;
    }
    /**
     * Add item to AirSolutionChangedInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp
     */
    public function addToAirSolutionChangedInfo(\Travelport\UniversalRecord\StructType\AirSolutionChangedInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo) {
            throw new InvalidArgumentException(sprintf('The AirSolutionChangedInfo property can only contain items of type \Travelport\UniversalRecord\StructType\AirSolutionChangedInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSolutionChangedInfo) && count($this->AirSolutionChangedInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSolutionChangedInfo)), __LINE__);
        }
        $this->AirSolutionChangedInfo[] = $item;
        
        return $this;
    }
    /**
     * Get UniversalModifyFailureInfo value
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo|null
     */
    public function getUniversalModifyFailureInfo(): ?\Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo
    {
        return $this->UniversalModifyFailureInfo;
    }
    /**
     * Set UniversalModifyFailureInfo value
     * @param \Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo $universalModifyFailureInfo
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp
     */
    public function setUniversalModifyFailureInfo(?\Travelport\UniversalRecord\StructType\UniversalModifyFailureInfo $universalModifyFailureInfo = null): self
    {
        $this->UniversalModifyFailureInfo = $universalModifyFailureInfo;
        
        return $this;
    }
    /**
     * Get QueueSessionToken value
     * @return string|null
     */
    public function getQueueSessionToken(): ?string
    {
        return $this->QueueSessionToken;
    }
    /**
     * Set QueueSessionToken value
     * @param string $queueSessionToken
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordModifyRsp
     */
    public function setQueueSessionToken(?string $queueSessionToken = null): self
    {
        // validation for constraint: string
        if (!is_null($queueSessionToken) && !is_string($queueSessionToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queueSessionToken, true), gettype($queueSessionToken)), __LINE__);
        }
        $this->QueueSessionToken = $queueSessionToken;
        
        return $this;
    }
}
