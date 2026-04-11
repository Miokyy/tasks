<?php

namespace Mioky\Lvl4;

class BankAccount
{
    public float $balance = 0;
    /**
     * @var array<int, array{name: string, time: string, message: string}>
     */
    public array $transactions = [];

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
        echo "На баланс зачислено $amount рублей. Баланс: $this->balance рублей." . PHP_EOL;
        $this->transactions[] = [
            "name" => "Пополнение",
            "time" => date('Y-m-d H:i:s'),
            "message" => "Пополнено $amount рублей. Баланс: $this->balance рублей."
        ];
    }
    public function withdraw(float $amount): void
    {
        if ($this->balance - $amount > 0) {
            $this->balance -= $amount;
            echo "С баланса снято $amount рублей. Баланс: $this->balance рублей." . PHP_EOL;
            $this->transactions[] = [
                "name" => "Списание",
                "time" => date('Y-m-d H:i:s'),
                "message" => "Снято $amount рублей. Баланс: $this->balance рублей."
            ];
        } else {
            echo "На балансе недостаточно средств." . PHP_EOL;
        }
    }
    /**
     * @return array<int, array{name: string, time: string, message: string}>
     */
    public function getStatement(): array
    {
        return $this->transactions;
    }
}
