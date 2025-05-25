@php

use App\Models\Web;

$web = Web::first();

@endphp
<footer class="footer footer-static footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
       <span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="#">© {{ date('Y') }} {{ $web->title }}.</span>

    </p>
</footer>
