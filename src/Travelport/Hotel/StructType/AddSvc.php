<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?string $RFIC = null;
    /**
     * The RFISC
     * Meta information extracted from the WSDL
     * - documentation: 1P - Resaon for issuance sub-code
     * - use: optional
     * @var string|null
     */
    protected ?string $RFISC = null;
    /**
     * The SvcDescription
     * Meta information extracted from the WSDL
     * - documentation: 1P - SVC fee description
     * - use: optional
     * @var string|null
     */
    protected ?string $SvcDescription = null;
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
    protected ?string $Origin = null;
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
    protected ?string $Destination = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - documentation: The start date of the SVC segment. If the value not specified, the default value is set as the date next to the last airsegment arrival date. 1P only
     * - use: optional
     * @var string|null
     */
    protected ?string $StartDate = null;
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
        // validation for constraint: string
        if (!is_null($rFIC) && !is_string($rFIC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFIC, true), gettype($rFIC)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($rFISC) && !is_string($rFISC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFISC, true), gettype($rFISC)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($svcDescription) && !is_string($svcDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($svcDescription, true), gettype($svcDescription)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        
        return $this;
    }
}
