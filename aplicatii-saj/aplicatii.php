<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Colectează datele din formular
    $nume = $_POST['nume'];
    $varsta = $_POST['varsta'];
    $cnp = $_POST['cnp'];
    $sex = $_POST['sex'];
    $motiv = $_POST['motiv'];
    $alegere = $_POST['alegere'];
    $apt = $_POST['apt'];
    $descriere = $_POST['descriere'];
    
    $nume_ooc = $_POST['nume_ooc'];
    $varsta_ooc = $_POST['varsta_ooc'];
    $ore_server = $_POST['ore_server'];
    $ore_pe_zi = $_POST['ore_pe_zi'];
    $inactivitate = $_POST['inactivitate'];
    $regulament = $_POST['regulament'];
    $factiuni = $_POST['factiuni'];
    $timp_fivem = $_POST['timp_fivem'];
    $descriere_ooc = $_POST['descriere_ooc'];

    // Salvarea într-un fișier text (exemplu simplu)
    $file = fopen("aplicatii-saj/aplicatii.txt", "a");
    $data = "Nume: $nume\nVârsta: $varsta\nCNP: $cnp\nSex: $sex\nMotiv: $motiv\nAlegere: $alegere\nApt: $apt\nDescriere: $descriere\n\n";
    $data .= "Nume OOC: $nume_ooc\nVârsta OOC: $varsta_ooc\nOre server: $ore_server\nOre pe zi: $ore_pe_zi\nInactivitate: $inactivitate\nRegulament: $regulament\nFactiuni: $factiuni\nTimp FiveM: $timp_fivem\nDescriere OOC: $descriere_ooc\n";
    $data .= "----------------------\n";

    fwrite($file, $data);
    fclose($file);

    echo "Aplicația a fost trimisă cu succes!";
}
?>
