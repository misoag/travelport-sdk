<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiningInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Cruise Dining Details
 * @subpackage Structs
 */
class DiningInfo extends AbstractStructBase
{
    /**
     * The Seating
     * Meta information extracted from the WSDL
     * - documentation: Seating Arrangement. Can be of the following values : '1' - First seating, '2' - Second seating | Used for Character Strings, length 1.
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Seating = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of this dining | Valid 2 letter Status Code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * The TableSize
     * Meta information extracted from the WSDL
     * - documentation: Size of the table in number of persons
     * - use: optional
     * @var int|null
     */
    public ?int $TableSize = null;
    /**
     * Constructor method for DiningInfo
     * @uses DiningInfo::setSeating()
     * @uses DiningInfo::setStatus()
     * @uses DiningInfo::setTableSize()
     * @param string $seating
     * @param string $status
     * @param int $tableSize
     */
    public function __construct(?string $seating = null, ?string $status = null, ?int $tableSize = null)
    {
        $this
            ->setSeating($seating)
            ->setStatus($status)
            ->setTableSize($tableSize);
    }
    /**
     * Get Seating value
     * @return string|null
     */
    public function getSeating(): ?string
    {
        return $this->Seating;
    }
    /**
     * Set Seating value
     * @param string $seating
     * @return \Travelport\UniversalRecord\StructType\DiningInfo
     */
    public function setSeating(?string $seating = null): self
    {
        $this->Seating = $seating;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\DiningInfo
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get TableSize value
     * @return int|null
     */
    public function getTableSize(): ?int
    {
        return $this->TableSize;
    }
    /**
     * Set TableSize value
     * @param int $tableSize
     * @return \Travelport\UniversalRecord\StructType\DiningInfo
     */
    public function setTableSize(?int $tableSize = null): self
    {
        $this->TableSize = $tableSize;
        
        return $this;
    }
}
