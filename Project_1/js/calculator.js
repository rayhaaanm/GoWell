function hitungBeratBadanIdeal()
            {
                var TinggiBadan = parseFloat(document.ffrom.Tinggi.value);
                var BeratBadan = parseFloat(document.ffrom.Berat.value);
                var hs = "";
                var num = 0;
                img1 = new Image()
                img1.src = 'images/Chart.png'
                img2 = new Image()
                img2.src = 'images/Chat.png'
                img3 = new Image()
                img3.src = 'images/News.png'
     
                var Hitung = ((TinggiBadan - 100)-((TinggiBadan - 100)*(10/100)));
                if (Hitung == BeratBadan){
                    hs = "Your result suggests you are a healthy weight \n\nWe suggest you maintain your weight. We've got lots of workouts and activity ideas to help you stay active."
                    document.gambar.src = img1.src
                } else  if (Hitung < BeratBadan){
                    hs = "Your result suggests you are overweight \n\nYour health would really benefit from gradually losing just 5% of your current weight. The best way to lose weight is through a combination of diet and exercise.\n\nWe've got lots of resources to help you lose weight safely. If you're concerned about your weight speak to your GP."
                    document.gambar.src = img2.src
                } 
                    else {
                        hs = "Your result suggests you are underweight\n\nIf you are receiving treatment for an eating disorder then this tool is NOT to be used \n\nThere may be an underlying medical cause for your weight, or your diet may not be providing you with enough calories. We suggest you discuss this with your GP."
                        document.gambar.src = img3.src
                            }  
                document.fr.Hasil.value = hs;
                
};