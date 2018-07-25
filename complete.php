<?php 
session_start();
/*
Template Name: Complete 
*/


if(isset($_SESSION['your_submit'])) {
    $to = 'nonpa.amebro@gmail.com'; 


    $subject = $_SESSION['your_name'].', '.$_SESSION['your_subject']; 
    $message = $_SESSION['your_message']; 

    if(wp_mail($to, $subject, $message)){
        $result = "The form has been successfully sent to the website host. </br>Thank you for your feedback.";   
        session_destroy();
    }else{
        $result= "Something went wrong. Please make sure your address is correct.";   
    }

    
}else{
    
    $result = printf("Something went wrong. Please reload the page.");       
}
?>
<?php get_header(); ?>
<div id="aboutpage">
    <div id="formpage">
        <h1 style="text-align:center"><?php printf($result);?></h1>
        </br>
        <div class="button-center">
        <a style="text-decoration: none;"class="submit-button" href="<?php echo esc_url( home_url( '/' ) );?>">Go Back</a>
        </div>
    </div>
</div>


<?php get_footer(); ?>