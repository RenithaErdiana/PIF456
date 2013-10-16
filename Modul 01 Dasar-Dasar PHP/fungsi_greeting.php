<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Function Greeting</title>         
    </head>
    <body bgcolor="#FFEBCD">
     
        <center>
            <?php
                $NamaBulan = array("01" => "Januari","02" => "Februari","03" => "Maret","04" => "April", "05" => "Mei","06" => "Juni","07" => "Juli", "08" => "Agustus","09" => "September","10" => "Oktober","11" => "November","12" => "Desember");
               
                $NamaHari = array("Sunday" => "Minggu","Monday" => "Senin","Tuesday" => "Selasa","Wednesday" => "Rabu","Thursday" => "Kamis","Friday" => "Jum'at","Saturday" => "Sabtu");
               
                $hari = date("l"); // (lowercase 'L') - day of the week, textual, long; i.e. "Friday"
                $tanggal = (int)date("d"); // day of the month, 2 digits with leading zeros; i.e. "01" to "31"
                $bulan = date("m"); // month; i.e. "01" to "12"
                $tahun = date("Y"); // year, 4 digits; i.e. "1999"
                $waktu = date("G : i : s"); // G - hour, 24-hour format without leading zeros; i.e. "0" to "23" ; i - minutes; i.e. "00" to "59" ; s - seconds; i.e. "00" to "59"
                               
                if(date("G") >= 4 AND date("G") < 12)
                {
                    $greeting  = "Selamat Pagi";                  
                }
                elseif(date("G") >= 12 AND date("G") < 17)
                {
                    $greeting  = " Selamat Siang";
                }
                else
                {
                    $greeting  = "Selamat  Malam";
                }
               
                echo "<h1>..:: <blink>$greeting</blink> ::..</h1>";                 
                echo"Copyright &copy; 2011 by Renitha Erdiana<br><br>";            
                echo "<h2>Sekarang adalah hari $NamaHari[$hari], tanggal $tanggal $NamaBulan[$bulan] $tahun</h2><br>";
                echo "<h2>Waktu menunjukkan pukul $waktu WIB</h2><br>";
            ?>
        </center>
        
    </body>
</html>