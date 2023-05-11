@extends('layout.sidebar')
@section('page')
    <script src="js/calculator.js"></script>
        <div class="blank">
            <div class="shape2">
                <div class="shape">
                    <div class="column">
                        <center>
                            <p>Input your <br>
                                Weight and Height</p>
                            <form name="ffrom">
                            <input type="text" name="Tinggi" placeholder="Height " class="form">
                            <input type="text" name="Berat"  placeholder="Weight " class="form">
                            <input type="button" value="Count" onclick="hitungBeratBadanIdeal()" id="Count">
                            <input type="reset" value="Reset" id="Hitung-reset">
                            </form>
    
                        </center>
                    </div>
                    
                </div>
                    <div class="shape3">
                        <div class="column">
                        <center>
                            <form name="fr">
                                <p id="Hasil-hitung">Result</p>
                            <textarea name="Hasil" id="" cols="20" rows="10"></textarea>
                            <input type="reset" value="Reset" id="Hasil-reset">
                            </form>
                        </center>
                    </div>
                    </div>

            </div>
                <img src="" height="200" name="gambar" width="150" id="gambar">
             <p class="recommend">Our recomendations</p>
             <p class="recommend">Understanding your result</p>
             <p class="trivia"><span>Underweight</span><br>
                Being underweight could be a sign you're not eating enough or you may be ill. If you're underweight, a GP can help.
            </p>
            <p class="trivia"><span>Underweight</span><br>
                Being underweight could be a sign you're not eating enough or you may be ill. If you're underweight, a GP can help.
            </p>
            <p class="trivia"><span>Healthyweight</span><br>
                Keep up the good work! For tips on maintaining a healthy weight, check out the food and diet and fitness sections.
            </p>
            <p class="trivia"><span>Overweight</span><br>
                The best way to lose weight if you're obese is through a combination of diet and exercise, and, in some cases, medicines. See a GP for help and advice.
            </p>
        </div>
@endsection