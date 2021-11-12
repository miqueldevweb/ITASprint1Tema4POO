<?php
class PokerDice{
    private function throwDice(){
        return rand(1,6);
    }

    private function shapeName(){
        $result = self::throwDice();
        switch($result){
            case 1:
                echo "As";
                break;
            case 2:
                echo "K";
                break;
            case 3:
                echo "Q";
                break;
            case 4:
                echo "J";
                break;
            case 5:
                echo "7";
                break;
            case 6:
                echo "8";
                break;
        }
    }

    public function getTotalThrows($number){
        echo "Resultats d'una tirada de " . $number . " daus: ";
        for($i = 0; $i < $number; $i++){
            self::shapeName();
            echo " ";
        }
    }
}
?>