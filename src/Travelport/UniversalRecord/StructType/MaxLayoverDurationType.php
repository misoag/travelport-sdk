<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?int $Domestic = null;
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
    public ?int $Gateway = null;
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
    public ?int $International = null;
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
     * @return \Travelport\UniversalRecord\StructType\MaxLayoverDurationType
     */
    public function setDomestic(?int $domestic = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\MaxLayoverDurationType
     */
    public function setGateway(?int $gateway = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\MaxLayoverDurationType
     */
    public function setInternational(?int $international = null): self
    {
        $this->International = $international;
        
        return $this;
    }
}
