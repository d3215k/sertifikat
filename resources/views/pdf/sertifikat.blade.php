<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1.2;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .page-break {
            page-break-after: always;
        }
        .mt-6 {
            margin-top: 1.5rem;
        }
        .text-gray-600 {
            color: rgb(82, 82, 91)
        }
        .relative {
            position: relative;
        }
        .items-end {
            align-items: flex-end;
        }
        .flex-col {
            flex-direction: column;
        }
        .flex {
            display: flex;
        }
        .right-\[50px\] {
            right: 50px;
        }
        .bottom-\[50px\] {
            bottom: 50px;
        }
        .absolute {
            position: absolute;
        }
        .text-success-600 {
            color: rgb(22, 163, 74)
        }
        .font-bold {
            font-weight: 700;
        }
        .font-semibold {
            font-weight: 600;
        }
        .mt-4 {
            margin-top: 1rem;
        }
        .mt-12 {
            margin-top: 3rem;
        }
        .mt-24 {
            margin-top: 6rem;
        }
        .p-12 {
            padding: 3rem;
        }
        .p-2 {
            padding: 0.5rem;
        }

        .bg-white {
            background-color: rgb(255 255 255);
        }
        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }
        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }
        .text-black {
            color: rgb(0, 0, 0)
        }
        body {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="relative text-gray-600 p-12">
        <h2 class="text-success-600 font-bold text-3xl mt-12" style="margin-top: 330px">Sertifikat Uji Kompetensi</h2>
        <p class="">Nomor : {{ $sertifikat->nomor }}</p>
        <p class="mt-6">Dengan ini menyatakan bahwa,</p>
        <p class="font-semibold text-black text-2xl uppercase">{{ $sertifikat->pemilik->nama }}</p>

        <p class="mt-6">Telah mengikuti Uji Kompetensi Keahlian pada Kompetensi Keahlian</p>
        <p class="font-semibold text-xl text-black">{{ $sertifikat->kompetensi->nama }}</p>
        <p class="mt-12">Sukabumi, {{ $sertifikat->tanggal_terbit }}</p>
        <p>Kepala SMK Plus Al-Farhan</p>

        <p class="mt-24 font-semibold text-black">Agus Syarif Hikmatulloh, S.Sos</p>
        <div class="absolute" style="bottom: 100px; right: 50px">
            <div class="bg-white p-2">
                <img src="data:image/png;base64, {!! $qrcode !!}">
            </div>
        </div>
        <p class="absolute" style="bottom: 70px; right: 50px">Sertifikat ini berlaku untuk : 3 (tiga) tahun</p>
    </div>
</body>
</html>
