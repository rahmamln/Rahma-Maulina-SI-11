<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Praktikum 5</title>
</head>
<body>
    <h1 class="h1 text-center m-3">BANK KRUD</h1>
<?php
class Account{
    public $nomor;
    protected $saldo;

    function __construct($nomor,$saldo){
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }
    public function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }
    public function witdrawl($uang){
        $this->saldo = $this->saldo - $uang;
    }
    public function cetak(){
        echo 'Nomor Account : '.$this->nomor;
        echo '<br>Saldonya : '.$this->saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }
}
class AccountBank extends Account{
    public $customer;

    function __construct($nomor,$saldo,$pemilik){
        parent::__construct($nomor,$saldo);
        $this->pemilik = $pemilik;
    }
    public function transfer($pemilik_tujuan,$uang){
        $pemilik_tujuan->deposit($uang);
        $this->witdrawl($uang);
    }
    public function cetak(){
        parent::cetak();
        echo '<br>Pemilik : '.$this->pemilik;
    }
}
    $pemilik1 = new AccountBank("C001", 6000000, "Ahmad");
    $pemilik2 = new AccountBank("C002", 5350000, "Budi");
    $pemilik3 = new AccountBank("C003", 2500000, "Kurniawan");
    $ar_pemilik = [$pemilik1,$pemilik2,$pemilik3];
?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>No Account</th>
            <th>Pemilik</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($ar_pemilik as $obj){
        ?>    
            <tr>
                <td><?= $nomor?></td>
                <td><?=$obj->nomor?></td>
                <td><?=$obj->pemilik?></td>
                <td><?=$obj->getSaldo()?></td>
            </tr>
        <?php
            $nomor++;    
            }
        ?>
    </tbody>
</table>
<?php
$pemilik1->deposit(1000000);
$pemilik1->transfer($pemilik3, 1500000);
$pemilik1->transfer($pemilik2, 500000);
$pemilik2->witdrawl(2500000);
echo "Ahmad nabung 1.000.000";
echo "<br>Ahmad transfer 1.500.000 ke kurniawan dan 500.000 ke Budi";
echo "<br>Budi tarik uang 2.500.000";
?>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>No Account</th>
            <th>Pemilik</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($ar_pemilik as $obj){
        ?>    
            <tr>
                <td><?= $nomor?></td>
                <td><?=$obj->nomor?></td>
                <td><?=$obj->pemilik?></td>
                <td><?=$obj->getSaldo()?></td>
            </tr>
        <?php
            $nomor++;    
            }
        ?>
    </tbody>
</table>
</body>
</html>