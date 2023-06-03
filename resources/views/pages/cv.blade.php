@extends('progenitor')

@section('content')
    <section id="cv-main">
        <h3 class="cv-heading">Curriculum Vitae</h3>
        <div id="cloud_pdf" style="width: 100%; height: 500px;"></div>
    </section>
    <script type="text/javascript" src="https://cloudpdf.io/viewer.min.js"></script>
    <script>
        const config = {
            documentId: 'f20b94f5-fa28-46d0-a8e7-470ec82c1b8e',
            darkMode: true,
            token: '' //add your server side generated security token or change your document permission to public
        };
        CloudPDF(config, document.getElementById('cloud_pdf')).then((instance) => {

        });
    </script>
@endsection
