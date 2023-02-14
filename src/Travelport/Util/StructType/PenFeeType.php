<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PenFeeType StructType
 * @subpackage Structs
 */
class PenFeeType extends AbstractStructBase
{
    /**
     * The DepRequired
     * Meta information extracted from the WSDL
     * - documentation: Deposit required. True if require. False if not required.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $DepRequired = null;
    /**
     * The DepNonRef
     * Meta information extracted from the WSDL
     * - documentation: Deposit non-refundable. True is non-refundanbe. False is refundable.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $DepNonRef = null;
    /**
     * The TkNonRef
     * Meta information extracted from the WSDL
     * - documentation: Ticket non-refundable. True if non-refundanbe. False if refundable.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $TkNonRef = null;
    /**
     * The AirVFee
     * Meta information extracted from the WSDL
     * - documentation: Carrier fee. True if carrier fee is assessed should passenger for complete all conditions for travel at fare. False if it does not exist.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AirVFee = null;
    /**
     * The Cancellation
     * Meta information extracted from the WSDL
     * - documentation: Cancellation. True if subject to penalty. False if no penalty.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cancellation = null;
    /**
     * The FailConfirmSpace
     * Meta information extracted from the WSDL
     * - documentation: Failure to confirm space. True if subject to penalty if seats are not confirmed. False if subject to penalty if seats are confirmed.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $FailConfirmSpace = null;
    /**
     * The ItinChg
     * Meta information extracted from the WSDL
     * - documentation: Subject to penalty if Itinerary is changed requiring reissue of ticket. True if subject to penalty. False if no penalty if reissue required.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ItinChg = null;
    /**
     * The ReplaceTk
     * Meta information extracted from the WSDL
     * - documentation: Replace ticket. True if subject to penalty, if replacement of lost ticket / exchange order. False if no penalty, if replacement of lost ticket or exchange order.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReplaceTk = null;
    /**
     * The Applicable
     * Meta information extracted from the WSDL
     * - documentation: Applicable. True if amount specified is applicable. Flase if amount specified is not applicable.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Applicable = null;
    /**
     * The ApplicableTo
     * Meta information extracted from the WSDL
     * - documentation: Applicable to penalty or deposit. True if amount specified applies to penalty. False if amount specified applies to deposit.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ApplicableTo = null;
    /**
     * The Amt
     * Meta information extracted from the WSDL
     * - documentation: Amount of penalty. If XXX.XX then it is an amount. If it is XX then is is a percenatge. Eg 100.00 or 000100.
     * - use: optional
     * @var float|null
     */
    protected ?float $Amt = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type of penalty. If it is D then dollar. If it is P then percentage.
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: Currency code of penalty (e.g. USD).
     * - use: optional
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * Constructor method for PenFeeType
     * @uses PenFeeType::setDepRequired()
     * @uses PenFeeType::setDepNonRef()
     * @uses PenFeeType::setTkNonRef()
     * @uses PenFeeType::setAirVFee()
     * @uses PenFeeType::setCancellation()
     * @uses PenFeeType::setFailConfirmSpace()
     * @uses PenFeeType::setItinChg()
     * @uses PenFeeType::setReplaceTk()
     * @uses PenFeeType::setApplicable()
     * @uses PenFeeType::setApplicableTo()
     * @uses PenFeeType::setAmt()
     * @uses PenFeeType::setType()
     * @uses PenFeeType::setCurrency()
     * @param bool $depRequired
     * @param bool $depNonRef
     * @param bool $tkNonRef
     * @param bool $airVFee
     * @param bool $cancellation
     * @param bool $failConfirmSpace
     * @param bool $itinChg
     * @param bool $replaceTk
     * @param bool $applicable
     * @param bool $applicableTo
     * @param float $amt
     * @param string $type
     * @param string $currency
     */
    public function __construct(?bool $depRequired = null, ?bool $depNonRef = null, ?bool $tkNonRef = null, ?bool $airVFee = null, ?bool $cancellation = null, ?bool $failConfirmSpace = null, ?bool $itinChg = null, ?bool $replaceTk = null, ?bool $applicable = null, ?bool $applicableTo = null, ?float $amt = null, ?string $type = null, ?string $currency = null)
    {
        $this
            ->setDepRequired($depRequired)
            ->setDepNonRef($depNonRef)
            ->setTkNonRef($tkNonRef)
            ->setAirVFee($airVFee)
            ->setCancellation($cancellation)
            ->setFailConfirmSpace($failConfirmSpace)
            ->setItinChg($itinChg)
            ->setReplaceTk($replaceTk)
            ->setApplicable($applicable)
            ->setApplicableTo($applicableTo)
            ->setAmt($amt)
            ->setType($type)
            ->setCurrency($currency);
    }
    /**
     * Get DepRequired value
     * @return bool|null
     */
    public function getDepRequired(): ?bool
    {
        return $this->DepRequired;
    }
    /**
     * Set DepRequired value
     * @param bool $depRequired
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setDepRequired(?bool $depRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($depRequired) && !is_bool($depRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($depRequired, true), gettype($depRequired)), __LINE__);
        }
        $this->DepRequired = $depRequired;
        
        return $this;
    }
    /**
     * Get DepNonRef value
     * @return bool|null
     */
    public function getDepNonRef(): ?bool
    {
        return $this->DepNonRef;
    }
    /**
     * Set DepNonRef value
     * @param bool $depNonRef
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setDepNonRef(?bool $depNonRef = null): self
    {
        // validation for constraint: boolean
        if (!is_null($depNonRef) && !is_bool($depNonRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($depNonRef, true), gettype($depNonRef)), __LINE__);
        }
        $this->DepNonRef = $depNonRef;
        
        return $this;
    }
    /**
     * Get TkNonRef value
     * @return bool|null
     */
    public function getTkNonRef(): ?bool
    {
        return $this->TkNonRef;
    }
    /**
     * Set TkNonRef value
     * @param bool $tkNonRef
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setTkNonRef(?bool $tkNonRef = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tkNonRef) && !is_bool($tkNonRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tkNonRef, true), gettype($tkNonRef)), __LINE__);
        }
        $this->TkNonRef = $tkNonRef;
        
        return $this;
    }
    /**
     * Get AirVFee value
     * @return bool|null
     */
    public function getAirVFee(): ?bool
    {
        return $this->AirVFee;
    }
    /**
     * Set AirVFee value
     * @param bool $airVFee
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setAirVFee(?bool $airVFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($airVFee) && !is_bool($airVFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($airVFee, true), gettype($airVFee)), __LINE__);
        }
        $this->AirVFee = $airVFee;
        
        return $this;
    }
    /**
     * Get Cancellation value
     * @return bool|null
     */
    public function getCancellation(): ?bool
    {
        return $this->Cancellation;
    }
    /**
     * Set Cancellation value
     * @param bool $cancellation
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setCancellation(?bool $cancellation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cancellation) && !is_bool($cancellation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancellation, true), gettype($cancellation)), __LINE__);
        }
        $this->Cancellation = $cancellation;
        
        return $this;
    }
    /**
     * Get FailConfirmSpace value
     * @return bool|null
     */
    public function getFailConfirmSpace(): ?bool
    {
        return $this->FailConfirmSpace;
    }
    /**
     * Set FailConfirmSpace value
     * @param bool $failConfirmSpace
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setFailConfirmSpace(?bool $failConfirmSpace = null): self
    {
        // validation for constraint: boolean
        if (!is_null($failConfirmSpace) && !is_bool($failConfirmSpace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($failConfirmSpace, true), gettype($failConfirmSpace)), __LINE__);
        }
        $this->FailConfirmSpace = $failConfirmSpace;
        
        return $this;
    }
    /**
     * Get ItinChg value
     * @return bool|null
     */
    public function getItinChg(): ?bool
    {
        return $this->ItinChg;
    }
    /**
     * Set ItinChg value
     * @param bool $itinChg
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setItinChg(?bool $itinChg = null): self
    {
        // validation for constraint: boolean
        if (!is_null($itinChg) && !is_bool($itinChg)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($itinChg, true), gettype($itinChg)), __LINE__);
        }
        $this->ItinChg = $itinChg;
        
        return $this;
    }
    /**
     * Get ReplaceTk value
     * @return bool|null
     */
    public function getReplaceTk(): ?bool
    {
        return $this->ReplaceTk;
    }
    /**
     * Set ReplaceTk value
     * @param bool $replaceTk
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setReplaceTk(?bool $replaceTk = null): self
    {
        // validation for constraint: boolean
        if (!is_null($replaceTk) && !is_bool($replaceTk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replaceTk, true), gettype($replaceTk)), __LINE__);
        }
        $this->ReplaceTk = $replaceTk;
        
        return $this;
    }
    /**
     * Get Applicable value
     * @return bool|null
     */
    public function getApplicable(): ?bool
    {
        return $this->Applicable;
    }
    /**
     * Set Applicable value
     * @param bool $applicable
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setApplicable(?bool $applicable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($applicable) && !is_bool($applicable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($applicable, true), gettype($applicable)), __LINE__);
        }
        $this->Applicable = $applicable;
        
        return $this;
    }
    /**
     * Get ApplicableTo value
     * @return bool|null
     */
    public function getApplicableTo(): ?bool
    {
        return $this->ApplicableTo;
    }
    /**
     * Set ApplicableTo value
     * @param bool $applicableTo
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setApplicableTo(?bool $applicableTo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($applicableTo) && !is_bool($applicableTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($applicableTo, true), gettype($applicableTo)), __LINE__);
        }
        $this->ApplicableTo = $applicableTo;
        
        return $this;
    }
    /**
     * Get Amt value
     * @return float|null
     */
    public function getAmt(): ?float
    {
        return $this->Amt;
    }
    /**
     * Set Amt value
     * @param float $amt
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setAmt(?float $amt = null): self
    {
        // validation for constraint: float
        if (!is_null($amt) && !(is_float($amt) || is_numeric($amt))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amt, true), gettype($amt)), __LINE__);
        }
        $this->Amt = $amt;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Travelport\Util\StructType\PenFeeType
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
}