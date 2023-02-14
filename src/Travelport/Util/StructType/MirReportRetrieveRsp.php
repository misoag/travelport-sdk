<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MirReportRetrieveRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: The text of the MIR report. | Carries the report payload
 * @subpackage Structs
 */
class MirReportRetrieveRsp extends BaseRsp
{
    /**
     * The Report
     * @var string|null
     */
    protected ?string $Report = null;
    /**
     * Constructor method for MirReportRetrieveRsp
     * @uses MirReportRetrieveRsp::setReport()
     * @param string $report
     */
    public function __construct(?string $report = null)
    {
        $this
            ->setReport($report);
    }
    /**
     * Get Report value
     * @return string|null
     */
    public function getReport(): ?string
    {
        return $this->Report;
    }
    /**
     * Set Report value
     * @param string $report
     * @return \Travelport\Util\StructType\MirReportRetrieveRsp
     */
    public function setReport(?string $report = null): self
    {
        // validation for constraint: string
        if (!is_null($report) && !is_string($report)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($report, true), gettype($report)), __LINE__);
        }
        $this->Report = $report;
        
        return $this;
    }
}
