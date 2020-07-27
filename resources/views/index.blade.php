@extends('/layout/main')

@section('title', 'Welcome | PT Nila Merkindo Utama')

@section('container')
    <div class="container-fluid" id="conWelcome">
        <h1>WELCOME</h1>
        <div class="conHead">
            <p><b>Dear Innovation Partner , we serve from high quality source for your needs and be your reliable partner.</b></p>
            <p>Let us build lasting partnerships between the Indonesia’s market and the world.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <img src="{{asset('/image/product/bitterOrange.jpg')}}" alt="Bitter Orange">
                    <h4 align="center">Bitter Orange</h4>
                </div>
                <div class="col-xl-3">
                    <img src="{{asset('/image/product/bloodOrange.jpg')}}" alt="Blood Orange">
                    <h4 align="center">Blood Orange</h4>
                </div>
                <div class="col-xl-3">
                    <img src="{{asset('/image/product/grapeFruit.jpg')}}" alt="Grape Fruit">
                    <h4 align="center">Grape Fruit</h4>
                </div>
                <div class="col-xl-3">
                    <img src="{{asset('/image/product/tangerine.jpg')}}" alt="Tangerine">
                    <h4 align="center">Tangerine</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <img src="{{asset('/image/product/lemon.jpg')}}" alt="Lemon">
                    <h4 align="center">Lemon</h4>
                </div>
                <div class="col-xl-3">
                    <img src="{{asset('/image/product/lime.jpg')}}" alt="Lime">
                    <h4 align="center">Lime</h4>
                </div>
                <div class="col-xl-3">
                    <img src="{{asset('/image/product/sweetOrange.jpg')}}" alt="Sweet Orange">
                    <h4 align="center">Sweet Orange</h4>
                </div>
                <div class="col-xl-3">
                    <img src="{{asset('/image/product/rsz_jerukhijau.jpg')}}" alt="Jeruk Hijau">
                    <h4 align="center">Jeruk Hijau</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <img src="{{asset('/image/product/bungaEchinacea.jpg')}}" alt="Bunga Echinacea">
                    <h4 align="center">Echinacea fresh pressed juice dry powder</h4>
                </div>
                <div class="col-xl-4">
                    <img src="{{asset('/image/product/daunGreentea.jpg')}}" alt="Green Tea">
                    <h4 align="center">High Quality Green tea</h4>
                </div>
                <div class="col-xl-4">
                    <img src="{{asset('/image/product/kumisKucing.jpeg')}}" alt="Java Tea">
                    <h4 align="center">High Quality Java Tea</h4>
                </div>
            </div>
        </div>
    </div>
@endsection