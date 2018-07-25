<?php 
session_start();
/* Template Name: Confirm */

if(isset($_POST['your_submit'])) {
    $_SESSION['your_name'] = $_POST['your_name'];
    $_SESSION['your_mail'] = $_POST['your_mail'];
    if($_POST['your_subject'] != ""){
        $_SESSION['your_subject'] = $_POST['your_subject'];
    }else{
        $_SESSION['your_subject'] = "No Subject";
    }
    $_SESSION['your_message'] = $_POST['your_message'];
    $_SESSION['your_submit'] = $_POST['your_submit'];
}
?>

<?php get_header(); ?>
<div id="aboutpage">
    <h1>Is this Correct?</h1>
    <div id="formpage">
        <p>Your information has not been sent yet. </p>
        <p>Check the comment you entered is correct. If so, please click the button at the bottom to submit.</p>
        </br>
<table rules="rows">
    <tr>
        <th>Name:</th><td><p><?php echo htmlspecialchars($_SESSION['your_name']); ?></p></td>
    </tr>
    <tr>
        <th>E-mail:</th><td><p><?php echo htmlspecialchars($_SESSION['your_mail']); ?></p></td>
    </tr>
    <tr>
        <th>Sub:</th><td><p><?php echo htmlspecialchars($_SESSION['your_subject']); ?></p></td>
    </tr>
    <tr>
        <th>Comment:</th><td><p><?php
            $message = htmlspecialchars($_SESSION['your_message']);
            $message = str_replace(" ", "&ensp;", $message);
            $message = str_replace("　", "&emsp;", $message); 
            echo nl2br($message);
        ?></p></td>
    </tr>
</table>

<center><span>
    <button class="submit submit-button" type="button" onclick="location.href='<?php echo get_permalink( get_page_by_title("Form") ); ?>'">Modify</button>
    <button class="submit submit-button" type="button" onclick="location.href='<?php echo get_permalink( get_page_by_title("Complete") ); ?>'">Submit</button>
</span></center> 
</div>
</div>

<?php get_footer(); ?>