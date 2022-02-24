<title>Travelo | Responsive HTML5 Travel Template</title>

<meta charset="utf-8">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Travelo | Responsive HTML5 Travel Template">
<meta name="author" content="SoapTheme">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- to check -->

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    

<!-- to check -->

<link href='http://fonts.googleapis.com/css?family=Lato:300,400,500,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('another_bootstrap/bootstrap.min.css')}}"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('components/revolution_slider/css/settings.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('components/revolution_slider/css/style.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('components/jquery.bxslider/jquery.bxslider.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('components/flexslider/flexslider.css')}}" media="screen" />

<link id="main-style" rel="stylesheet" href="{{asset('css/style.css')}}">

<link rel="stylesheet" href="{{asset('css/custom.css')}}">

<link rel="stylesheet" href="{{asset('css/updates.css')}}">

<link rel="stylesheet" href="{{asset('css/responsive.css')}}">

<!-- CSS for IE -->
<!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->

<!-- Javascript Page Loader -->
<script type="text/javascript" src="{{asset('js/pace.min.js')}}" data-pace-options='{ "ajax": false }'></script>
<script type="text/javascript" src="{{asset('js/page-loading.js')}}"></script>

<!--  -->

<link href='http://fonts.googleapis.com/css?family=Lato:300,400,500,700' rel='stylesheet' type='text/css'>

<!-- Rating -->

<style>
    .rating {
        --dir: right;
        --fill: gold;
        --fillbg: rgba(100, 100, 100, 0.15);
        --heart: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.328l-1.453-1.313q-2.484-2.25-3.609-3.328t-2.508-2.672-1.898-2.883-0.516-2.648q0-2.297 1.57-3.891t3.914-1.594q2.719 0 4.5 2.109 1.781-2.109 4.5-2.109 2.344 0 3.914 1.594t1.57 3.891q0 1.828-1.219 3.797t-2.648 3.422-4.664 4.359z"/></svg>');
        --star: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.25l-6.188 3.75 1.641-7.031-5.438-4.734 7.172-0.609 2.813-6.609 2.813 6.609 7.172 0.609-5.438 4.734 1.641 7.031z"/></svg>');
        --stars: 5;
        --starsize: 2.5rem;
        --symbol: var(--star);
        --value: 1;
        --w: calc(var(--stars) * var(--starsize));
        --x: calc(100% * (var(--value) / var(--stars)));
        block-size: var(--starsize);
        inline-size: var(--w);
        position: relative;
        touch-action: manipulation;
        -webkit-appearance: none;
        max-width: 200px;
    }

    [dir="rtl"] .rating {
        --dir: left;
    }

    .rating::-moz-range-track {
        background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--symbol);
    }

    .rating::-webkit-slider-runnable-track {
        background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--symbol);
        -webkit-mask: repeat left center/var(--starsize) var(--symbol);
    }

    .rating::-moz-range-thumb {
        height: var(--starsize);
        opacity: 0;
        width: var(--starsize);
    }

    .rating::-webkit-slider-thumb {
        height: var(--starsize);
        opacity: 0;
        width: var(--starsize);
        -webkit-appearance: none;
    }

    .rating,
    .rating-label {
        display: block;
        font-family: ui-sans-serif, system-ui, sans-serif;
    }

    .rating-label {
        margin-block-end: 1rem;
    }

    /* NO JS */
    .rating--nojs::-moz-range-track {
        background: var(--fillbg);
    }

    .rating--nojs::-moz-range-progress {
        background: var(--fill);
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--star);
    }

    .rating--nojs::-webkit-slider-runnable-track {
        background: var(--fillbg);
    }

    .rating--nojs::-webkit-slider-thumb {
        background-color: var(--fill);
        box-shadow: calc(0rem - var(--w)) 0 0 var(--w) var(--fill);
        opacity: 1;
        width: 1px;
    }

    [dir="rtl"] .rating--nojs::-webkit-slider-thumb {
        box-shadow: var(--w) 0 0 var(--w) var(--fill);
    }

    input[type="range"] {
    display: block;
    width: 115%;
}
</style>

<!-- <style>
      .txt-center {
        text-align: center;
      }
      .hide {
        display: none;
      }

      .clear {
        float: none;
        clear: both;
      }

      .rating {
          width: 90px;
          unicode-bidi: bidi-override;
          direction: rtl;
          text-align: center;
          position: relative;
      }

      .rating > label {
          float: right;
          display: inline;
          padding: 0;
          margin: 0;
          position: relative;
          width: 1.1em;
          cursor: pointer;
          color: #000;
      }

      .rating > label:hover,
      .rating > label:hover ~ label,
      .rating > input.radio-btn:checked ~ label {
          color: transparent;
      }

      .rating > label:hover:before,
      .rating > label:hover ~ label:before,
      .rating > input.radio-btn:checked ~ label:before,
      .rating > input.radio-btn:checked ~ label:before {
          content: "\2605";
          position: absolute;
          left: 0;
          color: #FFD700;
      }
  </style> -->

  <style>
      .rating {
    float:left;
    width:300px;
}
.rating span { float:right; position:relative; }
.rating span input {
    position:absolute;
    top:0px;
    left:0px;
    opacity:0;
}
.rating span label {
    display:inline-block;
    width:30px;
    height:30px;
    text-align:center;
    color:#FFF;
    background:#ccc;
    font-size:30px;
    margin-right:2px;
    line-height:30px;
    border-radius:50%;
    -webkit-border-radius:50%;
}
.rating span:hover ~ span label,
.rating span:hover label,
.rating span.checked label,
.rating span.checked ~ span label {
    background:#F90;
    color:#FFF;
}
  </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>