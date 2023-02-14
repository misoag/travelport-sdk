<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaxLayoverDurationType StructType
 * Meta information extracted from the WSDL
 * - documentation: User can specify its attribute's value in Minutes. Maximum size of each attribute is 4.
 * @subpackage Structs
 */
class MaxLayoverDurationType extends AbstractStructBase
{
    /**
     * The Domestic
     * Meta information extracted from the WSDL
     * - documentation: It will be applied for all Domestic-to-Domestic connections. | Layover duration range of valid values 0-9999
     * - base: xs:integer
     * - maxInclusive: 9999
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $Domestic = null;
    /**
     * The Gateway
     * Meta information extracted from the WSDL
     * - documentation: It will be applied for all Domestic to International and International to Domestic connections. | Layover duration range of valid values 0-9999
     * - base: xs:integer
     * - maxInclusive: 9999
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $Gateway = null;
    /**
     * The International
     * Meta information extracted from the WSDL
     * - documentation: It will be applied for all International-to-International connections. | Layover duration range of valid values 0-9999
     * - base: xs:integer
     * - maxInclusive: 9999
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    protected ?int $International = null;
    /**
     * Constructor method for MaxLayoverDurationType
     * @uses MaxLayoverDurationType::setDomestic()
     * @uses MaxLayoverDurationType::setGateway()
     * @uses MaxLayoverDurationType::setInternational()
     * @param int $domestic
     * @param int $gateway
     * @param int $international
     */
    public function __construct(?int $domestic = null, ?int $gateway = null, ?int $international = null)
    {
        $this
            ->setDomestic($domestic)
            ->setGateway($gateway)
            ->setInternational($international);
    }
    /**
     * Get Domestic value
     * @return int|null
     */
    public function getDomestic(): ?int
    {
        return $this->Domestic;
    }
    /**
     * Set Domestic value
     * @param int $domestic
     * @return \Travelport\Util\StructType\MaxLayoverDurationType
     */
    public function setDomestic(?int $domestic = null): self
    {
        // validation for constraint: int
        if (!is_null($domestic) && !(is_int($domestic) || ctype_digit($domestic))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($domestic, true), gettype($domestic)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999)
        if (!is_null($domestic) && $domestic > 9999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999', var_export($domestic, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($domestic) && $domestic < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($domestic, true)), __LINE__);
        }
        $this->Domestic = $domestic;
        
        return $this;
    }
    /**
     * Get Gateway value
     * @return int|null
     */
    public function getGateway(): ?int
    {
        return $this->Gateway;
    }
    /**
     * Set Gateway value
     * @param int $gateway
     * @return \Travelport\Util\StructType\MaxLayoverDurationType
     */
    public function setGateway(?int $gateway = null): self
    {
        // validation for constraint: int
        if (!is_null($gateway) && !(is_int($gateway) || ctype_digit($gateway))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($gateway, true), gettype($gateway)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999)
        if (!is_null($gateway) && $gateway > 9999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999', var_export($gateway, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($gateway) && $gateway < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($gateway, true)), __LINE__);
        }
        $this->Gateway = $gateway;
        
        return $this;
    }
    /**
     * Get International value
     * @return int|null
     */
    public function getInternational(): ?int
    {
        return $this->International;
    }
    /**
     * Set International value
     * @param int $international
     * @return \Travelport\Util\StructType\MaxLayoverDurationType
     */
    public function setInternational(?int $international = null): self
    {
        // validation for constraint: int
        if (!is_null($international) && !(is_int($international) || ctype_digit($international))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($international, true), gettype($international)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999)
        if (!is_null($international) && $international > 9999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999', var_export($international, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($international) && $international < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($international, true)), __LINE__);
        }
        $this->International = $international;
        
        return $this;
    }
}
