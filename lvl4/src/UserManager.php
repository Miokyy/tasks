<?php

namespace Mioky\Lvl4;

class UserManager{
    /**
     * @var array<string, array{email: string , name: string}>
     */
    public array $users = [];
    public function addUser(string $email, string $name): bool {
        $domen = substr($email, -3);

        if ($domen !== ".ru"){
            echo "Почта не заканчивается на .ru".PHP_EOL;
            return false;
        }
        if (isset($this->users[$email])){
            echo "Такая почта уже существует".PHP_EOL;
            return false;
        }
        
        $this->users[$email] = [
            "email"=> $email,
            "name"=> $name
        ];
        echo "Создана почта $email пользователя $name".PHP_EOL;
        return true;
    }
    public function removeUser(string $email): void {
        unset($this->users[$email]);
        echo "Почта $email удалена".PHP_EOL;
    }
    /**
     * @return array{email: string , name: string}|string
     */
    public function getUser(string $email): array|string {
        return $this->users[$email] ?? "Такой почты не существует".PHP_EOL;
    }

}