<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $Seating = null;
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
    protected ?string $Status = null;
    /**
     * The TableSize
     * Meta information extracted from the WSDL
     * - documentation: Size of the table in number of persons
     * - use: optional
     * @var int|null
     */
    protected ?int $TableSize = null;
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
        // validation for constraint: string
        if (!is_null($seating) && !is_string($seating)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seating, true), gettype($seating)), __LINE__);
        }
        // validation for constraint: length(1)
        if (!is_null($seating) && mb_strlen((string) $seating) !== 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 1', mb_strlen((string) $seating)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($status) && mb_strlen((string) $status) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $status)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($tableSize) && !(is_int($tableSize) || ctype_digit($tableSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tableSize, true), gettype($tableSize)), __LINE__);
        }
        $this->TableSize = $tableSize;
        
        return $this;
    }
}
