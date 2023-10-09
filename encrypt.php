<?php
function Encrypt($plaintext, $key) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $encryptedText = '';

    for ($i = 0; $i < strlen($plaintext); $i++) {
        $char = $plaintext[$i];
        if (strpos($alphabet, $char) !== false) {
            $charIndex = strpos($alphabet, $char);
            $keyChar = $key[$charIndex % strlen($key)];
            $encryptedText .= $keyChar;
        }
    }

    return $encryptedText;
}

if(isset($_POST['submit'])) {
    $plainText = strtolower($_POST['plainText']);
    $key = strtolower($_POST['key']);

    $abjad = "abcdefghijklmnopqrstuvwxyz";
    $hasil = $key . $abjad;
    $key = implode("", array_unique(str_split($hasil)));

    $hasilEnkripsi = Encrypt(str_replace(" ", "", $plainText), $key);
}
