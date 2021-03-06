<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        .index-loading {
          position: fixed;
          z-index: 100;
          width: 100px;
          height: 100px;
          left: 50%;
          top: 50%;
          margin-left: -50px;
          margin-top: -50px;
          -webkit-animation: progressRotate 0.6s linear infinite;
          animation: progressRotate 0.6s linear infinite;
        }

        @-webkit-keyframes progressRotate {
          0% {
            -webkit-transform: rotate(0deg);
          }
          100% {
            -webkit-transform: rotate(360deg);
          }
        }

        @keyframes progressRotate {
          0% {
            -webkit-transform: rotate(0deg);
          }
          100% {
            -webkit-transform: rotate(360deg);
          }
        }
    </style>
</head>
<body>
    <img class="index-loading" src="data:image/png;base64,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" />
</body>
</html>
