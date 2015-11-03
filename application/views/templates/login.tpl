{ci_config name="base_url"}
{include file="header.tpl"}
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Đăng nhập</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Quên mật khẩu?</a></div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" action="{$base_url}/login/do_login" method="post" role="form">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="email-login" value=""
                               placeholder="Tên tài khoản sử dụng">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="passwd-login"
                               placeholder="Mật khẩu">
                    </div>
                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Nhớ mật khẩu
                            </label>
                        </div>
                    </div>
                    <input type="hidden" name="csrf_finance" value="{$csrf}"/>
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <input type="submit" id="btn-login" value="Đăng nhập" name="action" class="btn btn-success">
                            <a id="btn-fblogin" href="#" class="btn btn-primary">Đăng nhập với Facebook</a>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                Bạn chưa có tài khoản!
                                <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                    Đăng ký ngay
                                </a>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <div id="signupbox" style="display:none; margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Đăng ký</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#"
                                                                                           onclick="$('#signupbox').hide(); $('#loginbox').show()">Đăng nhập</a></div>
            </div>
            <div class="panel-body">
                <form id="signupform" action="{$base_url}/login/do_register" method="post" class="form-horizontal" role="form">

                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="Nhập email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Tên thật của bạn</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="real_name" placeholder="Nhập tên thật">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Mật khẩu</label>

                        <div class="col-md-9">
                            <input type="password" class="form-control" name="passwd" placeholder="Nhập mật khẩu">
                        </div>
                    </div>
                    <input type="hidden" name="csrf_finance" value="{$csrf}" />
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="submit" class="btn btn-info"><i
                                        class="icon-hand-right"></i> &nbsp Đăng ký
                            </button>
                            <span style="margin-left:8px;">or</span>
                        </div>
                    </div>

                    <div style="border-top: 1px solid #999; padding-top:20px" class="form-group">

                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-fbsignup" type="button" class="btn btn-primary"><i
                                        class="icon-facebook"></i>   Đăng nhập với facebook
                            </button>
                        </div>

                    </div>


                </form>
            </div>
        </div>


    </div>

</div> <!-- /container -->

{include file="footer.tpl"}
