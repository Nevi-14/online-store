<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="{{ asset('css/index_custom.css') }}" rel="stylesheet" />
   
    <link href="{{ asset('css/cards.css') }}" rel="stylesheet" />

    <title>{{@$company_name}}</title>

    <style>
      #bg-container{
        position: relative;
        height: 100vh;
        background-repeat: no-repeat;
        background-position:center ;
        background-size: cover;
        background-attachment: fixed;
        background-image: url('https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
      }
      #bg-container span{
        margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
        color: #fff;
        font-size: 2vw;
        font-family: arial;
        text-align: center;
        text-transform: uppercase;
        background: rgba(0,0,0,0.5);
        text-align: center;
        padding: 10px;
        width: 90vw;
    

      }


      @media only screen and (max-width:1100px) {
        #bg-container{
        height: 60vh;
      }
      #bg-container span{
        font-size:5vw;


      }
}
    </style>
  </head>
  <body>
    
  





