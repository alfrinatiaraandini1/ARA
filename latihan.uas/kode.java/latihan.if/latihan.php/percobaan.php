<?php
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah hari kerja.";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Hari ini adalah hari libur!";
        break;
    default:
        echo "Hari biasa, tetap semangat.";
        break;
}
?>
3. Percabangan if di Python
Python memiliki gaya penulisan yang sangat bersih. Python tidak menggunakan kurung kurawal, melainkan menggunakan titik dua (:) dan indentasi (spasi ke dalam). Selain itu, else if disingkat menjadi elif.

Python

# Contoh mengecek status suhu
suhu = 32

if suhu > 35:
    print("Cuaca sangat panas!")
elif suhu >= 25 and suhu <= 35:
    print("Cuaca cukup hangat.")
else:
    print("Cuaca terasa dingin.")