<link href="css/inicio.css" rel="stylesheet" type="text/css">

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '373099037688575');
fbq('track', 'PageView');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=373099037688575&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D6HLB8C810"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D6HLB8C810');
</script>

@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<div>
    <div class="videos container">
        <div class="row">
            <div class="videos col-sm-4">
                <a href="" data-toggle="modal" data-target="#colorimetria">
                    <img src="images/Colorimetria1.png" alt="">
                </a>
            </div>
            <div class="videos  col-sm-4">
                <a href="" data-toggle="modal" data-target="#sucesso">
                    <img src="images/salao1.png" alt="">
                </a>
            </div>
            <div class="videos col-sm-4">
                <a href="" data-toggle="modal" data-target="#mechas">
                    <img  src="images/mechas1.png" alt="">
                </a>
            </div>
        </div>        
    </div>
</div>

<div class="modal fade" id="colorimetria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="model1 modal-content">
        <div class="modal-header">
            <iframe   width="470" 
                            height="652" src="https://www.youtube.com/embed/TCJrN0g8XUQ" 
                            title="Colorimetria" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="sucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="model1 modal-content">
        <div class="modal-header">
            <iframe 
                            width="470" 
                            height="652" 
                            src="https://www.youtube.com/embed/C65hdHM_zDU" 
                            title="Salão de sucesso" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mechas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="model1 modal-content">
        <div class="modal-header">
            <iframe 
                            width="470" 
                            height="652" 
                            src="https://www.youtube.com/embed/LOrnJjuLzRA" 
                            title="Mechas no dia a dia" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
