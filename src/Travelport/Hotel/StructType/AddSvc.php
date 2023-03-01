<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSvc StructType
 * Meta information extracted from the WSDL
 * - documentation: 1P - Add SVC segments to collect additional fee
 * @subpackage Structs
 */
class AddSvc extends AbstractStructBase
{
    /**
     * The RFIC
     * Meta information extracted from the WSDL
     * - documentation: 1P - Reason for issuance
     * - use: optional
     * @var string|null
     */
    public ?string $RFIC = null;
    /**
     * The RFISC
     * Meta information extracted from the WSDL
     * - documentation: 1P - Resaon for issuance sub-code
     * - use: optional
     * @var string|null
     */
    public ?string $RFISC = null;
    /**
     * The SvcDescription
     * Meta information extracted from the WSDL
     * - documentation: 1P - SVC fee description
     * - use: optional
     * @var string|null
     */
    public ?string $SvcDescription = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Origin location - Airport code. If this value not provided, the last air segment arrival location is taken as default. 1P only. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Destination location - Airport code. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - documentation: The start date of the SVC segment. If the value not specified, the default value is set as the date next to the last airsegment arrival date. 1P only
     * - use: optional
     * @var string|null
     */
    public ?string $StartDate = null;
    /**
     * Constructor method for AddSvc
     * @uses AddSvc::setRFIC()
     * @uses AddSvc::setRFISC()
     * @uses AddSvc::setSvcDescription()
     * @uses AddSvc::setOrigin()
     * @uses AddSvc::setDestination()
     * @uses AddSvc::setStartDate()
     * @param string $rFIC
     * @param string $rFISC
     * @param string $svcDescription
     * @param string $origin
     * @param string $destination
     * @param string $startDate
     */
    public function __construct(?string $rFIC = null, ?string $rFISC = null, ?string $svcDescription = null, ?string $origin = null, ?string $destination = null, ?string $startDate = null)
    {
        $this
            ->setRFIC($rFIC)
            ->setRFISC($rFISC)
            ->setSvcDescription($svcDescription)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setStartDate($startDate);
    }
    /**
     * Get RFIC value
     * @return string|null
     */
    public function getRFIC(): ?string
    {
        return $this->RFIC;
    }
    /**
     * Set RFIC value
     * @param string $rFIC
     * @return \Travelport\Hotel\StructType\AddSvc
     */
    public function setRFIC(?string $rFIC = null): self
    {
        $this->RFIC = $rFIC;
        
        return $this;
    }
    /**
     * Get RFISC value
     * @return string|null
     */
    public function getRFISC(): ?string
    {
        return $this->RFISC;
    }
    /**
     * Set RFISC value
     * @param string $rFISC
     * @return \Travelport\Hotel\StructType\AddSvc
     */
    public function setRFISC(?string $rFISC = null): self
    {
        $this->RFISC = $rFISC;
        
        return $this;
    }
    /**
     * Get SvcDescription value
     * @return string|null
     */
    public function getSvcDescription(): ?string
    {
        return $this->SvcDescription;
    }
    /**
     * Set SvcDescription value
     * @param string $svcDescription
     * @return \Travelport\Hotel\StructType\AddSvc
     */
    public function setSvcDescription(?string $svcDescription = null): self
    {
        $this->SvcDescription = $svcDescription;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Hotel\StructType\AddSvc
     */
    public function setOrigin(?string $origin = null): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Hotel\StructType\AddSvc
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Travelport\Hotel\StructType\AddSvc
     */
    public function setStartDate(?string $startDate = null): self
    {
        $this->StartDate = $startDate;
        
        return $this;
    }
}
