<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <!-- Styles -->
  <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
<div class="content">
                <div class="title m-b-md">
                   
                </div>

                <div class="links">
                    <a href="welcome">Home</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>

  <div class="container">
 
  <div class="row"> 
  <div class="col-md-6">
  <div class="card p-4">
  <h1>Contact</h1>

  @if (session('status'))
  <div class="alert alert-success">
  {{session('status')}}
  </div>
  @else

    <form class="form" action="contact" method="POST">
   {{csrf_field()}}
    
    <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" id="name" required placeholder="Enter your name" name="name">
    </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input class="form-control" type="email" id="email" required placeholder="Enter your email" name="email">
    </div>

    <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" id="message" class="form-control" rows="3"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Send</button>
    </form>
    @endif
    </div>
    </div>
    </div>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e9ee0fe69e9320caac5d192/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </div> 
</body>
</html>