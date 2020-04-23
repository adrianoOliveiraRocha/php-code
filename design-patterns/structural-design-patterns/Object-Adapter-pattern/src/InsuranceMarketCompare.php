<?php

class InsuranceMarketCompare implements MarketCompare
{
  private $premium;

  public function __construct(float $limit, float $excess)
  {
    $this->premium = new Insurence($limit, $excess);
  }

  public function getAnnualPremium(): float
  {
    return $this->premium->getAnnualPremium();
  }

  public function getMonthlyPremium(): float
  {
    return $this->premium->getMonthlyPremium();
  }
}