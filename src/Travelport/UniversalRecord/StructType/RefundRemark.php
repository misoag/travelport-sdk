<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: A textual remark displayed in Refund Quote and Refund response.
 * @subpackage Structs
 */
class RefundRemark extends AbstractStructBase
{
    /**
     * The RemarkData
     * Meta information extracted from the WSDL
     * - documentation: Actual remark data.
     * @var string|null
     */
    protected ?string $RemarkData = null;
    /**
     * Constructor method for RefundRemark
     * @uses RefundRemark::setRemarkData()
     * @param string $remarkData
     */
    public function __construct(?string $remarkData = null)
    {
        $this
            ->setRemarkData($remarkData);
    }
    /**
     * Get RemarkData value
     * @return string|null
     */
    public function getRemarkData(): ?string
    {
        return $this->RemarkData;
    }
    /**
     * Set RemarkData value
     * @param string $remarkData
     * @return \Travelport\UniversalRecord\StructType\RefundRemark
     */
    public function setRemarkData(?string $remarkData = null): self
    {
        // validation for constraint: string
        if (!is_null($remarkData) && !is_string($remarkData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarkData, true), gettype($remarkData)), __LINE__);
        }
        $this->RemarkData = $remarkData;
        
        return $this;
    }
}
