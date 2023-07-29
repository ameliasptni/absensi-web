<x-app-layout>
    <div class="card">
        <div class="card-header">
            <strong class="card-title">{{ __("QR Code Absensi") }}</strong>
        </div>
        <div class="card-body">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1" style="border-radius: 6px">
                    <div class="card-body">
                        <div id="qrcode"></div>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" style="border-radius: 6px">Share</button>
        </div>
    </div>

    <script>
        console.log("https://8090-113-11-180-8.ngrok-free.app/test?token={{ $name }}");
        new QRCode(document.getElementById("qrcode"),
            "https://8090-113-11-180-8.ngrok-free.app/test?token={{ $name }}");
    </script>

</x-app-layout>
