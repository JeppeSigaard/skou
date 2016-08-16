<?php
class skou_pdf extends FPDF{

    function greenFill($color){
        if($color === '1'){
            $this->setFillColor(126, 182, 103);
        }

        if($color === '2'){
            $this->setFillColor(84, 151, 155);
        }

        if($color === '3'){
            $this->setFillColor(0, 100, 106);
        }
    }

    function greenText($color){
        if($color === '1'){
            $this->setTextColor(126, 182, 103);
        }

        if($color === '2'){
            $this->setTextColor(84, 151, 155);
        }

        if($color === '3'){
            $this->setTextColor(0, 100, 106);
        }
    }


    function greenDraw($color){
        if($color === '1'){
            $this->setDrawColor(126, 182, 103);
        }

        if($color === '2'){
            $this->setDrawColor(84, 151, 155);
        }

        if($color === '3'){
            $this->setDrawColor(0, 100, 106);
        }
    }

    function dot(){
        return utf8_decode('   ·   ');
    }
}
