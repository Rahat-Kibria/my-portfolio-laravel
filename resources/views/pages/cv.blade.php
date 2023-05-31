@extends('progenitor')

@section('content')
    <section id="cv-main">
        <h3 class="cv-heading">Curriculum Vitae</h3>
        <div id="viewer" style="width: 100%; height: 1000px;"></div>
    </section>

    <script type="text/javascript" src="https://cloudpdf.io/viewer.min.js"></script>
    <script>
        const config = {
            documentId: "6564326a-5cc2-4291-905e-307c8d0abbff",
            darkMode: true,
            token: "", //add your server side generated security token or change your document permission to public
        };
        CloudPDF(config, document.getElementById("viewer")).then((instance) => {});
    </script>
@endsection
