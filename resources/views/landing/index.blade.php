<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}" dir="{{ htmldir() }}">
  <head>
    <base href="{{ url('/') }}/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title', trans('app.application_title'))</title>
    <link rel="manifest" href="manifest.webmanifest">

    <link rel="stylesheet" href="{{ asset(mix('css/app-'.htmldir().'.css')) }}">

    <link rel="shortcut icon" href="img/favicon.png">
    <script>
      window.Laravel = {!! \Safe\json_encode([
          'locale' => \App::getLocale(),
          'htmldir' => htmldir(),
          'profileDefaultView' => auth()->user()->profile_active_tab,
          'timezone' => auth()->user()->timezone,
      ]); !!}
    </script>
  </head>
  <body class="sans-serif">
  <div class="mw8 center ph3">
  <div class="cf">
    <nav class="dt w-100 mw9 center">
      <div class="dtc w2 v-mid pt3 pb3">
        <a href="https://www.monicahq.com" class="db">
          
          <img src="https://www.monicahq.com/img/logo_vertical.png" class="mw-none" style="width: 150px;">
        </a>
      </div>
      <div class="dtc v-mid tr pa3">
        <a class="f6 fw4 dib ml2 pv2 ph3 secondary-button br3" href="https://app.monicahq.com/login" >登陆</a>
        <a class="f6 fw4 dib ml2 pv2 ph3 secondary-button br3" href="https://app.monicahq.com/register" >新用户注册</a>
      </div>
    </nav>
  </div>
</div>

    
<div class="mw8 center ph3">
  <div class="cf">
    <div class="fl w-100 tc mb5">
      <h1 class="f2 normal lh-copy">你的专属友情备忘录</h1>
      <h2 class="normal lh-copy">常联系 PRM 一句话的介绍</h2>
      <p class="lh-copy">这里加一个链接到公众号软文</p>
    </div>

    <div class="fl w-100 tc mb5">
      <a href="https://app.monicahq.com/register" class="primary-button br3 pv3 ph4 mb2 dib fw5">免费注册</a>
    </div>
  </div>
</div>

<!--div class="homepage-statistics bb b--black-10 mb5">
  <div class="mw8 center ph3">
    <div class="cf">
      <div class="fl w-25-ns w-50">
        <div class="flex justify-center">
          <div class="mr3 mt3">
            <svg width="50px" height="39px" viewBox="0 0 50 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop-HD" transform="translate(-153.000000, -791.000000)" fill="#C1BFBE">
                  <path d="M170.167,794 C173.441,794 176.104,796.66 176.104,799.93 C176.104,803.21 173.441,805.87 170.167,805.87 C166.893,805.87 164.229,803.21 164.229,799.93 C164.229,796.66 166.893,794 170.167,794 Z M170.167,808.87 C175.095,808.87 179.104,804.86 179.104,799.93 C179.104,795.01 175.095,791 170.167,791 C165.239,791 161.229,795.01 161.229,799.93 C161.229,804.86 165.239,808.87 170.167,808.87 L170.167,808.87 Z M188.425,794.49 C190.786,794.49 192.706,796.41 192.706,798.77 C192.706,801.13 190.786,803.05 188.425,803.05 C186.065,803.05 184.145,801.13 184.145,798.77 C184.145,796.41 186.065,794.49 188.425,794.49 Z M188.425,806.05 C192.44,806.05 195.706,802.79 195.706,798.77 C195.706,794.76 192.44,791.49 188.425,791.49 C184.411,791.49 181.145,794.76 181.145,798.77 C181.145,802.79 184.411,806.05 188.425,806.05 L188.425,806.05 Z M199.101,819.13 L187.333,819.13 L187.333,819.07 C187.333,815 184.538,810.69 179.355,810.69 C179.282,810.69 179.2,810.69 179.123,810.69 C179.643,810.2 180.315,809.85 181.14,809.85 C181.709,809.85 183.463,809.84 185.61,809.83 C188.987,809.81 193.338,809.79 195.567,809.79 C198.363,809.79 199.101,812.31 199.101,813.64 L199.101,819.13 Z M184.333,826.56 L156,826.56 L156,819.6 C156,817.85 156.689,816.12 157.843,814.99 C158.433,814.41 159.434,813.69 160.792,813.76 C161.544,813.74 163.924,813.75 166.806,813.73 C171.112,813.71 176.545,813.69 179.355,813.69 C182.776,813.69 184.333,816.48 184.333,819.07 L184.333,826.56 Z M195.567,806.79 C193.335,806.79 188.977,806.81 185.595,806.83 C183.455,806.84 181.707,806.85 181.169,806.85 C181.132,806.85 181.095,806.85 181.059,806.85 C178.705,806.85 176.607,808.33 175.509,810.69 C172.801,810.7 169.564,810.72 166.791,810.73 C163.931,810.75 161.568,810.76 160.832,810.76 C160.829,810.76 160.826,810.76 160.823,810.76 C158.948,810.7 157.157,811.46 155.743,812.85 C154.025,814.53 153,817.06 153,819.6 L153,828.06 C153,828.89 153.671,829.56 154.5,829.56 L185.833,829.56 C186.662,829.56 187.333,828.89 187.333,828.06 L187.333,822.13 L200.601,822.13 C201.43,822.13 202.101,821.46 202.101,820.63 L202.101,813.64 C202.101,810.32 199.811,806.79 195.567,806.79 L195.567,806.79 Z" id="5F"></path>
                </g>
              </g>
            </svg>
          </div>
          <div class="">
            <h2 class="mb0 normal mt3">30,329</h2>
            <p class="mt1 f6-ns f7 black-60">users registered</p>
          </div>
        </div>
      </div>
      <div class="fl w-25-ns w-50">
        <div class="flex justify-center">
          <div class="mr3 mt3">
            <svg width="39px" height="41px" viewBox="0 0 39 41" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop-HD" transform="translate(-468.000000, -788.000000)" fill="#C1BFBE">
                  <path d="M490.815,824.78 C492.688,821.88 495.094,816.8 495.491,809.56 L503.943,809.56 C503.301,817.13 497.876,823.29 490.815,824.78 Z M471.074,809.56 L479.634,809.56 C480.024,816.92 482.322,821.91 484.156,824.77 C477.118,823.27 471.714,817.11 471.074,809.56 Z M484.057,791.39 C482.132,794.28 479.769,799.3 479.596,806.56 L471.074,806.56 C471.71,799.06 477.068,792.93 484.057,791.39 Z M482.589,806.56 C482.795,798.74 485.863,793.83 487.503,791.76 C489.166,793.86 492.293,798.83 492.533,806.56 L482.589,806.56 Z M487.492,824.3 C485.923,822.2 483.096,817.38 482.639,809.56 L492.487,809.56 C492.022,817.17 489.092,822.13 487.492,824.3 Z M503.943,806.56 L495.525,806.56 C495.323,799.38 492.887,794.3 490.936,791.38 C497.937,792.91 503.305,799.05 503.943,806.56 Z M487.526,788 C487.523,788 487.52,788 487.517,788 C487.514,788 487.511,788 487.508,788 C476.751,788 468,797 468,808.06 C468,819.13 476.751,828.13 487.508,828.13 C498.265,828.13 507.016,819.13 507.016,808.06 C507.016,797.01 498.275,788.01 487.526,788 L487.526,788 Z" id="6I"></path>
                </g>
              </g>
            </svg>
          </div>
          <div class="">
            <h2 class="mb0 normal mt3">210,273</h2>
            <p class="mt1 f6-ns f7 black-60">contacts managed</p>
          </div>
        </div>
      </div>
      <div class="fl w-25-ns w-50">
        <div class="flex justify-center">
          <div class="mr3 mt3">
            <svg width="34px" height="45px" viewBox="0 0 34 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop-HD" transform="translate(-777.000000, -785.000000)" fill="#C1BFBE">
                  <path d="M793.63,809.41 L799.84,809.41 C800.67,809.41 801.34,808.74 801.34,807.91 C801.34,807.08 800.67,806.41 799.84,806.41 L795.13,806.41 L795.13,798.56 C795.13,797.73 794.46,797.06 793.63,797.06 C792.8,797.06 792.13,797.73 792.13,798.56 L792.13,807.91 C792.13,808.74 792.8,809.41 793.63,809.41 M801.25,826.5 C801.25,826.77 801.03,827 800.75,827 L786.5,827 C786.23,827 786,826.77 786,826.5 L786,822.53 C788.36,823.78 791.04,824.5 793.88,824.5 C796.53,824.5 799.02,823.87 801.25,822.77 L801.25,826.5 Z M780,807.62 C780,799.97 786.23,793.75 793.88,793.75 C801.53,793.75 807.75,799.97 807.75,807.62 C807.75,815.27 801.53,821.5 793.88,821.5 C786.23,821.5 780,815.27 780,807.62 Z M786,788.5 C786,788.22 786.23,788 786.5,788 L800.75,788 C801.03,788 801.25,788.22 801.25,788.5 L801.25,792.47 C799.02,791.38 796.53,790.75 793.88,790.75 C791.04,790.75 788.36,791.46 786,792.71 L786,788.5 Z M810.75,807.62 C810.75,802.22 808.19,797.41 804.23,794.32 C804.24,794.24 804.25,794.16 804.25,794.07 L804.25,788.5 C804.25,786.57 802.68,785 800.75,785 L786.5,785 C784.57,785 783,786.57 783,788.5 L783,794.44 C783,794.53 783.02,794.62 783.03,794.71 C779.35,797.81 777,802.44 777,807.62 C777,812.78 779.34,817.41 783,820.5 L783,826.5 C783,828.43 784.57,830 786.5,830 L800.75,830 C802.68,830 804.25,828.43 804.25,826.5 L804.25,820.9 C808.2,817.81 810.75,813.01 810.75,807.62 L810.75,807.62 Z" id="9F"></path>
                </g>
              </g>
            </svg>
          </div>
          <div class="">
            <h2 class="mb0 normal mt3">12,045</h2>
            <p class="mt1 f6-ns f7 black-60">activities logged</p>
          </div>
        </div>
      </div>
      <div class="fl w-25-ns w-50">
        <div class="flex justify-center">
          <div class="mr3 mt3">
            <svg width="38px" height="40px" viewBox="0 0 38 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop-HD" transform="translate(-1076.000000, -786.000000)" fill="#C1BFBE">
                  <path d="M1110.83003,820.787 C1110.82003,822.497 1109.69003,822.781 1109.03003,822.797 C1109.03003,822.797 1082.07003,822.802 1080.90003,822.803 C1080.37003,822.803 1079.95003,822.655 1079.65003,822.362 C1079.22003,821.933 1079.00003,821.132 1079.00003,820.054 C1079.00003,819.073 1079.00003,808.982 1079.00003,801.922 L1110.84003,801.922 C1110.84003,808.702 1110.85003,818.39 1110.83003,820.787 Z M1079.00003,795.045 C1079.00003,793.477 1079.60003,792.805 1081.01003,792.797 C1081.14003,792.796 1082.22003,792.796 1083.89003,792.795 L1083.89003,795 C1083.89003,795.828 1084.56003,796.5 1085.39003,796.5 C1086.21003,796.5 1086.89003,795.828 1086.89003,795 L1086.89003,792.795 C1087.53003,792.795 1088.21003,792.795 1088.92003,792.795 C1093.31003,792.795 1098.68003,792.795 1102.72003,792.795 L1102.72003,795 C1102.72003,795.828 1103.39003,796.5 1104.22003,796.5 C1105.05003,796.5 1105.72003,795.828 1105.72003,795 L1105.72003,792.795 C1107.53003,792.795 1108.69003,792.795 1108.73003,792.796 C1109.46003,792.821 1109.98003,793.007 1110.31003,793.368 C1110.78003,793.872 1110.85003,794.691 1110.84003,794.948 C1110.84003,794.981 1110.84003,795.015 1110.84003,795.049 C1110.84003,795.106 1110.84003,796.636 1110.84003,798.922 L1079.00003,798.922 C1079.00003,796.598 1079.00003,795.047 1079.00003,795.047 C1079.00003,795.046 1079.00003,795.045 1079.00003,795.045 Z M1113.84003,795.083 C1113.85003,794.669 1113.85003,792.807 1112.55003,791.367 C1111.93003,790.687 1110.79003,789.863 1108.78003,789.797 C1108.57003,789.797 1107.42003,789.797 1105.72003,789.796 L1105.72003,787.5 C1105.72003,786.672 1105.05003,786 1104.22003,786 C1103.39003,786 1102.72003,786.672 1102.72003,787.5 L1102.72003,789.796 C1098.01003,789.796 1091.55003,789.795 1086.89003,789.795 L1086.89003,787.5 C1086.89003,786.672 1086.21003,786 1085.39003,786 C1084.56003,786 1083.89003,786.672 1083.89003,787.5 L1083.89003,789.796 C1082.21003,789.796 1081.12003,789.796 1081.00003,789.797 C1078.58003,789.811 1075.99003,791.198 1076.00003,795.049 C1076.00003,795.296 1076.01003,818.529 1076.00003,820.047 C1076.00003,821.973 1076.51003,823.466 1077.53003,824.484 C1078.40003,825.347 1079.56003,825.803 1080.89003,825.803 C1080.90003,825.803 1080.90003,825.803 1080.90003,825.803 C1082.08003,825.802 1109.03003,825.797 1109.02003,825.797 C1109.03003,825.797 1109.03003,825.797 1109.03003,825.797 C1110.95003,825.797 1113.81003,824.469 1113.83003,820.807 C1113.86003,817.106 1113.84003,796.116 1113.84003,795.083 L1113.84003,795.083 Z M1093.04003,816.218 C1093.04003,817.228 1093.86003,818.046 1094.87003,818.046 C1095.88003,818.046 1096.70003,817.228 1096.70003,816.218 C1096.70003,815.208 1095.88003,814.39 1094.87003,814.39 C1093.86003,814.39 1093.04003,815.208 1093.04003,816.218 Z M1083.68003,816.218 C1083.68003,817.228 1084.50003,818.046 1085.51003,818.046 C1086.52003,818.046 1087.34003,817.228 1087.34003,816.218 C1087.34003,815.208 1086.52003,814.39 1085.51003,814.39 C1084.50003,814.39 1083.68003,815.208 1083.68003,816.218 Z M1102.40003,816.218 C1102.40003,817.228 1103.22003,818.046 1104.23003,818.046 C1105.24003,818.046 1106.06003,817.228 1106.06003,816.218 C1106.06003,815.208 1105.24003,814.39 1104.23003,814.39 C1103.22003,814.39 1102.40003,815.208 1102.40003,816.218 Z M1093.04003,807.968 C1093.04003,808.978 1093.86003,809.796 1094.87003,809.796 C1095.88003,809.796 1096.70003,808.978 1096.70003,807.968 C1096.70003,806.958 1095.88003,806.14 1094.87003,806.14 C1093.86003,806.14 1093.04003,806.958 1093.04003,807.968 Z M1102.40003,807.968 C1102.40003,808.978 1103.22003,809.796 1104.23003,809.796 C1105.24003,809.796 1106.06003,808.978 1106.06003,807.968 C1106.06003,806.958 1105.24003,806.14 1104.23003,806.14 C1103.22003,806.14 1102.40003,806.958 1102.40003,807.968 Z" id="9E"></path>
                </g>
              </g>
            </svg>
          </div>
          <div class="">
            <h2 class="mb0 normal mt3">19,929</h2>
            <p class="mt1 f6-ns f7 black-60">reminders set</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div-->

<div class="mw8 center ph3">
  <div class="cf mb6-ns mb2">
    <div class="fl w-50-ns w-100 pl5-ns mb3 mb0-ns">
      <h2 class="normal">选个标题摘要核心价值</h2>
      <p class="measure lh-copy">第一段话讲友情</p>
      <p class="measure lh-copy">第二段话留给爷爷奶奶</p>
    </div>
    <div class="fl w-50-ns w-100 tc">
    <img src="https://via.placeholder.com/180x251"/>
    </div>
  </div>
  <div class="cf mb4-ns mb2">
    <div class="fl w-50-ns w-100 tc">
    <img src="https://via.placeholder.com/355x325"/>
    </div>
    <div class="fl w-50-ns w-100 pr4-ns">
      <h2 class="normal">选个标题介绍主要功能</h2>
      <h3>留给副标题</h3>
      <p class="measure lh-copy">功能摘要，下面的列表是明细</p>
      <div class="flex">
        <div>
          <ul class="list ml0 pl0">
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Information about family
            </li>
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Work information
            </li>
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Relation between contacts
            </li>
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Pets
            </li>
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Activites done together
            </li>
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Reminders about important dates
            </li>
          </ul>
        </div>
        <div class="ml4">
          <ul class="list pl0">
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Gift ideas or gifts you've made
            </li>
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Tasks
            </li>
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Debts you owe or owned
            </li>
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Journal
            </li>
            <li class="mb2">
              <svg width="14px" height="11px" viewBox="0 0 14 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr2">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
                  <polyline id="Path-2" stroke="#3CB370" points="0.16015625 5.54980469 4.38964844 9.68847656 13.7080078 1.00585938"></polyline>
                </g>
              </svg>
              Indicate how your day went
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


    <div class="mw8 center ph3 mb4">
  <div class="cf">
    <div class="fl w-25-ns w-100 tc tl-ns">
      <p class="mt2 f6">Entreprise R&D Meng Xuan Xia © 2019</p>
    </div>
  </div>
</div>

    <!-- <script src="/js/app.js"></script> -->
    <style>
    .primary-button {
    background-color: 
#3cb371;
border: 1px solid
#3cb371;
    border-bottom-color: rgb(60, 179, 113);
    border-bottom-width: 1px;
border-bottom-color:
rgba(0,0,0,.15);
color:
    #fff;
    border-bottom-width: 2px;
}
    </style>
  </body>
</html>
