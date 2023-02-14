<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxCalcInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for a single segment for tax calculation purposes
 * @subpackage Structs
 */
class TaxCalcInfo extends AbstractStructBase
{
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Destination;
    /**
     * The BaseFare
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $BaseFare;
    /**
     * The QSurcharge
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $QSurcharge = null;
    /**
     * The StopOverFee
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $StopOverFee = null;
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Tax = null;
    /**
     * Constructor method for TaxCalcInfo
     * @uses TaxCalcInfo::setOrigin()
     * @uses TaxCalcInfo::setDestination()
     * @uses TaxCalcInfo::setBaseFare()
     * @uses TaxCalcInfo::setQSurcharge()
     * @uses TaxCalcInfo::setStopOverFee()
     * @uses TaxCalcInfo::setTax()
     * @param string $origin
     * @param string $destination
     * @param string $baseFare
     * @param string $qSurcharge
     * @param string $stopOverFee
     * @param string $tax
     */
    public function __construct(string $origin, string $destination, string $baseFare, ?string $qSurcharge = null, ?string $stopOverFee = null, ?string $tax = null)
    {
        $this
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setBaseFare($baseFare)
            ->setQSurcharge($qSurcharge)
            ->setStopOverFee($stopOverFee)
            ->setTax($tax);
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Util\StructType\TaxCalcInfo
     */
    public function setOrigin(string $origin): self
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
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Util\StructType\TaxCalcInfo
     */
    public function setDestination(string $destination): self
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
     * Get BaseFare value
     * @return string
     */
    public function getBaseFare(): string
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param string $baseFare
     * @return \Travelport\Util\StructType\TaxCalcInfo
     */
    public function setBaseFare(string $baseFare): self
    {
        // validation for constraint: string
        if (!is_null($baseFare) && !is_string($baseFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseFare, true), gettype($baseFare)), __LINE__);
        }
        $this->BaseFare = $baseFare;
        
        return $this;
    }
    /**
     * Get QSurcharge value
     * @return string|null
     */
    public function getQSurcharge(): ?string
    {
        return $this->QSurcharge;
    }
    /**
     * Set QSurcharge value
     * @param string $qSurcharge
     * @return \Travelport\Util\StructType\TaxCalcInfo
     */
    public function setQSurcharge(?string $qSurcharge = null): self
    {
        // validation for constraint: string
        if (!is_null($qSurcharge) && !is_string($qSurcharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qSurcharge, true), gettype($qSurcharge)), __LINE__);
        }
        $this->QSurcharge = $qSurcharge;
        
        return $this;
    }
    /**
     * Get StopOverFee value
     * @return string|null
     */
    public function getStopOverFee(): ?string
    {
        return $this->StopOverFee;
    }
    /**
     * Set StopOverFee value
     * @param string $stopOverFee
     * @return \Travelport\Util\StructType\TaxCalcInfo
     */
    public function setStopOverFee(?string $stopOverFee = null): self
    {
        // validation for constraint: string
        if (!is_null($stopOverFee) && !is_string($stopOverFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stopOverFee, true), gettype($stopOverFee)), __LINE__);
        }
        $this->StopOverFee = $stopOverFee;
        
        return $this;
    }
    /**
     * Get Tax value
     * @return string|null
     */
    public function getTax(): ?string
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param string $tax
     * @return \Travelport\Util\StructType\TaxCalcInfo
     */
    public function setTax(?string $tax = null): self
    {
        // validation for constraint: string
        if (!is_null($tax) && !is_string($tax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tax, true), gettype($tax)), __LINE__);
        }
        $this->Tax = $tax;
        
        return $this;
    }
}
