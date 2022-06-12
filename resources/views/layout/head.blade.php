<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/brand/favicon.ico">
  <link rel="icon" type="image/ico" href="{{ asset('assets') }}/img/brand/favicon.ico">
  <title>
    Managemen Data Madrasah
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link rel="stylesheet" id="pagestyle" href="{{ asset('assets') }}/css/argon-dashboard.css?v=2.0.2"  />
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" >
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets') }}/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="{{ asset('assets') }}vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  
</head>

{{-- <body class="g-sidenav-show bg-gray-100 g-sidenav-pinned"> --}}
<body class="g-sidenav-show bg-gray-100">
  @if ($title=='Dashboard')
    <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('{{ asset('assets') }}/img/profile-layout-header.jpg'); background-position-y: 50%;">
      <span class="mask bg-primary opacity-6"></span>
    </div>
  @else
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
  @endif
  
 