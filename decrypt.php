<?php
function Decrypt($ciphertext, $key) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $decryptedText = '';

    for ($i = 0; $i < strlen($ciphertext); $i++) {
        $char = $ciphertext[$i];
        if (strpos($key, $char) !== false) {
            $charIndex = strpos($key, $char);
            $alphabetIndex = $charIndex % strlen($alphabet);
            $plainChar = $alphabet[$alphabetIndex];
            $decryptedText .= $plainChar;
        }
    }

    return $decryptedText;
}

?>
