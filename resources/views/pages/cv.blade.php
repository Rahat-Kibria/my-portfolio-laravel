@extends('progenitor')

@section('content')
    <section id="cv-main">
        <h3 class="cv-heading">Curriculum Vitae</h3>
        <object data="{{ asset('pdf/CV_Rahat_Kibria_V2.pdf') }}" type="application/pdf" width="100%" height="500px">
            <p>Unable to display PDF file. <a href="{{ asset('pdf/CV_Rahat_Kibria_V2.pdf') }}">Download</a> instead.
            </p>
        </object>
        <a class="cv-download-btn" href="{{ asset('pdf/CV_Rahat_Kibria_V2.pdf') }}">Download</a>
    </section>
@endsection
