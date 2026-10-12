<?php
function cekZodiak($tgl) {
    $day = date('d', strtotime($tgl));
    $month = date('m', strtotime($tgl));

    if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) return "Aries ♈ - Pemberani & bucin";
    elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) return "Taurus ♉ - Setia pol";
    elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) return "Gemini ♊ - Mood swing";
    elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) return "Cancer ♋ - Baperan";
    elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) return "Leo ♌ - Suka dipuji";
    elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) return "Virgo ♍ - Perfeksionis";
    elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) return "Libra ♎ - Galauan";
    elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) return "Scorpio ♏ - Misterius";
    elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) return "Sagitarius ♐ - Bebas";
    elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) return "Capricorn ♑ - Ambis";
    elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) return "Aquarius ♒ - Unik";
    else return "Pisces ♓ - Halu romantis";
}
?>
