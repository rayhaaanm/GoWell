@extends('layout.sidebar')
@section('page')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js'></script>
    <div class="blank">
        <div class="container3">
            <div class="data_shape">
                <div class="column">
                    <center>
                        <p id="jenis">Glucose</p>
                        @if ($Glucose)
                            <p id="angka">{{ $Glucose->angka }}</p>
                        @else
                            <p id="angka">N/A</p>
                        @endif
                        <p id="satuan">mg/dl</p>
                        <form action="/dashboard/Glucose" method="GET">
                            @csrf
                            <select name="tahun" id="Glucose">
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>

                            </select>
                            <button type="submit" class="btn btn-light">Submit</button>
                        </form>
                    </center>
                </div>
            </div>
            <div class="bar">
                <canvas id="histogram1" width="698" height="250"></canvas>
            </div>
        </div>
        <div class="container3">
            <div class="data_shape">
                <div class="column">
                    <center>
                        <p id="jenis">Cholesterol</p>
                        @if ($Kolesterol)
                            <p id="angka">{{ $Kolesterol->angka }}</p>
                        @else
                            <p id="angka">N/A</p>
                        @endif
                        <p id="satuan">mg/dl</p>
                        <form action="/dashboard/Kolesterol" method="GET">
                            @csrf
                            <select name="tahun" id="Kolesterol">
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>

                            </select>
                            <button type="submit" class="btn btn-light">Submit</button>
                        </form>
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
                        <p id="jenis">Blood Press</p>
                        @if ($BloodPress)
                            <p id="angka">{{ $BloodPress->angka }}</p>
                        @else
                            <p id="angka">N/A</p>
                        @endif
                        <p id="satuan">mmHg</p>
                        <form action="/dashboard/BloodPress" method="GET">
                            @csrf
                            <select name="tahun" id="BloodPress">
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>

                            </select>
                            <button type="submit" class="btn btn-light">Submit</button>
                        </form>
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
                        @if ($UridAcid)
                            <p id="angka">{{ $UridAcid->angka }}</p>
                        @else
                            <p id="angka">N/A</p>
                        @endif
                        <p id="satuan">mmHg</p>
                        <form action="/dashboard/UridAcid" method="GET">
                            @csrf
                            <select name="tahun" id="UridAcid">
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>

                            </select>
                            <button type="submit" class="btn btn-light">Submit</button>
                        </form>
                    </center>
                </div>

            </div>
            <div class="bar">
                <canvas id="histogram4" width="698" height="250"></canvas>
            </div>
        </div>
    </div>
    <script src="js/his.js"></script>
@endsection
