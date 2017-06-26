<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield("title")</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("fonts/kunlasatri/kunlasatri.css")}}" />
    <link rel="stylesheet" href="{{asset("fonts/leelawadee/leelawadee.css")}}" />
    <link rel="stylesheet" href="{{asset("fonts/supermarket/supermarket.css")}}" />
    <link rel="stylesheet" href="{{asset("fonts/awesome/css/font-awesome.min.css")}}" />

    <link rel="stylesheet" href="{{asset("css/wrapper.css")}}" />
    <link rel="stylesheet" href="{{asset("css/fonts.css")}}" />
    <link rel="stylesheet" href="{{asset("css/colors.css")}}" />
    <link rel="stylesheet" href="{{asset("plugins/bootstrap/css/bootstrap.css")}}" />
    <link rel="stylesheet" href="{{asset("plugins/semantic/semantic.css")}}" />

    <script type="text/javascript" src="{{asset("plugins/bootstrap/js/bootstrap.js")}}"></script>
    <script type="text/javascript" src="{{asset("plugins/semantic/semantic.js")}}"></script>

    @yield("scripts")
</head>
<body>
<div class="top-site"></div>
<div class="sub-top-site">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-sm-12 col-md-6 hidden-xs">
                <i class="fa fa-mobile FF8100" aria-hidden="true"></i>
                <span class="ft-supermarket ft-size-smaller ft-grey ft-bold">(+66) 89 955 5599</span>
                <span class="ft-supermarket ft-size-smaller ft-light-grey">&nbsp;(Worldwide)</span>&nbsp;&nbsp;
                <i class="fa fa-comments FF8100" aria-hidden="true"></i>
                <span class="ft-supermarket ft-size-small ft-grey">Staff Live Support!</span>
            </div>
            <div class="col-sm-12 col-md-6 hidden-xs text-right">
                <i class="fa fa-shopping-bag FF8100" aria-hidden="true"></i>
                <span class="ft-supermarket ft-size-medium ft-grey ft-bold ft-link"><a href="javascript:;">Cart</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-user-plus FF8100" aria-hidden="true"></i>
                <span class="ft-supermarket ft-size-medium ft-grey ft-link"><a href="#">Register Account</a></span>&nbsp;&nbsp;
                <i class="fa fa-user-circle FF8100" aria-hidden="true"></i>
                <span class="ft-supermarket ft-size-medium ft-grey ft-link"><a href="#">Sign In</a></span>&nbsp;&nbsp;
            </div>
            <!-- Mobile Section -->
            <div class="hidden-md hidden-sm hidden-lg col-xs-12 text-left">
                <i class="fa fa-shopping-bag FF8100" aria-hidden="true"></i>
                <span class="ft-supermarket ft-size-small ft-grey ft-bold ft-link"><a href="javascript:;">Cart</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-user-plus FF8100" aria-hidden="true"></i>
                <span class="ft-supermarket ft-size-small ft-grey ft-link"><a href="#">Join Members</a></span>&nbsp;&nbsp;
                <i class="fa fa-user-circle FF8100" aria-hidden="true"></i>
                <span class="ft-supermarket ft-size-small ft-grey ft-link"><a href="#">Sign In</a></span>&nbsp;&nbsp;
                <i class="fa fa-comments FF8100" aria-hidden="true"></i>
                <span class="ft-supermarket ft-size-small ft-grey">Live Support!</span>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-md-1 col-xs-3">
            <img src="{{asset("images/logo.png")}}" />
        </div>
    </div>
</div>
<div class="wrapper-banner"></div>
</body>
</html>