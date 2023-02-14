<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyServiceFeeCreateReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Creates an Agency Service Fee to be charged through BSP or Airline Reporting Corporation (ARC)..
 * @subpackage Structs
 */
class AgencyServiceFeeCreateReq extends BaseReq
{
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Service Fee to be applied to the UniversalRecord. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    protected string $UniversalRecordLocatorCode;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Service Fees to be applied to the provider locator code of the PNR . | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    protected string $ProviderLocatorCode;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: To be used with ProviderLocatorCode, which host the reservation being added to belongs to.
     * - use: required
     * @var string
     */
    protected string $ProviderCode;
    /**
     * The ServiceFeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:ServiceFeeInfo
     * @var \Travelport\Util\StructType\ServiceFeeInfo[]
     */
    protected ?array $ServiceFeeInfo = null;
    /**
     * Constructor method for AgencyServiceFeeCreateReq
     * @uses AgencyServiceFeeCreateReq::setUniversalRecordLocatorCode()
     * @uses AgencyServiceFeeCreateReq::setProviderLocatorCode()
     * @uses AgencyServiceFeeCreateReq::setProviderCode()
     * @uses AgencyServiceFeeCreateReq::setServiceFeeInfo()
     * @param string $universalRecordLocatorCode
     * @param string $providerLocatorCode
     * @param string $providerCode
     * @param \Travelport\Util\StructType\ServiceFeeInfo[] $serviceFeeInfo
     */
    public function __construct(string $universalRecordLocatorCode, string $providerLocatorCode, string $providerCode, ?array $serviceFeeInfo = null)
    {
        $this
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setProviderCode($providerCode)
            ->setServiceFeeInfo($serviceFeeInfo);
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string
     */
    public function getUniversalRecordLocatorCode(): string
    {
        return $this->UniversalRecordLocatorCode;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * @param string $universalRecordLocatorCode
     * @return \Travelport\Util\StructType\AgencyServiceFeeCreateReq
     */
    public function setUniversalRecordLocatorCode(string $universalRecordLocatorCode): self
    {
        // validation for constraint: string
        if (!is_null($universalRecordLocatorCode) && !is_string($universalRecordLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universalRecordLocatorCode, true), gettype($universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string
     */
    public function getProviderLocatorCode(): string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\Util\StructType\AgencyServiceFeeCreateReq
     */
    public function setProviderLocatorCode(string $providerLocatorCode): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Util\StructType\AgencyServiceFeeCreateReq
     */
    public function setProviderCode(string $providerCode): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
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
        foreach ($values as $agencyServiceFeeCreateReqServiceFeeInfoItem) {
            // validation for constraint: itemType
            if (!$agencyServiceFeeCreateReqServiceFeeInfoItem instanceof \Travelport\Util\StructType\ServiceFeeInfo) {
                $invalidValues[] = is_object($agencyServiceFeeCreateReqServiceFeeInfoItem) ? get_class($agencyServiceFeeCreateReqServiceFeeInfoItem) : sprintf('%s(%s)', gettype($agencyServiceFeeCreateReqServiceFeeInfoItem), var_export($agencyServiceFeeCreateReqServiceFeeInfoItem, true));
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
     * @return \Travelport\Util\StructType\AgencyServiceFeeCreateReq
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
     * @return \Travelport\Util\StructType\AgencyServiceFeeCreateReq
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
