@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Jitsi Meet External API</h3></div>

                <div class="card-body">
                    <h1>meet.jit.si</h1>

                    <div id='meet'></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        const domain = 'meet.jit.si';
        const options = {
            roomName: 'AAAAAAAAAAAA',
            width: 700,
            height: 700,
            parentNode: document.querySelector('#meet')
        };
        const api = new JitsiMeetExternalAPI(domain, options);
    </script>
@endsection