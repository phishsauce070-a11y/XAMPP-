<?php
$nasabah = $_POST['nasabah'];
$saldo = $_POST['saldo'];
$deposito = ($saldo - ($saldo * 0.03)*11);

echo "<p>Nama Nasabah Bank Anda adalah ".$nasabah."<p>";
echo "<p>Saldo Awal Bank Anda adalah ".$saldo."<p>";
echo "<p>Hasil Deposito Nasabah Anda adalah ".$deposito."<p>";
?>