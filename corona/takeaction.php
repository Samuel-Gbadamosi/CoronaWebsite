<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
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
<header class="myheader">
     <?php include('header.php'); ?>


    </header> 
<main>


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

</main>

<footer>
        <?php include('footer.php');?>

    </footer>

    
</body>
</html>