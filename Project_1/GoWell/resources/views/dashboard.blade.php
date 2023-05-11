@extends('layout.sidebar')
@section('page')
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js'></script>
        <div class="blank">
            <div class="container3">
                <div class="data_shape">
                    <div class="column">
                        <center>
                        <p id="jenis">Glucose</p>
                        <p id="angka">76</p>
                        <p id="satuan">mg/dl</p>
                        </center>
                    </div>
                </div>
                <div class="bar"><canvas id="histogram1" width="698" height="250"></canvas>
                </div>
            </div>
            <div class="container3">
                <div class="data_shape">
                    <div class="column">
                        <center>
                        <p id="jenis">Cholesterol</p>
                        <p id="angka">67</p>
                        <p id="satuan">mg/dl</p>
                        </center>
                    </div>
                </div>
                <div class="bar">
                    <canvas id="histogram2" width="698" height="250"></canvas>
                </div>
            </div>
            <div class="container3">
                <div class="data_shape">
                    <div class="column">
                        <center>
                        <p id="jenis">Blood Pres</p>
                        <p id="angka">98</p>
                        <p id="satuan">mmHg</p>
                        </center>
                    </div>

                </div>
                <div class="bar">
                    <canvas id="histogram3" width="698" height="250"></canvas>
                </div>
            </div>
            <div class="container3">
                <div class="data_shape">
                    <div class="column">
                        <center>
                        <p id="jenis">Urid Acid</p>
                        <p id="angka">4.5</p>
                        <p id="satuan">mmHg</p>
                        </center>
                    </div>

                </div>
                <div class="bar"><canvas id="histogram4" width="698" height="250"></canvas>
                </div>
            </div>
        
        </div>
        <script src="js/his.js"></script>
@endsection