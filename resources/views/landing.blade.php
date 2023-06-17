@extends('layouts.main')

<style>
        .landing {
          position: absolute;
          width: 80vw;
          height: 150px;
          text-align: center;
          top: 50%;
          left: 50%;
          margin: -150px 0px 0px -40vw;
        }

        .background {
            background: url('img/bg.jpg'), rgba(0,0,0,0.6);
            background-size: cover;
            background-blend-mode: overlay;
        }
      </style>

</head>
<body class="background">
    <div class="landing">
        <h1 style="color:white">Mading JeWePe</h1>
        <h4 style="color:white"class="mx-5 my-5">
            Mading JeWePe adalah sebuah website majalah dinding sekolah yang menghadirkan beragam artikel informasi yang menarik dan bermanfaat. Dengan desain yang interaktif dan intuitif, website ini menjadi sumber pengetahuan yang menyenangkan bagi seluruh siswa dan staf di sekolah
        </h4>
    </div>
</body>
</html>