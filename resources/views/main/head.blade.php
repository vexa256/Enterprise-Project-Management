        @include('config.config')
         <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>The Ministry of Water and Environment (MWE), through its International and Transboundary Water Affairs Department coordinates national efforts to manage shared water resources with the overall objective to secure and safeguard Uganda’s interests in the shared water resources and therefore ensure availability of water to meet her ecosystem and national development needs. The strategic areas of focus are through partnership and cooperative management initiatives through Lake Victoria Basin Commission, (LVBC), Nile Basin Initiative (NBI), Nile Equatorial Lakes Subsidiary Action Program (NELSAP), African Ministers’ Council on Water (AMCOW), Inter-governmental Agency for Development (IGAD) Initiatives, Global Water Partnerships (GWP) and World Meteorological Organization (WMO).</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
      <meta name="csrf-token" content="{{ csrf_token() }}">

   
   

    <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/metismenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/datatables/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/datatables/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/datatables/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/jquery-steps/jquery.steps.css')}}">
    

    <style type="text/css">.jesus {
             webkit-box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3); box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3);
        }

        .table {

                 webkit-box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3); box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3);

        }



        .card {

                 webkit-box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3); box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3);

        }


        .me_timo{

            margin-bottom: 5% !important;
        }
        

.table>tbody>tr>td, .table>tfoot>tr>td, .table>thead>tr>td {
    padding: 6px 6px !important;
}

    .table {

        font-size: 12px !important;
    }
        <?php


        $data = Auth::user()->role;

            if($data!='Admin'){

                    echo ".timo{display:none; } .timo2{display:none; } ";
            }else {


                echo ".timo{} "; 


            }







             ?>



    </style>
</head>

<body style="background-image: url('assets/images/wall.png') !important; background-repeat: repeat;">
       <!-- Begin page -->
    <div id="wrapper" style="background-image: url('assets/images/wall.png') !important; background-repeat: repeat;">