<?php


namespace src\Service;


use GuzzleHttp\Client;
use DOMDocument;
use src\Fundamentus;

class FundamentusService
{
    const URL_FUNDAMENTUS = 'http://www.fundamentus.com.br/resultado.php';
    CONST POS_TICKER = 1;
    CONST POS_PRICE = 3;
    CONST POS_PL = 5;
    CONST POS_PVP = 7;
    CONST POS_PSR = 9;
    CONST POS_DY = 11;
    CONST POS_PATIVO = 13;
    CONST POS_PCAPGIRO = 15;
    CONST POS_PEBITDA = 17;
    CONST POS_PATIVOCIRCULANTELIQUIDO = 19;
    CONST POS_EVEBIT = 21;
    CONST POS_EVEBITDA = 23;
    CONST POS_MEBITDA = 25;
    CONST POS_MLIQUIDA = 27;
    CONST POS_LIQCORRENTE = 29;
    CONST POS_ROIC = 31;
    CONST POS_ROE = 33;
    CONST POS_LIQ2MESES = 35;
    CONST POS_PATRLIQUIDO = 37;
    CONST POS_DIVBRUTAPATRIMONIO = 39;
    CONST POS_CRESCRECEITA5ANOS = 41;

    private $curl;
    private $fundamentus;
    public function __construct()
    {
        $this->curl = new Client();
    }

    public function parseFundamentus(){
        $html = $this->curl->request('GET',self::URL_FUNDAMENTUS,
            ['headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201',
                'Accept' => 'text/html, text/plain, text/css, text/sgml, */*;q=0.01',
            ]]);

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