<head>
    <meta charset="UTF-8">
    <title> @yield('htmlheader_title', 'Sistema') </title>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="cache-control" content="must-revalidate" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/dataTables.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/dataTables.material.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/adminlte.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/bower-components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />


	<!--<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"/>-->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
          <style>
              table.dataTable thead .sorting{background-image: none !Important;}
              .material-switch > input[type="checkbox"] {
                  display: none;   
              }

              .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {vertical-align: middle}

              .material-switch > label {
                  cursor: pointer;
                  height: 0px;
                  position: relative; 
                  width: 40px;  
              }

              .material-switch > label::before {
                  background: rgb(0, 0, 0);
                  box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
                  border-radius: 8px;
                  content: '';
                  height: 16px;
                  margin-top: -8px;
                  position:absolute;
                  opacity: 0.3;
                  transition: all 0.4s ease-in-out;
                  width: 40px;
              }
              .material-switch > label::after {
                  background: rgb(255, 255, 255);
                  border-radius: 16px;
                  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
                  content: '';
                  height: 24px;
                  left: -4px;
                  margin-top: -8px;
                  position: absolute;
                  top: -4px;
                  transition: all 0.3s ease-in-out;
                  width: 24px;
              }
              .material-switch > input[type="checkbox"]:checked + label::before {
                  background: inherit;
                  opacity: 0.5;
              }
              .material-switch > input[type="checkbox"]:checked + label::after {
                  background: inherit;
                  left: 20px;
              }


              /* Custom Style */
.onoffswitch {
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch-checkbox {
    display: none;
}
.onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 20px;
}
.onoffswitch-inner {
    display: block; width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}
.onoffswitch-inner:before {
    content: "Patient";
    padding-left: 10px;
    background-color: #2FCCFF; color: #FFFFFF;
}
.onoffswitch-inner:after {
    content: "Doctor";
    padding-right: 10px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch-switch {
    display: block; width: 18px; margin: 6px;
    background: #FFFFFF;
    border: 2px solid #999999; border-radius: 20px;
    position: absolute; top: 0; bottom: 0; right: 56px;
    -moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0px; 
}


/* iOS7 Style */

.cmn-toggle {
  position: absolute;
  margin-left: -9999px;
  visibility: hidden;
}
.cmn-toggle + label {
  display: block;
  position: relative;
  cursor: pointer;
  outline: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
input.cmn-toggle-round-flat + label {
  padding: 2px;
  width: 75px;
  height: 30px;
  background-color: #dddddd;
  -webkit-border-radius: 60px;
  -moz-border-radius: 60px;
  -ms-border-radius: 60px;
  -o-border-radius: 60px;
  border-radius: 60px;
  -webkit-transition: background 0.4s;
  -moz-transition: background 0.4s;
  -o-transition: background 0.4s;
  transition: background 0.4s;
}
input.cmn-toggle-round-flat + label:before, input.cmn-toggle-round-flat + label:after{
  display: block;
  position: absolute;
  content: "";
}
input.cmn-toggle-round-flat + label:before {
  top: 2px;
  left: 2px;
  bottom: 2px;
  right: 2px;
  background-color: #fff;
  -webkit-border-radius: 60px;
  -moz-border-radius: 60px;
  -ms-border-radius: 60px;
  -o-border-radius: 60px;
  border-radius: 60px;
  -webkit-transition: background 0.4s;
  -moz-transition: background 0.4s;
  -o-transition: background 0.4s;
  transition: background 0.4s;
}
input.cmn-toggle-round-flat + label:after {
  top: 4px;
  left: 4px;
  bottom: 4px;
  width: 22px;
  background-color: #dddddd;
  -webkit-border-radius: 52px;
  -moz-border-radius: 52px;
  -ms-border-radius: 52px;
  -o-border-radius: 52px;
  border-radius: 52px;
  -webkit-transition: margin 0.4s, background 0.4s;
  -moz-transition: margin 0.4s, background 0.4s;
  -o-transition: margin 0.4s, background 0.4s;
  transition: margin 0.4s, background 0.4s;
}
input.cmn-toggle-round-flat:checked + label {
  background-color: #27A1CA;
}
input.cmn-toggle-round-flat:checked + label:after {
  margin-left: 45px;
  background-color: #27A1CA;
}




          </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
