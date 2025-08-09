<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $budget = 300;
        
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);
        
        do {
            $keys = $this->getRandomKeys($lessThanBudgetSweets, $budget);
            $selected = $this->makeCombination($lessThanBudgetSweets, $keys);
            $totalPrice = array_sum(array_column($selected, 'price'));
        } while ($totalPrice > $budget);
        
        return $selected;
    }

    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        return array_values(array_filter($sweets, function ($sweet) use ($budget) {
            return $sweet['price'] <= $budget;
        }));
    }

    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {
        $count = count($lessThanBudgetSweets);
        if ($count < 3) {
            return [];
        }
        return array_rand($lessThanBudgetSweets, 3);
    }

    private function makeCombination(array $sweets, array $keys)
    {
         $result = [];
        foreach ((array)$keys as $key) {
            $result[] = $sweets[$key];
        }
        return $result;
    }
}