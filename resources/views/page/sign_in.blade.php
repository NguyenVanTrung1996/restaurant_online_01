<!DOCTYPE html>
<html>
<head>
    <title>Đăng Ký - Đăng Nhập</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">
    <link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/>
</head>
<body>

<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Đăng Ký</a></li>
        <li class="tab"><a href="#login">Đăng Nhập</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Đăng Ký Tài Khoản</h1>

            <form action="/" method="post">

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off"/>
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Set A Password<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Set Again Password<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off"/>
                </div>

                <button type="submit" class= " button button-block"/>Đăng Ký</button>

            </form>

        </div>

        <div id="login">
            <h1>Chào Mừng Bạn Đã Trở Lại !</h1>

            <form action="/" method="post">

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password"required autocomplete="off"/>
                </div>

                <p class="forgot"><a href="#">Forgot Password?</a></p>

                <button class="button button-block"/>Đăng Nhập</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->

<div class="footer-bar">
    <span class="article-wrapper">
        <span class="article-label">Xem Bài Viết: </span>
        <span class="article-link"><a href="https://www.thuthuatweb.net/css/thiet-ke-mau-sign-up-login-form-bang-html5-css3-va-jquery.html">Thiết kế mẫu Sign Up - Login Form bằng HTML5, CSS3 và jQuery</a></span>
    </span>

</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $('.form').find('input, textarea').on('keyup blur focus', function (e) {

        var $this = $(this),
            label = $this.prev('label');

        if (e.type === 'keyup') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if( $this.val() === '' ) {
                label.removeClass('active highlight');
            } else {
                label.removeClass('highlight');
            }
        } else if (e.type === 'focus') {

            if( $this.val() === '' ) {
                label.removeClass('highlight');
            }
            else if( $this.val() !== '' ) {
                label.addClass('highlight');
            }
        }

    });

    $('.tab a').on('click', function (e) {

        e.preventDefault();

        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');

        target = $(this).attr('href');

        $('.tab-content > div').not(target).hide();

        $(target).fadeIn(600);

    });
</script>
</body>
</html>
