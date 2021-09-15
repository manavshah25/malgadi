

<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
 
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="style2.css">


</head>

<body>
    <div class="cursor1"></div>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">

            <h5 class="text-white h4"> Welcome <?php echo $_SESSION['username'];?>, start exploring</h5>
            <span class="text-muted"></span>
            <div id="element-nav">
                <a id="carticon" href="mycart.php"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="50" height="30"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g transform="translate(2.924,2.924) scale(0.966,0.966)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#000000" stroke="#cccccc" stroke-width="6" stroke-linejoin="round"><path d="M10.76344,3.46016h22.48094c5.32626,0 9.63624,1.3164 12.74547,4.10516c3.10922,2.78876 4.78585,6.62834 6.10062,11.05906c0.01679,0.04891 0.03247,0.09819 0.04703,0.14781l23.46187,94.76797h62.42391l23.89859,-63.14953c0.46663,-1.29053 1.65985,-2.17684 3.03016,-2.25078c1.16325,-0.06392 2.27894,0.46906 2.9602,1.41411c0.68125,0.94505 0.83424,2.17201 0.4059,3.25541l-24.73844,65.36c-0.5024,1.33038 -1.77604,2.2107 -3.19812,2.21047h-63.08906l2.33813,9.43312l-0.00672,-0.05375c1.03047,3.90448 1.96066,6.82531 3.41313,8.4925c1.45247,1.66719 3.54041,2.80844 8.84187,2.80844h0.80625c0.06732,-0.00085 0.12721,-0.02015 0.19485,-0.02015c0.06763,0 0.12753,0.0193 0.19485,0.02015h44.33031c0.06732,-0.00085 0.12721,-0.02015 0.19485,-0.02015c4.3,0 7.96282,1.73636 10.31328,4.38063c2.35046,2.64426 3.44672,6.03493 3.44672,9.37937c0,3.34444 -1.09626,6.73511 -3.44672,9.37937c-2.35046,2.64427 -6.01328,4.38063 -10.31328,4.38063c-4.3,0 -7.96282,-1.73636 -10.31328,-4.38063c-2.35046,-2.64426 -3.44672,-6.03493 -3.44672,-9.37937c0,-2.37458 0.57835,-4.76267 1.74015,-6.90015h-20.68031c1.1618,2.13749 1.74015,4.52557 1.74015,6.90015c0,3.34444 -1.09626,6.73511 -3.44672,9.37937c-2.35046,2.64427 -6.01328,4.38063 -10.31328,4.38063c-4.3,0 -7.96282,-1.73636 -10.31328,-4.38063c-2.35046,-2.64426 -3.44672,-6.03493 -3.44672,-9.37937c0,-3.13154 1.00513,-6.27997 3.05703,-8.84187c-1.71137,-0.82983 -3.15065,-1.90002 -4.29328,-3.21156c-2.86989,-3.29415 -3.83068,-7.29831 -4.8711,-11.24047c-0.00462,-0.01788 -0.0091,-0.0358 -0.01344,-0.05375l-27.45953,-110.88625c-0.00206,-0.0066 -0.00476,-0.00687 -0.00672,-0.01344c-1.15711,-3.89317 -2.45277,-6.41245 -4.10515,-7.89453c-1.65518,-1.48458 -3.8949,-2.35828 -8.18344,-2.35828h-16.05109c0.00535,1.82702 -0.71622,3.58113 -2.00559,4.87555c-1.28938,1.29442 -3.04067,2.02283 -4.86769,2.0246c-3.79972,0 -6.88,-3.08028 -6.88,-6.88c0,-3.79972 3.08028,-6.88 6.88,-6.88c0.14799,0.00195 0.29588,0.00867 0.44344,0.02016zM110.08,18.25484c3.64457,-2.62464 7.90963,-4.49484 12.66485,-4.49484c11.9787,0 21.73515,9.70342 21.73515,21.45297c0,10.38007 -8.70572,19.60375 -16.76328,26.85485c-8.05756,7.25109 -16.07125,12.35578 -16.07125,12.35578l-1.86781,1.18922l-1.85437,-1.20938c0,0 -7.87414,-5.10206 -15.78906,-12.35578c-7.91492,-7.25372 -16.45422,-16.49409 -16.45422,-26.83469c0,-11.74955 9.75645,-21.45297 21.73515,-21.45297c4.75522,0 9.02028,1.87021 12.66485,4.49484zM82.56,35.21297c0,6.04757 6.79956,14.95819 14.2236,21.76203c6.49974,5.95676 11.50901,9.19332 13.03437,10.2125c1.53905,-1.00942 6.66966,-4.26312 13.30313,-10.23265c7.56348,-6.80647 14.4789,-15.73378 14.4789,-21.74188c0,-7.94789 -6.57226,-14.57297 -14.85515,-14.57297c-3.84034,0 -7.54848,1.60706 -10.34016,4.16562l-2.32469,2.12984l-2.32469,-2.12984c-2.79168,-2.55856 -6.49982,-4.16562 -10.34016,-4.16562c-8.28289,0 -14.85515,6.62508 -14.85515,14.57297zM87.71328,149.98937c-1.08954,1.22574 -1.71328,2.99507 -1.71328,4.81063c0,1.81556 0.62374,3.58489 1.71328,4.81063c1.08954,1.22573 2.58672,2.06937 5.16672,2.06937c2.58,0 4.07718,-0.84364 5.16672,-2.06937c1.08954,-1.22574 1.71328,-2.99507 1.71328,-4.81063c0,-1.81556 -0.62374,-3.58489 -1.71328,-4.81063c-1.08954,-1.22573 -2.58672,-2.06937 -5.16672,-2.06937c-2.58,0 -4.07718,0.84364 -5.16672,2.06937zM132.43328,149.98937c-1.08954,1.22574 -1.71328,2.99507 -1.71328,4.81063c0,1.81556 0.62374,3.58489 1.71328,4.81063c1.08954,1.22573 2.58672,2.06937 5.16672,2.06937c2.58,0 4.07718,-0.84364 5.16672,-2.06937c1.08954,-1.22574 1.71328,-2.99507 1.71328,-4.81063c0,-1.81556 -0.62374,-3.58489 -1.71328,-4.81063c-1.08954,-1.22573 -2.58672,-2.06937 -5.16672,-2.06937c-2.58,0 -4.07718,0.84364 -5.16672,2.06937z"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#000000" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M10.32,3.44c-3.79972,0 -6.88,3.08028 -6.88,6.88c0,3.79972 3.08028,6.88 6.88,6.88c1.82702,-0.00178 3.57831,-0.73018 4.86769,-2.0246c1.28938,-1.29442 2.01095,-3.04854 2.00559,-4.87555h16.05109c4.28854,0 6.52826,0.8737 8.18344,2.35828c1.65239,1.48208 2.94804,4.00136 4.10515,7.89453c0.00195,0.00657 0.00465,0.00683 0.00672,0.01344l27.45953,110.88625c0.00433,0.01795 0.00881,0.03587 0.01344,0.05375c1.04041,3.94215 2.0012,7.94631 4.8711,11.24047c1.14263,1.31155 2.58191,2.38174 4.29328,3.21156c-2.0519,2.5619 -3.05703,5.71034 -3.05703,8.84187c0,3.34444 1.09626,6.73511 3.44672,9.37937c2.35046,2.64427 6.01328,4.38063 10.31328,4.38063c4.3,0 7.96282,-1.73636 10.31328,-4.38063c2.35046,-2.64426 3.44672,-6.03493 3.44672,-9.37937c0,-2.37458 -0.57835,-4.76267 -1.74015,-6.90015h20.68031c-1.1618,2.13749 -1.74015,4.52557 -1.74015,6.90015c0,3.34444 1.09626,6.73511 3.44672,9.37937c2.35046,2.64427 6.01328,4.38063 10.31328,4.38063c4.3,0 7.96282,-1.73636 10.31328,-4.38063c2.35046,-2.64426 3.44672,-6.03493 3.44672,-9.37937c0,-3.34444 -1.09626,-6.73511 -3.44672,-9.37937c-2.35046,-2.64427 -6.01328,-4.38063 -10.31328,-4.38063c-0.06763,0 -0.12753,0.0193 -0.19485,0.02015h-44.33031c-0.06732,-0.00085 -0.12721,-0.02015 -0.19485,-0.02015c-0.06763,0 -0.12753,0.0193 -0.19485,0.02015h-0.80625c-5.30147,0 -7.38941,-1.14125 -8.84187,-2.80844c-1.45247,-1.66719 -2.38266,-4.58802 -3.41313,-8.4925l0.00672,0.05375l-2.33813,-9.43312h63.08906c1.42208,0.00023 2.69573,-0.88009 3.19812,-2.21047l24.73844,-65.36c0.42834,-1.0834 0.27536,-2.31036 -0.4059,-3.25541c-0.68125,-0.94505 -1.79695,-1.47803 -2.9602,-1.41411c-1.37031,0.07394 -2.56353,0.96025 -3.03016,2.25078l-23.89859,63.14953h-62.42391l-23.46187,-94.76797c-0.01456,-0.04962 -0.03024,-0.0989 -0.04703,-0.14781c-1.31477,-4.43072 -2.9914,-8.2703 -6.10062,-11.05906c-3.10923,-2.78876 -7.41921,-4.10516 -12.74547,-4.10516h-22.48094c-0.14756,-0.01149 -0.29545,-0.01821 -0.44344,-0.02016zM97.41515,13.76c-11.9787,0 -21.73515,9.70342 -21.73515,21.45297c0,10.34059 8.5393,19.58097 16.45422,26.83469c7.91492,7.25372 15.78906,12.35578 15.78906,12.35578l1.85437,1.20938l1.86781,-1.18922c0,0 8.01369,-5.10469 16.07125,-12.35578c8.05756,-7.25109 16.76328,-16.47478 16.76328,-26.85485c0,-11.74955 -9.75645,-21.45297 -21.73515,-21.45297c-4.75522,0 -9.02028,1.87021 -12.66485,4.49484c-3.64457,-2.62464 -7.90963,-4.49484 -12.66485,-4.49484zM97.41515,20.64c3.84034,0 7.54848,1.60706 10.34016,4.16562l2.32469,2.12984l2.32469,-2.12984c2.79168,-2.55856 6.49982,-4.16562 10.34016,-4.16562c8.28289,0 14.85515,6.62508 14.85515,14.57297c0,6.0081 -6.91543,14.93541 -14.4789,21.74188c-6.63347,5.96954 -11.76408,9.22324 -13.30313,10.23265c-1.52536,-1.01918 -6.53464,-4.25574 -13.03437,-10.2125c-7.42404,-6.80384 -14.2236,-15.71446 -14.2236,-21.76203c0,-7.94789 6.57226,-14.57297 14.85515,-14.57297zM92.88,147.92c2.58,0 4.07718,0.84364 5.16672,2.06937c1.08954,1.22574 1.71328,2.99507 1.71328,4.81063c0,1.81556 -0.62374,3.58489 -1.71328,4.81063c-1.08954,1.22573 -2.58672,2.06937 -5.16672,2.06937c-2.58,0 -4.07718,-0.84364 -5.16672,-2.06937c-1.08954,-1.22574 -1.71328,-2.99507 -1.71328,-4.81063c0,-1.81556 0.62374,-3.58489 1.71328,-4.81063c1.08954,-1.22573 2.58672,-2.06937 5.16672,-2.06937zM137.6,147.92c2.58,0 4.07718,0.84364 5.16672,2.06937c1.08954,1.22574 1.71328,2.99507 1.71328,4.81063c0,1.81556 -0.62374,3.58489 -1.71328,4.81063c-1.08954,1.22573 -2.58672,2.06937 -5.16672,2.06937c-2.58,0 -4.07718,-0.84364 -5.16672,-2.06937c-1.08954,-1.22574 -1.71328,-2.99507 -1.71328,-4.81063c0,-1.81556 0.62374,-3.58489 1.71328,-4.81063c1.08954,-1.22573 2.58672,-2.06937 5.16672,-2.06937z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg></a>
                <a id="siginout" href="logout.php">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;"><g transform="translate(5.59,5.59) scale(0.935,0.935)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#000000" stroke="#cccccc" stroke-width="12" stroke-linejoin="round"><path d="M125.29349,29.70807c2.59128,1.82132 3.21546,5.39843 1.39414,7.98971c-1.82132,2.59128 -5.39843,3.21546 -7.98971,1.39414c-9.29479,-6.54136 -20.49121,-10.42526 -32.69792,-10.42526c-31.73133,0 -57.33333,25.60201 -57.33333,57.33333c0,31.73133 25.60201,57.33333 57.33333,57.33333c12.20671,0 23.40313,-3.8839 32.69792,-10.42526c2.59128,-1.82132 6.16839,-1.19714 7.98971,1.39414c1.82132,2.59128 1.19714,6.16839 -1.39414,7.98971c-11.10441,7.81491 -24.64527,12.50808 -39.29349,12.50808c-37.92867,0 -68.8,-30.87133 -68.8,-68.8c0,-37.92867 30.87133,-68.8 68.8,-68.8c14.64823,0 28.18908,4.69317 39.29349,12.50807zM135.92031,59.01302l22.41823,22.41823c1.42648,1.08264 2.26523,2.76958 2.26743,4.56038c0.0022,1.7908 -0.83241,3.47979 -2.25623,4.56593l-22.42943,22.42942c-1.43802,1.49778 -3.5734,2.10113 -5.5826,1.57735c-2.0092,-0.52378 -3.57826,-2.09284 -4.10204,-4.10204c-0.52378,-2.0092 0.07957,-4.14458 1.57735,-5.5826l13.14636,-13.14636h-60.69271c-2.06765,0.02924 -3.99087,-1.05709 -5.03322,-2.843c-1.04236,-1.78592 -1.04236,-3.99474 0,-5.78066c1.04236,-1.78592 2.96558,-2.87225 5.03322,-2.843h60.69271l-13.14636,-13.14636c-1.6719,-1.62719 -2.19121,-4.10513 -1.31331,-6.26668c0.8779,-2.16155 2.97794,-3.57567 5.31096,-3.57628c1.54801,0.00009 3.03022,0.62609 4.10964,1.73568z"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#000000" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M86,17.2c-37.92867,0 -68.8,30.87133 -68.8,68.8c0,37.92867 30.87133,68.8 68.8,68.8c14.64823,0 28.18908,-4.69316 39.29349,-12.50808c2.59128,-1.82132 3.21546,-5.39843 1.39414,-7.98971c-1.82132,-2.59128 -5.39843,-3.21546 -7.98971,-1.39414c-9.29479,6.54135 -20.49121,10.42526 -32.69792,10.42526c-31.73133,0 -57.33333,-25.60201 -57.33333,-57.33333c0,-31.73133 25.60201,-57.33333 57.33333,-57.33333c12.20671,0 23.40313,3.8839 32.69792,10.42526c2.59128,1.82132 6.1684,1.19714 7.98971,-1.39414c1.82132,-2.59128 1.19714,-6.1684 -1.39414,-7.98971c-11.10441,-7.81491 -24.64527,-12.50807 -39.29349,-12.50807zM131.81067,57.27734c-2.33302,0.00061 -4.43306,1.41473 -5.31096,3.57628c-0.8779,2.16155 -0.3586,4.6395 1.31331,6.26668l13.14636,13.14636h-60.69271c-2.06765,-0.02924 -3.99087,1.05709 -5.03322,2.843c-1.04236,1.78592 -1.04236,3.99474 0,5.78066c1.04236,1.78592 2.96558,2.87225 5.03322,2.843h60.69271l-13.14636,13.14636c-1.49778,1.43802 -2.10113,3.5734 -1.57735,5.5826c0.52378,2.0092 2.09284,3.57826 4.10204,4.10204c2.0092,0.52378 4.14458,-0.07957 5.5826,-1.57735l22.42943,-22.42942c1.42382,-1.08614 2.25843,-2.77513 2.25623,-4.56593c-0.0022,-1.7908 -0.84095,-3.47774 -2.26743,-4.56038l-22.41823,-22.41823c-1.07942,-1.10959 -2.56163,-1.73559 -4.10964,-1.73568z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg>
                </a>



                <div class="dropdown">
                    <a id="category">

                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;"><g transform="translate(5.59,5.59) scale(0.935,0.935)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#000000" stroke="#cccccc" stroke-width="12" stroke-linejoin="round"><path d="M86,91.73333c-18.97733,0 -34.4,-15.42267 -34.4,-34.4v-5.73333c0,-18.97733 15.42267,-34.4 34.4,-34.4c18.97733,0 34.4,15.42267 34.4,34.4v5.73333c0,18.97733 -15.42267,34.4 -34.4,34.4zM80.84,119.94133c-0.57333,2.924 -0.86,5.96267 -0.86,9.05867c0,7.16667 1.548,13.932 4.3,20.06667h-50.85467c-8.6,0 -13.588,-9.86133 -8.37067,-16.684c5.848,-7.62533 21.72933,-15.88133 38.58533,-20.296c4.75867,4.07067 10.664,6.93733 17.2,7.85467zM170.33733,162.196c2.236,2.236 2.236,5.90533 0,8.14133c-1.14667,1.08933 -2.58,1.66267 -4.07067,1.66267c-1.49067,0 -2.924,-0.57333 -4.07067,-1.66267l-3.21067,-3.21067l-12.95733,-13.01467c-5.61867,4.01333 -12.49867,6.42133 -19.89467,6.42133c-10.148,0 -19.32133,-4.41467 -25.57067,-11.46667c-5.504,-6.07733 -8.82933,-14.104 -8.82933,-22.93333c0,-2.17867 0.172,-4.3 0.57333,-6.30667c2.98133,-15.996 17.028,-28.09333 33.82667,-28.09333c18.97733,0 34.4,15.42267 34.4,34.4c0,7.396 -2.408,14.276 -6.42133,19.89467l13.01467,12.95733zM149.06667,126.13333c0,-12.67067 -10.26267,-22.93333 -22.93333,-22.93333c-7.68267,0 -14.448,3.72667 -18.51867,9.51733c-2.80933,3.784 -4.41467,8.428 -4.41467,13.416c0,12.67067 10.26267,22.93333 22.93333,22.93333c10.03333,0 18.51867,-6.42133 21.61467,-15.36533c0.86,-2.35067 1.31867,-4.93067 1.31867,-7.568z"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#000000" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M120.4,57.33333v-5.73333c0,-18.97733 -15.42267,-34.4 -34.4,-34.4c-18.97733,0 -34.4,15.42267 -34.4,34.4v5.73333c0,18.97733 15.42267,34.4 34.4,34.4c18.97733,0 34.4,-15.42267 34.4,-34.4zM63.64,112.08667c-16.856,4.41467 -32.73733,12.67067 -38.58533,20.296c-5.21733,6.82267 -0.22933,16.684 8.37067,16.684h50.85467c-2.752,-6.13467 -4.3,-12.9 -4.3,-20.06667c0,-3.096 0.28667,-6.13467 0.86,-9.05867c-6.536,-0.91733 -12.44133,-3.784 -17.2,-7.85467zM167.12667,158.98533l-13.01467,-12.95733c4.01333,-5.61867 6.42133,-12.49867 6.42133,-19.89467c0,-18.97733 -15.42267,-34.4 -34.4,-34.4c-16.79867,0 -30.84533,12.09733 -33.82667,28.09333c-0.40133,2.00667 -0.57333,4.128 -0.57333,6.30667c0,8.82933 3.32533,16.856 8.82933,22.93333c6.24933,7.052 15.42267,11.46667 25.57067,11.46667c7.396,0 14.276,-2.408 19.89467,-6.42133l12.95733,13.01467l3.21067,3.21067c1.14667,1.08933 2.58,1.66267 4.07067,1.66267c1.49067,0 2.924,-0.57333 4.07067,-1.66267c2.236,-2.236 2.236,-5.90533 0,-8.14133zM147.748,133.70133c-3.096,8.944 -11.58133,15.36533 -21.61467,15.36533c-12.67067,0 -22.93333,-10.26267 -22.93333,-22.93333c0,-4.988 1.60533,-9.632 4.41467,-13.416c4.07067,-5.79067 10.836,-9.51733 18.51867,-9.51733c12.67067,0 22.93333,10.26267 22.93333,22.93333c0,2.63733 -0.45867,5.21733 -1.31867,7.568z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg></a>


                    <div class="dropdown-content">
                        <p id="d" href="#">Watch</p>
                        <hr>
                        <p href="#">Desktop</p>
                        <hr>
                        <p id="d" href="#">Head phone</p>
                      
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span id="f"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="64" height="64"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g transform="translate(5.59,5.59) scale(0.935,0.935)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g stroke="#cccccc" stroke-width="12" stroke-linejoin="round"><path d="M30.57065,84.32031c0,-31.54064 25.56874,-57.10937 57.10938,-57.10937c31.54064,0 57.10937,25.56874 57.10937,57.10938c0,31.54064 -25.56874,57.10938 -57.10937,57.10938c-31.54064,0 -57.10937,-25.56874 -57.10937,-57.10937z" fill="#313a52"></path><path d="M148.14877,17.13281c5.56346,0 10.07813,4.51164 10.07813,10.07813c0,5.56648 -4.51466,10.07813 -10.07812,10.07813c-5.56615,0 -10.07812,-4.51164 -10.07812,-10.07812c0,-5.56648 4.51198,-10.07812 10.07813,-10.07812z" fill="#ffec6c"></path><path d="M27.21127,134.71094c3.70875,0 6.71875,3.01 6.71875,6.71875c0,3.71211 -3.01,6.71875 -6.71875,6.71875c-3.71211,0 -6.71875,-3.00664 -6.71875,-6.71875c0,-3.70875 3.00698,-6.71875 6.71875,-6.71875z" fill="#ffec6c"></path><path d="M111.19565,84.32031l-40.94373,21.83594l10.91797,-21.83594l-10.91797,-21.83594z" fill="#d94556"></path><path d="M154.6962,53.02438c0.58453,1.76031 -0.36617,3.66172 -2.12648,4.24961c-1.76031,0.58453 -3.66138,-0.36617 -4.24927,-2.12648c-0.58453,-1.76031 0.36617,-3.66172 2.12615,-4.24961c1.76031,-0.58453 3.66172,0.36617 4.24961,2.12648z" fill="#bce4ff"></path><path d="M154.6962,123.57125c0.58453,1.76031 -0.36617,3.66508 -2.12648,4.24961c-1.76031,0.58789 -3.66138,-0.36281 -4.24927,-2.12313c-0.58453,-1.76031 0.36617,-3.66172 2.12615,-4.24961c1.76031,-0.58789 3.66172,0.36281 4.24961,2.12313z" fill="#bce4ff"></path><path d="M127.8212,150.44625c0.58453,1.76031 -0.36617,3.66172 -2.12648,4.24961c-1.76031,0.58453 -3.66138,-0.36617 -4.24927,-2.12648c-0.58453,-1.76031 0.36617,-3.66172 2.12615,-4.24961c1.76031,-0.58453 3.66172,0.36617 4.24961,2.12648z" fill="#bce4ff"></path><path d="M57.27466,147.08688c0.58453,1.76031 -0.36617,3.66172 -2.12648,4.24961c-1.76031,0.58453 -3.66172,-0.36617 -4.24961,-2.12648c-0.58453,-1.76031 0.36617,-3.66172 2.12648,-4.24961c1.76031,-0.58453 3.66172,0.36617 4.24961,2.12648z" fill="#bce4ff"></path><path d="M40.47409,19.43063c0.58789,1.76031 -0.36281,3.66172 -2.12313,4.24961c-1.76031,0.58453 -3.66508,-0.36617 -4.24961,-2.12648c-0.58789,-1.76031 0.36281,-3.66172 2.12312,-4.24961c1.76031,-0.58453 3.66172,0.36617 4.24961,2.12648z" fill="#bce4ff"></path><path d="M20.32153,53.02438c0.58453,1.76031 -0.36617,3.66172 -2.12648,4.24961c-1.76031,0.58453 -3.66172,-0.36617 -4.24961,-2.12648c-0.58453,-1.76031 0.36617,-3.66172 2.12648,-4.24961c1.76031,-0.58453 3.66172,0.36617 4.24961,2.12648z" fill="#bce4ff"></path></g><path d="M0,172v-172h172v172z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g stroke="none" stroke-width="1" stroke-linejoin="miter"><circle cx="261.001" cy="251" transform="scale(0.33594,0.33594)" r="170" fill="#313a52"></circle><path d="M148.14877,17.13281c5.56346,0 10.07813,4.51164 10.07813,10.07813c0,5.56648 -4.51466,10.07813 -10.07812,10.07813c-5.56615,0 -10.07812,-4.51164 -10.07812,-10.07812c0,-5.56648 4.51198,-10.07812 10.07813,-10.07812z" fill="#ffec6c"></path><path d="M27.21127,134.71094c3.70875,0 6.71875,3.01 6.71875,6.71875c0,3.71211 -3.01,6.71875 -6.71875,6.71875c-3.71211,0 -6.71875,-3.00664 -6.71875,-6.71875c0,-3.70875 3.00698,-6.71875 6.71875,-6.71875z" fill="#ffec6c"></path><path d="M111.19565,84.32031l-40.94373,21.83594l10.91797,-21.83594l-10.91797,-21.83594z" fill="#d94556"></path><path d="M154.6962,53.02438c0.58453,1.76031 -0.36617,3.66172 -2.12648,4.24961c-1.76031,0.58453 -3.66138,-0.36617 -4.24927,-2.12648c-0.58453,-1.76031 0.36617,-3.66172 2.12615,-4.24961c1.76031,-0.58453 3.66172,0.36617 4.24961,2.12648z" fill="#bce4ff"></path><path d="M154.6962,123.57125c0.58453,1.76031 -0.36617,3.66508 -2.12648,4.24961c-1.76031,0.58789 -3.66138,-0.36281 -4.24927,-2.12313c-0.58453,-1.76031 0.36617,-3.66172 2.12615,-4.24961c1.76031,-0.58789 3.66172,0.36281 4.24961,2.12313z" fill="#bce4ff"></path><path d="M127.8212,150.44625c0.58453,1.76031 -0.36617,3.66172 -2.12648,4.24961c-1.76031,0.58453 -3.66138,-0.36617 -4.24927,-2.12648c-0.58453,-1.76031 0.36617,-3.66172 2.12615,-4.24961c1.76031,-0.58453 3.66172,0.36617 4.24961,2.12648z" fill="#bce4ff"></path><path d="M57.27466,147.08688c0.58453,1.76031 -0.36617,3.66172 -2.12648,4.24961c-1.76031,0.58453 -3.66172,-0.36617 -4.24961,-2.12648c-0.58453,-1.76031 0.36617,-3.66172 2.12648,-4.24961c1.76031,-0.58453 3.66172,0.36617 4.24961,2.12648z" fill="#bce4ff"></path><path d="M40.47409,19.43063c0.58789,1.76031 -0.36281,3.66172 -2.12313,4.24961c-1.76031,0.58453 -3.66508,-0.36617 -4.24961,-2.12648c-0.58789,-1.76031 0.36281,-3.66172 2.12312,-4.24961c1.76031,-0.58453 3.66172,0.36617 4.24961,2.12648z" fill="#bce4ff"></path><path d="M20.32153,53.02438c0.58453,1.76031 -0.36617,3.66172 -2.12648,4.24961c-1.76031,0.58453 -3.66172,-0.36617 -4.24961,-2.12648c-0.58453,-1.76031 0.36617,-3.66172 2.12648,-4.24961c1.76031,-0.58453 3.66172,0.36617 4.24961,2.12648z" fill="#bce4ff"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg></span>
          </button>
          <h2 id="main-text">Electronic Store</h2>
        </div>
    </nav>

    <div class="carosal">
    <div class="img-slider">
      <div class="slide active">
        <img  src="silde5.jpg" alt="">
        <div class="info">
          <h2>Welcome to future Electronics</h2>
         
        </div>
      </div>
      <div class="slide">
        <img  height="500px"src="https://images.unsplash.com/photo-1598094670018-abf669538033?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXBwbGUlMjBwcm9kdWN0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="">
        <div class="info">
          <h2>Let's meet up with the come up generation</h2>
      
        </div>
      </div>
      <div class="slide">
        <img src="silde1.jpg" alt="">
        <div class="info">
          <h2>Small things make a better succeeding things</h2>
         
        </div>
      </div>
      <div class="slide">
        <img height="500px"src="https://images.unsplash.com/photo-1503332628839-f788a9eedc84?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZWxlY3Ryb25pYyUyMGVxdWlwbWVudHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="">
        <div class="info">
          <h2>Visualize the new future of electronics</h2>
        
        </div>
      </div>
      <div class="slide">
        <img height="500px" src="https://wallpapercave.com/wp/wp1927658.jpg" alt="">
        <div class="info">
          <h2>Lets's start a bright future of electronics</h2>
        
        </div>
      </div>
      
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>

    <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

   
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();
    </script>
</div>


 
   
  </script>

    <hr style="margin-top:100px;color:black"><hr>
    <div class="section">
        <!-- <section class="product-list"></section> -->
        <div class="product-section">
    <div class="conatiner-heading">
         <span>products</span>
    </div>
        <div class="product-container">
          <?php
            include "db_connect.php";
        
            $sql = "SELECT * FROM `product_details`";
            $result = mysqli_query($conn, $sql) or die("Query failed");
            if(mysqli_num_rows($result) > 0){
            ?>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <!-- <div class="product-container"> -->
                  <form action="manage_cart.php" method="POST">
                  <?php $product_N=$row['product_name'];
                        $price=$row['price']?>
                    <div class="card">
                        <div class="title">
                             <?php echo $row['product_name']; ?>
                             <hr>
                        </div>
                        <div class="img">
                        <img src="<?php echo $row['img_link']; ?>" alt="">
                        <!-- <a href=?>"></a> -->
                        </div>
                        <div class="text">   <?php echo $row['description']; ?></div>

                        <h4 style="font-weight:200;">Price : &#x20B9;<?php echo $row['price'] ?></h4>
        
                        <button  typr="submit"name="add_to_cart"class="buy-button">
            Add to cart
            </button>
            <input type="hidden" name="Item_name" value="$product_N">
            <input type="hidden" name="Price" value="$price">

        
                    </div>
            </form>
                    <?php } ?> 
                    <?php  } ?>



        </div>

        </div>
        <footer>
      <div class="container1">
        <div class="sec aboutus">
            <h2>About Us</h2>
            <p>We help you to enhance your knowledge and provide you with the best facility.
                We provides you the best service as per your requirement and provide us with your valuable feedback.
                Be connected and share...</p>
            <ul class="sci">
                <li><a href="https://www.facebook.com/nisha.makwana.585559"><i class="fab fa-facebook-f "></i></a></li>
                <li><a href="https://www.instagram.com/manavshah.25/ "><i class="fab fa-instagram "></i></a></li>
                <li><a href="# "><i class="fab fa-linkedin "></i></a></li>
            </ul>
        </div>
        <div class="sec quicklinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">help</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="sec contact">
            <h2>Contact Info</h2>
            <ul class="info">
                <li>
                    <span><i class="fas fa-phone"></i></span>
                    <p><a href="tel:9512246617">+91 9512246617</a><br>
                 
                </li>
                <li>
                    <span><i class="fas fa-envelope "></i></span>
                    <p><a href="mailto:manavshah9890@gmail.com?bcc=bookbarns2021@gmail.com&subject=My%20Feedback&body=Respect%20BOOK%20BARNS%20Officals" target="_top">manavshah9890@gmail.com</a><br>
                   
                    </p>
                </li>
            </ul>
            </div>
    </div>
    <h style="color : white">No. of User join us : <?php echo $_SESSION['usercount'];?></h>
</footer>
    </div>
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, options);
        });

        const cursor = document.querySelector(".cursor1");
        var timeout;


        document.addEventListener("mousemove", (e) => {
            let x = e.pageX;
            let y = e.pageY;

            cursor.style.top = y + "px";
            cursor.style.left = x + "px";
            cursor.style.display = "block";


            function mouseStopped() {
                cursor.style.display = "none";
            }
            clearTimeout(timeout);
            timeout = setTimeout(mouseStopped, 1000);
        });


        document.addEventListener("mouseout", () => {
            cursor.style.display = "none";
        });
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);

        // let drop = document.getElementsByID("dropdown1");
        // drop.addEventListener('onmouseenter', () => {
        //     drop.style.display = 'block';
        // })
    </script>


</body>

</html>
<?php

    }
    else {
      ?>
      <div class="session">
      <h style="text-align:center;">your session has been expired so login again for enjoying serivice</h><br>
      <a href="login.php">login again</a>
      </div>
      <?php
     
  }
   ?>
