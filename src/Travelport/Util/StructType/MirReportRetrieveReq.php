<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MirReportRetrieveReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieve a report
 * @subpackage Structs
 */
class MirReportRetrieveReq extends BaseReq
{
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - use: required
     * @var string
     */
    protected string $LocatorCode;
    /**
     * The ReportFormat
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ReportFormat = null;
    /**
     * Constructor method for MirReportRetrieveReq
     * @uses MirReportRetrieveReq::setLocatorCode()
     * @uses MirReportRetrieveReq::setReportFormat()
     * @param string $locatorCode
     * @param string $reportFormat
     */
    public function __construct(string $locatorCode, ?string $reportFormat = null)
    {
        $this
            ->setLocatorCode($locatorCode)
            ->setReportFormat($reportFormat);
    }
    /**
     * Get LocatorCode value
     * @return string
     */
    public function getLocatorCode(): string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\Util\StructType\MirReportRetrieveReq
     */
    public function setLocatorCode(string $locatorCode): self
    {
        // validation for constraint: string
        if (!is_null($locatorCode) && !is_string($locatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locatorCode, true), gettype($locatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $locatorCode)), __LINE__);
        }
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get ReportFormat value
     * @return string|null
     */
    public function getReportFormat(): ?string
    {
        return $this->ReportFormat;
    }
    /**
     * Set ReportFormat value
     * @param string $reportFormat
     * @return \Travelport\Util\StructType\MirReportRetrieveReq
     */
    public function setReportFormat(?string $reportFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($reportFormat) && !is_string($reportFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportFormat, true), gettype($reportFormat)), __LINE__);
        }
        $this->ReportFormat = $reportFormat;
        
        return $this;
    }
}
