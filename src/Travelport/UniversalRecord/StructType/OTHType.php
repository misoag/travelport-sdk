<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTHType StructType
 * @subpackage Structs
 */
class OTHType extends AbstractStructBase
{
    /**
     * The Cat0
     * Meta information extracted from the WSDL
     * - documentation: Category 0 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat0 = null;
    /**
     * The Cat1
     * Meta information extracted from the WSDL
     * - documentation: Category 1 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat1 = null;
    /**
     * The Cat2
     * Meta information extracted from the WSDL
     * - documentation: Category 2 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat2 = null;
    /**
     * The Cat3
     * Meta information extracted from the WSDL
     * - documentation: Category 3 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat3 = null;
    /**
     * The Cat4
     * Meta information extracted from the WSDL
     * - documentation: Category 4 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat4 = null;
    /**
     * The Cat5
     * Meta information extracted from the WSDL
     * - documentation: Category 5 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat5 = null;
    /**
     * The Cat6
     * Meta information extracted from the WSDL
     * - documentation: Category 6 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat6 = null;
    /**
     * The Cat7
     * Meta information extracted from the WSDL
     * - documentation: Category 7 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat7 = null;
    /**
     * The Cat8
     * Meta information extracted from the WSDL
     * - documentation: Category 8 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat8 = null;
    /**
     * The Cat9
     * Meta information extracted from the WSDL
     * - documentation: Category 9 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat9 = null;
    /**
     * The Cat10
     * Meta information extracted from the WSDL
     * - documentation: Category 10 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat10 = null;
    /**
     * The Cat11
     * Meta information extracted from the WSDL
     * - documentation: Category 11 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat11 = null;
    /**
     * The Cat12
     * Meta information extracted from the WSDL
     * - documentation: Category 12 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat12 = null;
    /**
     * The Cat13
     * Meta information extracted from the WSDL
     * - documentation: Category 13 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat13 = null;
    /**
     * The Cat14
     * Meta information extracted from the WSDL
     * - documentation: Category 14 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat14 = null;
    /**
     * The Cat15
     * Meta information extracted from the WSDL
     * - documentation: Category 15 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat15 = null;
    /**
     * The Cat16
     * Meta information extracted from the WSDL
     * - documentation: Category 16 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat16 = null;
    /**
     * The Cat17
     * Meta information extracted from the WSDL
     * - documentation: Category 17 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat17 = null;
    /**
     * The Cat18
     * Meta information extracted from the WSDL
     * - documentation: Category 18 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat18 = null;
    /**
     * The Cat19
     * Meta information extracted from the WSDL
     * - documentation: Category 19 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat19 = null;
    /**
     * The Cat20
     * Meta information extracted from the WSDL
     * - documentation: Category 20 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat20 = null;
    /**
     * The Cat21
     * Meta information extracted from the WSDL
     * - documentation: Category 21 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat21 = null;
    /**
     * The Cat22
     * Meta information extracted from the WSDL
     * - documentation: Category 22 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat22 = null;
    /**
     * The Cat23
     * Meta information extracted from the WSDL
     * - documentation: Category 23 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat23 = null;
    /**
     * The Cat24
     * Meta information extracted from the WSDL
     * - documentation: Category 24 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat24 = null;
    /**
     * The Cat25
     * Meta information extracted from the WSDL
     * - documentation: Category 25 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat25 = null;
    /**
     * The Cat26
     * Meta information extracted from the WSDL
     * - documentation: Category 26 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat26 = null;
    /**
     * The Cat27
     * Meta information extracted from the WSDL
     * - documentation: Category 27 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat27 = null;
    /**
     * The Cat28
     * Meta information extracted from the WSDL
     * - documentation: Category 28 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat28 = null;
    /**
     * The Cat29
     * Meta information extracted from the WSDL
     * - documentation: Category 29 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat29 = null;
    /**
     * The Cat30
     * Meta information extracted from the WSDL
     * - documentation: Category 30 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat30 = null;
    /**
     * The Cat31
     * Meta information extracted from the WSDL
     * - documentation: Category 31 rules. True if category applies. False if rules do not apply.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Cat31 = null;
    /**
     * The RestrictiveDt
     * Meta information extracted from the WSDL
     * - documentation: Most restrictive ticketing date.
     * - use: optional
     * @var string|null
     */
    protected ?string $RestrictiveDt = null;
    /**
     * The SurchargeAmt
     * Meta information extracted from the WSDL
     * - documentation: Surcharge amount
     * - use: optional
     * @var float|null
     */
    protected ?float $SurchargeAmt = null;
    /**
     * The NotUSACity
     * Meta information extracted from the WSDL
     * - documentation: Not USA city. True if Origin or final destination not a continental U.S. City. False if Origin or final destination a continental U.S. City.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NotUSACity = null;
    /**
     * The MissingRules
     * Meta information extracted from the WSDL
     * - documentation: Missing rules. True if rules are missing. False if rules are not missing.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MissingRules = null;
    /**
     * Constructor method for OTHType
     * @uses OTHType::setCat0()
     * @uses OTHType::setCat1()
     * @uses OTHType::setCat2()
     * @uses OTHType::setCat3()
     * @uses OTHType::setCat4()
     * @uses OTHType::setCat5()
     * @uses OTHType::setCat6()
     * @uses OTHType::setCat7()
     * @uses OTHType::setCat8()
     * @uses OTHType::setCat9()
     * @uses OTHType::setCat10()
     * @uses OTHType::setCat11()
     * @uses OTHType::setCat12()
     * @uses OTHType::setCat13()
     * @uses OTHType::setCat14()
     * @uses OTHType::setCat15()
     * @uses OTHType::setCat16()
     * @uses OTHType::setCat17()
     * @uses OTHType::setCat18()
     * @uses OTHType::setCat19()
     * @uses OTHType::setCat20()
     * @uses OTHType::setCat21()
     * @uses OTHType::setCat22()
     * @uses OTHType::setCat23()
     * @uses OTHType::setCat24()
     * @uses OTHType::setCat25()
     * @uses OTHType::setCat26()
     * @uses OTHType::setCat27()
     * @uses OTHType::setCat28()
     * @uses OTHType::setCat29()
     * @uses OTHType::setCat30()
     * @uses OTHType::setCat31()
     * @uses OTHType::setRestrictiveDt()
     * @uses OTHType::setSurchargeAmt()
     * @uses OTHType::setNotUSACity()
     * @uses OTHType::setMissingRules()
     * @param bool $cat0
     * @param bool $cat1
     * @param bool $cat2
     * @param bool $cat3
     * @param bool $cat4
     * @param bool $cat5
     * @param bool $cat6
     * @param bool $cat7
     * @param bool $cat8
     * @param bool $cat9
     * @param bool $cat10
     * @param bool $cat11
     * @param bool $cat12
     * @param bool $cat13
     * @param bool $cat14
     * @param bool $cat15
     * @param bool $cat16
     * @param bool $cat17
     * @param bool $cat18
     * @param bool $cat19
     * @param bool $cat20
     * @param bool $cat21
     * @param bool $cat22
     * @param bool $cat23
     * @param bool $cat24
     * @param bool $cat25
     * @param bool $cat26
     * @param bool $cat27
     * @param bool $cat28
     * @param bool $cat29
     * @param bool $cat30
     * @param bool $cat31
     * @param string $restrictiveDt
     * @param float $surchargeAmt
     * @param bool $notUSACity
     * @param bool $missingRules
     */
    public function __construct(?bool $cat0 = null, ?bool $cat1 = null, ?bool $cat2 = null, ?bool $cat3 = null, ?bool $cat4 = null, ?bool $cat5 = null, ?bool $cat6 = null, ?bool $cat7 = null, ?bool $cat8 = null, ?bool $cat9 = null, ?bool $cat10 = null, ?bool $cat11 = null, ?bool $cat12 = null, ?bool $cat13 = null, ?bool $cat14 = null, ?bool $cat15 = null, ?bool $cat16 = null, ?bool $cat17 = null, ?bool $cat18 = null, ?bool $cat19 = null, ?bool $cat20 = null, ?bool $cat21 = null, ?bool $cat22 = null, ?bool $cat23 = null, ?bool $cat24 = null, ?bool $cat25 = null, ?bool $cat26 = null, ?bool $cat27 = null, ?bool $cat28 = null, ?bool $cat29 = null, ?bool $cat30 = null, ?bool $cat31 = null, ?string $restrictiveDt = null, ?float $surchargeAmt = null, ?bool $notUSACity = null, ?bool $missingRules = null)
    {
        $this
            ->setCat0($cat0)
            ->setCat1($cat1)
            ->setCat2($cat2)
            ->setCat3($cat3)
            ->setCat4($cat4)
            ->setCat5($cat5)
            ->setCat6($cat6)
            ->setCat7($cat7)
            ->setCat8($cat8)
            ->setCat9($cat9)
            ->setCat10($cat10)
            ->setCat11($cat11)
            ->setCat12($cat12)
            ->setCat13($cat13)
            ->setCat14($cat14)
            ->setCat15($cat15)
            ->setCat16($cat16)
            ->setCat17($cat17)
            ->setCat18($cat18)
            ->setCat19($cat19)
            ->setCat20($cat20)
            ->setCat21($cat21)
            ->setCat22($cat22)
            ->setCat23($cat23)
            ->setCat24($cat24)
            ->setCat25($cat25)
            ->setCat26($cat26)
            ->setCat27($cat27)
            ->setCat28($cat28)
            ->setCat29($cat29)
            ->setCat30($cat30)
            ->setCat31($cat31)
            ->setRestrictiveDt($restrictiveDt)
            ->setSurchargeAmt($surchargeAmt)
            ->setNotUSACity($notUSACity)
            ->setMissingRules($missingRules);
    }
    /**
     * Get Cat0 value
     * @return bool|null
     */
    public function getCat0(): ?bool
    {
        return $this->Cat0;
    }
    /**
     * Set Cat0 value
     * @param bool $cat0
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat0(?bool $cat0 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat0) && !is_bool($cat0)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat0, true), gettype($cat0)), __LINE__);
        }
        $this->Cat0 = $cat0;
        
        return $this;
    }
    /**
     * Get Cat1 value
     * @return bool|null
     */
    public function getCat1(): ?bool
    {
        return $this->Cat1;
    }
    /**
     * Set Cat1 value
     * @param bool $cat1
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat1(?bool $cat1 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat1) && !is_bool($cat1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat1, true), gettype($cat1)), __LINE__);
        }
        $this->Cat1 = $cat1;
        
        return $this;
    }
    /**
     * Get Cat2 value
     * @return bool|null
     */
    public function getCat2(): ?bool
    {
        return $this->Cat2;
    }
    /**
     * Set Cat2 value
     * @param bool $cat2
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat2(?bool $cat2 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat2) && !is_bool($cat2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat2, true), gettype($cat2)), __LINE__);
        }
        $this->Cat2 = $cat2;
        
        return $this;
    }
    /**
     * Get Cat3 value
     * @return bool|null
     */
    public function getCat3(): ?bool
    {
        return $this->Cat3;
    }
    /**
     * Set Cat3 value
     * @param bool $cat3
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat3(?bool $cat3 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat3) && !is_bool($cat3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat3, true), gettype($cat3)), __LINE__);
        }
        $this->Cat3 = $cat3;
        
        return $this;
    }
    /**
     * Get Cat4 value
     * @return bool|null
     */
    public function getCat4(): ?bool
    {
        return $this->Cat4;
    }
    /**
     * Set Cat4 value
     * @param bool $cat4
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat4(?bool $cat4 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat4) && !is_bool($cat4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat4, true), gettype($cat4)), __LINE__);
        }
        $this->Cat4 = $cat4;
        
        return $this;
    }
    /**
     * Get Cat5 value
     * @return bool|null
     */
    public function getCat5(): ?bool
    {
        return $this->Cat5;
    }
    /**
     * Set Cat5 value
     * @param bool $cat5
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat5(?bool $cat5 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat5) && !is_bool($cat5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat5, true), gettype($cat5)), __LINE__);
        }
        $this->Cat5 = $cat5;
        
        return $this;
    }
    /**
     * Get Cat6 value
     * @return bool|null
     */
    public function getCat6(): ?bool
    {
        return $this->Cat6;
    }
    /**
     * Set Cat6 value
     * @param bool $cat6
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat6(?bool $cat6 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat6) && !is_bool($cat6)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat6, true), gettype($cat6)), __LINE__);
        }
        $this->Cat6 = $cat6;
        
        return $this;
    }
    /**
     * Get Cat7 value
     * @return bool|null
     */
    public function getCat7(): ?bool
    {
        return $this->Cat7;
    }
    /**
     * Set Cat7 value
     * @param bool $cat7
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat7(?bool $cat7 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat7) && !is_bool($cat7)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat7, true), gettype($cat7)), __LINE__);
        }
        $this->Cat7 = $cat7;
        
        return $this;
    }
    /**
     * Get Cat8 value
     * @return bool|null
     */
    public function getCat8(): ?bool
    {
        return $this->Cat8;
    }
    /**
     * Set Cat8 value
     * @param bool $cat8
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat8(?bool $cat8 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat8) && !is_bool($cat8)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat8, true), gettype($cat8)), __LINE__);
        }
        $this->Cat8 = $cat8;
        
        return $this;
    }
    /**
     * Get Cat9 value
     * @return bool|null
     */
    public function getCat9(): ?bool
    {
        return $this->Cat9;
    }
    /**
     * Set Cat9 value
     * @param bool $cat9
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat9(?bool $cat9 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat9) && !is_bool($cat9)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat9, true), gettype($cat9)), __LINE__);
        }
        $this->Cat9 = $cat9;
        
        return $this;
    }
    /**
     * Get Cat10 value
     * @return bool|null
     */
    public function getCat10(): ?bool
    {
        return $this->Cat10;
    }
    /**
     * Set Cat10 value
     * @param bool $cat10
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat10(?bool $cat10 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat10) && !is_bool($cat10)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat10, true), gettype($cat10)), __LINE__);
        }
        $this->Cat10 = $cat10;
        
        return $this;
    }
    /**
     * Get Cat11 value
     * @return bool|null
     */
    public function getCat11(): ?bool
    {
        return $this->Cat11;
    }
    /**
     * Set Cat11 value
     * @param bool $cat11
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat11(?bool $cat11 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat11) && !is_bool($cat11)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat11, true), gettype($cat11)), __LINE__);
        }
        $this->Cat11 = $cat11;
        
        return $this;
    }
    /**
     * Get Cat12 value
     * @return bool|null
     */
    public function getCat12(): ?bool
    {
        return $this->Cat12;
    }
    /**
     * Set Cat12 value
     * @param bool $cat12
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat12(?bool $cat12 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat12) && !is_bool($cat12)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat12, true), gettype($cat12)), __LINE__);
        }
        $this->Cat12 = $cat12;
        
        return $this;
    }
    /**
     * Get Cat13 value
     * @return bool|null
     */
    public function getCat13(): ?bool
    {
        return $this->Cat13;
    }
    /**
     * Set Cat13 value
     * @param bool $cat13
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat13(?bool $cat13 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat13) && !is_bool($cat13)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat13, true), gettype($cat13)), __LINE__);
        }
        $this->Cat13 = $cat13;
        
        return $this;
    }
    /**
     * Get Cat14 value
     * @return bool|null
     */
    public function getCat14(): ?bool
    {
        return $this->Cat14;
    }
    /**
     * Set Cat14 value
     * @param bool $cat14
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat14(?bool $cat14 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat14) && !is_bool($cat14)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat14, true), gettype($cat14)), __LINE__);
        }
        $this->Cat14 = $cat14;
        
        return $this;
    }
    /**
     * Get Cat15 value
     * @return bool|null
     */
    public function getCat15(): ?bool
    {
        return $this->Cat15;
    }
    /**
     * Set Cat15 value
     * @param bool $cat15
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat15(?bool $cat15 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat15) && !is_bool($cat15)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat15, true), gettype($cat15)), __LINE__);
        }
        $this->Cat15 = $cat15;
        
        return $this;
    }
    /**
     * Get Cat16 value
     * @return bool|null
     */
    public function getCat16(): ?bool
    {
        return $this->Cat16;
    }
    /**
     * Set Cat16 value
     * @param bool $cat16
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat16(?bool $cat16 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat16) && !is_bool($cat16)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat16, true), gettype($cat16)), __LINE__);
        }
        $this->Cat16 = $cat16;
        
        return $this;
    }
    /**
     * Get Cat17 value
     * @return bool|null
     */
    public function getCat17(): ?bool
    {
        return $this->Cat17;
    }
    /**
     * Set Cat17 value
     * @param bool $cat17
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat17(?bool $cat17 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat17) && !is_bool($cat17)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat17, true), gettype($cat17)), __LINE__);
        }
        $this->Cat17 = $cat17;
        
        return $this;
    }
    /**
     * Get Cat18 value
     * @return bool|null
     */
    public function getCat18(): ?bool
    {
        return $this->Cat18;
    }
    /**
     * Set Cat18 value
     * @param bool $cat18
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat18(?bool $cat18 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat18) && !is_bool($cat18)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat18, true), gettype($cat18)), __LINE__);
        }
        $this->Cat18 = $cat18;
        
        return $this;
    }
    /**
     * Get Cat19 value
     * @return bool|null
     */
    public function getCat19(): ?bool
    {
        return $this->Cat19;
    }
    /**
     * Set Cat19 value
     * @param bool $cat19
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat19(?bool $cat19 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat19) && !is_bool($cat19)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat19, true), gettype($cat19)), __LINE__);
        }
        $this->Cat19 = $cat19;
        
        return $this;
    }
    /**
     * Get Cat20 value
     * @return bool|null
     */
    public function getCat20(): ?bool
    {
        return $this->Cat20;
    }
    /**
     * Set Cat20 value
     * @param bool $cat20
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat20(?bool $cat20 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat20) && !is_bool($cat20)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat20, true), gettype($cat20)), __LINE__);
        }
        $this->Cat20 = $cat20;
        
        return $this;
    }
    /**
     * Get Cat21 value
     * @return bool|null
     */
    public function getCat21(): ?bool
    {
        return $this->Cat21;
    }
    /**
     * Set Cat21 value
     * @param bool $cat21
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat21(?bool $cat21 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat21) && !is_bool($cat21)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat21, true), gettype($cat21)), __LINE__);
        }
        $this->Cat21 = $cat21;
        
        return $this;
    }
    /**
     * Get Cat22 value
     * @return bool|null
     */
    public function getCat22(): ?bool
    {
        return $this->Cat22;
    }
    /**
     * Set Cat22 value
     * @param bool $cat22
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat22(?bool $cat22 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat22) && !is_bool($cat22)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat22, true), gettype($cat22)), __LINE__);
        }
        $this->Cat22 = $cat22;
        
        return $this;
    }
    /**
     * Get Cat23 value
     * @return bool|null
     */
    public function getCat23(): ?bool
    {
        return $this->Cat23;
    }
    /**
     * Set Cat23 value
     * @param bool $cat23
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat23(?bool $cat23 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat23) && !is_bool($cat23)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat23, true), gettype($cat23)), __LINE__);
        }
        $this->Cat23 = $cat23;
        
        return $this;
    }
    /**
     * Get Cat24 value
     * @return bool|null
     */
    public function getCat24(): ?bool
    {
        return $this->Cat24;
    }
    /**
     * Set Cat24 value
     * @param bool $cat24
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat24(?bool $cat24 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat24) && !is_bool($cat24)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat24, true), gettype($cat24)), __LINE__);
        }
        $this->Cat24 = $cat24;
        
        return $this;
    }
    /**
     * Get Cat25 value
     * @return bool|null
     */
    public function getCat25(): ?bool
    {
        return $this->Cat25;
    }
    /**
     * Set Cat25 value
     * @param bool $cat25
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat25(?bool $cat25 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat25) && !is_bool($cat25)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat25, true), gettype($cat25)), __LINE__);
        }
        $this->Cat25 = $cat25;
        
        return $this;
    }
    /**
     * Get Cat26 value
     * @return bool|null
     */
    public function getCat26(): ?bool
    {
        return $this->Cat26;
    }
    /**
     * Set Cat26 value
     * @param bool $cat26
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat26(?bool $cat26 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat26) && !is_bool($cat26)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat26, true), gettype($cat26)), __LINE__);
        }
        $this->Cat26 = $cat26;
        
        return $this;
    }
    /**
     * Get Cat27 value
     * @return bool|null
     */
    public function getCat27(): ?bool
    {
        return $this->Cat27;
    }
    /**
     * Set Cat27 value
     * @param bool $cat27
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat27(?bool $cat27 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat27) && !is_bool($cat27)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat27, true), gettype($cat27)), __LINE__);
        }
        $this->Cat27 = $cat27;
        
        return $this;
    }
    /**
     * Get Cat28 value
     * @return bool|null
     */
    public function getCat28(): ?bool
    {
        return $this->Cat28;
    }
    /**
     * Set Cat28 value
     * @param bool $cat28
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat28(?bool $cat28 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat28) && !is_bool($cat28)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat28, true), gettype($cat28)), __LINE__);
        }
        $this->Cat28 = $cat28;
        
        return $this;
    }
    /**
     * Get Cat29 value
     * @return bool|null
     */
    public function getCat29(): ?bool
    {
        return $this->Cat29;
    }
    /**
     * Set Cat29 value
     * @param bool $cat29
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat29(?bool $cat29 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat29) && !is_bool($cat29)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat29, true), gettype($cat29)), __LINE__);
        }
        $this->Cat29 = $cat29;
        
        return $this;
    }
    /**
     * Get Cat30 value
     * @return bool|null
     */
    public function getCat30(): ?bool
    {
        return $this->Cat30;
    }
    /**
     * Set Cat30 value
     * @param bool $cat30
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat30(?bool $cat30 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat30) && !is_bool($cat30)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat30, true), gettype($cat30)), __LINE__);
        }
        $this->Cat30 = $cat30;
        
        return $this;
    }
    /**
     * Get Cat31 value
     * @return bool|null
     */
    public function getCat31(): ?bool
    {
        return $this->Cat31;
    }
    /**
     * Set Cat31 value
     * @param bool $cat31
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setCat31(?bool $cat31 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cat31) && !is_bool($cat31)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cat31, true), gettype($cat31)), __LINE__);
        }
        $this->Cat31 = $cat31;
        
        return $this;
    }
    /**
     * Get RestrictiveDt value
     * @return string|null
     */
    public function getRestrictiveDt(): ?string
    {
        return $this->RestrictiveDt;
    }
    /**
     * Set RestrictiveDt value
     * @param string $restrictiveDt
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setRestrictiveDt(?string $restrictiveDt = null): self
    {
        // validation for constraint: string
        if (!is_null($restrictiveDt) && !is_string($restrictiveDt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restrictiveDt, true), gettype($restrictiveDt)), __LINE__);
        }
        $this->RestrictiveDt = $restrictiveDt;
        
        return $this;
    }
    /**
     * Get SurchargeAmt value
     * @return float|null
     */
    public function getSurchargeAmt(): ?float
    {
        return $this->SurchargeAmt;
    }
    /**
     * Set SurchargeAmt value
     * @param float $surchargeAmt
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setSurchargeAmt(?float $surchargeAmt = null): self
    {
        // validation for constraint: float
        if (!is_null($surchargeAmt) && !(is_float($surchargeAmt) || is_numeric($surchargeAmt))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($surchargeAmt, true), gettype($surchargeAmt)), __LINE__);
        }
        $this->SurchargeAmt = $surchargeAmt;
        
        return $this;
    }
    /**
     * Get NotUSACity value
     * @return bool|null
     */
    public function getNotUSACity(): ?bool
    {
        return $this->NotUSACity;
    }
    /**
     * Set NotUSACity value
     * @param bool $notUSACity
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setNotUSACity(?bool $notUSACity = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notUSACity) && !is_bool($notUSACity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notUSACity, true), gettype($notUSACity)), __LINE__);
        }
        $this->NotUSACity = $notUSACity;
        
        return $this;
    }
    /**
     * Get MissingRules value
     * @return bool|null
     */
    public function getMissingRules(): ?bool
    {
        return $this->MissingRules;
    }
    /**
     * Set MissingRules value
     * @param bool $missingRules
     * @return \Travelport\UniversalRecord\StructType\OTHType
     */
    public function setMissingRules(?bool $missingRules = null): self
    {
        // validation for constraint: boolean
        if (!is_null($missingRules) && !is_bool($missingRules)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($missingRules, true), gettype($missingRules)), __LINE__);
        }
        $this->MissingRules = $missingRules;
        
        return $this;
    }
}
