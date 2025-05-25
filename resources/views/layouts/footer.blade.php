@php

use App\Models\Web;

$web = Web::first();

@endphp
<footer class="footer footer-static footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">{{ $web->footer }}</span>
    </p>
</footer>

