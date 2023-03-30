function hitungBeratBadanIdeal(){
    var TinggiBadan = parseFloat(document.ffrom.Tinggi.value);
    var BeratBadan = parseFloat(document.ffrom.Berat.value);
    var hs = "";
    var Hitung = ((TinggiBadan - 100)-((TinggiBadan - 100)*(10/100)));
                if (Hitung == BeratBadan){
                    hs = "Ideal"
                } else  if (Hitung < BeratBadan){
                    hs = "Overweight"
                } 
                    else {
                        hs = "Underweight"
                            }  
                document.fr.Hasil.value = hs;
}