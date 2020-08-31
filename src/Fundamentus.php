<?php


namespace src;


class Fundamentus
{
    private $ticker;
    private $price;
    private $pl;
    private $pvp;
    private $psr;
    private $dy;
    private $pAtivo;
    private $pCapGiro;
    private $pEbitda;
    private $pAtivoCirculanteLiquido;
    private $evEbit;
    private $evEbitda;
    private $mEbitda;
    private $mLiquida;
    private $liqCorrente;
    private $roic;
    private $roe;
    private $liq2meses;
    private $patrLiquido;
    private $divBrutaPatrimonio;
    private $crescReceita5Anos;

    /**
     * Fundamentus constructor.
     * @param $ticker
     * @param $price
     * @param $pl
     * @param $pvp
     * @param $psr
     * @param $dy
     * @param $pAtivo
     * @param $pCapGiro
     * @param $pEbitda
     * @param $pAtivoCirculanteLiquido
     * @param $evEbit
     * @param $evEbitda
     * @param $mEbitda
     * @param $mLiquida
     * @param $liqCorrente
     * @param $roic
     * @param $roe
     * @param $liq2meses
     * @param $patrLiquido
     * @param $divBrutaPatrimonio
     * @param $crescReceita5Anos
     */
    public function __construct($ticker, $price, $pl, $pvp, $psr, $dy, $pAtivo, $pCapGiro, $pEbitda, $pAtivoCirculanteLiquido, $evEbit, $evEbitda, $mEbitda, $mLiquida, $liqCorrente, $roic, $roe, $liq2meses, $patrLiquido, $divBrutaPatrimonio, $crescReceita5Anos)
    {
        $this->ticker = $ticker;
        $this->price = $price;
        $this->pl = $pl;
        $this->pvp = $pvp;
        $this->psr = $psr;
        $this->dy = $dy;
        $this->pAtivo = $pAtivo;
        $this->pCapGiro = $pCapGiro;
        $this->pEbitda = $pEbitda;
        $this->pAtivoCirculanteLiquido = $pAtivoCirculanteLiquido;
        $this->evEbit = $evEbit;
        $this->evEbitda = $evEbitda;
        $this->mEbitda = $mEbitda;
        $this->mLiquida = $mLiquida;
        $this->liqCorrente = $liqCorrente;
        $this->roic = $roic;
        $this->roe = $roe;
        $this->liq2meses = $liq2meses;
        $this->patrLiquido = $patrLiquido;
        $this->divBrutaPatrimonio = $divBrutaPatrimonio;
        $this->crescReceita5Anos = $crescReceita5Anos;
    }


    /**
     * @return mixed
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * @param mixed $ticker
     * @return Fundamentus
     */
    public function setTicker($ticker)
    {
        $this->ticker = $ticker;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return Fundamentus
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPl()
    {
        return $this->pl;
    }

    /**
     * @param mixed $pl
     * @return Fundamentus
     */
    public function setPl($pl)
    {
        $this->pl = $pl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPvp()
    {
        return $this->pvp;
    }

    /**
     * @param mixed $pvp
     * @return Fundamentus
     */
    public function setPvp($pvp)
    {
        $this->pvp = $pvp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPsr()
    {
        return $this->psr;
    }

    /**
     * @param mixed $psr
     * @return Fundamentus
     */
    public function setPsr($psr)
    {
        $this->psr = $psr;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDy()
    {
        return $this->dy;
    }

    /**
     * @param mixed $dy
     * @return Fundamentus
     */
    public function setDy($dy)
    {
        $this->dy = $dy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPAtivo()
    {
        return $this->pAtivo;
    }

    /**
     * @param mixed $pAtivo
     * @return Fundamentus
     */
    public function setPAtivo($pAtivo)
    {
        $this->pAtivo = $pAtivo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPCapGiro()
    {
        return $this->pCapGiro;
    }

    /**
     * @param mixed $pCapGiro
     * @return Fundamentus
     */
    public function setPCapGiro($pCapGiro)
    {
        $this->pCapGiro = $pCapGiro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPEbitda()
    {
        return $this->pEbitda;
    }

    /**
     * @param mixed $pEbitda
     * @return Fundamentus
     */
    public function setPEbitda($pEbitda)
    {
        $this->pEbitda = $pEbitda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPAtivoCirculanteLiquido()
    {
        return $this->pAtivoCirculanteLiquido;
    }

    /**
     * @param mixed $pAtivoCirculanteLiquido
     * @return Fundamentus
     */
    public function setPAtivoCirculanteLiquido($pAtivoCirculanteLiquido)
    {
        $this->pAtivoCirculanteLiquido = $pAtivoCirculanteLiquido;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEvEbit()
    {
        return $this->evEbit;
    }

    /**
     * @param mixed $evEbit
     * @return Fundamentus
     */
    public function setEvEbit($evEbit)
    {
        $this->evEbit = $evEbit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEvEbitda()
    {
        return $this->evEbitda;
    }

    /**
     * @param mixed $evEbitda
     * @return Fundamentus
     */
    public function setEvEbitda($evEbitda)
    {
        $this->evEbitda = $evEbitda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMEbitda()
    {
        return $this->mEbitda;
    }

    /**
     * @param mixed $mEbitda
     * @return Fundamentus
     */
    public function setMEbitda($mEbitda)
    {
        $this->mEbitda = $mEbitda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMLiquida()
    {
        return $this->mLiquida;
    }

    /**
     * @param mixed $mLiquida
     * @return Fundamentus
     */
    public function setMLiquida($mLiquida)
    {
        $this->mLiquida = $mLiquida;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLiqCorrente()
    {
        return $this->liqCorrente;
    }

    /**
     * @param mixed $liqCorrente
     * @return Fundamentus
     */
    public function setLiqCorrente($liqCorrente)
    {
        $this->liqCorrente = $liqCorrente;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoic()
    {
        return $this->roic;
    }

    /**
     * @param mixed $roic
     * @return Fundamentus
     */
    public function setRoic($roic)
    {
        $this->roic = $roic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoe()
    {
        return $this->roe;
    }

    /**
     * @param mixed $roe
     * @return Fundamentus
     */
    public function setRoe($roe)
    {
        $this->roe = $roe;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLiq2meses()
    {
        return $this->liq2meses;
    }

    /**
     * @param mixed $liq2meses
     * @return Fundamentus
     */
    public function setLiq2meses($liq2meses)
    {
        $this->liq2meses = $liq2meses;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPatrLiquido()
    {
        return $this->patrLiquido;
    }

    /**
     * @param mixed $patrLiquido
     * @return Fundamentus
     */
    public function setPatrLiquido($patrLiquido)
    {
        $this->patrLiquido = $patrLiquido;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDivBrutaPatrimonio()
    {
        return $this->divBrutaPatrimonio;
    }

    /**
     * @param mixed $divBrutaPatrimonio
     * @return Fundamentus
     */
    public function setDivBrutaPatrimonio($divBrutaPatrimonio)
    {
        $this->divBrutaPatrimonio = $divBrutaPatrimonio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCrescReceita5Anos()
    {
        return $this->crescReceita5Anos;
    }

    /**
     * @param mixed $crescReceita5Anos
     * @return Fundamentus
     */
    public function setCrescReceita5Anos($crescReceita5Anos)
    {
        $this->crescReceita5Anos = $crescReceita5Anos;
        return $this;
    }

    public static function normalize($value){
        $sanitizedValue = self::sanitize($value);
        return self::convertNumber($sanitizedValue);
    }
    private static function convertNumber($value){
        return (double)str_replace(',','.',$value);
    }
    private static function sanitize($value){
        return preg_replace('/[^\d\-\,]/', '',$value);
    }

}