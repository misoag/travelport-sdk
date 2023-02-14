<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirUpsellOfferSearchCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Search criteria for AirUpsellOffers.
 * @subpackage Structs
 */
class AirUpsellOfferSearchCriteria extends AbstractStructBase
{
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $ClassOfService;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Util\StructType\AccountCode|null
     */
    protected ?\Travelport\Util\StructType\AccountCode $AccountCode = null;
    /**
     * Constructor method for AirUpsellOfferSearchCriteria
     * @uses AirUpsellOfferSearchCriteria::setClassOfService()
     * @uses AirUpsellOfferSearchCriteria::setAccountCode()
     * @param string $classOfService
     * @param \Travelport\Util\StructType\AccountCode $accountCode
     */
    public function __construct(string $classOfService, ?\Travelport\Util\StructType\AccountCode $accountCode = null)
    {
        $this
            ->setClassOfService($classOfService)
            ->setAccountCode($accountCode);
    }
    /**
     * Get ClassOfService value
     * @return string
     */
    public function getClassOfService(): string
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Travelport\Util\StructType\AirUpsellOfferSearchCriteria
     */
    public function setClassOfService(string $classOfService): self
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classOfService, true), gettype($classOfService)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $classOfService)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\Util\StructType\AccountCode|null
     */
    public function getAccountCode(): ?\Travelport\Util\StructType\AccountCode
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\Util\StructType\AccountCode $accountCode
     * @return \Travelport\Util\StructType\AirUpsellOfferSearchCriteria
     */
    public function setAccountCode(?\Travelport\Util\StructType\AccountCode $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
}
