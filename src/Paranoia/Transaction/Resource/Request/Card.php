<?php
namespace Paranoia\Transaction\Resource\Request;

use Paranoia\Transaction\Resource\ResourceInterface;

class Card implements ResourceInterface
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $securityCode;

    /**
     * @var integer
     */
    private $expireYear;

    /**
     * @var integer
     */
    private $expireMonth;

    /**
     * @param int $expireMonth
     * @return Card
     */
    public function setExpireMonth($expireMonth)
    {
        $this->expireMonth = $expireMonth;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpireMonth()
    {
        return $this->expireMonth;
    }

    /**
     * @param int $expireYear
     * @return Card
     */
    public function setExpireYear($expireYear)
    {
        $this->expireYear = $expireYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpireYear()
    {
        return $this->expireYear;
    }

    /**
     * @param string $number
     * @return Card
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $securityCode
     * @return Card
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }


}