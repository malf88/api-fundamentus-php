<?php


namespace src\Service;


use GuzzleHttp\Client;
use DOMDocument;
use src\Fundamentus;

class FundamentusService
{
    const URL_FUNDAMENTUS = 'http://www.fundamentus.com.br/resultado.php';
    CONST POS_TICKER = 0;
    CONST POS_PRICE = 2;
    CONST POS_PL = 4;
    CONST POS_PVP = 6;
    CONST POS_PSR = 8;
    CONST POS_DY = 10;
    CONST POS_PATIVO = 12;
    CONST POS_PCAPGIRO = 14;
    CONST POS_PEBITDA = 16;
    CONST POS_PATIVOCIRCULANTELIQUIDO = 18;
    CONST POS_EVEBIT = 20;
    CONST POS_EVEBITDA = 22;
    CONST POS_MEBITDA = 24;
    CONST POS_MLIQUIDA = 26;
    CONST POS_LIQCORRENTE = 28;
    CONST POS_ROIC = 30;
    CONST POS_ROE = 32;
    CONST POS_LIQ2MESES = 34;
    CONST POS_PATRLIQUIDO = 36;
    CONST POS_DIVBRUTAPATRIMONIO = 38;
    CONST POS_CRESCRECEITA5ANOS = 40;

    private $curl;
    private $fundamentus;
    public function __construct()
    {
        $this->curl = new Client();
    }

    public function parseFundamentus(){
        $html = $this->curl->get(self::URL_FUNDAMENTUS);

        $domDocument = new DOMDocument();
        $internalErrors = libxml_use_internal_errors(true);
        $domDocument->loadHTML($html->getBody()->getContents());
        $table = $domDocument->getElementById('resultado')->getElementsByTagName('tr');

        libxml_use_internal_errors($internalErrors);
        $fundamentus = [];
        for($i = 1; $i < $table->length; $i++){
            $valores = $table->item($i)->childNodes;
            //var_dump($valores->count());
            $fundamentu = new Fundamentus(
                $valores->item(self::POS_TICKER)->nodeValue,//0
                Fundamentus::normalize($valores->item(self::POS_PRICE)->nodeValue),//2
                Fundamentus::normalize($valores->item(self::POS_PL)->nodeValue),//4
                Fundamentus::normalize($valores->item(self::POS_PVP)->nodeValue),//6
                Fundamentus::normalize($valores->item(self::POS_PSR)->nodeValue),//8
                Fundamentus::normalize($valores->item(self::POS_DY)->nodeValue),//10
                Fundamentus::normalize($valores->item(self::POS_PATIVO)->nodeValue),//12
                Fundamentus::normalize($valores->item(self::POS_PCAPGIRO)->nodeValue),//14
                Fundamentus::normalize($valores->item(self::POS_PEBITDA)->nodeValue),//16
                Fundamentus::normalize($valores->item(self::POS_PATIVOCIRCULANTELIQUIDO)->nodeValue),//18
                Fundamentus::normalize($valores->item(self::POS_EVEBIT)->nodeValue),//20
                Fundamentus::normalize($valores->item(self::POS_EVEBITDA)->nodeValue),//22
                Fundamentus::normalize($valores->item(self::POS_MEBITDA)->nodeValue),//24
                Fundamentus::normalize($valores->item(self::POS_MLIQUIDA)->nodeValue),//26
                Fundamentus::normalize($valores->item(self::POS_LIQCORRENTE)->nodeValue),//28
                Fundamentus::normalize($valores->item(self::POS_ROIC)->nodeValue),//30
                Fundamentus::normalize($valores->item(self::POS_ROE)->nodeValue),//32
                Fundamentus::normalize($valores->item(self::POS_LIQ2MESES)->nodeValue),//34
                Fundamentus::normalize($valores->item(self::POS_PATRLIQUIDO)->nodeValue),//36
                Fundamentus::normalize($valores->item(self::POS_DIVBRUTAPATRIMONIO)->nodeValue),//38
                Fundamentus::normalize($valores->item(self::POS_CRESCRECEITA5ANOS)->nodeValue)//40

            );

            $fundamentus[] = $fundamentu;

        }
        $this->fundamentus = $fundamentus;
        return $this->fundamentus;
    }
    public function find($ticker){
        foreach ($this->fundamentus as $fundamentu){
            if($fundamentu->getTicker() == $ticker){
                return $fundamentu;
            }
        }
    }
}