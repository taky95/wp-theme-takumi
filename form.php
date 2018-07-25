<?php
session_start();
/*
Template Name: Form */
?>
<?php get_header(); ?>

<div id='aboutpage'>
    <h1>Feedback Comment Form</h1>
    <div id='formpage'>
        <form action="<?php echo get_permalink( get_page_by_title("Confirm") ); ?>" method="post">
            <div style="position:relative; left:150px">
            <div>
                <label for="your_name">Name: </label>
                <input type="text" name="your_name" required>
            </div>
            <div>
                <label for="your_email">E-mail: </label>
                <input type="email" name="your_mail" required>
            </div>
            <div>
                <label for="your_subject">Subject: </label>
                <input type="text" name="your_subject">
            </div>
            <div>
                <label for="your_message">Comment: </label>
                <textarea name="your_message" cols="60" rows="15" required></textarea>
            </div>
            </div>
            <div class="button-center">
            <input class="submit-button"type="submit" name="your_submit" value="Confirm">
            </div>
        </form>
    </div>
    
</div>

<?php get_footer(); ?>