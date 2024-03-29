<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <!-- link below cdn and bootrap link -->
    <link rel="stylesheet" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <!-- bootsrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header starts -->
    <header class="myheader">
     <?php include('header.php'); ?>


    </header>
    <!-- header ends -->
    <!-- main starts here -->
    <main>
        <!-- first section starts here -->
        <section class="sect1 pt-5">
            <div class="row">
                <div class="col-3 offset-6">
            <span style="position: relative; bottom: 70px; right: 7px;" ><img class="byt" src="log.png" alt=""></span>

                </div>

            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner">
                    <!-- my item to add -->
                    <div class="carousel-item active">
                        <div class="mine pt-5 text-center">
                            <h2>Care early </h2>
                            <h2 class="pl-5">Coronavirus</h2>

                            <div class="mt-4" style="padding-top:69px;">
                                <button class="btn btn-lg btn gy ">READ MORE</button>
                                <button class="ml-4 btn btn-lg btn gy">ABOUT US</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <div class="carousel-item active">
                            <div class="mine pt-5 text-center">
                                <h2>Care Barely </h2>
                                <h2 class="pl-5">Coronavirus</h2>
    
                                <div class="mt-4" style="padding-top:69px;">
                                    <button class="btn btn-lg btn gy">READ MORE</button>
                                    <button class="ml-4 btn btn-lg btn gy">ABOUT US</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </section>
                <!-- first section ends here -->
                        <!-- second section starts here -->
        <section class="sect2">
           
            <div class=" row">
                <div class="goli offset-1 col-10 ">
                   <div class="row">
                       <div class="col-6 pt-4">
                           <div class="mt-5">
                               <h1>ABOUT CORONA VIRUS</h1>
                               <p class="myh"></p>
                               <p>English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</p>
                               
                               <button class="readmore">ABOUT MORE</button>
                           </div>

                       </div>
                       <div class="col-4 offset-2">
                           <img class="coror" src="cor.png" alt="">

                       </div>

                   </div>

                </div>

            </div>
            <div class="row">
                <div class="col-4 offset-2">
                    <img style="height: 380px;" src="fever.png" alt="">

                </div>
                <div class="offset-1 col-3   ">
                    <div class="">
                        <h2 class="gate">CORONAVIRUS</h2>
                        <h2 class="gate">WHAT IS IT ?</h2>

                        <p class="lo">when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                   
                        <button class="readmore mt-4">ABOUT MORE</button>

                    </div>

                </div>

            </div>

        </section>
                <!-- second section ends here -->
        
        <section class=" pt-4 " style="background-color: #f3efef;">
            <div class="row text-center">
                <h1 class="jojo">HOW TO PROTECT YOURSELF</h1>
                <p style="font-weight: 600; color:#666;">when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>

            </div>
        </section>
        <!-- sect 6 starts here -->
        <section class="sect6">
            <div class="jumi">
                <div class="row">
                    <div class="col-4">

                        <div class="box1 text-center pt-3">
                            <img class="pb-3" src="wash1.png" alt="">
                            <h5 style="font-weight: 700; color: #0d0e0e;">Wash your Hands</h5>
                            <p class="pt-2">Many desktop publishing packages and web page editors now use lorem ipsum as their default model text, and search for</p>

                        </div>
                    </div>
                    <div class="col-4">

                        <div class="box1 text-center pt-3">
                            <img class="pb-3" src="wash2.png" alt="">
                            <h5 style="font-weight: 700; color: #0d0e0e;">Stay at Home</h5>
                            <p class="pt-2">Many desktop publishing packages and web page editors now use lorem ipsum as their default model text, and search for</p>


                        </div>
                    </div>
                    <div class="col-4">

                        <div class="box1 text-center pt-3">
                            <img class="pb-3" src="wash3.png" alt="">
                            <h5 style="font-weight: 700; color: #0d0e0e;">Wear Mask</h5>
                            <p class="pt-2">Many desktop publishing packages and web page editors now use lorem ipsum as their default model text, and search for</p>


                        </div>
                    </div>
                   

                </div>
              

            </div>

        </section>
                <!-- section6  ends here -->
        <section class=" pt-4 mycolor" >
            <div class="row text-center">
                <h1 class="jojo">CORONOVIRUS CASES</h1>
                <p style="font-weight: 600; color:#666;">making this the first true generator on the internet , it uses a dictionary of over 200 Latin words, combined with a handful</p>

            </div>
        </section>

        <section class="sect09" >
            <div class="row mycolor">
                <div class="col-3 offset-1 mycolor" >
                    <div class="jub case">
                        <img style="height: 200px; " src="womancovid.png" alt="">
                        <button class="read">ABOUT MORE</button>
                        <h3 class="text-center">Cases 01</h3>
                        <p class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                       <div class="nostrud">

                        </div>
                        

                        
                    </div>
                </div>
                <div class="col-3">
                    <div class="jub case">
                        <img style="height: 200px; " src="womancovid3.png" alt="">
                        <button class="read">ABOUT MORE</button>
                        <h3 class="text-center">Cases 01</h3>
                        <p class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        <div class="nostrud">

                        </div>
                    </div>
                    

                </div>
                <div class="col-3">
                    <div class="jub case ">
                        <img style="height: 200px; " src="nurse.png" alt="">
                        <button class="read" onclick="onclic()">ABOUT MORE</button>
                        <h3 class="text-center " id="pippo">Cases 01</h3>
                        <p class="text-center" >It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        <div class="nostrud">

                        </div>

                        

                        <script>
                           


                            function onclic(){
                               var guestname = prompt('what is your name ?');

                                if(guestname){
                                     document.getElementById('pippo').innerText = guestname;


                                }


                                
                                

                                

 
                            }
                        </script>
                        
                    </div>

                </div>

            </div>
        </section>
        <section class="  mycolor">
            <div class="row text-center">
                <h1 class="jojo">WHAT DOCTORS SAY..</h1>

            </div>
        </section>
        <section class="bond pt-5">

            <div class="row pt-4">
                <div class="col-8 offset-2 text-center">

                    <div class="form-group pt-4">
                        <input  type="email" class="grt" id="" aria-describedby="emailHelp" placeholder="YOUR EMAIL ..">
                    <div>
                        <button  class=" lop">SUBSCRIBE</button>
                    </div> 
                    </div>

                </div>

            </div>

        </section>

    </main>
    <!-- main ends here -->
    <!-- footer -->
    <footer class="container-fluid">
       <?php include('footer.php'); ?>
        <!-- row myfoot ends here -->
    </footer>
    <!-- footer ends here -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <!-- footer ends here  -->

</body>

</html>