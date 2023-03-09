function hitungBeratBadanIdeal()
            {
                var TinggiBadan = parseFloat(document.ffrom.Tinggi.value);
                var BeratBadan = parseFloat(document.ffrom.Berat.value);
                var hs = "";
     
                var Hitung = ((TinggiBadan - 100)-((TinggiBadan - 100)*(10/100)));
                if (Hitung == BeratBadan){
                    hs = "Your result suggests you are a healthy weight \nWe suggest you maintain your weight. We've got lots of workouts and activity ideas to help you stay active."
                } else  if (Hitung < BeratBadan){
                    hs="Your result suggests you are overweight \nYour health would really benefit from gradually losing just 5% of your current weight. The best way to lose weight is through a combination of diet and exercise.\nWe've got lots of resources to help you lose weight safely. If you're concerned about your weight speak to your GP."} 
                    else {
                        hs = "Your result suggests you are underweight\nIf you are receiving treatment for an eating disorder then this tool is NOT to be used \nThere may be an underlying medical cause for your weight, or your diet may not be providing you with enough calories. We suggest you discuss this with your GP."
                            }  
                document.fr.Hasil.value = hs;  
};