<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title> -->

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="/template/plugins/fontawesome-free/css/all.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-o9Xkb6+vLr/0KIQa71tzZfNzwf7tYp1a6Om/2CzOw9wrpuJ8yGv3b5Qy4J18tLixnOGpUcV1qI0pxL8vnELEA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"> -->
  <!-- <link rel="stylesheet" href="/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->
  <!-- <link rel="stylesheet" href="/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="/template/dist/css/adminlte.min.css"> -->
  
<!-- </head> -->


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $title ?></title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/bs-stepper/css/bs-stepper.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/plugins/dropzone/min/dropzone.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="d51aa8ef-feaa-4212-8971-57f7c34d8ef3">(function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
