<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
            @font-face {
    font-family: Poppins-Regular;
    src: url(https://colorlib.com/etc/tb/Table_Responsive_v2/fonts/poppins/Poppins-Regular.ttf)
}

@font-face {
    font-family: Poppins-Bold;
    src: url(https://colorlib.com/etc/tb/Table_Responsive_v2/fonts/poppins/Poppins-Bold.ttf)
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

body,
html {
    height: 100%;
    font-family: sans-serif
}

a {
    margin: 0;
    transition: all .4s;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s
}

a:focus {
    outline: none!important
}

a:hover {
    text-decoration: none
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0
}

p {
    margin: 0
}

ul,
li {
    margin: 0;
    list-style-type: none
}

input {
    display: block;
    outline: none;
    border: none!important
}

textarea {
    display: block;
    outline: none
}

textarea:focus,
input:focus {
    border-color: transparent!important
}

button {
    outline: none!important;
    border: none;
    background: 0 0
}

button:hover {
    cursor: pointer
}

iframe {
    border: none!important
}

.limiter {
    width: 100%;
    margin: 0 auto
}

.container-table100 {
    width: 100%;
    min-height: 100vh;
    background: #c4d3f6;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding: 33px 30px
}

.wrap-table100 {
    width: 100%;
    border-radius: 10px;
    overflow: hidden
}
.view-employee{
    height: 20px;
    width: 40px;
    background: green;
    color: white;
    padding: 10px;
    border-radius: 10px;
}
.edit-employee{
    height: 20px;
    width: 40px;
    background: #008CBA;
    color: white;
    padding: 10px;
    border-radius: 10px;
}
.delete-employee{
    height: 20px;
    width: 40px;
    background: red;
    color: white;
    padding: 10px;
    border-radius: 10px;
}
.table {
    width: 100%;
    display: table;
    margin: 0
}

@media screen and (max-width:768px) {
    .table {
        display: block
    }
}

.row {
    display: table-row;
    background: #fff
}

.row.header {
    color: #fff;
    background: #6c7ae0
}

@media screen and (max-width:768px) {
    .row {
        display: block
    }
    .row.header {
        padding: 0;
        height: 0
    }
    .row.header .cell {
        display: none
    }
    .row .cell:before {
        font-family: Poppins-Bold;
        font-size: 12px;
        color: gray;
        line-height: 1.2;
        text-transform: uppercase;
        font-weight: unset!important;
        margin-bottom: 13px;
        content: attr(data-title);
        min-width: 98px;
        display: block
    }
}

.cell {
    display: table-cell
}

@media screen and (max-width:768px) {
    .cell {
        display: block
    }
}

.row .cell {
    font-family: Poppins-Regular;
    font-size: 15px;
    color: #666;
    line-height: 1.2;
    font-weight: unset!important;
    padding-top: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #f2f2f2
}

.row.header .cell {
    font-family: Poppins-Regular;
    font-size: 18px;
    color: #fff;
    line-height: 1.2;
    font-weight: unset!important;
    padding-top: 19px;
    padding-bottom: 19px
}

.row .cell:nth-child(1) {
    width: 360px;
    padding-left: 40px
}

.row .cell:nth-child(2) {
    width: 160px
}

.row .cell:nth-child(3) {
    width: 250px
}

.row .cell:nth-child(4) {
    width: 190px
}

.table,
.row {
    width: 100%!important
}

.row:hover {
    background-color: #ececff;
    cursor: pointer
}

@media(max-width:768px) {
    .row {
        border-bottom: 1px solid #f2f2f2;
        padding-bottom: 18px;
        padding-top: 30px;
        padding-right: 15px;
        margin: 0
    }
    .row .cell {
        border: none;
        padding-left: 30px;
        padding-top: 16px;
        padding-bottom: 16px
    }
    .row .cell:nth-child(1) {
        padding-left: 30px
    }
    .row .cell {
        font-family: Poppins-Regular;
        font-size: 18px;
        color: #555;
        line-height: 1.2;
        font-weight: unset!important
    }
    .table,
    .row,
    .cell {
        width: 100%!important
    }
}
        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
