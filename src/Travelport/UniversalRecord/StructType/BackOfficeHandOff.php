<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BackOfficeHandOff StructType
 * Meta information extracted from the WSDL
 * - documentation: Allows an agency to select the back office documents and also route to different host to produce for the itinerary.
 * @subpackage Structs
 */
class BackOfficeHandOff extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type of back office document,valid options are Accounting,Global,NonAccounting,NonAccountingRemote,Dual.
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: This is required for NonAccountingRemote,Dual and Global type back office.
     * - use: optional
     * @var string|null
     */
    public ?string $Location = null;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: The PCC of the host system where it would be routed. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PseudoCityCode = null;
    /**
     * Constructor method for BackOfficeHandOff
     * @uses BackOfficeHandOff::setType()
     * @uses BackOfficeHandOff::setLocation()
     * @uses BackOfficeHandOff::setPseudoCityCode()
     * @param string $type
     * @param string $location
     * @param string $pseudoCityCode
     */
    public function __construct(string $type, ?string $location = null, ?string $pseudoCityCode = null)
    {
        $this
            ->setType($type)
            ->setLocation($location)
            ->setPseudoCityCode($pseudoCityCode);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\BackOfficeHandOff
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Travelport\UniversalRecord\StructType\BackOfficeHandOff
     */
    public function setLocation(?string $location = null): self
    {
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Travelport\UniversalRecord\StructType\BackOfficeHandOff
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
}
