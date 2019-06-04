<?php
    include"header.html";
                        
?>
    <!--contact section-->
    <section id="contacts">
        <div class="container">
            <div class="col-12">
                <h1>Work With Us</h1>
            </div>
            <div class="row">
                <div class="col-sm-6 formParagraph">
                    <p>help.capital is hiring! Do you have a keen interest in investing? </p>
                    <p>Are you financially literate? Do you have a CA or CFA? Have you worked at an accounting firm, investment bank, consulting firm or finance team?</p>
                    <p>Are you a gun at Excel? Do you communicate well through PowerPoint and/or Word?</p>
                    <p>Do you want to work with CEOs, CFOs and investment teams deploying private capital?</p>
                </div>
                <div class="col-sm-6 contactForm">
                    <form action="contact.php" method="post">
                        <?php
                        $error ="";
                         if(isset($_POST["send"])){
                             
                             if(! $_POST["name"]){
                                 $error = "<br/>Please enter your name";
                             }
                             if(! $_POST["email"]){
                                 $error =$error."<br/>Please enter your email";
                             }
                             if(isset($_POST["message"])){
                                 if(! $_POST["message"]){
                                 $error =$error. "<br/>Please leave your message";
                                }
                             }
                             
                             if($error){
                                 $result='<div class="alert alert-danger" >There are some errors: '.$error.'</div>';
                                 echo $result ;
                             }else{
                                if(isset($_POST["mail"])){
                                    if( mail("your_email@gmail.com", "Message from website", "Name: ".$_POST['name']."Emai: ".$_POST['mail']."Message: ".$_POST['message'])){
                                    $result='<div class="alert alert-success" >Your Message has been sent successfully</div>';
                                 echo $result ;
                                    }
                                }
                                
                                 else{
                                     $result='<div class="alert alert-danger" >Sorry,Your message hasnt been sent, Please try again later</div>';
                                 echo $result ;
                                 }
                             }     
                         }
                        ?>
                           
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Name">
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Message" name="message"></textarea>
                            <button class="btn btn-success" type="submit" name="send">Send</button>
                    </form>
                    <p>E-Mail <strong>tom.green@help.capital</strong> to arrange a coffee</p>
                </div>
            </div>
        </div>
    </section>
    <!--END contact section-->

    <?php

    
    include"footer.html";
?>